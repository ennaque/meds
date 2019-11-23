<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder14 extends BaseSeeder
{

    public const PAGE_SLUG = '/milk-kitchen';


    public static function getTitle(): string
    {
        return 'Молочная кухня.';
    }

    public static function getSlug(): string
    {
        return self::PAGE_SLUG;
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_YOUNG_SUBDIVISION;
    }

    protected function getContent(): string
    {
        return
            '
<div>
    <div>
        <p style="padding-bottom: 7px">
            <h3>Заведующая молочной кухней</h3>
        </p>
        <p style="padding-bottom: 7px">
            Сурина Татьяна Николаевна
        </p>
        <p style="padding-bottom: 7px">
            <span style="color: red">Телефон - 8 (495) 563-89-11
            </span>
        </p>
    </div>
    <div>
        <img src="/app/default/files-module/local/images/moloko1_14.jpg" width="800px">
    </div>
    <div>
        <p style="padding-bottom: 7px">
            <b>Молочная кухня </b> расположена по адресу г.Красногорск, ул. Кирова, д. 30а.
        </p>
    </div>
    <div>
        <h3 ПЕРЕЧЕНЬ</h3>
        <p style="padding-bottom: 7px">
            <b>наборов продуктов питания для обеспечения полноценным питанием детей в возрасте до 3-х лет, беременных женщин, кормящих матерей в 2019 году</b>
        </p>
        <table style="width: 100%" id="meds-table" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th><b>Набор №</b></th>
                    <th><b>0-6мес</b></th>
                    <th><b>4-8мес</b></th>
                    <th><b>4-12мес</b></th>
                    <th><b>6-12мес</b></th>
                    <th><b>1-2г</b></th>
                    <th><b>2-3г</b></th>
                    <th><b>Беременные<br>
                    женщины</b></th>
                    <th><b>Кормящие<br>
                    матери</b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>1</b></td>
                    <td>Малютка 1, 350, №2<br>
                    Агуша, 0,2, №5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>2</b></td>
                    <td>Нутрилон 1, 400, № 1<br>
                    Агуша, 0,2, №6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>3</b></td>
                    <td>НАН к/м 1,  400, №1<br>
                    Агуша, 0,2, № 4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>4</b></td>
                    <td>Агуша, 0,2, №18</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>5</b></td>
                    <td></td>
                    <td>Каша б/м., 200, №2<br>
                    Пюре фруктовое,  (стекло) №13</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>6</b></td>
                    <td></td>
                    <td></td>
                    <td>Каша мол. , 200, №2<br>
                    Сок фруктовый , 0,2, №15<br>
                    Пюре фруктовое,  (стекло) №1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>7</b></td>
                    <td></td>
                    <td></td>
                    <td>Сок фруктовый , 0,2, №11<br>
                    Пюре фруктовое,  (стекло) №10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>8 (с 5 мес.)</b></td>
                    <td></td>
                    <td></td>
                    <td>Пюре овощное, 0,125, №19<br>
                    Сок фруктовый, 0,2, №6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>9</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Малютка 2, 350,  №2<br>
                    Пюре фруктовое,  (стекло) №5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>10</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Нутрилон 2, 400, №1<br>
                    Сок фруктовый, 0,2, №6<br>
                    Пюре фруктовое,  (стекло) №2
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>11</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>НАН к/м 2, 400, №1<br>
                    Пюре фруктовое,  (стекло) №2<br>
                    Сок фруктовый, 0,2, №3
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>12</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Пюре овощное, 0,125, №6<br>
                    Сок фруктовый, 0,2, №6<br>
                    Пюре мясное, 80, (стекло) №7
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>13(с 8 мес)</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Молоко детское, 0,2, №11<br>
                    Пюре фруктовое,  (стекло) №10
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>14</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Пюре фруктовое,  (стекло) №5<br>
                    Сок фруктовый, 0,2, №6<br>
                    Пюре овощное (стекло), №6
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>15</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Молоко детское, 0,2, №9<br>
                    Пюре фруктовое,  (стекло) №7
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>16</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Пюре овощное, 0,125, №7<br>
                    Пюре мясное, 80, (стекло) №6<br>
                    Сок фруктовый, 0,2, №1
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>17</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Молоко детское, 0,2, №8Б Б<br>
                    Сок фруктовый, 0,2, №7
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>18</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Сок фруктовый, 0,2, №6<br>
                    Пюре фруктовое,  (стекло) №7
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>19</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Пюре овощное (стекло), №7<br>
                    Пюре мясное, 80, (стекло) №4<br>
                    Пюре фруктовое,  (стекло) №1
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>20</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Сок фруктовый, 0,2, №15 
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>21</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Молоко, 1000, №1<br>
                    Сок фруктовый, 500, № 2<br>
                    Сок фруктовый, 0,2, №2 
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>22</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Молоко, 1000, №2<br>
                    Пюре фруктовое,  (стекло) №1
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>23</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Молоко, 1000, № 4<br>
                    Сок фруктовый, 500, №4<br>
                    Сок фруктовый, 0,2, №2
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
';
    }
}
