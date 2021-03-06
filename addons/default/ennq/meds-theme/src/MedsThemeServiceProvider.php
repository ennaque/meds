<?php namespace Ennq\MedsTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Entry\Event\EntryWasUpdated;
use Ennq\MedsTheme\Command\ImageMigrationCommand;
use Ennq\MedsTheme\Command\CacheClearCommand;
use Ennq\MedsTheme\Listeners\ContentUpdateListener;
use Illuminate\Routing\Router;

class MedsThemeServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [
        ImageMigrationCommand::class,
        CacheClearCommand::class
    ];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'search' => [
            'uses' => 'Ennq\MedsTheme\Http\Controller\Front\SearchController@index',
            'verb' => 'get',
            'as' => 'search'
        ],
        'async-search' => [
            'uses' => 'Ennq\MedsTheme\Http\Controller\Front\SearchController@asyncSearch',
            'verb' => 'get',
            'as' => 'async-search'
        ]
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Ennq\MedsTheme\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Ennq\MedsTheme\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        EntryWasUpdated::class => [
            ContentUpdateListener::class
        ]
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Ennq\MedsTheme\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        'Ennq\MedsTheme\Lib\SearchResultFormatterInterface' => 'Ennq\MedsTheme\Service\SearchResultFormatter',
        'Ennq\MedsTheme\Lib\SearchInterface' => 'Ennq\MedsTheme\Service\SearchEngine',
        'Ennq\MedsTheme\Lib\MedsPostRepositoryInterface' => 'Ennq\MedsTheme\Service\MedsPostRepository',
        'Ennq\MedsTheme\Lib\MedsPageRepositoryInterface' => 'Ennq\MedsTheme\Service\MedsPageRepository',
        'Psr\SimpleCache\CacheInterface' => 'Ennq\MedsTheme\Service\Cache'
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
