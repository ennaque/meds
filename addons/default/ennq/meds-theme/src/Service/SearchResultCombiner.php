<?php

namespace Ennq\MedsTheme\Service;

use Ennq\MedsTheme\Lib\SearchResultCombinerInterface;
use Ennq\MedsTheme\Lib\SearchEntry;

/*
PROTECTION THE CODE BY
                              |~~~~~|        _____       _____
         _____                  \~~~/ /~~~~\ /   __|     /   __|
        |  =  |\                 | | |  o  / \  /  _  _  \  /
        |  =  | \           |~|  | | | /~~~   \ \  || ||  \ \
        |  =  |  |          \ \_/  / | |___    \ \ ||_||   \ \
 _______|  =  |__|____       \____/  |_____||\__| ||___||\__| |
|          =          |\                    \____/      \____/
| =================== | \               ,   ,
|_______   =   _______|  |             /////|                 _.-/`)
 \      |  =  |\       \ |            ///// |                // / / )
  \_____|  =  | \_______\|           /////  |             .=// / / / )
        |  =  |  |                  |~~~| | |            //`/ / / / /
        |  =  |  |                  |===| |/|           // /     ` /
        |  =  |  |                  | B |/| |          ||         /
        |  =  |  |                  | I | | |           \\       /
        |  =  |  |                  | B | | |            ))    .'
        |  =  |  |                  | L |  /            //    /
        |_____|  |                  | E | /                  /  PRAY TO MAKE IT WORK
        \      \ |                  |===|/
         \______\|                  '---'
*/

class SearchResultCombiner implements SearchResultCombinerInterface
{
    /**
     * @param array<SearchEntry> $data
     * @param string $needle
     * @param int $num
     * @return array<string>
     */
    public function get(array $data, string $needle, int $num = 1): array
    {
        $needleCounter = 0;
        $i = 0;
        $result = [];
        while($needleCounter <= $num && $i < count($data)) {
            $count = $num - $needleCounter;
            $content = $this->extractContent($data[$i]);
            $entriesPositions = $this->findNeedleEntries($content, $needle, $count);
            $tmp = $this->extractNeedleEntries($content, $needle, $entriesPositions);
            foreach($tmp as $t) {
                $result[$needleCounter] = $t;
                ++$needleCounter;
            }
            ++$i;
        }

        return $result;
    }

    /**
     * @param SearchEntry $entry
     * @return string
     */
    private function extractContent(SearchEntry $entry): string
    {
        return $this->cleanUp($entry->getContent());
    }

    /**
     * @param string $content
     * @return string
     */
    private function cleanUp(string $content): string
    {
        $result = strip_tags($content);
        $result = str_replace(array('\r\n', '\r', '\n', '/&#?[a-z0-9]+;/i'), '', $result);
        $result = preg_replace('/\t|[\s]{2,}/', ' ', $result);

        return $result;
        //return preg_replace("/&#?[a-z0-9]+;/i", "", strip_tags(htmlentities($content)));
    }

    /**
     * @param string $content
     * @param string $needle
     * @param int $count
     * @return array<int>
     */
    private function findNeedleEntries(string $content, string $needle, int $count): array
    {
        $result = [];
        $offset = 0;
        $position = strpos($content, $needle, $offset);
        while($position !== FALSE && count($result) < $count) {
            $result[count($result)] = $position;
            $offset = $position + strlen($needle);
            $position = strpos($content, $needle, $offset);
        }

        return $result;
    }

