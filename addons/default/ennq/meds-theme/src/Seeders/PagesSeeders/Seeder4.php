<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;

use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder4 extends Seeder
{
    /**
     * The page repository.
     *
     * @var PageRepositoryInterface
     */
    protected $pages;

    /**
     * The types repository.
     *
     * @var TypeRepositoryInterface
     */
    protected $types;

    /**
     * Create a new PageSeeder instance.
     *
     * @param PageRepositoryInterface $pages
     * @param TypeRepositoryInterface $types
     */
    public function __construct(PageRepositoryInterface $pages, TypeRepositoryInterface $types)
    {
        parent::__construct();
        $this->pages = $pages;
        $this->types = $types;
    }

    /**
     * Run the seeder.
     */
    public function run(): void
    {
        $type = $this->types->findBySlug('default');
        $content = $this->getContent();
        $this->pages->create(
            [
                'ru'           => [
                    'title' => 'Участки ГБУЗ МО «Красногорская городская больница № 2»',
                ],
                'slug'         => '/allareas',
                'entry'        => $type->getEntryModel()->create(
                    [
                        'ru' => [
                            'content' => $content,
                        ]
                    ]
                ),
                'type'         => $type,
                'enabled'      => true,
                'theme_layout' => 'theme::layouts/default.twig',
            ]
        )->allowedRoles()->sync([]);
    }

    private function getContent(): string
    {
        return
'<!-- Main Content -->
<div id="midCol" style="width:850px;float:left;margin-right: 0px" class="twoR">
<div class="clear"></div>
<div id="mainContent"  class="twoR">
<div id="jbArticle">
<div class="rightArticleCol ">
<div class="jbMeta">
<h2 class="contentheading">
Участки ГБУЗ МО КГБ №2</h2>
</div>
<div class="clear"></div>
<table style="width: 623px;" border="1" cellspacing="0" cellpadding="0">
<tbody>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Взрослая   поликлиника №2</b></p>
</td>
</tr>
<tr>
<td width="53">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td colspan="2" width="107">
<p align="center">Врач</p>
</td>
<td width="123">
<p align="center">Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">1</p>
</td>
<td colspan="2" width="107">
<p align="center">Афанасьева   Ольга Александровна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">313</p>
</td>
<td width="255">
<p>ул. Циолковского   10,12,14,15,16,17,18,20/2</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">2</p>
</td>
<td colspan="2" width="107">
<p align="center">Панченко   Светлана Николаевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">321</p>
</td>
<td width="255">
<p>ул. Циолковского 8,   пр. Железнодорожный 1,3,5,7,9,11,13, ул. Жуковского 4,6,8,8а,10</p>
<p>ул. Чайковского 18</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">3</p>
</td>
<td colspan="2" width="107">
<p align="center">Расколодько</p><p align="center">Лилия</p><p align="center">Алексндровна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">314</p>
</td>
<td width="255">
<p>ул. Железнодорожная   1,1а,1б,2,3,4,5,6,7,8,9, пр. Железнодорожный 2, ул. Чайковского 10</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">4</p>
</td>
<td colspan="2" width="107">
<p align="center">Иванова</p>
<p align="center">Наталья</p>
<p align="center">Александровна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Королёва1,2,   ул. Заводская 27,24,23,17,1,2,18,10,16, ул. Промышленная 42</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">5</p>
</td>
<td colspan="2" width="107">
<p align="center">Алексеева</p>
<p align="center">Татьяна</p>
<p align="center">Семёновна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">312</p>
</td>
<td width="255">
<p>в/г Павшино 5,6,7,3</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">6</p>
</td>
<td colspan="2" width="107">
<p style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12.48px; outline: 0px; padding: 0px; margin: 0px; vertical-align: top; color: #857e6c; background-color: #ecece5;" mce_style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12.48px; outline: 0px; padding: 0px; margin: 0px; vertical-align: top; color: #857e6c; background-color: #ecece5;" align="center">Расколодько</p>
<p style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12.48px; outline: 0px; padding: 0px; margin: 0px; vertical-align: top; color: #857e6c; background-color: #ecece5;" mce_style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12.48px; outline: 0px; padding: 0px; margin: 0px; vertical-align: top; color: #857e6c; background-color: #ecece5;" align="center">Лилия</p>
<p style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12.48px; outline: 0px; padding: 0px; margin: 0px; vertical-align: top; color: #857e6c; background-color: #ecece5;" mce_style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12.48px; outline: 0px; padding: 0px; margin: 0px; vertical-align: top; color: #857e6c; background-color: #ecece5;" align="center">Алексндровна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">314</p>
</td>
<td width="255">
<p>ул. Чайковского   14,16,21/2,19,13,11,9, Волоколамское ш. 11/1,10,8,7,6,5. Строительный пр.   4,4а,5,3</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">7</p>
</td>
<td colspan="2" width="107">
<p align="center">Яковлева</p>
<p align="center">Мария</p>
<p align="center">Юрьевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">315</p>
</td>
<td width="255">
<p>ул. Вокзвльная   1,2,3,4,5,6,7,15/1,19,19а,19б, 19в, ул. Строительная 3а, ул. Заводская 22</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">8</p>
</td>
<td colspan="2" width="107">
<p align="center">Шиндяпина</p>
<p align="center">Любовь</p>
<p align="center">Алексеевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Вокзальная   8,11,11/1,12,13,13/1,14,17а,20,22,24</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">9</p>
</td>
<td colspan="2" width="107">
<p align="center">Панченко</p>
<p align="center">Светлана</p>
<p align="center">Николаевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">321</p>
</td>
<td width="255">
<p>ул. Строительная   3,5, Заводская 29,31,4, Южный б-р 2</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">10</p>
</td>
<td colspan="2" width="107">
<p align="center">Поздеева</p>
<p align="center">Апполинария</p>
<p align="center">Алексеевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">315</p>
</td>
<td width="255">
<p>в/г Павшино 2,   2а,2б,14,15,16,17,18,19, общ в/ч, Москворецкий б-р 1</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">11</p>
</td>
<td colspan="2" width="107">
<p align="center">Яковлева</p>
<p align="center">Мария</p>
<p align="center">Юрьевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">315</p>
</td>
<td width="255">
<p>ул. Зелёная, ул.   Новая слободка, ул. Центральная, ул.Пролетарская, ул. Причальная, ул.   Павшинская, ул. Почтовая, ул.Почтовая 16, ул.Вокзальная 15, 16</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">12</p>
</td>
<td colspan="2" width="107">
<p align="center">Шиндяпина</p>
<p align="center">Любовь</p>
<p align="center">Алексеевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Вокзальная 10,   Ильинское ш. 4, 6</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">13</p>
</td>
<td colspan="2" width="107">
<p align="center">Иванова</p>
<p align="center">Наталья</p>
<p align="center">Александровна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Королёва 9,7,5,   Ильинский тупик</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">14</p>
</td>
<td colspan="2" width="107">
<p align="center">Поздеева</p>
<p align="center">Апполинария</p>
<p align="center">Алексеевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">315</p>
</td>
<td width="255">
<p>Ильинское ш.   12,14,16,18, Южный б-р 4,6</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">15</p>
</td>
<td colspan="2" width="107">
<p align="center">Кравченко</p>
<p align="center">Татьяна</p>
<p align="center">Евгеньевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Чайковского   12,8,8а,7,6,2, пр. Чехова 3,5,4,6, Волоколамское ш. 4,3,1,1а,1б, МПС, ул.   Почтовая 39</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center"><br /></p>
<p align="center">16</p>
</td>
<td colspan="2" width="107">
<p align="center"><br /></p>
<p align="center">Кравченоко</p>
<p align="center">Татьяна</p>
<p align="center">Евгеньевна</p>
</td>
<td width="123">
<p align="center"><br /></p>
<p align="center">Терапевт</p>
<p><br /></p>
</td>
<td width="85">
<p align="center"><br /></p>
<p align="center"><br /></p>
</td>
<td width="255">
<p><br /></p>
<p>ул. Железнодорожная   1/3, Ильинское ш. 1,2,3, ул. Вокзальная 9,25,27,29, ул. Павшинская 2</p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Детская   поликлиника №2</b></p>
</td>
</tr>
<tr>
<td width="53">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td colspan="2" width="107">
<p align="center">Врач</p>
</td>
<td width="123">
<p align="center">Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">8</p>
</td>
<td colspan="2" width="107">
<p align="center">Свиридова</p>
<p align="center">Ирина</p>
<p align="center">Владимировна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">311</p>
</td>
<td width="255">
<p>ул. Железнодорожная   23,24,25,25а,26,26а,27,27а,28,28а,29,</p>
<p>29а,30,30а,31а,32,32а,33,34,34,34а,35а,</p>
<p>36а,38,38а</p>
<p>ул. Комсомольская   д.39</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">9</p>
</td>
<td colspan="2" width="107">
<p align="center">Кочетова</p>
<p align="center">Татьяна</p>
<p align="center">Петровна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">309</p>
</td>
<td width="255">
<p>ул. Железнодорожная   1.а,1б,1/3,1-9, ул. Чайковского 12, 14-16, 18,19,21/1</p>
<p>ул. Жуковского 4-6,   8-1, 8а,</p>
<p>ул. Красная Горска,</p>
<p>Волоколамское ш.   8,10,11/1</p>
<p>Строительный пр. 4,   4а</p>
<p>Железнодорожный пр.   –все дома</p>
<p>Ильинское ш. –   16,18</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">10</p>
</td>
<td colspan="2" width="107">
<p align="center">Свиридова</p>
<p align="center">Ирина</p>
<p align="center">Владимировна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">311</p>
</td>
<td width="255">
<p>ул. Чайковского   2,4,6,7,8,9,10-13а</p>
<p>Проезд Чехова 2-6</p>
<p>Ул. Вокзальная   27,29</p>
<p>Волоколамское ш.   1-7, 1а, 1б</p>
<p>ул. Почтовая – все   дома</p>
<p>Строительный проезд   3,4,4а,5</p>
<p>ул. Павшинская –   все дома</p>
<p>Деревня Павшино: ул.Зелёная,   ул. Унетральная, ул. Причальная,</p>
<p>ул. Новая Слободка</p>
<p>Ильинское шоссе   1,2,3,14</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">11</p>
</td>
<td colspan="2" width="107">
<p align="center">Бондарчук</p>
<p align="center">Лариса</p>
<p align="center">Леонидовна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">310</p>
</td>
<td width="255">
<p>Ильинское ш. 4,6</p>
<p>ул. Вокзальная   1-24, 17а, 19а, 19б, 11/1, 13/1,15/1,25</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">12</p>
</td>
<td colspan="2" width="107">
<p align="center">Костюкевич</p>
<p align="center">Татьяна</p>
<p align="center">Фёдоровна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">307</p>
</td>
<td width="255">
<p>ул. Заводская 27,31</p>
<p>Ильинское ш. 2а,   2б,12,19</p>
<p>в/г Павшино – все   дома</p>
<p>деревня Гольёво   –все дома</p>
<p>Московский бульвар   д.1</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">14</p>
</td>
<td colspan="2" width="107">
<p align="center">Лонина</p>
<p align="center">Антонина</p>
<p align="center">Валентиновна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">308</p>
</td>
<td width="255">
<p>ул. Заводская   2,4,5,17,18/1,18/2,22,23,24,29</p>
<p>ул. Королёва   1,2,5,7,9</p>
<p>ул. Промышленная д.   42</p>
<p>ул. Строительная 3,   3а</p>
<p>Ильинский тупик   11,13</p>
<p>Южный бульвар 2,4,6</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">15</p>
</td>
<td colspan="2" width="107">
<p align="center">Акбердина   Роза Дамировна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Дмитрова – все   дома</p>
<p>ул. Циолковского –   все дома</p>
<p>ул. Комсомольская   3,5,7,9,13,15,17,19,23,25,27,29,31,33/13,35,37</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">16</p>
</td>
<td colspan="2" width="107">
<p align="center">Корнеенкова</p>
<p align="center">Алла</p>
<p align="center">Леонидовна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Комсомольская   3,43,45,47,49</p>
<p>ул. 50 лет Октября   – все дома</p>
<p>Деревня Губайлово: ул.   Пушкинская, ул. Дачная, ул. Московская, ул. Осипенко, ул. Победы, ул. Большая   Комсомольская, ул. Островского, ул. Мичурина, ул. Полевая, ул. Песочная.</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center"><br /></p>
<p align="center"><br /></p>
<p align="center">17</p>
</td>
<td colspan="2" width="107">
<p align="center"><br /></p>
<p align="center"><br /></p>
<p align="center">Царёв</p>
<p align="center">Илья</p>
<p align="center">Ильич</p>
</td>
<td width="123">
<p align="center"><br /></p>
<p align="center"><br /></p>
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p><br /></p>
<p><br /></p>
<p>ул. Октябрьская   1,2,3</p>
<p>ул. Пионерская   1-4,7,9</p>
<p>ул. Речная 2-7</p>
<p>ул. Школьная 1,2</p>
<p>Оптический переулок   1-8,3/1,5/1,7/1</p>
<p>Оптический проезд   д.16</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">18</p>
</td>
<td colspan="2" width="107">
<p align="center">Сергеева</p>
<p align="center">Любовь</p>
<p align="center">Ивановна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Школьная 4-20,   20а, 16а</p>
<p>ул. Пионерская   6,8,10,15,17,17а,19</p>
<p>ул. Октябрьская   4-7,9</p>
<p><br /></p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Взрослая   поликлиника №3</b></p>
</td>
</tr>
<tr>
<td width="53">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td colspan="2" width="107">
<p align="center">Врач</p>
</td>
<td width="123">
<p align="center">Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">1</p>
</td>
<td colspan="2" width="107">
<p align="center">Лавицкая   Татьяна Юрьевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">253</p>
</td>
<td width="255">
<p>ул. Молодёжная   2,3,4</p>
<p>ул. Авангардная   2,4,6,8,5,3</p>
<p>ул. Красногорский   б-р 10</p>
<p>ул. Павшинский б-р</p>
<p>24,26,28,30,32,34,36,37,38,40,41,23,45,47</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">2</p>
</td>
<td colspan="2" width="107">
<p align="center"><br /></p>
</td>
<td width="123">
<p align="center"><br /></p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Подмосковный   б-р 10,12,14,16</p>
<p>ул. Красногорский   б-р 17,19,21</p>
<p>ул. Павшинский б-р   2,4,6</p>
<p>ул Зверева 2,4,6,8</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">3</p>
</td>
<td colspan="2" width="107">
<p align="center">Коптева   Светлана Ивановна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">245</p>
</td>
<td width="255">
<p>ул. Красногосркий   б-р 1,2,8,3,5,6,7,9,11,13,13/1,13/2</p>
<p>ул. Павшинский б-р   16,18,20,23</p>
<p>ул. Ильинский б-р   2,2А,4</p>
<p>Парк «Рублёво»(ул.   Согласия)</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">4</p>
</td>
<td colspan="2" width="107">
<p align="center">Калинина   Татьяна Серагеевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">133</p>
</td>
<td width="255">
<p>ул. Спасская 4</p>
<p>ул. Павшинский б-р   3,5,7,15,17,19</p>
<p>ул. Игната Титова   3,7</p>
<p>ул. Головкина 4,7,8</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">5</p>
</td>
<td colspan="2" width="107">
<p align="center">Багирь</p>
<p align="center">Вера   Сергеевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">261</p>
</td>
<td width="255">
<p>ул. Спасская   1/1,1/2,1/3,6,8,10,12</p>
<p>ул. Подмосковный   б-р 9,11,13</p>
<p>ул. Егорова 3,5</p>
<p>ул. Павшинский б-р   1</p>
<p>ул. Красногорский   б-р 25</p>
<p><br /></p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">6</p>
</td>
<td colspan="2" width="107">
<p align="center">Родовикова   Екатерина Александровна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">258</p>
</td>
<td width="255">
<p>ул. Ильинский б-р   1,3,5</p>
<p>ул. Павшинский б-р   12</p>
<p>ул. Подмосковный   б-р 1,2,3,4,5,6,7,8</p>
<p>ул. Павшинский б-р   13/1,13/2,11,21</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">7</p>
</td>
<td colspan="2" width="107">
<p align="center">Ларина   Валентина Николаевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">255</p>
</td>
<td width="255">
<p>ул. Красногорский   б-р 14,18,20,22,24,26,28,30,32,33,34,36,38,40,42,44,46,48,50</p>
<p>ул. Ильинский б-р   6,7,8,9</p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Детская   поликлиника №3</b></p>
</td>
</tr>
<tr>
<td width="53">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td colspan="2" width="107">
<p align="center">Врач</p>
</td>
<td width="123">
<p>Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">13</p>
</td>
<td colspan="2" width="107">
<p align="center"><br /></p>
</td>
<td width="123">
<p align="center"><br /></p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>Ильинский б-р   2,2А,3,4,5</p>
<p>Подмосковный б-р   1,2,3,4,5,6,7,8</p>
<p>Павшинский б-р   4,5,12</p>
<p>Красногорский б-р 3</p>
<p>Ул. Зверева 2,4.6,8</p>
<p><br /></p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">19</p>
</td>
<td colspan="2" width="107">
<p align="center">Астраханцева   Екатерина Владимировна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">416</p>
</td>
<td width="255">
<p>Подмосковный б-р   9,11.13</p>
<p>Павшинский б-р   1,3,5,7</p>
<p>Ул. Спасская   1/1,1/2,1/3,4,6,8,10,12</p>
<p>Ул. И. Титова 3,7</p>
<p>Ул. Егорова 3,5</p>
<p>Красногорский б-р   25</p>
<p><br /></p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">26</p>
</td>
<td colspan="2" width="107">
<p align="center">Хачетлова   Диана Ануаровна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">312</p>
</td>
<td width="255">
<p>Красногорский б-р   10,14,18,20,24,26,28,30,32,34,36,46,48,50</p>
<p>Павшинский б-р   15,17,21,24,26,28,30,32,34,35,36,37,38,39,40,41,43</p>
<p>Ул. Головкина 7</p>
<p>Ул. Согласия</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">28</p>
</td>
<td colspan="2" width="107">
<p align="center">Негря   Наталья Ивановна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">303</p>
</td>
<td width="255">
<p>Ильинский б-р 7,8,9</p>
<p>Павшинский б-р   11,16,18,20</p>
<p>Красногорский б-р   5,7,9,11,13/1,13/2,17,19,21</p>
<p>Подмосковный б-р   10,12,14</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">31</p>
</td>
<td colspan="2" width="107">
<p align="center">Валеева   Ольга Витальевна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">306</p>
</td>
<td width="255">
<p>Авангардная   2,3,4,5,6,8</p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Детская   поликлиника №1</b></p>
</td>
</tr>
<tr>
<td width="53">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td colspan="2" width="107">
<p align="center">Врач</p>
</td>
<td width="123">
<p>Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">1</p>
</td>
<td colspan="2" width="107">
<p align="center">Румянцева   Татьяна Александровна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">19</p>
</td>
<td width="255">
<p>ул. Пионерская 12,14,16,18,20</p>
<p>ул. Маяковская&nbsp; 1,2</p>
<p>ул. Октябрьская &nbsp;14,15,19б</p>
<p>Ул. Советская   1,2,9,39</p>
<p>ул. Первомайская   5,7,9,10,11,12,14,15,16</p>
<p>Ул. Речная   8,19,20/2,20/4</p>
<p>Ул. Лесная 13,15,17</p>
<p><br /></p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">2</p>
</td>
<td colspan="2" width="107">
<p align="center">Комикова   Байрта Манцаевна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">19</p>
</td>
<td width="255">
<p>ул. Лесная   3,3а,5,6,7,9,10,12,14</p>
<p>ул. Народного   Ополчения&nbsp; 2б/1,2б/2,3,4,5,6,12,13,14</p>
<p>Центральный проезд   1,2,7,9,10,11,13,14,15,16,17,20,23</p>
<p>ул. Парковая   1,1а,1б,1в,1г,2,3,3а,3б,4,5,5а,5б,5в,5г,6,7,8</p>
<p><br /></p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">3</p>
</td>
<td colspan="2" width="107">
<p align="center"><br /></p>
</td>
<td width="123">
<p align="center"><br /></p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Кирова   1,2,3,4,5,5а,7,9,13,15,17,19,21</p>
<p>ул. Народного   Ополчения&nbsp;   5а,16,17,18а,23,24,25,27,29,30,31,33,34,35,36,37,38</p>
<p>ул. Ленина 31,33,35</p>
<p>ул. Оранжерейная 5</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">4</p>
</td>
<td colspan="2" width="107">
<p align="center">Шафикова   Татьяна Анатольевна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">20</p>
</td>
<td width="255">
<p>ул. Карбышева   1,3,7,9</p>
<p>ул. Кирова 26,28,30</p>
<p>ул. Ленина   37,39,41,51,53,55,57</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">5</p>
</td>
<td colspan="2" width="107">
<p align="center">Лебедкина   Лилия Фоминична</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">22</p>
</td>
<td width="255">
<p>ул. Ленина   5,5а,7,11а,15,15а,17,21,23,25,27,29</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">6</p>
</td>
<td colspan="2" width="107">
<p align="center">Набатова   Елена Олеговна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Ленина 47,59,63,65,67</p>
<p>ул. Карбышева   23/1,23/2,25,27,27/1,29/1,33,33/1,33/2,35/69</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">7</p>
</td>
<td colspan="2" width="107">
<p align="center">Аббасова   Лямая Закировна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">20</p>
</td>
<td width="255">
<p>ул. Ленина   47/1,47/2,47/3</p>
<p>ул. Карбышева   11,13,15,15/2,17,17/2,19</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">20</p>
</td>
<td colspan="2" width="107">
<p align="center">Главатских   Ирина Юрьевна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">18</p>
</td>
<td width="255">
<p>ул. Ленина 42,44</p>
<p>ул. Успенская   11,28,32</p>
<p>Анино,&nbsp; Черневская, Северная,&nbsp; Южная, Крайняя</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">21</p>
</td>
<td colspan="2" width="107">
<p align="center">Бутакова   Елена Павловна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">21</p>
</td>
<td width="255">
<p>ул. Братьев   Горожанкиных 15</p>
<p>ул. Успенская 24</p>
<p>ул. Вилора   Трифанова 7,8</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">22</p>
</td>
<td colspan="2" width="107">
<p align="center">Зайцева   Наталья Николаевна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">18</p>
</td>
<td width="255">
<p>ул. Ленина   22,24,26,26а,28,30,30а,30б,34,34а,36,38,38а,38б</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">23</p>
</td>
<td colspan="2" width="107">
<p align="center">Абдулаева   Магнитка Шахбановна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">21</p>
</td>
<td width="255">
<p>ул. Успенская   4,6,8,12,16</p>
<p>ул. Братьев   Горожанкиных 2,4,6,8,10</p>
<p><br /></p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">24</p>
</td>
<td colspan="2" width="107">
<p align="center"><br /></p>
</td>
<td width="123">
<p align="center"><br /></p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Братьев   Горожанкиных 14,16,18,20,23,24,26,28,30,32</p>
<p>ул. Успенская 26</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">25</p>
</td>
<td colspan="2" width="107">
<p align="center"><br /></p>
</td>
<td width="123">
<p align="center"><br /></p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>ул. Светлая   1,2,3,4,5,6,7,8,9,10,11</p>
<p>ул. Вилора   Трифанова 1,3,4,6,9</p>
</td>
</tr>
<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;">Изумрудные   холмы</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">27</p>
</td>
<td colspan="2" width="107">
<p align="center">Исмаилова   Летафет Исмаиловна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>Бульвар Космонавтов   4,5,6,7,8,11,12,13</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">30</p>
</td>
<td colspan="2" width="107">
<p align="center">Мачитидзе   Мария Левановна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>Бульвар Космонавтов   1</p>
<p>ул. Игоря   Мерлушкина 1,2,3,4,5,6,8,10,12</p>
<p><br /></p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Архангельская   амбулатория</b></p>
</td>
</tr>


<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Взрослое   население</b></p>
</td>
</tr>
<tr>
<td width="53">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td colspan="2" width="107">
<p align="center">Врач</p>
</td>
<td width="123">
<p align="center">Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">1</p>
</td>
<td colspan="2" width="107">
<p align="center">Синицина</p>
<p align="center">Юлия</p>
<p align="center">Рафисовна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>п. Архангельское   ул. Хлебники 31,32,33,34,35,36,37,39,40</p>
<p>д/п Арханегльское   ул. Садовая 1,2,3,4,5,6,7,8,9,10,10а,13,14,15,16,17,18</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">2</p>
</td>
<td colspan="2" width="107">
<p align="center">Синицина</p>
<p align="center">Юлия</p>
<p align="center">Рафисовна</p>
</td>
<td width="123">
<p align="center">Терапвет</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>п. Архангельское   ул. Хлебники 1,2,4,5,6,7,8,9,13,26,27,28,29,30</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">3</p>
</td>
<td colspan="2" width="107">
<p align="center">Синицина</p>
<p align="center">Юлия</p>
<p align="center">Рафисовна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>п. Архангельское   ул. Хлебники 3,10,11,12,14,15,16,17,20,21,22,23,24,25,38, д. Воронки,   Горки-6, д. Гольево(ул. Центральная, ул. Новая Слободка, ул. Колхозная, ул.   Красная слободка)</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">4</p>
</td>
<td colspan="2" width="107">
<p align="center">Синицина</p>
<p align="center">Юлия</p>
<p align="center">Рафисовна</p>
</td>
<td width="123">
<p align="center">терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>п. Новый,   д.Ивановское (+Кемпинг)</p>
</td>
</tr>
<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;">Детское население</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">1</p>
</td>
<td colspan="2" width="107">
<p align="center">Камилова</p>
<p align="center">Зульфия</p>
<p align="center">Алиасхабовна</p>
</td>
<td width="123">
<p align="center">педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>п. Архангельское   ул. Хлебники 1-40</p>
<p>п. Архангельское   ул. Садовая 1,2,3,4,5,6,7,8,9,10</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">2</p>
</td>
<td colspan="2" width="107">
<p align="center">Янгибоев</p>
<p align="center">Чоршамби</p>
<p align="center">Панжиевич</p>
</td>
<td width="123">
<p align="center">педиатр</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>д/п Архангельское   ул. Садовая 1,2,3,4,5,6,7,8,10,10а,13,14,15,16,17,18, д.Воронки, Горки-6,д.   Гольево(ул. Центральная, ул. Новая Слободка, ул. Колхозная, ул. Красная   Слободка),</p>
<p>п. Новый, д.   Ивановское (+Кемпинг)</p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Путилковская   амбулатория</b></p>
</td>
</tr>
<tr>
<td width="53">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td colspan="2" width="107">
<p align="center">Врач</p>
</td>
<td width="123">
<p align="center">Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">1</p>
</td>
<td colspan="2" width="107">
<p align="center">Власенко</p>
<p align="center">Маргарита</p>
<p align="center">Николаевна</p>
</td>
<td width="123">
<p align="center">Врач   общей практики</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>д. Путилково д.   7,8,9,10,12,13</p>
<p>ул. Садовая д. 18</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">2</p>
</td>
<td colspan="2" width="107">
<p align="center">Зуев</p>
<p align="center">Семен</p>
<p align="center">Валентинович</p>
</td>
<td width="123">
<p align="center">Врач   общей практики</p>
</td>
<td width="85">
<p align="center">4</p>
</td>
<td width="255">
<p>Путилковское ш.   1-27, 84-158</p>
<p>ул. Верхняя 29-43,   69-83</p>
<p>ул. Садовая 59-83</p>
<p>д. Путилково 14,15</p>
<p>ул. Томаровича д. 1</p>
<p>ул. Братцевская   6,8,10,12</p>
<p>ул. Новотушинская   2,3,4,5,6</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">3</p>
</td>
<td colspan="2" width="107">
<p align="center">Машенцева</p>
<p align="center">Ирина</p>
<p align="center">Генндаьевна</p>
</td>
<td width="123">
<p align="center">Врач   общей практики</p>
</td>
<td width="85">
<p align="center">4</p>
</td>
<td width="255">
<p>д. Путилково 11,24</p>
<p>ул. Садовая   19,20,22</p>
<p>Путилковское ш.   4(корпуса №1, №2)</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">4</p>
</td>
<td colspan="2" width="107">
<p align="center">Новикова</p>
<p align="center">Анна</p>
<p align="center">Михайловна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">17</p>
</td>
<td width="255">
<p>Детское население</p>
<p>ул.   Спасско-Тушинский бульвар 5,7,8,9</p>
<p>ул. Сходненская   27,29,31,33</p>
<p>ул. 70-летия Победы   1,2,3,4</p>
</td>
</tr>
<tr>
<td width="53">
<p align="center">5</p>
</td>
<td colspan="2" width="107">
<p align="center">Басараб</p>
<p align="center">Людмила</p>
<p align="center">Борисовна</p>
</td>
<td width="123">
<p align="center">Врач   общей практики</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>Взрослое и детское   население</p>
<p>ул. Сходненская   1,3,5,7,19,21,23,25</p>
<p>ул. Спасо-тушинский   бульвар д.2</p>
<p><strong>д. Гаврилково ЖК   Эдем</strong></p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Опалиховская городская поликлиника</b></p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td width="104">
<p align="center">Врач</p>
</td>
<td width="123">
<p align="center">Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">1</p>
</td>
<td width="104">
<p align="center">Зорина   Ирина Борисовна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">18</p>
</td>
<td width="255">
<p>ул. Арктическая   –дома нечётные с д.11 и далее, чётные с д. 10 и далее, ул. Большевисткая, ул.   Герцена, ул. Есенинская – дома нечётные с д.ё7 и далее, чётные с д.18 и   далее, ул. Красногорская, ул. Майская, ул. Малая Комсомольская, ул. Мира, ул.   Огарева, ул. Опалиха – дома нечётные с д. 23 по 77, чётные с 14 по 38, ул   Осенняя, ул. Папнина – нечетные с д. 21 и далее, чётные с д.32 и далее,   переулок Октябрят, переулок Пионерский, переулок Рыночный, переулок Советский   от д. 10 и далее, переулок Тихий, переулок Чехова, переулок Школьный,   переулок Южный,ул. Полюсная, ул. Полярная – нечётные с д. 9 и далее, чётные с   д. 12 и далее, поселок Пищевиков, ул. Северная – нечётные с д. 15а и далее,   чётные с д. 22 и далее, уо. Седова,ул. Труда, тупик Рыночный,тупик   Северный,ул. Чапаева- четные с д.2 по 44(далее к Н-Ник.), ул. Челюскина –   дома нечётные с д. 17 и далее, чётные с д.ё8 и далее, ул Чкалова</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">2</p>
</td>
<td width="104">
<p align="center">Крупина   Елена Петровна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">11</p>
</td>
<td width="255">
<p>ул. Геологов – все   дома</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">3</p>
</td>
<td width="104">
<p align="center">Титаренко   Ольга Викторовна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">11</p>
</td>
<td width="255">
<p>ул. Альябьева,   ул.Аникеевская,ул. Арктическая – нечётные с д.1 по д.9, чётные с д.2 по 8,   ул. Балакирева, ул.Белинского, ул. Глинка, ул. Горького, ул. Есенинская – с   д. 1 по д. 16, ул. Запрудная, ул. Крылова, ул. Новая Московская – с д.1 по   д.42 (далее к Н-Ник.),ул. Ольховская, ул. Опалиха – нечётные с д. 1 по д. 21,   чётные с д. 2 по д. 12</p>
<p>ул. Папанина –   нечётные с д.1 по д. 19, чётные с д. 2 по 28, ул. Полярная –нечётные с д. 1   по д. 7, чётные с д. 2 по д. 10, ул. Пришвина, ул. Пушкина, ул. Садовая,ул.   Северная – нечётные с д. 1 по 15, чётные с д.2 по д. 20, ул. Серебкина, ул.   Счастливая, ул . Транспортная, ул. Фруктовая, ул. Чапаева – нечётные с д.1 по   д. 43,ул. Челюскина –нечётные с д.ё по д. 15, чётные с д.2 по д. 16, ул.   Чернышевского, переулок Елисаветинский, переулок 1-ый Зелёный, переулок   Московский, переулок Чапаевский с д. 1 по д. 11, переулок Советский – с д. 1   по д. 10, посёлок Офицерский, проезд Островского,СНТ Ягодка, Снт   Опалиха,Тупик Парковый</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">1</p>
</td>
<td width="104">
<p align="center">Просандиева</p>
<p align="center">Марина</p>
<p align="center">Викторовна</p>
</td>
<td width="123">
<p align="center">Педиатр</p>
</td>
<td width="85">
<p align="center">5</p>
</td>
<td width="255">
<p>ул. Алябьева, ул.   Аникеевская, ул.Арктическая, ул. Балакирева, ул. Большевистская, ул. Герцена,   ул. Глинка, ул. Горького, переулок Елисаветинский, ул. Есенинская, ул.   Запрудная, ул. Красногорская, ул. Крылова, ул. Майская, ул. Малая   Комсомольская, ул. Мира, ул. Новая Московская – нечётные с д. 1 по д. 39   (далее к Н-Ник. Амб.), чётные с д.2 по д. 42(далее к Н-Ник Амб.), ул.   Огарева, ул. Ольховая,ул. Опалиха, ул. Осенняя, ул. Папнина , ул. Пришвина,   переулок 1-ый Зелёный, переулок Московский, переулок Октябрят,&nbsp; переулок пионерский, переулок Рыночный,   переулок Советский, переулок Тихий, переулок Чапаевский, переулок Чехова,   переулок Школьный, переулок Южный, ул. Полюсная,проезд Островского м д. 1 по   д . 17, ул. Пушкина, ул. Садовая, ул.Северная, ул.Седова, ул. Серебрянка, ул.   Счастливая, ул. Транспортная, ул. Труда, тупик Рыночный, ул. Фруктовая, ул.   Чапаева – нечётные с д. 1 по д. 43(далее к Н-Ник),чётные с д.2 по д. 46(далее   к Н-Ник.), ул. Челюскина, ул. Чернышевского, ул.Чкалова, СНТ Опалиха, СНТ   Ягодка</p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Нахабинская&nbsp; городская поликлиника</b></p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td width="104">
<p align="center">Врач</p>
</td>
<td width="123">
<p>Специализация</p>
</td>
<td width="85">
<p align="center">Кабинет</p>
</td>
<td width="255">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">1</p>
</td>
<td width="104">
<p align="center">Новикова   Наталья Владировна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">210</p>
</td>
<td width="255">
<p>ул. Институтская 1,   1б, 2, 2а, 3, 3а, 4, 5, 5а, 8</p>
<p>Горем 28</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">2</p>
</td>
<td width="104">
<p>Князева&nbsp; Наталья Ивановна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">215</p>
</td>
<td width="255">
<p>ул. Панфилова 9а,   11, 12а, 13,13а</p>
<p>ул. Институтская 6,   7, 9</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">3</p>
</td>
<td width="104">
<p align="center">Батищева   Лариса Валентиновна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">213</p>
</td>
<td width="255">
<p>ул. Панфилова 15,   17, 19, 23, 25, 27, 29</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">4</p>
</td>
<td width="104">
<p align="center">Фомина   Ирина Владимировна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">212</p>
</td>
<td width="255">
<p>ул. Институтская   10, 10а, 13/1, 13/2, 13/3, 15</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">5</p>
</td>
<td width="104">
<p align="center">Дамбаев   Жаргал Чимитдоржиевич</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">208</p>
</td>
<td width="255">
<p>Нов. Лесная 1, 1а,   3, 5, 7, 9</p>
<p>Лесная, Малая,   Лесной пер, Учительская , Московская,&nbsp;   Железнодорожная (многоквартирные дома)</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">6</p>
</td>
<td width="104">
<p align="center">Дамбаев   Жаргал Чимитдоржиевич</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">208</p>
</td>
<td width="255">
<p>Станционная, 2-я   Советская, Вокзальный пер, Вокзальная 1, 3, 5.</p>
<p>Родниковая,</p>
<p>Красноармейская 4, 4а, 4б.</p>
<p>Торфяной пер,   Советская 28 и частные дома, Лесопарковая,</p>
<p>1-я Лесопарковая</p>
<p>2-я Лесопарковая</p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">7</p>
</td>
<td width="104">
<p align="center">Горкуненко   Ольга Геннадиевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">215</p>
</td>
<td width="255">
<p>д. Козино-ул.   Совхозная, Школьная, Центральная</p>
<p>д. Нефедьево, д.   Желябино –ул. Полевая</p>
<p>Туш. Поселок-ул.   Почтовая ,2-я Почтовая, Комсомольская, Заречная, Карла Маркса, Дзержинского,   Толстого, Пионерская, Труда, Победы, Заводская,&nbsp; Тургенева, Спортивная, Лермонтова,   Свердлова, Волоколамский пер, Калинина, 40 лет Октября, Урицкого, Ленина,   Мира, Волоколамская, 2-я Волоколамская, Мичурина, Пушкина, Фрунзе, Кирова,   1-й проезд Кирова,2-й проезд Кирова, 1-й проезд Урицкого, 2-й проезд   Урицкого, 3-й проезд Урицкого, 4-й проезд Урицкого, Пионерский пер,   Комсомольский пер, Володарского, Совпартшкола.</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">8</p>
</td>
<td width="104">
<p align="center">Горкуненко   Ольга Геннадиевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">215</p>
</td>
<td width="255">
<p>Красноармейская 1,   44, 64 и частный сектор</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">9</p>
</td>
<td width="104">
<p align="center">Дубцова   Вера Валентиновна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">208</p>
</td>
<td width="255">
<p>Красноармейская 30,   32, 33, 34, 35, 36, 37, 38, 39, 40, 42, 45, 47, 49, 51, 53, 55, 57, 59, 61</p>
<p>Железнодорожная –   частный сектор</p>
<p>Вокзальная 2, 2а,   4, 6, 8, 8а, 10, 10а, 16, 16а, 12, 21</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">10</p>
</td>
<td width="104">
<p align="center">Новикова   Наталья Владимировна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">210</p>
</td>
<td width="255">
<p>Чкалова 1, 2, 3, 5,   7</p>
<p>Институтская 8а</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">11</p>
</td>
<td width="104">
<p align="center">Князева   Наталья Ивановна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">215</p>
</td>
<td width="255">
<p>Панфилова 1, 3а, 4,   5, 6,7а, 7б, 8, 9, 10, 12, 14, 16, 18, 20, 22, 24</p>
<p>Институтская 11, 18</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">12</p>
</td>
<td width="104">
<p align="center"><br /></p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center"><br /></p>
</td>
<td width="255">
<p>Красноармейская   44/1, 50, 52, 52а, 52б, 54, 63, 66</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">13</p>
</td>
<td width="104">
<p align="center">Сомов   Евгений Александрович</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">212</p>
</td>
<td width="255">
<p>Новая 1, 2, 3, 4,   5, 6, 7, 11</p>
<p>Лагерная</p>
<p>Дачная</p>
<p>Школьная 1а, 3а, 5</p>
<p>Поселковая</p>
<p>Северная</p>
<p>Дорожная</p>
<p>Речная</p>
<p>15 ЦНИИ</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">14</p>
</td>
<td width="104">
<p align="center">Сомов   Евгений Александрович</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">212</p>
</td>
<td width="255">
<p>Школьная 7, 7а, 7б,   8, 9, 10</p>
<p>ул. Братьев   Волковых</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">15</p>
</td>
<td width="104">
<p align="center">Ашурбекова   Сабина Рашидовна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">215</p>
</td>
<td width="255">
<p>Школьная 11, 13, 15</p>
<p>Новая 8</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">16</p>
</td>
<td width="104">
<p align="center">Зерщикова   Ольга Викторовна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">210</p>
</td>
<td width="255">
<p>Парковая</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">17</p>
</td>
<td width="104">
<p align="center">Зерщикова   Ольга Викторовна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">210</p>
</td>
<td width="255">
<p>Парковая 21,   Карбышева 1, 2, 3,11</p>
<p>11 Саперов 1, 2, 3,   8, 10, 12</p>
<p>Садовая,   Стадионная, Зеленая, МПС</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">18</p>
</td>
<td width="104">
<p align="center">Горкуненко   Ольга Геннадиевна</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">215</p>
</td>
<td width="255">
<p>Красноармейская 5,   5а, 58, 60, 62, 70</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">19</p>
</td>
<td width="104">
<p align="center">Сомов   Евгений Александрович</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">212</p>
</td>
<td width="255">
<p>Инженерная 2, 3,   3а, 4, 4/1, 4/2, 5</p>
<p>Молодежная 2, 4, 6,   10</p>
<p>Черная</p>
</td>
</tr>
<tr>
<td colspan="2" width="56">
<p align="center">20</p>
</td>
<td width="104">
<p align="center">Горкуненко   Ольга Геннадиевна</p>
<p align="center"><br /></p>
<p align="center">Дамбаев   Жаргал Чимитдоржиевич</p>
</td>
<td width="123">
<p align="center">Терапевт</p>
<p align="center"><br /></p>
<p align="center"><br /></p>
<p align="center"><br /></p>
<p align="center">Терапевт</p>
</td>
<td width="85">
<p align="center">215</p>
<p align="center"><br /></p>
<p align="center"><br /></p>
<p align="center"><br /></p>
<p align="center">208</p>
<p align="center"><br /></p>
</td>
<td width="255">
<p>Мкр.   Артек-Артековская, Лазурная, Янтарная, Изумрудная, Дубравая, Звездная,   Солнечная, Хрустальная,</p>
<p>Мкр.   Красногорский-Королева, Белобородова</p>
</td>
</tr>



<tr>
<td colspan="6" width="623">
<p style="text-align: center;" mce_style="text-align: center;"><b>Нахабинская городская поликлиника (Педиатрия)</b></p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p style="text-align: center;" mce_style="text-align: center;">№   участка</p>
</td>
<td width="104" valign="top">
<p align="center">Врач</p>
</td>
<td width="123" valign="top">
<p align="center">Специализация</p>
</td>
<td width="85" valign="top">
<p align="center">Кабинет</p>
</td>
<td width="255" valign="top">
<p style="text-align: center;" mce_style="text-align: center;">Адреса:</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">1</p>
</td>
<td width="104" valign="top">
<p align="center"><br /></p>
</td>
<td width="123" valign="top">
<p align="center"><br /></p>
</td>
<td width="85" valign="top">
<p align="center"><br /></p>
</td>
<td width="255" valign="top">
<p>ул. Парковая   3,4,5,6,7,8,9,10,11,12,13,13А,14,15,16,17,18,18А,19,20,21</p>
<p>ул. Школьная 1А, 3А</p>
<p>ул. Инженерная   3,4/1, 4/2, 5</p>
<p>ул. Дачная 1,2,3,14</p>
<p>ул. Лагерная,</p>
<p>ул. Северная,</p>
<p>ул. Речная,</p>
<p>ул. Стадионная</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">2</p>
</td>
<td width="104" valign="top">
<p align="center">Никитина</p>
<p align="center">Ирина</p>
<p align="center">Алексеевна</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
</td>
<td width="85" valign="top">
<p align="center">119</p>
</td>
<td width="255" valign="top">
<p>ул. Панфилова   1,3А,4,5,6,7А,8,9,9А,10,11,12,12А,13,13А,14,16,18,20,22,24</p>
<p>ул. Институтская   4А,6,7,10,10А,11,13/1,13/2,13/3</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">3</p>
</td>
<td width="104" valign="top">
<p align="center">Костюра</p>
<p align="center">Наталья</p>
<p align="center">Владимирована</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
</td>
<td width="85" valign="top">
<p align="center">112</p>
</td>
<td width="255" valign="top">
<p>ул. Панфилова   15,17,19,23,25,27,29,</p>
<p>ул. Чкалова 7</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">4</p>
</td>
<td width="104" valign="top">
<p align="center"><br /></p>
</td>
<td width="123" valign="top">
<p align="center"><br /></p>
</td>
<td width="85" valign="top">
<p align="center"><br /></p>
</td>
<td width="255" valign="top">
<p>ул. Институтская   1,1А,1Б,2,2А,3,3А,4,5А,5Б,8,8А,9,15,</p>
<p>ул. Чкалова 1,2,3,5</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">5</p>
</td>
<td width="104" valign="top">
<p align="center">Валихаметова</p>
<p align="center">Равиля   Джиганшаевна</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
</td>
<td width="85" valign="top">
<p align="center">115</p>
</td>
<td width="255" valign="top">
<p>ул. Железнодорожная   21 и <u style="">частные дома с 2 по 18</u></p>
<p>ул. Советская<u style=""> нечётные с 1 по 51 и чётные с 2 по 32</u></p>
<p>ул. 2-я Советская <u style="">только   чётные</u></p>
<p>ул. Красноармейская   с 1 по 40 и 43, 45, 47, 49, 50,51,52,52А,52Б, 53, 54, 55,57,59,61,63</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">6</p>
</td>
<td width="104" valign="top">
<p align="center">Захарова</p>
<p align="center">Галина</p>
<p align="center">Николаевна</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
</td>
<td width="85" valign="top">
<p align="center">119</p>
</td>
<td width="255" valign="top">
<p>ул. Красноармейская   4Б 5А, 44,44/1, 58,60, 62,64,66,70</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">7</p>
</td>
<td width="104" valign="top">
<p align="center">Дубник</p>
<p align="center">Ольга</p>
<p align="center">Петровна</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
</td>
<td width="85" valign="top">
<p align="center">115</p>
</td>
<td width="255" valign="top">
<p>ул. Школьная   5,7,7А,7Б,8,9,10</p>
<p>ул. Молодежная   2,4,6,10</p>
<p>ул. Братьев   Волковых 1</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">8</p>
</td>
<td width="104" valign="top">
<p align="center">Моисеенко</p>
<p align="center">Оксана</p>
<p align="center">Евгеньевна</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
</td>
<td width="85" valign="top">
<p align="center">112</p>
</td>
<td width="255" valign="top">
<p>ул. Школьная   11,13,15</p>
<p>ул. Новая 6,8</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">9</p>
</td>
<td width="104" valign="top">
<p align="center">Цыбисова</p>
<p align="center">Елена   Владимировна</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
</td>
<td width="85" valign="top">
<p align="center">119</p>
</td>
<td width="255" valign="top">
<p>ул. 11 Сапёров   1,2,3,8,10,12,</p>
<p>ул. Новая   1,2,3,3А,4,5</p>
<p>ул. 300 лет   инженерных войск</p>
<p>в/ч 45816</p>
<p>ул. Садовая   1,2,3,4,5,7,8,10,11,12,14,15,16,17,19</p>
<p>ул. Зелёная   1,2,3,4,5,7,8,10,11,13</p>
<p>ул. Карбышева 1,3,5</p>
<p>ул. 15 ЦНИИИ</p>
<p>в/ч бригада 30778</p>
<p>в/ч 11361</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">10</p>
</td>
<td width="104" valign="top">
<p align="center">Голованова</p>
<p align="center">Анна</p>
<p align="center">Павловна</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
</td>
<td width="85" valign="top">
<p align="center">119</p>
</td>
<td width="255" valign="top">
<p>д. Нефедьево,</p>
<p>Коттеджный посёлок   Артек,</p>
<p>д. Козино,</p>
<p>д. Желябкино,</p>
<p>ул. 40 лет Октября,</p>
<p>ул Мира,</p>
<p>ул. Труда,</p>
<p>ул. Заводская,</p>
<p>ул. Заречная,</p>
<p>ул. Победы,</p>
<p>ул. Володарского,</p>
<p>ул.1-я   Волоколамская,</p>
<p>ул. 2-я   Волоколамская,</p>
<p>Волоколамский пер.,</p>
<p>ул. Урицкого,</p>
<p>ул. Почтовая,</p>
<p>ул. 2-я почтовая,</p>
<p>ул. Пионерская</p>
<p>Пионерский пр.</p>
<p>ул. Спортивная</p>
<p>Спортивный пр.</p>
<p>ул. Комсомольская,</p>
<p>Комсомольский пр.,</p>
<p>ул. Ленина,</p>
<p>ул. Карла Маркса,</p>
<p>ул. Кирова</p>
<p>ул. Фрунзы,</p>
<p>ул. Свердлова,</p>
<p>ул. Дзержинского,</p>
<p>ул. Калинина,</p>
<p>ул. Мичурина,</p>
<p>ул. Лермонтова,</p>
<p>пер. Лермонтова,</p>
<p>ЖК Красногорский –   ул. Белобородова, ул. Королёва, СПШ 1,10,12,13,16,17,18,19,20</p>
</td>
</tr>
<tr>
<td colspan="2" width="56" valign="top">
<p align="center">11</p>
</td>
<td width="104" valign="top">
<p align="center">Соловьева</p>
<p align="center">Наталья</p>
<p align="center">Викторовна</p>
</td>
<td width="123" valign="top">
<p align="center">Педиатр</p>
<p align="center"><br /></p>
</td>
<td width="85" valign="top">
<p align="center">112</p>
</td>
<td width="255" valign="top">
<p>ул. Советская,</p>
<p>ул. Лесная,</p>
<p>ул. Лесопарковая,</p>
<p>Лесной пер.,</p>
<p>ул. Станционная,</p>
<p>Вокзальный пер.,</p>
<p>ул. Вокзальная   (Частный сектор),</p>
<p>ул. Учительская,</p>
<p>ул. Московская,</p>
<p>ул. Малая,</p>
<p>ул. Родниковая,</p>
<p>Торфяной пер.,</p>
<p>ул. Железнодорожная   (кроме 21 и частных домов)</p>
<p>ул. Гражданская   (частный сектор),</p>
<p>ул. Красноармейская   4, 4А,</p>
<p>ул. Новая Лесная   1А,3,5,7,9</p>
</td>
</tr>
</tbody>
</table><p><br mce_bogus="1"></p>
</div>
</div>
</div>
<div class="clear"></div>										
</div>
<!-- End Main Content -->';
    }
}
