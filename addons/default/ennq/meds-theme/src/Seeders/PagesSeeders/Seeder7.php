<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder7 extends BaseSeeder
{

    public const PAGE_SLUG = '/electroregistry';
    public const PAGE_TITLE = 'Электронная регистратура';

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_MAIN;
    }

    public static function getTitle(): string
    {
        return self::PAGE_TITLE;
    }

    public static function getSlug(): string
    {
        return self::PAGE_SLUG;
    }

    protected function getContent(): string
    {
        return
            "<div>
                <div class='second-title'>
                    <h2>
                        Электронная регистратура
                    </h2>
                </div>
                <div>
                    <p style='padding-bottom: 7px'>
                        Уважаемые пациенты:
                    </p>
                    <p style='padding-bottom: 7px'>
                        Перед использованием сервиса \"Электронная регистратура\" проверьте наличие у Вас 
                        заведенной электронной медицинской карты в регистратуре Вашей поликлиники. В случае 
                        отсутствия электронной карты, сотрудники регистратуры создатуе ее в момент обращения.
                    </p>
                    <p style='padding-bottom: 7px'>
                        1) Записавшись на прием к врачу, перед посещением поликлиники, убедительно просим 
                        проверить расписание приема через электронную регистратуру. Актуализация расписания 
                        врачей проводятся ежедневно. В случае изменения времени приема или отсутствия врача на 
                        рабочем месте, предварительная проверка расписания позволит сэкономить Ваше время.
                    </p>
                    <p style='padding-bottom: 7px'>
                        2) В случае невозможности посещения поликлиники по заранее заказанному талону, 
                        убедительно просим Вас отменить талон через личный кабинет ЕМИАС \"Электронная регистратура\" 
                        либо позвонить в регистратуру поликлиники и сообщить о невозможности посещения поликлиники.
                    </p>
                    <p style='padding-bottom: 7px'>
                        3) При заказе талона на прием из дома в
                         <span style='color: red'>ОБЯЗАТЕЛЬНОМ ПОРЯДКЕ УКАЗЫВАТЬ СВОЙ КОНТАКТНЫЙ ТЕЛЕФОН.</span>
                         В случае изменения расписания у мед. регистраторов будет возможность связаться с Вами.
                    </p>
                    <div style='text-align: center; padding-bottom: 20px; padding-top: 20px'>
                        <a style='font-size: 18px' class='elreg-btn' href='https://uslugi.mosreg.ru/zdrav/?popup=doctor-appointment'>
                            <b>
                                ЗАПИСАТЬСЯ НА ПРИЕМ
                            </b>
                        </a>
                    </div>
                </div>
            </div>";
    }
}