    /**
     * @param string $content
     * @param string $needle
     * @param array $entriesPositions
     * @return array<string>
     */
    private function extractNeedleEntries(string $content, string $needle, array $entriesPositions): array
    {
        if (count($entriesPositions) === 0) {
            return [];
        }
        $result = [];
        $result[0] = '';
        $ri = 0;
        $cutLength = 60;

        foreach ($entriesPositions as $i => $iValue) {
            /* PROCESSING THE SUBSTRING BEFORE THE NEEDLE ENTRY INCLUDING NEEDLE */
            if($i === 0) {
                if($iValue >= $cutLength) {
                    $from = $iValue - $cutLength;
                    $length = $cutLength;
                } else {
                    $from = 0;
                    $length = $iValue;
                }
            } else {
                $previousPosition = $entriesPositions[$i - 1] + strlen($needle);
                $distance = $iValue - $previousPosition;
                if($distance >= $cutLength*2) {
                    $from = $iValue - $cutLength;
                    $length = $cutLength;
                } else {
                    $from = $iValue - $distance;
                    $length = $distance;
                }
            }
            $result[$ri] .= substr($content, $from, $length);
            $result[$ri] .= "<b>" . $needle . "</b>";
            /* PROCESSING THE SUBSTING PLACED AFTER THE NEEDLE ENTRY */
            if ($i < (count($entriesPositions) - 1)) {
                if (($entriesPositions[$i+1] - $iValue + strlen($needle)) >= ($cutLength*2)) {// if the next entry is far enough (double distance from current one), ...
                    // ...then copy $cutLength symbols after the needle to the result ...
                    $result[$ri] .= substr($content, $iValue + strlen($needle), $cutLength);
                    ++$ri; // ...and go over towards the next result string
                    $result[$ri] = '';
                }
                // otherwise -- do nothing: the next needle entry will be added to the current result string in the next loop iteration
            } else { // the last needle entry
                if ((strlen($content) - $iValue + strlen($needle)) >= $cutLength) {
                    $length = $cutLength;
                } else {
                    $length = strlen($content) - $iValue + strlen($needle);
                }
                $result[$ri] .= substr($content, $iValue + strlen($needle), $length);
            }
        }
        foreach ($result as $i => $iValue) {
            $firstChar = $result[$i][0];
            $lastChar = $result[$i][strlen($iValue)-1];
            if ($firstChar !== ' ') {
                $from = strpos($iValue, ' ', 1) + 1;
            } else {
                $from = 1;
            } if ($lastChar !== ' ' && $lastChar !== '.' && $lastChar !== ',' && $lastChar !== ';' && $lastChar !== ':') {
                $to = strrpos($iValue, ' ', -1);
            } else {
                $to = strlen($iValue) - 1;
            }
            $result[$i] = '...' . substr($iValue, $from, $to - $from) . '...';
        }

        return $result;
    }

    /**
     * @param string $content
     * @param string $needle
     * @param int $count
     * @return array<string>
     */
    public function letsTestSomeShit(string $content, string $needle, int $count)
    {
        echo("The test began...\n");
        echo("Cleaning up...\n");
        $cleanedContent = $this->cleanUp($content);
        echo("Searching entries...\n");
        $entriesPositions = $this->findNeedleEntries($cleanedContent, $needle, $count);
        echo("Entries positions count: "); echo(count($entriesPositions));
        echo("\nExtracting & formating enties...");
        $extractionResult = $this->extractNeedleEntries($cleanedContent, $needle, $entriesPositions);
        echo("\nExtraction result count: "); echo(count($extractionResult));
        foreach ($extractionResult as $i => $iValue) {
            echo("\n$i: $iValue");
        }
        return $extractionResult;
    }
}

