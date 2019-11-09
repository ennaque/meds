<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder14 extends Seeder
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
    public function run()
    {
        $type = $this->types->findBySlug('default');
        $content = $this->getContent();
        $this->pages->create(
            [
                'ru'           => [
                    'title' => 'Молочная кухня',
                ],
                'slug'         => '/milkkitchen',
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
        <img src="/app/default/files-module/local/images/moloko1_14.jpg" class="resizeable" width="800px">
    </div>
    <div>
        <p style="padding-bottom: 7px">
            <b>Молочная кухня </b> расположена по адресу г.Красногорск, ул. Кирова, д. 30а.
        </p>
    </div>
    <div>
        <h3>ПЕРЕЧЕНЬ</h3>
        <p style="padding-bottom: 7px">
            <b>наборов продуктов питания для обеспечения полноценным питанием детей в возрасте до 3-х лет, беременных женщин, кормящих матерей в 2019 году</b>
        </p>
        <table style="width: 100%" id="meds-table" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th><b>Возраст</b></th>
                    <th><b>Набор №1</b></th>
                    <th><b>Набор №2</b></th>
                    <th><b>Набор №3</b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>0-6мес</b></td>
                    <td>Малютка 1, 350, №2
                    Агуша, 0,2, №5<br>
                    Набор №4
                    Агуша, 0,2, №18
                    </td>
                    <td>Нутрилон 1, 400, № 1
                    Агуша, 0,2, №6
                    </td>
                    <td>НАН к/м 1,  400, №1
                    Агуша, 0,2, № 4
                    </td>
                </tr>
                <tr>
                    <td><b>4-8мес</b></td>
                    <td>Набор № 5<br>
                    Каша б/м., 200, №2
                    Пюре фруктовое,  (стекло) №13
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>4-12мес</b></td>
                    <td>Набор №6<br>
                    Каша мол. , 200, №2
                    Сок фруктовый , 0,2, №15
                    Пюре фруктовое,  (стекло) №1
                    </td>
                    <td>Набор №7<br>
                    Сок фруктовый , 0,2, №11
                    Пюре фруктовое,  (стекло) №10
                    </td>
                    <td>Набор №8 (с 5 мес.)<br>
                    Пюре овощное, 0,125, №19
                    Сок фруктовый, 0,2, №6
                    </td>
                </tr>
                <tr>
                    <td><b>6-12мес</b></td>
                    <td>Набор №9<br>
                    Малютка 2, 350,  №2
                    Пюре фруктовое,  (стекло) №5<br>
                    Набор №12<br>
                    Пюре овощное, 0,125, №6
                    Сок фруктовый, 0,2, №6
                    Пюре мясное, 80, (стекло) №7
                    </td>
                    <td>Набор №10<br>
                    Нутрилон 2, 400, №1
                    Сок фруктовый, 0,2, №6
                    Пюре фруктовое,  (стекло) №2<br>
                    Набор №13(с 8 мес)<br>
                    Молоко детское, 0,2, №11
                    Пюре фруктовое,  (стекло) №10
                    </td>
                    <td>Набор №11<br>
                    НАН к/м 2, 400, №1
                    Пюре фруктовое,  (стекло) №2
                    Сок фруктовый, 0,2, №3
                    </td>
                </tr>
                <tr>
                    <td><b>1-2года</b></td>
                    <td>Набор №14<br> 
                    Пюре фруктовое,  (стекло) №5
                    Сок фруктовый, 0,2, №6
                    Пюре овощное (стекло), №6
                    </td>
                    <td>Набор №15<br>
                    Молоко детское, 0,2, №9
                    Пюре фруктовое,  (стекло) №7
                    </td>
                    <td>Набор №16<br>
                    Пюре овощное, 0,125, №7
                    Пюре мясное, 80, (стекло) №6
                    Сок фруктовый, 0,2, №1
                    </td>
                </tr>
                <tr>
                    <td><b>2-3года</b></td>
                    <td>Набор №17<br> 
                    Молоко детское, 0,2, №8
                    Сок фруктовый, 0,2, №7<br>
                    Набор №20<br>
                    Сок фруктовый, 0,2, №15
                    </td>
                    <td>Набор №18<br>
                    Сок фруктовый, 0,2, №6
                    Пюре фруктовое,  (стекло) №7
                    </td>
                    <td>Набор №19<br>
                    Пюре овощное (стекло), №7
                    Пюре мясное, 80, (стекло) №4
                    Пюре фруктовое,  (стекло) №1
                    </td>
                </tr>
                <tr>
                    <td><b>Беремен<wbr>ные женщины</b></td>
                    <td>Набор №21<br>
                    Молоко, 1000, №1
                    Сок фруктовый, 500, № 2
                    Сок фруктовый, 0,2, №2
                    </td>
                    <td>Набор №22<br>
                    Молоко, 1000, №2
                    Пюре фруктовое,  (стекло) №1
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Кормящие матери</b></td>
                    <td>Набор № 23<br>
                    Молоко, 1000, № 4
                    Сок фруктовый, 500, №4
                    Сок фруктовый, 0,2, №2
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
';
    }
}
