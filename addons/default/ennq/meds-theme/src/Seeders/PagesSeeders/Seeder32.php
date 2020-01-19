<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder32 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Физиотерапевтическое отделение';
    }

    public static function getSlug(): string
    {
        return '/physter';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_PHYSTER;
    }

    protected function getContent(): string
    {
        return
            '
<div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <img src="/app/default/files-module/local/images/fizio_otd1_32.jpg" class="resizeable" width="800px">
        </p>
        <p style="padding-bottom: 7px">
            Заведующая отделением  Юдина Людмила Анатольевна<br>
            Тел.  (498)568-14-99
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <b>
                Медицинские услуги, оказываемые в физиотерапевтическом отделении для восстановительного лечения
            </b>
        </p>
        <p style="padding-bottom: 7px">
            <ul>
                <li>Консультация врача физиотерапевта</li>
                <li>Консультация врача ЛФК</li>
                <li>УВЧ-терапия</li>
                <li>УФО (ультрафиолетовое облучение)</li>
                <li>Электрофорез лекарственных препаратов</li>
                <li>Электросон-терапия (трансцеребральная импульсная электротерапия)</li>
                <li>Амплипульстерапия (СМТ)</li>
                <li>Магнитотерапия (ПеМП)</li>
                <li>УЗТ – терапия</li>
                <li>Дарсонвализация</li>
                <li>Лазеротерапия</li>
                <li>Небулайзерная лекарственная ингаляция</li>
                <li><b>Индивидуальная сухая солевая галоингаляция</b></li>
                <li>Парафино-озокеритовые аппликации</li>
                <li>Подводный душ – массаж(доработать ссылку)</li>
                <li>Пресные пузырьковые ванны (жемчужные)(доработать ссылку)</li>
                <li>Душ Шарко(доработать ссылку)</li>
                <li>Циркулярный душ(доработать ссылку)</li>
                <li>Восходящий душ</li>
                <li>Лимфодренажный пневмомассаж (прессотерапия) для конечностей(доработать ссылку)</li>
                <li>Вибрационно-механический массаж  на кушетке Ормед – релакс</li>
                <li>Дозированное вытяжение позвоночнике на кушетке Ормед – профессионал(доработать ссылку)</li>
                <li>Многоканальная программируемая электростимуляция мышц от аппарата АКОРД</li>
                <li>Вытяжение и разгрузка позвоночника системой Детензор</li>
                <li>ЛФК для детей индивидуальные и групповые</li>
                <li>Занятия ЛФК для взрослых индивидуальные и групповые</li>
                <li>Механотерапия для детей и взрослых (занятия на тренажерах)</li>
                <li>Массаж для детей и взрослых</li>
            </ul>
        </p>
        <p style="padding-bottom: 7px; text-align: center">
            <b>
                Для назначения физиопроцедур необходимо предоставить:
            </b>
        </p>
        <p style="padding-bottom: 7px">
            <ul>
                <li>амбулаторную карту</li>
                <li>осмотр врача Красногорской городской больницы № 2 (по данному заболеванию) 
                с направлением на консультацию к физиотерапевту</li>
            </ul>
        </p>
        <p style="padding-bottom: 7px">
            При назначении физиопроцедур ( с целью исключения противопоказаний) врачу – физиотерапевту могут 
            потребоваться данные дополнительных методов обследования ( анализ крови мочи, ЭКГ, ФГ, осмотр гинеколога 
            и др.)
        </p>
    </div>
</div>
';
    }
}