//$testContent = '<!DOCTYPE html>
//<html lang="ru" data-vue-meta="lang">
//  <head data-vue-meta="">
//    <meta charset="UTF-8">
//    <meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
//    <meta http-equiv="X-UA-Compatible" content="ie=edge">
//    <title data-vue-meta="true">$PHP не нужен* / Хабр</title>
//    <meta name="habr-version" content="2.7.1">
//    "@context": "http:\/\/schema.org",
//    "@type": "Article",
//    "mainEntityOfPage": {
//        "@type": "WebPage",
//        "@id": "https:\/\/habr.com\/ru\/post\/326284\/"
//    },
//    "headline": "$PHP не нужен*",
//    "datePublished": "2017-04-12T10:34:37+03:00",
//    "dateModified": "2017-04-12T10:34:37+03:00",
//    "author": {
//        "@type": "Person",
//        "name": "eudj1n"
//    },
//    "publisher": {
//        "@type": "Organization",
//        "name": "Habr",
//        "logo": {
//            "@type": "ImageObject",
//            "url": "https:\/\/dr.habracdn.net\/habrcom\/images\/habr_google.png"
//        }
//    },
//    "description": "Хорошо известно, что PHP &mdash; это мёртвый язык программирования и его 22-летняя экосистема фактически стала бесполезна, когда появился Node и новые асинхронные фрей...",
//    "url": "https:\/\/habr.com\/ru\/post\/326284\/#post-content-body",
//    "image": [
//        "https:\/\/habrastorage.org\/files\/9d9\/9b6\/75c\/9d99b675c8a247b4b45daee694abb798.png",
//        "https:\/\/habrastorage.org\/files\/373\/55c\/1d5\/37355c1d56c34db99ada8b3e0e567047.png",
//        "https:\/\/habrastorage.org\/files\/f3b\/e1f\/b3f\/f3be1fb3ffd244f290e8e5ec5f01b002.png",
//        "https:\/\/habrastorage.org\/files\/802\/ccf\/39d\/802ccf39dd6d42c68047ffb8d4bd7b5f.png",
//        "https:\/\/habrastorage.org\/files\/449\/27c\/140\/44927c140d8e4fc18fb18f68c2fe8946.png",
//        "https:\/\/habrastorage.org\/files\/8b4\/7df\/0e6\/8b47df0e669b433996651adb669bbbc6.png"
//    ]
//}</script>
//    <script src="//www.googletagservices.com/tag/js/gpt.js" async></script>
//    <style>
//      .grecaptcha-badge {
//        visibility: hidden;
//      }
//    </style>
//  <link rel="preload" href="/css/vendors.2d44085a.css" as="style"><link rel="preload" href="/js/vendors.5b7a771f.js" as="script"><link rel="preload" href="/css/app.e16647ed.css" as="style"><link rel="preload" href="/js/app.3d302983.js" as="script"><link rel="prefetch" href="/css/chunk-2bb78559.5d479b5b.css"><link rel="prefetch" href="/css/chunk-90d5e190.ddbbe8a5.css"><link rel="prefetch" href="/css/feedback.1bb367ce.css"><link rel="prefetch" href="/css/gallery.83b62403.css"><link rel="prefetch" href="/css/search.74836da0.css"><link rel="prefetch" href="/css/topic.4f7a8ca5.css"><link rel="prefetch" href="/js/ads.js"><link rel="prefetch" href="/js/chunk-2bb78559.809322fe.js"><link rel="prefetch" href="/js/chunk-90d5e190.69a674e8.js"><link rel="prefetch" href="/js/feedback.8da8681e.js"><link rel="prefetch" href="/js/gallery.70bacd47.js"><link rel="prefetch" href="/js/hljs.a067f7a6.js"><link rel="prefetch" href="/js/photoswipe.2826da87.js"><link rel="prefetch" href="/js/pikaday.a8f9ca0c.js"><link rel="prefetch" href="/js/search.ad18458a.js"><link rel="prefetch" href="/js/topic.e8810d00.js"><link rel="prefetch" href="/precache-manifest.bdff8ab8d5972909c73d45ea17c82331.js"><link rel="prefetch" href="/service-worker.js"><link rel="stylesheet" href="/css/vendors.2d44085a.css"><link rel="stylesheet" href="/css/app.e16647ed.css"></head>
//  <body>
//    <div id="app" data-server-rendered="true"><div class="tm-layout__wrapper tm-fira-loaded"><div></div> <div></div> <header class="tm-header"><div class="tm-header__container"><span class="tm-svg-icon__wrapper tm-header__burger"><svg height="16" width="16" class="tm-svg-img tm-svg-icon"><use xlink:href="/img/megazord-v8.svg#header-burger"></use></svg></span> <span class="tm-header__logo-wrap"><a href="/ru/" class="tm-svg-icon__wrapper tm-header__logo"><svg height="16" width="16" class="tm-svg-img tm-svg-icon"><use xlink:href="/img/megazord-v8.svg#logo-habrcom"></use></svg></a> <span class="tm-header__beta-sign" style="display:none;">β</span></span> <a href="https://m.habr.com/kek/v1/auth/habrahabr/?back=/ru/post/326284/&amp;hl=ru" class="tm-link-login tm-header__user tm-header__user_logged-out"><svg height="16" width="16" class="tm-svg-img tm-header__icon"><use xlink:href="/img/megazord-v8.svg#header-user"></use></svg></a></div></header> <!----> <!----> <div class="tm-layout"><div class="tm-page-progress-bar"></div> <div id="adbanner517760" class="tm-ad-banner"></div> <!----> <!----> <!----> <main class="tm-layout__container"><div class="tm-page tm-page_narrow"><div class="tm-article-hubs tm-article-hubs"><div class="tm-article-hubs__hub"><a href="/ru/hub/php/" class="tm-article-hubs__link">PHP</a></div><div class="tm-article-hubs__hub"><a href="/ru/hub/nodejs/" class="tm-article-hubs__link">Node.JS</a></div></div> <article class="tm-article tm-page-article__content tm-page-article__content_narrow"><!----> <div class="tm-user-meta"><a href="/ru/users/eudj1n/posts/" class="tm-user-info"><div class="tm-user-info__userpic"><div class="tm-entity-image"><img src="https://habrastorage.org/r/w32/getpro/habr/avatars/a9a/224/77f/a9a22477ff1a04e1bd1751a27555a607.jpg" class="tm-entity-image__pic"></div></div> <span class="tm-user-info__username">eudj1n</span></a> <span title="2017-04-12, 10:34" class="tm-user-meta__date"><span>12 апреля  2017</span></span></div> <!----> <h1 class="tm-article-title tm-article-title_fullview tm-article-title_fullview"><span class="tm-article-title__text">$PHP не нужен*</span></h1> <div class="tm-article-origin tm-article__origin"><a href="https://medium.com/fuzz/php-a0d0b1d365d8" target="_blank" class="tm-article-origin__link"><span>Автор оригинала:</span> <span class="tm-article-origin__value">
//      Simon Yousoufov
//    </span></a></div> <div class="tm-tags tm-tags_post"><span class="tm-tags__tag">
//    Перевод
//  </span></div> <!----> <div class="tm-article-body_formatted"><div></div> <div></div> <div id="post-content-body" class="tm-article-body"><div xmlns="http://www.w3.org/1999/xhtml"><p>Хорошо известно, что PHP — это мёртвый язык программирования и его 22-летняя экосистема фактически стала бесполезна, когда появился Node и новые асинхронные фреймворки на его основе. Превосходство Node очевидно, потому что все знают, что однопоточные асинхронные программы <em>более лучше</em> по умолчанию. И быстрее.</p><br/>
//<p>«Но Саймон! Почему?!", вы, вероятно, прокричите увидев этот текст на экране. И вот почему:</p><br/>
//<h3 id="perspektivy-trudoustroystva">Перспективы трудоустройства</h3><br/>
//<p>PHP-разработчики не пользуются спросом. По прошествии 22 лет, все компании, использующие PHP, сразу же отказались от него, как только был выпущен Node v0.0.1, потому что этот стек разработки мгновенно стал лучшим. Кроме того, всем известно, что для успешного запуска (забудем про Slack) вам нужно создавать веб-интерфейсы на Node, а данные сохранять в MongoDB.</p><br/>
//<p>Иначе просто невозможно добиться успеха.</p><br/>
//<p>Приведем немного научных&amp;trade; фактов, чтобы доказать эти утверждения:<br/>
//<img src="/img/px.gif" alt="image" data-src="https://habrastorage.org/files/9d9/9b6/75c/9d99b675c8a247b4b45daee694abb798.png"/><br/>
//<em>$заголовок = ‘PHP-разработчики не могут найти работу чтобы содержать свои семьи’;</em></p><a name="habracut"></a><br/>
//<h3 id="ekosistema-yazyka">Экосистема языка</h3><br/>
//<p>Экосистема, вероятно, является самым важным фактором в принятии решения не использовать язык программирования. К счастью для нас, PHP существует достаточно давно, и его экосистема полна крупных, хорошо поддерживаемых и полнофункциональных фреймворков, которые все ненавидят — это и Laravel, своего рода эквивалент Rails, или энтерпрайз решения на подобии Symfony и Zend. </p><br/>
//<p>В отличие от PHP, разработчикам Node не нужно беспокоиться о том, чтобы найти фреймворк, который придётся ненавидеть, потому что каждый просто пишет свой собственный. Создавая свои собственные фреймворки, разработчик может действительно выделиться на фоне конкурентов, изобретая колесо таким образом, который имеет смысл только для него самого (разработчика). Эта практика также удваивает гарантию сохранения работы, что очень важно, как показано в результатах научных&amp;trade; исследований, приведенных выше. Также, это утраивает Фактор Крутости Разработчика&amp;trade; (Developer Cool Factor&amp;trade;).</p><br/>
//<p>Ошеломляющее свидетельство превосходной экосистемы Node можно увидеть на графике ниже:</p><br/>
//<p><img src="/img/px.gif" alt="image" data-src="https://habrastorage.org/files/373/55c/1d5/37355c1d56c34db99ada8b3e0e567047.png"/></p><br/>
//<p><em>$заголовок = ‘Чем больше фреймворков — тем лучше’;</em></p><br/>
//<h3 id="vremennye-zatraty">Временные затраты</h3><br/>
//<p>Реальный уровень производительности разработчика можно измерить только оценив как он тратит собственное время. Видно, что разработчики PHP больше времени тратят на написание кода и построение функциональных приложений, чем на культивацию Фактора Крутости Разработчика&amp;trade; и получение звёзд на GitHub. Это, очевидно, отразится на них негативно при работе в стартапе, ведь они используют свое время непродуктивно. Все мы знаем что звёзды GitHub — это количественный способ оценки навыков разработчика.</p><br/>
//<p>Неспособность PHP-разработчиков внести свой вклад в сообщество показана ниже:</p><br/>
//<p><img src="/img/px.gif" alt="image" data-src="https://habrastorage.org/files/f3b/e1f/b3f/f3be1fb3ffd244f290e8e5ec5f01b002.png"/><br/>
//<img src="/img/px.gif" alt="image" data-src="https://habrastorage.org/files/802/ccf/39d/802ccf39dd6d42c68047ffb8d4bd7b5f.png"/></p><br/>
//<p><em>$заголовок = ‘Выслушивать жалобы — менее продуктивно, чем жаловаться. Факт.’;</em></p><br/>
//<h3 id="veschi-kotorye-vy-ne-smozhete-sdelat-yavlyayas-php-razrabotchikom">Вещи, которые вы не сможете сделать являясь PHP-разработчиком</h3><br/>
//<ul>
//<li>Программировать асинхронно (по-настоящему!);</li>
//<li>Получить простую и понятную последовательность параметров функций стандартной библиотеки;</li>
//<li>Создать свой собственный шаблон приложения React TODO MVC;</li>
//<li>Реализовать полноценный бэкенд на стороне сервера с фронтендом на стороне клиента;</li>
//<li>Создавать собственные утечки памяти;</li>
//<li>Сделать пробел значимым ;</li>
//<li>Добиться потери данных между запросами;</li>
//<li>Решить проблему голода во всём мире;</li>
//<li>Программировать на JavaScript;</li>
//<li>Признаться людям, что вы — PHP-разработчик.</li>
//</ul><br/>
//<h3 id="php-kak-instrument-dlya-biznesa">PHP как инструмент для бизнеса</h3><br/>
//<p>Мы все знаем, что PHP, безусловно, уступает и не может использоваться при разработке бизнес-приложений, поэтому вот список предприятий-неудачников, использующих PHP, в сравнении со списком успешных компаний, реализующих свои продукты на основе Node:</p><br/>
//<p><img src="/img/px.gif" alt="image" data-src="https://habrastorage.org/files/449/27c/140/44927c140d8e4fc18fb18f68c2fe8946.png"/></p><br/>
//<p><em>$заголовок = ‘Node замечательный и эффективный инструмент зла’;</em></p><br/>
//<h3 id="zaklyuchenie">Заключение</h3><br/>
//<p>Каждый разработчик знает, что самый быстрый и эффективный путь к получению чего-либо — это много жаловаться и каждый раз начинать всё с нуля. Рынок всегда будет ждать запуска вашего стартапа, ведь в первую очередь нужно закончить создание собственного фреймворка.<br/>
//Кроме того, почему мы должны беспокоиться о перекладывании работы и полагаться на сообщество с открытым исходным кодом, когда мы можем просто всё сделать сами?</p><br/>
//<blockquote><ul>
//<li>Оригинальный заголовок статьи — <img src="/img/px.gif" alt="image" data-src="https://habrastorage.org/files/8b4/7df/0e6/8b47df0e669b433996651adb669bbbc6.png"/>, однако парсер не позволил ни в каком виде использовать emoji в тексте.</li>
//</ul><br/>
//</blockquote></div></div></div>  <section class="tm-article__tags"><div><span class="tm-article__tags-title">Теги:</span></div> <div><a href="/ru/search/?target_type=posts&amp;q=%5B%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%5D">разработка</a>, <a href="/ru/search/?target_type=posts&amp;q=%5B%D1%84%D1%80%D0%B5%D0%B9%D0%BC%D0%B2%D0%BE%D1%80%D0%BA%D0%B8%5D">фреймворки</a>, <a href="/ru/search/?target_type=posts&amp;q=%5Bphp%5D">php</a>, <a href="/ru/search/?target_type=posts&amp;q=%5Bnode.js%5D">node.js</a>, <a href="/ru/search/?target_type=posts&amp;q=%5B%D0%B2%D0%B5%D0%BD%D1%82%D0%B8%D0%BB%D1%8F%D1%82%D0%BE%D1%80%5D">вентилятор</a>, <a href="/ru/search/?target_type=posts&amp;q=%5B%D0%BD%D1%83%D0%B6%D0%BD%D0%BE%20%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5%20%D1%84%D1%80%D0%B5%D0%B9%D0%B2%D0%BE%D1%80%D0%BA%D0%BE%D0%B2%5D">нужно больше фрейворков</a>, <a href="/ru/search/?target_type=posts&amp;q=%5B%D0%BD%D0%B8%D0%BA%D1%82%D0%BE%20%D0%BD%D0%B5%20%D1%87%D0%B8%D1%82%D0%B0%D0%B5%D1%82%20%D1%82%D0%B5%D0%B3%D0%B8%5D">никто не читает теги</a><!----></div></section> <hr class="tm-article__break-line"> <div class="tm-article__counters tm-article__counters_fullview"><div class="tm-article__sticked-counters-wrapper" style="display:none;"><div class="tm-data-icons tm-article__sticked-counters"><div class="tm-article-rating tm-article-icons__item"><div class="tm-votes-meter tm-article-rating__votes-switcher tm-votes-meter_medium"><span class="tm-svg-icon__wrapper tm-votes-icon tm-votes-meter__icon"><svg height="16" width="16" class="tm-svg-img tm-svg-icon"><use xlink:href="/img/megazord-v8.svg#counter-rating"></use></svg></span> <span class="tm-votes-score tm-votes-meter__score tm-votes-score_positive">+54 </span></div></div> <!----> <!----> <span class="tm-icon-text tm-data-icons__item"><span class="tm-icon-text__icon"><svg height="16" width="16" class="tm-svg-img tm-data-icons__icon tm-data-icons__icon_bookmarks"><use xlink:href="/img/megazord-v8.svg#counter-bookmarks"></use></svg></span> <span class="tm-icon-text__text"><span class="tm-data-icons__counter tm-data-icons__counter_bookmarks">135</span></span></span> <a href="/ru/post/326284/comments/" class="tm-icon-text-link tm-data-icons__item"><span class="tm-icon-text"><span class="tm-icon-text__icon"><svg height="16" width="16" class="tm-svg-img tm-data-icons__icon tm-data-icons__icon_comments"><use xlink:href="/img/megazord-v8.svg#counter-comments"></use></svg></span> <span class="tm-icon-text__text"><span class="tm-data-icons__counter tm-data-icons__counter_comments">
//      280
//    ym(24049213, "init", {
//      clickmap:true,
//      trackLinks:true,
//      accurateTrackBounce:true,
//      webvisor:true
//    });
//  </script>
//  <noscript>
//    <div>
//      <img src="https://mc.yandex.ru/watch/24049213" style="position:absolute; left:-9999px;" alt="" />
//    </div>
//  </noscript>
//
//  </body>
//</html>';
