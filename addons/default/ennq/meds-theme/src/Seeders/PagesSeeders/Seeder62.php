<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder62 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Медицинское страхование';
    }

    public static function getSlug(): string
    {
        return '/doc7';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_DOCS;
    }

    protected function getContent(): string
    {
        return
            "<div>
                <div>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Медицинское страхование
                        </b>
                    </p>
                    <p style='padding-bottom: 5px'>
                        В соответствии с Федеральным законом «Об обязательном медицинском страховании» 
                        №326-ФЗ от 29.11.2010 г.(в ред. Федеральных законов от 14.06.2011 N 136-ФЗ, от 
                        30.11.2011 N 369-ФЗ, от 03.12.2011 N 379-ФЗ, от 28.07.2012 N 133-ФЗ, от 
                        01.12.2012 N 213-ФЗ, от 11.02.2013 N 5-ФЗ, от 02.07.2013 N 185-ФЗ, от 
                        23.07.2013 N 251-ФЗ, от 27.09.2013 N 253-ФЗ, от 25.11.2013 N 317-ФЗ, от 
                        28.12.2013 N 390-ФЗ, от 12.03.2014 N 33-ФЗ).
                    </p>
                    <p style='padding-bottom: 5px'>
                        C 1 января 2011 года каждый гражданин может самостоятельно выбрать страховую компанию и 
                        получить полис ОМС.
                    </p>
                    <p style='padding-bottom: 5px'>
                        Полисы обязательного медицинского страхования, выданные лицам, застрахованным по обязательному 
                        медицинскому страхованию до дня вступления в силу Федерального закона об обязательном 
                        медицинском страховании, являются действующими до замены их на полисы обязательного 
                        медицинского страхования единого образца.
                    </p>
                    <p style='padding-bottom: 5px'>
                        Выдача новых полисов единого образца планируется начать с 1 мая 2011 года.
                    </p>
                    <p style='padding-bottom: 5px'>
                        При смене страховой медицинской организации, а также при изменении фамилии, имени, отчества 
                        полис ОМС необходимо переоформить в обязательном порядке.
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Куда обращаться, если у Вас имеются претензии к оказанию бесплатной медицинской помощи.</b>
                    </p>
                    <p style='padding-bottom: 5px'>
                        Если у Вас возникли претензии к порядку или качеству предоставления медицинских услуг в 
                        учреждениях здравоохранения, Вы можете обратиться:
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>филиал Московского областного фонда обязательного медицинского страхования</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>в Вашу страховую медицинскую организацию, застраховавшую Вас, телефон и адрес которой 
                        Вы можете узнать на полисе ОМС</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>к руководству учреждения здравоохранения</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        Межрайонный филиал №6 ТФОМС МО<br>
                        (Красногорский район Московской области):<br>
                        Руководитель: Бычков Владимир Александрович<br>
                        Адрес: г.Красногорск Московской области, ул. Чайковского , д.12<br>
                        Контактные телефоны: (495)562-77-53, (495) 562-97-22<br>
                        E-mail: foms@mofoms.ru<br>
                        Территориальный фонд обязательного медицинского страхования Московской области 
                        (информационно-справочная служба ТФОМС МО тел. 780-05-60)
                    </p>
                </div>
            </div>";
    }
}
