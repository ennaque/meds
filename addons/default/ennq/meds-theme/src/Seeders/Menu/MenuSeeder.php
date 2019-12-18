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
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\DocumentSeeder5173;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\MainSeeder29;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\MappingSeeder2427;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\OldSubdivision1720;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\PhysterSeeder3238;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\PayrollSeeder4042;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\FaqSeeder4346;
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
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder30;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder31;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder32;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder33;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder34;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder35;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder36;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder37;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder38;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder4;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder40;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder41;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder42;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder43;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder44;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder45;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder46;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder5;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder6;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder7;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder8;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder9;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder51;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder52;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder53;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder54;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder55;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder56;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder57;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder58;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder59;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder60;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder61;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder62;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder63;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder64;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder65;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder66;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder67;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder68;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder69;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder70;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder71;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder72;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder73;



class MenuSeeder extends Seeder
{

    public const SLUG_MAIN = '/main';
    public const SLUG_YOUNG_SUBDIVISION = '/young-subdivision';
    public const SLUG_OLD_SUBDIVISION = '/old-subdivision';
    public const SLUG_DISPENSARY = '/dispensary';
    public const SLUG_MAPPING = '/mapping';
    public const SLUG_CDIAGL = '/cdiagl';
    public const SLUG_PHYSTER = '/physter';
    public const SLUG_PAYROLL = '/payroll';
    public const SLUG_FAQ = '/faq';
    public const SLUG_DOCS = '/docs';

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
        $this->runSection($repository, $newMenu, PayrollSeeder4042::class, $this->getPayrollSection());
        $this->runSection($repository, $newMenu, FaqSeeder4346::class, $this->getFaqSection());
        $this->runSection($repository, $newMenu, DocumentSeeder5173::class, $this->getPhysterSection());

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
            Seeder30::class,
            Seeder31::class,
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

    private function getPayrollSection(): array
    {
        return [
            Seeder40::class,
            Seeder41::class,
            Seeder42::class,
        ];
    }

    private function getFaqSection(): array
    {
        return [
            Seeder43::class,
            Seeder44::class,
            Seeder45::class,
            Seeder46::class,
        ];
    }

    private function getDocumentSection(): array
    {
        return [
            Seeder51::class,
//            Seeder52::class,
//            Seeder53::class,
//            Seeder54::class,
//            Seeder55::class,
            Seeder56::class,
            Seeder57::class,
//            Seeder58::class,
//            Seeder59::class,
//            Seeder60::class,
//            Seeder61::class,
//            Seeder62::class,
//            Seeder63::class,
//            Seeder64::class,
//            Seeder65::class,
//            Seeder66::class,
//            Seeder67::class,
//            Seeder68::class,
//            Seeder69::class,
//            Seeder70::class,
//            Seeder71::class,
//            Seeder72::class,
//            Seeder73::class,

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
