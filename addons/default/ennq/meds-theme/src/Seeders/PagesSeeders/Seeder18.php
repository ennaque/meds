<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder18 extends BaseSeeder
{

    public const PAGE_SLUG = '/old-clinic3';

    public static function getTitle(): string
    {
        return 'Взрослая поликлиника №3.';
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
        return "
            <h3>ГБУЗ МО «КГБ № 2» требуются :</h3>
            <ul>
                <li>врач-педиатр (возможность участвовать в социальной ипотеке)</li>
                <li>заведующая педиатрическим отделением</li>
                <li>медицинские сестры.</li>
            </ul>
            <h3>Врачи специалисты :</h3>
            <ul>
                <li>отоларинголог</li>
                <li>офтальмолог</li>
                <li>травматолог</li>
                <li>детский хирург</li>
                <li>детский эндокринолог</li>
            </ul>
            <h3>По вопросам трудоустройства звонить по телефону : 8(495)-561-00-27</h3>
            <div style='text-align: center'>
                <img src='/app/default/files-module/local/images/pic_18.png' width='800' class='resizeable'>
            </div>
            <div style='text-align: center; padding-bottom: 50px; padding-top: 50px'>
                <a style='font-size: 18px' class='elreg-btn' href='https://uslugi.mosreg.ru/zdrav/'>
                    <b>
                        ЗАПИСАТЬСЯ НА ОБСЛЕДОВАНИЕ
                    </b>
                </a>
            </div>
            <p>Режим работы подразделения \"Взрослая поликлиника № 3\" с 8.00 до 20.00 часов</p>
            <h3 style='color: red'>Телефон - 8 (498) 786-15-56</h3>
            <p><b>Заведующая Взрослой поликлиникой №3</b></p>
            <p>Харитонова Надежда Эдуардовна</p>
            <p><b>Заведующая КДО</b></p>
            <p>Антонова Светлана Вячеславовна</p>
            <p><b>Заведующая Дневным Стационаром</b></p>
            <p>Родовикова Дарья Александровна</p>
        ";
    }
}
