<?php


namespace  Ennq\MedsTheme\Seeders\BaseSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;


abstract class BaseSeeder extends Seeder
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

    abstract public static function getTitle(): string;
    abstract protected function getContent(): string;
    abstract public static function getSlug(): string;
    abstract public static function getParentSlug(): ?string;

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
    public function run(): void
    {
        $type = $this->types->findBySlug('default');

        $dataArray = [
            'ru'           => [
                'title' => static::getTitle(),
            ],
            'slug'         => static::getSlug(),
            'entry'        => $type->getEntryModel()->create(
                [
                    'ru' => [
                        'content' => $this->getContent(),
                    ]
                ]
            ),
            'type'         => $type,
            'enabled'      => true,
            'theme_layout' => 'theme::layouts/default.twig',
        ];

        if (static::getParentSlug() !== null) {
            $dataArray['parent_id'] = $this->pages->findByPath(static::getParentSlug())->getId();
        }

        $this->pages->create($dataArray)->allowedRoles()->sync([]);
    }
}
