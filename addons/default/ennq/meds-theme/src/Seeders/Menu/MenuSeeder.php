<?php


namespace Ennq\MedsTheme\Seeders\Menu;


use Anomaly\NavigationModule\Link\Contract\LinkRepositoryInterface;
use Anomaly\NavigationModule\Menu\Contract\MenuRepositoryInterface;
use Anomaly\NavigationModule\Menu\MenuModel;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Anomaly\Streams\Platform\Entry\EntryRepository;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\UrlLinkTypeExtension\UrlLinkTypeModel;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\CdiaglSeeder2831;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\DispensarySeeder2122;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\MainSeeder29;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\MappingSeeder2427;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\OldSubdivision1720;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\PhysterSeeder3238;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\YoungSubdivisionSeeder1016;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder10;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder11;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder12;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder13;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder14;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder17;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder18;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder2;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder21;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder22;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder24;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder25;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder26;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder27;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder28;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder29;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder3;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder32;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder33;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder34;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder35;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder36;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder37;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder38;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder4;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder5;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder6;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder7;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder8;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder9;


class MenuSeeder extends Seeder
{

    public const SLUG_MAIN = '/main';
    public const SLUG_YOUNG_SUBDIVISION = '/young-subdivision';
    public const SLUG_OLD_SUBDIVISION = '/old-subdivision';
    public const SLUG_DISPENSARY = '/dispensary';
    public const SLUG_MAPPING = '/mapping';
    public const SLUG_CDIAGL = '/cdiagl';
    public const SLUG_PHYSTER = '/physter';

    /**
     * The link repository.
     *
     * @var LinkRepositoryInterface
     */
    protected $links;
    /**
     * The menu repository.
     *
     * @var MenuRepositoryInterface
     */
    protected $menus;
    /**
     * Create a new LinkSeeder instance.
     *
     * @param LinkRepositoryInterface $links
     * @param MenuRepositoryInterface $menus
     */
    public function __construct(LinkRepositoryInterface $links, MenuRepositoryInterface $menus)
    {
        parent::__construct();
        $this->links = $links;
        $this->menus = $menus;
    }
    /**
     * Run the seeder.
     */
    public function run()
    {
        $repository = new EntryRepository();
        $repository->setModel(new UrlLinkTypeModel());
        $repository->truncate();
        $newMenu = new MenuModel();
        $newMenu->slug = 'meds_menu';
        $newMenu->name = 'Главное меню';
        $newMenu->save();
        $this->links->truncate();

        $this->runSection($repository, $newMenu, MainSeeder29::class, $this->getMainSectionSeeders());
        $this->runSection($repository, $newMenu, YoungSubdivisionSeeder1016::class, $this->getYoungSubdivisionSection());
        $this->runSection($repository, $newMenu, OldSubdivision1720::class, $this->getOldSubdivisionSection());
        $this->runSection($repository, $newMenu, DispensarySeeder2122::class, $this->getDispensarySection());
        $this->runSection($repository, $newMenu, MappingSeeder2427::class, $this->getMappingSection());
        $this->runSection($repository, $newMenu, CdiaglSeeder2831::class, $this->getCdiaglSection());
        $this->runSection($repository, $newMenu, PhysterSeeder3238::class, $this->getPhysterSection());
    }

    private function runSection(
        EntryRepository $repository,
        MenuModel $menuModel,
        string $mainSectionSeederClassName,
        array $subSeeders
    ): void
    {
        $main = $repository->create(
            [
                'ru'  => [
                    'title' => $mainSectionSeederClassName::getTitle(),
                ],
                'url' => $mainSectionSeederClassName::getSlug(),
            ]
        );

        $mainLink = $this->links->create(
            [
                'menu'   => $menuModel,
                'target' => '_blank',
                'entry'  => $main,
                'type'   => 'anomaly.extension.url_link_type',
            ]
        );

        foreach ($subSeeders as $mainSectionSeeder) {
            $seederData = $repository->create(
                [
                    'ru'  => [
                        'title' => $mainSectionSeeder::getTitle(),
                    ],
                    'url' => $mainSectionSeeder::getParentSlug() . $mainSectionSeeder::getSlug(),
                ]
            );

            $this->createLink($menuModel, $seederData, $mainLink->getId());
        }
    }

    private function getMainSectionSeeders(): array
    {
        return [
            Seeder2::class,
            Seeder3::class,
            Seeder4::class,
            Seeder5::class,
            Seeder6::class,
            Seeder7::class,
            Seeder8::class,
            Seeder9::class,
        ];
    }

    private function getYoungSubdivisionSection(): array
    {
        return [
            Seeder10::class,
            Seeder11::class,
            Seeder12::class,
            Seeder13::class,
            Seeder14::class,
//            Seeder15::class,
//            Seeder16::class,
        ];
    }

    private function getOldSubdivisionSection(): array
    {
        return [
            Seeder17::class,
            Seeder18::class,
//            Seeder19::class,
//            Seeder20::class,
        ];
    }

    private function getDispensarySection(): array
    {
        return [
            Seeder21::class,
            Seeder22::class
        ];
    }

    private function getMappingSection(): array
    {
        return [
            Seeder24::class,
            Seeder25::class,
            Seeder26::class,
            Seeder27::class,
        ];
    }

    private function getCdiaglSection(): array
    {
        return [
            Seeder28::class,
            Seeder29::class,
//            Seeder30::class,
//            Seeder31::class,
        ];
    }

    private function getPhysterSection(): array
    {
        return [
            Seeder32::class,
            Seeder33::class,
            Seeder34::class,
            Seeder35::class,
            Seeder36::class,
            Seeder37::class,
            Seeder38::class,
        ];
    }

    private function createLink(MenuModel $menuModel, EloquentModel $entry, $parentLinkId): void
    {
        $this->links->create(
            [
                'menu'   => $menuModel,
                'entry'  => $entry,
                'type'   => 'anomaly.extension.url_link_type',
                'parent_id' => $parentLinkId
            ]
        );
    }
}
