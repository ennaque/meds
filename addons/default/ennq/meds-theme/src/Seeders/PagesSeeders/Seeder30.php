<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder30 extends BaseSeeder
{

    public const PAGE_SLUG = '/p30';

    public static function getTitle(): string
    {
        return 'Подготовка пациента к исследованиям';
    }

    public static function getSlug(): string
    {
        return self::PAGE_SLUG;
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_OLD_SUBDIVISION;
    }

    protected function getContent(): string
    {
        return
'
<div>
    <p style="padding-bottom: 7px">
        Клинико-Диагностическая Лаборатория Красногорской городской больницы №2 уделяет особое внимание качеству выполняемых исследований. Некоторые преаналитические факторы (используемый антикоагулянт и соотношение объема антикоагулянта и биологического материала, свойства пробы (гемолиз,  хилез, сгустки крови), длительность транспортировки и хранения биоматериала и др.) могут оказывать выраженное влияние на результаты лабораторных исследований. Поэтому перед выполнением исследований сотрудники лаборатории тщательно проверяют состояние образцов биоматериалов.
    </p>
    <p style="padding-bottom: 7px">
        В ряде случаев, если биоматериал не адекватен, исследование не проводится, в бланке результатов  указывается причины, по которой исследование не проведено (превышено допустимое время транспортировки, хилез, гемолиз, сгусток, мало материала, ошибка взятия материала, нарушены условия хранения и транспортировки биоматериала и др.). Если  в результатах анализа вместо ответа один из указанных комментариев,  повторите взятие биоматериала, строго соблюдая правила подготовки к исследованию,  транспортировки и хранения биоматериала.
    </p>
    <p style="padding-bottom: 7px">
        Подготовка пациента к исследованиям - одна из важных составляющих внелабораторной части этапа. Врач должен обязательно объяснить пациенту необходимость лабораторных исследований и информировать пациента о том, как ему нужно подготовиться к исследованиям.
    </p>
    <p style="padding-bottom: 7px">
        Строгое соблюдение пациентом правил подготовки к лабораторному исследованию крайне важно для получения точных результатов. Очень важно точно следовать указанным рекомендациям, так как только в этом случае будут получены достоверные результаты исследований.
    </p>
    <p style="padding-bottom: 7px">
        <b>На результат анализа могут оказывать влияние следующие факторы:</b>
        <ul>
            <li>Время приема пищи (Режим питания, состав принимаемой пищи, перерывы в ее приеме оказывают существенное влияние на ряд показателей лабораторных исследований)</li>
            <li>Физическая нагрузка (приводит к активизации свертывания крови, фибринолизу и функциональной активности тромбоцитов, повышению активности ферментов, увеличению концентрации половых гормонов)</li>
            <li>Положение тела</li>
            <li>Стресс во время взятия пробы (может вызвать преходящий лейкоцитоз, снижение концентрации железа, изменение уровня катехоламинов)</li>
            <li>Предшествующий отдых</li>
            <li>Стаз во время взятия пробы</li>
            <li>Консерванты</li>
            <li>Посуда</li>
            <li>Условия транспортировки</li>
            <li>Время доставки</li>
        </ul>
    </p>
    <p style="padding-bottom: 7px">
        <b>Подготовка к сдаче анализов крови:</b>
        <ol>
            <li>Кровь на анализ берется между 7 и 9 часами утра, после 12-часового ночного голодания</li>
            <li>За 1-2 дня до обследования исключить из рациона жирное, жареное и алкоголь. Если накануне состоялось застолье – желательно перенести лабораторное исследование на 1-2 дня</li>
            <li>За час до сдачи крови необходимо воздержаться от курения</li>
            <li>Надо исключить факторы, влияющие на результаты исследований: физическое напряжение (бег, подъем по лестнице), эмоциональное возбуждение. Перед процедурой необходимо отдохнуть 10-15 минут, успокоиться</li>
            <li>Пациент не должен принимать пищу после ужина</li>
            <li>Пациент должен лечь спать накануне в обычное для него время и встать не позднее, чем за 1 час до взятия крови</li>
            <li>По возможности воздержитесь от приема лекарств. Некоторые виды исследований (например, дисбактериоз) делают строго до начала приема антибиотиков и химиотерапевтических лекарств. Исключение составляют специальные исследования концентрации лекарства в крови. Если вы испытываете трудности с отменой лекарств, то обязательно сообщите об этом врачу</li>
            <li>Кровь не следует сдавать после рентгенографии, ректального исследования или физиотерапевтических процедур</li>
        </ol>
    </p>
    <p style="padding-bottom: 7px">
        <br><b>Допускается взятие крови у детей, находящихся на грудном или искусственном вскармливании через 4 часа после кормления.</b>
        <br><b>Показатели крови могут существенно меняться в течение дня, поэтому все анализы необходимо сдавать в утренние часы. Именно для утренних показателей рассчитаны все лабораторные нормы.</b>
        <br><b>Употребления жирной пищи может увеличивать мутность сыворотки крови (хилез), и тем самым влиять на результаты имерения, что приводит к ложным результатам и требует повторного анализа.</b>
    </p>
    <p style="padding-bottom: 7px">
        <b>Правила сбора мочи на общий анализ или пробу Нечипоренко:</b>
        <ol>
            <li>Забор проб должен осуществляться между 7 и 9 часами утра</li>
            <li>Взятие проб необходимо проводить до  проведения диагностических и лечебных процедур</li>
            <li>Перед сбором мочи обязательно провести гигиенические процедуры - тщательное, с мылом подмывание</li>
            <li>Собрать утреннюю порцию мочи, выделенную сразу же после сна. Предыдущее мочеиспускание должно быть не позже 2 часов ночи. На анализ по методу Нечипоренко - строго среднюю порцию!</li>
            <li>После сбора мочи завинтить крышку до упора</li>
            <li>После сбора на контейнер прикрепляется направление на анализ</li>
            <li>Мочу доставить в лабораторию утром того же дня</li>
        </ol>
        <b>Нельзя собирать мочу во время менструации и в течение 5-7 дней после цистоскопии. Не следует собирать мочу во время приема лекарственных препаратов. Моча, собранная для общего анализа, может храниться не более 1,5 часов (на холоде) и должна быть доставлена в лабораторию в течение 1 часа.</b>
    </p>
    <p style="padding-bottom: 7px">
        <b>Особенности сбора мочи у маленьких детей.</b><br>
        Для детей младше 2-х лет наиболее удобен сбор мочи в мочеприемники. Промывать область промежности перед приклеиванием мочеприемника следует только кипяченой водой. Использование антисептиков может привести к ложноотрицательным результатам. Мочеприемник следует снять как можно скорее после мочеиспускания; лучше всего менять его, если в течение 60-90 минут мочеиспускание не происходило. <b>Мочу собранную таким образом, перелить в контейнер</b>, закрыть крышку контейнера до упора. К контейнеру с мочой прикрепить направление. Собранную мочу доставить в лабораторию утром того же дня.<br>
        У детей старше 2-х лет сбор мочи производится сразу в контейнер в момент начала мочеиспускания. Для анализа подходит только первая утренняя моча. Перед сбором мочи нужно провести тщательный туалет половых органов ребенка. Мочу необходимо сдать на анализ в лабораторию  в течение полутора часов после ее сбора.
    </p>
    <p style="padding-bottom: 7px">
        <b>Сбор суточной мочи:</b>
        <ul>
            <li>Моча собирается в течение 24 часов.</li>
            <li>Соблюдается обычный питьевой режим.</li>
            <li>В 6-8 утра следует освободить мочевой пузырь (эту порцию мочи вылить в унитаз).</li>
            <li>После этого в течение суток моча собирается в чистый широкогорлый сосуд емкостью не менее 2-х литров.</li>
            <li>Последнее опорожнение мочевого пузыря производится в тоже время, когда накануне был начат сбор мочи.</li>
            <li>Время начала и конца сбора мочи отмечают в направлении.</li>
            <li>Измеряют, объем суточной мочи, мочу тщательно перемешивают, отливают часть в сосуд и доставляют в лабораторию.</li>
            <li>В направлении обязательно указывают объем суточной мочи.</li>
        </ul>
    </p>
    <p style="padding-bottom: 7px">
        <b>Проба по Зимницкому.</b>
        <ol>
            <li>В течение суток собирается 8 порций мочи.</li>
            <li>В 6 утра мочевой пузырь опорожняется в унитаз.</li>
            <li>После 6 утра, собирается моча, точно через каждые 3 часа, в отдельные банки:
                <ul>
                    <li>06:00 - 09:00</li>
                    <li>09:00 - 12:00</li>
                    <li>12:00 - 15:00</li>
                    <li>15:00 - 18:00</li>
                    <li>18:00 - 21:00</li>
                    <li>21:00 - 24:00</li>
                    <li>24:00 - 03:00</li>
                    <li>03:00 - 06:00</li>
                    <li>Последнее мочеиспускание в 6 утра следующего дня</li>
                </ul>
            </li>
            <li>Измеряют, объем каждой порции мочи, мочу тщательно перемешивают, отливают часть в сосуд и доставляют в лабораторию.</li>
            <li>В направлении обязательно указывают объем каждой порции мочи.</li>
        </ol>
    </p>
    <p style="padding-bottom: 7px">
        <b>Инструкция для пациента по сбору кала на копрологическое исследование и анализа кала на яйца глист:</b>
        <ul>
            <li>Собирать кал для исследования следует утром. Если это затруднительно, можно подготовить пробу заранее, но не более чем за 8 часов перед сдачей кала в лабораторию. В этом случае пробу следует хранить в холодильнике (не замораживать)</li>
            <li>Перед сбором кала необходимо предварительно помочиться. Дефекация производится в сухую, чистую емкость. Пробу кала из разных мест разовой порции перенести в контейнер при помощи ложки, вмонтированной в крышку, не более 1/3 объема контейнера</li>
            <li>Завинтить крышку до упора</li>
            <li>Прикрепить к контейнеру направление от лечащего врача</li>
            <li>Проба должна быть доставлена в лабораторию в течение 2 часов. Консерванты применять запрещается</li>
            <li>Для выявления паразитов проба должна быть немедленно доставлена в лабораторию, т.к. вегетативные формы паразитов можно обнаружить только в свежих образцах кала при температуре тела хозяина. Цисты паразитов стабильны</li>
        </ul>
        <b>Не допускается попадания в образец мочи или воды. Нельзя проводить исследование кала у женщин во время менструации.</b>
    </p>
    <p style="padding-bottom: 7px">
        <b>Правила сбора мокроты на общий анализ:</b>
        <ul>
            <li>Мокрота собирается утром натощак</li>
            <li>Больной чистит зубы, поласкает рот кипяченой водой (при наличии зубных протезов нужно поласкать рот 1% раствором алюмокалиевых квасцов с вяжущим действием, что предупреждает попадание в мокроту ороговевшего плоского эпителия)</li>
            <li>Затем больной откашливается в герметичный контейнер с завинчивающейся крышкой</li>
            <li>Для усиления выработки трахеобронхиального секрета перед сбором мокроты рекомендуется проведение ингаляций 10% раствором хлорида натрия</li>
            <li>Рот ребенка удерживается открытым с помощью шпателя</li>
            <li>Чтобы вызвать кашель находят надгортанник (за корнем языка)  и прикасаются к нему тампоном на стержне</li>
            <li>Материал из трахеи откашливается на тампон, и его можно использовать для исследования</li>
        </ul>
    </p>
    <p style="padding-bottom: 7px">
        Существующие представления об обеспечении качества результатов лабораторных исследований как о качественном выполнении только аналитического этапа является очень узким и не может считаться полноценной и достаточной основой обеспечения гарантированного качества работы специалистов клинической лабораторной диагностики. Их работа может оказаться бесплодной при неправильно составленной заявке на исследования, при нарушении правил взятия крови, ошибках, допущенных при транспортировке биоматериала в лабораторию. Равно как с опозданием доставленный лечащему врачу отчет о лабораторных исследованиях или не использование клиницистом полученной информации обесценивает все предыдущие усилия, направленные на обеспечение качества собственно измерении.
    </p>
</div>
';
    }
}