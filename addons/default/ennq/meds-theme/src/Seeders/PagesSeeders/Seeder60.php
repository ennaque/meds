<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder60 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Порядок прикрепления к ГБУЗ МО КГБ2';
    }

    public static function getSlug(): string
    {
        return '/doc5';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_DOCS;
    }

    protected function getContent(): string
    {
        return
'<div>
    <div>
        <h3 style="padding-bottom: 7px; text-align: center">
            ПРИКАЗ<br>
            ГБУЗ МО «Красногорская городская больница №2»<br>
            «Об утверждении документов, регламентирующих порядок прикрепления граждан к ГБУЗ МО КГБ №2»
        </h3>
        <p style="padding-bottom: 5px">
            На основании Федерального Закона РФ от 21.11.2011 г. №323-ФЗ «Об основах охраны здоровья граждан РФ», Приказа Минздравсоцразвития России  от 26.04.2012 г. № 406 «Об утверждении Порядка выбора гражданином медицинской организации при оказании ему медицинской помощи в рамках программы государственных гарантий бесплатного оказания гражданам медицинской помощи» и Письма Федерального Фонда Обязательного Медицинского Страхования №5661/30-1/и от 06.08.2012 года в целях упорядочения прикрепления граждан к Государственному бюджетному учреждению здравоохранения Московской области «Красногорская городская больница №2» (ГБУЗ МО КГБ №2) <b>приказываю:</b>
            <ol>
                <li>
                    Утвердить:
                    <ol>
                        <li>«Порядок прикрепления граждан на медицинское обслуживание к ГБУЗ МО «Красногорская городская больница №2» - Приложение №1 к настоящему приказу;</li>
                        <li>Форму «Заявление для граждан РФ» для прикрепления на медицинское обслуживание к ГБУЗ МО «Красногорская городская больница №2» - Приложение №2 к настоящему приказу;</li>
                        <li>Форму «Журнал регистрации заявлений на прикрепление граждан к ГБУЗ МО«Красногорская городская больница №2»; Приложение №3 к настоящему приказу;</li>
                        <li>Бланк «Открепительный талон» для открепления от ГБУЗ МО «Красногорская городская больница №2» - Приложение №4 к настоящему приказу;</li>
                    </ol>
                </li>
                <li>
                    Руководителям структурных подразделений/отделений больницы:
                    <ul>
                        <li>ознакомить работников вверенных подразделений с настоящим приказом и Приложениями в срок до   06.09.2012г.;</li>
                        <li>разместить настоящий приказ с Приложениями на информационных стендах вверенных структурных подразделений в срок до 12.09.2012г.</li>
                    </ul>
                </li>
                <li>Начальнику отдела информационных технологий Райкову М.А. разместить настоящий приказ с Приложениями на сайте больницы в срок 07.09.2012г.</li>
                <li>Считать утратившими силу Приложение №3 «Порядок прикрепления граждан, проживающих вне зоны обслуживания учреждением» и Приложение №4 «Порядок рассмотрения заявлений граждан, проживающих вне зоны обслуживания учреждением» к Приказу № 189 от 14.05.2012 г.</li>
                <li>Контроль за исполнением настоящего приказа и Приложений к нему оставляю за собой.</li>
            </ol>
            Главный врач: А.А. Юанов
        </p>


        <h3 style="padding-bottom: 7px; text-align: center">
            Приложение №1<br>
            Порядок прикрепления граждан на медицинское обслуживание к ГБУЗ МО«Красногорская городская больница №2»
        </h3>
        <p style="padding-bottom: 5px">
            Настоящий Порядок разработан в целях упорядочения процедуры прикрепления граждан, выбравших ГБУЗ МО «Красногорская городская больница №2» на основании Федерального Закона РФ от 21.11.2011 г. №323-ФЗ «Об основах охраны здоровья граждан РФ» и Приказа Минздравсоцразвития России  № 406н от 26.04.2012 г. «Об утверждении Порядка выбора гражданином медицинской организации при оказании ему медицинской помощи в рамках программы государственных гарантий бесплатного оказания гражданам медицинской помощи».
        </p>
        <p style="padding-bottom: 5px">
            Настоящий Порядок распространяется на граждан, желающих обслуживаться в ГБУЗ МО «КГБ№2» независимо от их места проживания.
        </p>
        <p style="padding-bottom: 5px">
            <b>Заявления на прикрепление к ГБУЗ МО КГБ №2 принимаются у граждан и рассматриваются в следующем порядке:</b>
            <ol>
                <li>Бланки  заявлений на прикрепление гражданам РФ или иностранным гражданам, обслуживающимся в ГБУЗ МО «КГБ №2» выдаются участковой службой, бланки заявлений вновь прикрепляемым гражданам выдаются медицинскими регистраторами структурных подразделений;</li>
                <li>Прием заявлений и документов у граждан, обслуживающихся в ГБУЗ МО «КГБ №2», осуществляет участковая служба, у вновь прикрепляемых граждан к ЛПУ прием заявлений осуществляется  медицинскими регистраторами структурных подразделений;</li>
                <li>Участковая служба  проверяет полноту и правильность заполнения заявлений. При правильном заполнении заявления участковая служба передает его руководителю структурного подразделения вместе с пакетом документов, обозначенных в заявлении, предупреждает гражданина о том, что для ускорения прикрепления к медицинской организации, желательно, чтобы гражданин предоставил «открепительный талон» и медицинскую документацию.</li>
                <li>В случае отсутствия «открепительного талона» руководитель подразделения в течение двух рабочих дней направляет письмо о подтверждении информации, указанной в заявлении, в медицинскую организацию, в которой гражданин находится на медицинском обслуживании на момент подачи заявления.</li>
                <li>Прикрепление граждан осуществляется при наличии согласия назначенного (либо выбранного пациентом) врача участковой службы. Выбор врача участковой службы осуществляется гражданином не чаще 1 раза в год. Информацию о прикреплении гражданин получает у регистратора.</li>
                <li>Руководитель подразделения после подтверждения медицинской организацией, в которой гражданин находится на медицинском обслуживании на момент подачи заявления, прикрепляет гражданина на медицинское обслуживание к врачу-терапевту участковому, врачу-педиатру участковому, врачу общей практики для медицинского наблюдения и лечения по согласованию с лечащим врачом, регистрирует в журнале и передает в отдел информационных технологий для ввода в электронную базу реестра прикрепленных  граждан.</li>
                <li>После ввода в реестр прикрепленных граждан подписанное заявление возвращается на участок, за которым прикреплен гражданин, и хранится на участке в алфавитном порядке.</li>
            </ol>
        </p>
        <p style="padding-bottom: 5px">
            <b>Для граждан РФ, проживающих в зоне обслуживания поликлиники</b>, необходимы следующие документы к заявлению о выборе медицинской организации:
            <ul>
                <li>
                    Для граждан старше 14–ти лет:
                    <ul>
                        <li>паспорт гражданина РФ;</li>
                        <li>полис ОМС;</li>
                        <li>СНИЛС (при наличии);</li>
                    </ul>
                </li>
                <li>
                    Для детей до 14-ти лет:
                    <ul>
                        <li>свидетельство о рождении;</li>
                        <li>полис ОМС;</li>
                        <li>документ, удостоверяющий личность представителя гражданина (паспорт гражданина РФ; документ, подтверждающий полномочия представителя);</li>
                        <li>СНИЛС (при наличии).</li>
                    </ul>
                </li>
            </ul>
            Участковая служба или оператор должен уточнить место медицинского обслуживания пациента (в одном ли медицинском учреждении он обслуживается, в случае обслуживания в другом медицинском учреждении – требуется открепительный талон от другого медицинского обслуживания).
        </p>
        <p style="padding-bottom: 5px">
            <b>Для граждан РФ, проживающих вне зоны обслуживания учреждением</b>, но выбравших ГБУЗ МО КГБ №2 необходимы документы и их копии к заявлению о выборе медицинской организации:
            <ul>
                <li>
                    Для граждан старше 14–ти лет:
                    <ul>
                        <li>паспорт гражданина РФ и его копию (1-ая страница и страница с отметкой о регистрации по месту жительства);</li>
                        <li>полис ОМС + копию полиса ОМС;</li>
                        <li>амбулаторную карту/историю развития ребенка (или подробную выписку) из ЛПУ, в котором гражданин обслуживался ранее;</li>
                        <li>справку об откреплении из медицинского обслуживания по месту жительства;</li>
                        <li>СНИЛС (при наличии).</li>
                    </ul>
                </li>
                <li>
                    Для детей до 14-ти лет:
                    <ul>
                        <li>свидетельство о рождении и его копию;</li>
                        <li>полис ОМС + копию полиса ОМС;</li>
                        <li>историю развития ребенка (или выписку из нее);</li>
                        <li>документ, удостоверяющий личность представителя гражданина (паспорт гражданина РФ; документ, подтверждающий полномочия представителя).</li>
                    </ul>
                </li>
            </ul>
        </p>
        <p style="padding-bottom: 5px">
            <b>Для иностранных граждан, проживающих на территории обслуживания учреждения:</b><br>
            <b>Документы для лиц, имеющих право на медицинскую помощь в соответствии с ФЗ «О беженцах»:</b>
            <ul>
                <li>удостоверение беженца или свидетельство о рассмотрении ходатайства о признании беженцем по существу, или копия жалобы на решение о лишении статуса беженца, поданной в Федеральную миграционную службу с отметкой о приеме к рассмотрению, или свидетельство о предоставлении временного убежища на территории РФ+ копию;</li>
                <li>полис ОМС + копию.</li>
            </ul>
        </p>
        <p style="padding-bottom: 5px">
            <b>Для иностранных граждан, постоянно проживающих в РФ:</b>
            <ul>
                <li>паспорт иностранного гражданина, вид на жительство + копию</li>
                <li>полис ОМС + копию.</li>
            </ul>
        </p>
        <p style="padding-bottom: 5px">
            <b>Для иностранных граждан, временно проживающих в РФ:</b>
            <ul>
                <li>паспорт иностранного гражданина с отметкой о разрешении на временное проживание в РФ + копию</li>
                <li>полис ОМС + копию.</li>
            </ul>
        </p>
    </div>
</div>';
    }
}