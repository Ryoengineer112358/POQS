<?php
// @formatter:off

namespace PHPSTORM_META {
    /**
     * PhpStorm Meta file, to provide autocomplete information for PhpStorm
     *
     * @author Barry vd. Heuvel <barryvdh@gmail.com>
     * @see https://github.com/barryvdh/laravel-ide-helper
     */
    override(
        new \Illuminate\Contracts\Container\Container(),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Illuminate\Container\Container::makeWith(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Illuminate\Contracts\Container\Container::get(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Illuminate\Contracts\Container\Container::make(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Illuminate\Contracts\Container\Container::makeWith(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \App::get(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \App::make(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \App::makeWith(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \app(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \resolve(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );
    override(
        \Psr\Container\ContainerInterface::get(0),
        map([
            '' => '@',
            'Illuminate\Auth\Console\ClearResetsCommand' =>
                \Illuminate\Auth\Console\ClearResetsCommand::class,
            'Illuminate\Auth\Middleware\RequirePassword' =>
                \Illuminate\Auth\Middleware\RequirePassword::class,
            'Illuminate\Broadcasting\BroadcastManager' =>
                \Illuminate\Broadcasting\BroadcastManager::class,
            'Illuminate\Bus\BatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\DatabaseBatchRepository' =>
                \Illuminate\Bus\DatabaseBatchRepository::class,
            'Illuminate\Bus\Dispatcher' => \Illuminate\Bus\Dispatcher::class,
            'Illuminate\Cache\Console\CacheTableCommand' =>
                \Illuminate\Cache\Console\CacheTableCommand::class,
            'Illuminate\Cache\Console\ClearCommand' =>
                \Illuminate\Cache\Console\ClearCommand::class,
            'Illuminate\Cache\Console\ForgetCommand' =>
                \Illuminate\Cache\Console\ForgetCommand::class,
            'Illuminate\Cache\RateLimiter' =>
                \Illuminate\Cache\RateLimiter::class,
            'Illuminate\Console\Scheduling\Schedule' =>
                \Illuminate\Console\Scheduling\Schedule::class,
            'Illuminate\Console\Scheduling\ScheduleClearCacheCommand' =>
                \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class,
            'Illuminate\Console\Scheduling\ScheduleFinishCommand' =>
                \Illuminate\Console\Scheduling\ScheduleFinishCommand::class,
            'Illuminate\Console\Scheduling\ScheduleListCommand' =>
                \Illuminate\Console\Scheduling\ScheduleListCommand::class,
            'Illuminate\Console\Scheduling\ScheduleRunCommand' =>
                \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
            'Illuminate\Console\Scheduling\ScheduleTestCommand' =>
                \Illuminate\Console\Scheduling\ScheduleTestCommand::class,
            'Illuminate\Console\Scheduling\ScheduleWorkCommand' =>
                \Illuminate\Console\Scheduling\ScheduleWorkCommand::class,
            'Illuminate\Contracts\Auth\Access\Gate' =>
                \Illuminate\Auth\Access\Gate::class,
            'Illuminate\Contracts\Broadcasting\Broadcaster' =>
                \Illuminate\Broadcasting\Broadcasters\LogBroadcaster::class,
            'Illuminate\Contracts\Console\Kernel' => \App\Console\Kernel::class,
            'Illuminate\Contracts\Debug\ExceptionHandler' =>
                \NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler::class,
            'Illuminate\Contracts\Foundation\ExceptionRenderer' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionExceptionRenderer::class,
            'Illuminate\Contracts\Foundation\MaintenanceMode' =>
                \Illuminate\Foundation\FileBasedMaintenanceMode::class,
            'Illuminate\Contracts\Http\Kernel' => \App\Http\Kernel::class,
            'Illuminate\Contracts\Pipeline\Hub' =>
                \Illuminate\Pipeline\Hub::class,
            'Illuminate\Contracts\Queue\EntityResolver' =>
                \Illuminate\Database\Eloquent\QueueEntityResolver::class,
            'Illuminate\Contracts\Routing\ResponseFactory' =>
                \Illuminate\Routing\ResponseFactory::class,
            'Illuminate\Contracts\Validation\UncompromisedVerifier' =>
                \Illuminate\Validation\NotPwnedVerifier::class,
            'Illuminate\Database\Console\DbCommand' =>
                \Illuminate\Database\Console\DbCommand::class,
            'Illuminate\Database\Console\DumpCommand' =>
                \Illuminate\Database\Console\DumpCommand::class,
            'Illuminate\Database\Console\Factories\FactoryMakeCommand' =>
                \Illuminate\Database\Console\Factories\FactoryMakeCommand::class,
            'Illuminate\Database\Console\Migrations\FreshCommand' =>
                \Illuminate\Database\Console\Migrations\FreshCommand::class,
            'Illuminate\Database\Console\Migrations\InstallCommand' =>
                \Illuminate\Database\Console\Migrations\InstallCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            'Illuminate\Database\Console\Migrations\MigrateMakeCommand' =>
                \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            'Illuminate\Database\Console\Migrations\RefreshCommand' =>
                \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            'Illuminate\Database\Console\Migrations\ResetCommand' =>
                \Illuminate\Database\Console\Migrations\ResetCommand::class,
            'Illuminate\Database\Console\Migrations\RollbackCommand' =>
                \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            'Illuminate\Database\Console\Migrations\StatusCommand' =>
                \Illuminate\Database\Console\Migrations\StatusCommand::class,
            'Illuminate\Database\Console\MonitorCommand' =>
                \Illuminate\Database\Console\MonitorCommand::class,
            'Illuminate\Database\Console\PruneCommand' =>
                \Illuminate\Database\Console\PruneCommand::class,
            'Illuminate\Database\Console\Seeds\SeedCommand' =>
                \Illuminate\Database\Console\Seeds\SeedCommand::class,
            'Illuminate\Database\Console\Seeds\SeederMakeCommand' =>
                \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            'Illuminate\Database\Console\ShowCommand' =>
                \Illuminate\Database\Console\ShowCommand::class,
            'Illuminate\Database\Console\TableCommand' =>
                \Illuminate\Database\Console\TableCommand::class,
            'Illuminate\Database\Console\WipeCommand' =>
                \Illuminate\Database\Console\WipeCommand::class,
            'Illuminate\Foundation\Console\AboutCommand' =>
                \Illuminate\Foundation\Console\AboutCommand::class,
            'Illuminate\Foundation\Console\CastMakeCommand' =>
                \Illuminate\Foundation\Console\CastMakeCommand::class,
            'Illuminate\Foundation\Console\ChannelMakeCommand' =>
                \Illuminate\Foundation\Console\ChannelMakeCommand::class,
            'Illuminate\Foundation\Console\ClearCompiledCommand' =>
                \Illuminate\Foundation\Console\ClearCompiledCommand::class,
            'Illuminate\Foundation\Console\ComponentMakeCommand' =>
                \Illuminate\Foundation\Console\ComponentMakeCommand::class,
            'Illuminate\Foundation\Console\ConfigCacheCommand' =>
                \Illuminate\Foundation\Console\ConfigCacheCommand::class,
            'Illuminate\Foundation\Console\ConfigClearCommand' =>
                \Illuminate\Foundation\Console\ConfigClearCommand::class,
            'Illuminate\Foundation\Console\ConsoleMakeCommand' =>
                \Illuminate\Foundation\Console\ConsoleMakeCommand::class,
            'Illuminate\Foundation\Console\DocsCommand' =>
                \Illuminate\Foundation\Console\DocsCommand::class,
            'Illuminate\Foundation\Console\DownCommand' =>
                \Illuminate\Foundation\Console\DownCommand::class,
            'Illuminate\Foundation\Console\EnvironmentCommand' =>
                \Illuminate\Foundation\Console\EnvironmentCommand::class,
            'Illuminate\Foundation\Console\EventCacheCommand' =>
                \Illuminate\Foundation\Console\EventCacheCommand::class,
            'Illuminate\Foundation\Console\EventClearCommand' =>
                \Illuminate\Foundation\Console\EventClearCommand::class,
            'Illuminate\Foundation\Console\EventGenerateCommand' =>
                \Illuminate\Foundation\Console\EventGenerateCommand::class,
            'Illuminate\Foundation\Console\EventListCommand' =>
                \Illuminate\Foundation\Console\EventListCommand::class,
            'Illuminate\Foundation\Console\EventMakeCommand' =>
                \Illuminate\Foundation\Console\EventMakeCommand::class,
            'Illuminate\Foundation\Console\ExceptionMakeCommand' =>
                \Illuminate\Foundation\Console\ExceptionMakeCommand::class,
            'Illuminate\Foundation\Console\JobMakeCommand' =>
                \Illuminate\Foundation\Console\JobMakeCommand::class,
            'Illuminate\Foundation\Console\KeyGenerateCommand' =>
                \Illuminate\Foundation\Console\KeyGenerateCommand::class,
            'Illuminate\Foundation\Console\ListenerMakeCommand' =>
                \Illuminate\Foundation\Console\ListenerMakeCommand::class,
            'Illuminate\Foundation\Console\MailMakeCommand' =>
                \Illuminate\Foundation\Console\MailMakeCommand::class,
            'Illuminate\Foundation\Console\ModelMakeCommand' =>
                \Illuminate\Foundation\Console\ModelMakeCommand::class,
            'Illuminate\Foundation\Console\NotificationMakeCommand' =>
                \Illuminate\Foundation\Console\NotificationMakeCommand::class,
            'Illuminate\Foundation\Console\ObserverMakeCommand' =>
                \Illuminate\Foundation\Console\ObserverMakeCommand::class,
            'Illuminate\Foundation\Console\OptimizeClearCommand' =>
                \Illuminate\Foundation\Console\OptimizeClearCommand::class,
            'Illuminate\Foundation\Console\OptimizeCommand' =>
                \Illuminate\Foundation\Console\OptimizeCommand::class,
            'Illuminate\Foundation\Console\PackageDiscoverCommand' =>
                \Illuminate\Foundation\Console\PackageDiscoverCommand::class,
            'Illuminate\Foundation\Console\PolicyMakeCommand' =>
                \Illuminate\Foundation\Console\PolicyMakeCommand::class,
            'Illuminate\Foundation\Console\ProviderMakeCommand' =>
                \Illuminate\Foundation\Console\ProviderMakeCommand::class,
            'Illuminate\Foundation\Console\RequestMakeCommand' =>
                \Illuminate\Foundation\Console\RequestMakeCommand::class,
            'Illuminate\Foundation\Console\ResourceMakeCommand' =>
                \Illuminate\Foundation\Console\ResourceMakeCommand::class,
            'Illuminate\Foundation\Console\RouteCacheCommand' =>
                \Illuminate\Foundation\Console\RouteCacheCommand::class,
            'Illuminate\Foundation\Console\RouteClearCommand' =>
                \Illuminate\Foundation\Console\RouteClearCommand::class,
            'Illuminate\Foundation\Console\RouteListCommand' =>
                \Illuminate\Foundation\Console\RouteListCommand::class,
            'Illuminate\Foundation\Console\RuleMakeCommand' =>
                \Illuminate\Foundation\Console\RuleMakeCommand::class,
            'Illuminate\Foundation\Console\ScopeMakeCommand' =>
                \Illuminate\Foundation\Console\ScopeMakeCommand::class,
            'Illuminate\Foundation\Console\ServeCommand' =>
                \Illuminate\Foundation\Console\ServeCommand::class,
            'Illuminate\Foundation\Console\ShowModelCommand' =>
                \Illuminate\Foundation\Console\ShowModelCommand::class,
            'Illuminate\Foundation\Console\StorageLinkCommand' =>
                \Illuminate\Foundation\Console\StorageLinkCommand::class,
            'Illuminate\Foundation\Console\StubPublishCommand' =>
                \Illuminate\Foundation\Console\StubPublishCommand::class,
            'Illuminate\Foundation\Console\TestMakeCommand' =>
                \Illuminate\Foundation\Console\TestMakeCommand::class,
            'Illuminate\Foundation\Console\UpCommand' =>
                \Illuminate\Foundation\Console\UpCommand::class,
            'Illuminate\Foundation\Console\VendorPublishCommand' =>
                \Illuminate\Foundation\Console\VendorPublishCommand::class,
            'Illuminate\Foundation\Console\ViewCacheCommand' =>
                \Illuminate\Foundation\Console\ViewCacheCommand::class,
            'Illuminate\Foundation\Console\ViewClearCommand' =>
                \Illuminate\Foundation\Console\ViewClearCommand::class,
            'Illuminate\Foundation\MaintenanceModeManager' =>
                \Illuminate\Foundation\MaintenanceModeManager::class,
            'Illuminate\Foundation\Mix' => \Illuminate\Foundation\Mix::class,
            'Illuminate\Foundation\PackageManifest' =>
                \Illuminate\Foundation\PackageManifest::class,
            'Illuminate\Foundation\Vite' => \Illuminate\Foundation\Vite::class,
            'Illuminate\Mail\Markdown' => \Illuminate\Mail\Markdown::class,
            'Illuminate\Notifications\ChannelManager' =>
                \Illuminate\Notifications\ChannelManager::class,
            'Illuminate\Notifications\Console\NotificationTableCommand' =>
                \Illuminate\Notifications\Console\NotificationTableCommand::class,
            'Illuminate\Queue\Console\BatchesTableCommand' =>
                \Illuminate\Queue\Console\BatchesTableCommand::class,
            'Illuminate\Queue\Console\ClearCommand' =>
                \Illuminate\Queue\Console\ClearCommand::class,
            'Illuminate\Queue\Console\FailedTableCommand' =>
                \Illuminate\Queue\Console\FailedTableCommand::class,
            'Illuminate\Queue\Console\FlushFailedCommand' =>
                \Illuminate\Queue\Console\FlushFailedCommand::class,
            'Illuminate\Queue\Console\ForgetFailedCommand' =>
                \Illuminate\Queue\Console\ForgetFailedCommand::class,
            'Illuminate\Queue\Console\ListFailedCommand' =>
                \Illuminate\Queue\Console\ListFailedCommand::class,
            'Illuminate\Queue\Console\ListenCommand' =>
                \Illuminate\Queue\Console\ListenCommand::class,
            'Illuminate\Queue\Console\MonitorCommand' =>
                \Illuminate\Queue\Console\MonitorCommand::class,
            'Illuminate\Queue\Console\PruneBatchesCommand' =>
                \Illuminate\Queue\Console\PruneBatchesCommand::class,
            'Illuminate\Queue\Console\PruneFailedJobsCommand' =>
                \Illuminate\Queue\Console\PruneFailedJobsCommand::class,
            'Illuminate\Queue\Console\RestartCommand' =>
                \Illuminate\Queue\Console\RestartCommand::class,
            'Illuminate\Queue\Console\RetryBatchCommand' =>
                \Illuminate\Queue\Console\RetryBatchCommand::class,
            'Illuminate\Queue\Console\RetryCommand' =>
                \Illuminate\Queue\Console\RetryCommand::class,
            'Illuminate\Queue\Console\TableCommand' =>
                \Illuminate\Queue\Console\TableCommand::class,
            'Illuminate\Queue\Console\WorkCommand' =>
                \Illuminate\Queue\Console\WorkCommand::class,
            'Illuminate\Routing\Console\ControllerMakeCommand' =>
                \Illuminate\Routing\Console\ControllerMakeCommand::class,
            'Illuminate\Routing\Console\MiddlewareMakeCommand' =>
                \Illuminate\Routing\Console\MiddlewareMakeCommand::class,
            'Illuminate\Routing\Contracts\ControllerDispatcher' =>
                \Illuminate\Routing\ControllerDispatcher::class,
            'Illuminate\Session\Console\SessionTableCommand' =>
                \Illuminate\Session\Console\SessionTableCommand::class,
            'Illuminate\Session\Middleware\StartSession' =>
                \Illuminate\Session\Middleware\StartSession::class,
            'Illuminate\Testing\ParallelTesting' =>
                \Illuminate\Testing\ParallelTesting::class,
            'NunoMaduro\Collision\Contracts\Provider' =>
                \NunoMaduro\Collision\Provider::class,
            'Spatie\FlareClient\Flare' => \Spatie\FlareClient\Flare::class,
            'Spatie\Ignition\Config\IgnitionConfig' =>
                \Spatie\Ignition\Config\IgnitionConfig::class,
            'Spatie\Ignition\Contracts\ConfigManager' =>
                \Spatie\Ignition\Config\FileConfigManager::class,
            'Spatie\Ignition\Contracts\SolutionProviderRepository' =>
                \Spatie\LaravelIgnition\Solutions\SolutionProviders\SolutionProviderRepository::class,
            'Spatie\Ignition\Ignition' => \Spatie\Ignition\Ignition::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
            'Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler' =>
                \Spatie\LaravelIgnition\Recorders\DumpRecorder\MultiDumpHandler::class,
            'Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder' =>
                \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
            'Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder' =>
                \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
            'Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder' =>
                \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
            'Spatie\LaravelIgnition\Support\SentReports' =>
                \Spatie\LaravelIgnition\Support\SentReports::class,
            'Whoops\Handler\HandlerInterface' =>
                \Spatie\LaravelIgnition\Renderers\IgnitionWhoopsHandler::class,
            'auth' => \Illuminate\Auth\AuthManager::class,
            'auth.driver' => \Illuminate\Auth\SessionGuard::class,
            'auth.password' =>
                \Illuminate\Auth\Passwords\PasswordBrokerManager::class,
            'auth.password.broker' =>
                \Illuminate\Auth\Passwords\PasswordBroker::class,
            'blade.compiler' => \Illuminate\View\Compilers\BladeCompiler::class,
            'cache' => \Illuminate\Cache\CacheManager::class,
            'cache.store' => \Illuminate\Cache\Repository::class,
            'command.ide-helper.eloquent' =>
                \Barryvdh\LaravelIdeHelper\Console\EloquentCommand::class,
            'command.ide-helper.generate' =>
                \Barryvdh\LaravelIdeHelper\Console\GeneratorCommand::class,
            'command.ide-helper.meta' =>
                \Barryvdh\LaravelIdeHelper\Console\MetaCommand::class,
            'command.ide-helper.models' =>
                \Barryvdh\LaravelIdeHelper\Console\ModelsCommand::class,
            'command.tinker' => \Laravel\Tinker\Console\TinkerCommand::class,
            'composer' => \Illuminate\Support\Composer::class,
            'cookie' => \Illuminate\Cookie\CookieJar::class,
            'db' => \Illuminate\Database\DatabaseManager::class,
            'db.connection' => \Illuminate\Database\MySqlConnection::class,
            'db.factory' =>
                \Illuminate\Database\Connectors\ConnectionFactory::class,
            'db.schema' => \Illuminate\Database\Schema\MySqlBuilder::class,
            'db.transactions' =>
                \Illuminate\Database\DatabaseTransactionsManager::class,
            'encrypter' => \Illuminate\Encryption\Encrypter::class,
            'events' => \Illuminate\Events\Dispatcher::class,
            'files' => \Illuminate\Filesystem\Filesystem::class,
            'filesystem' => \Illuminate\Filesystem\FilesystemManager::class,
            'filesystem.cloud' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'filesystem.disk' =>
                \Illuminate\Filesystem\FilesystemAdapter::class,
            'flare.logger' => \Monolog\Logger::class,
            'hash' => \Illuminate\Hashing\HashManager::class,
            'hash.driver' => \Illuminate\Hashing\BcryptHasher::class,
            'log' => \Illuminate\Log\LogManager::class,
            'mail.manager' => \Illuminate\Mail\MailManager::class,
            'mailer' => \Illuminate\Mail\Mailer::class,
            'memcached.connector' =>
                \Illuminate\Cache\MemcachedConnector::class,
            'migration.creator' =>
                \Illuminate\Database\Migrations\MigrationCreator::class,
            'migration.repository' =>
                \Illuminate\Database\Migrations\DatabaseMigrationRepository::class,
            'migrator' => \Illuminate\Database\Migrations\Migrator::class,
            'queue' => \Illuminate\Queue\QueueManager::class,
            'queue.connection' => \Illuminate\Queue\SyncQueue::class,
            'queue.failer' =>
                \Illuminate\Queue\Failed\DatabaseUuidFailedJobProvider::class,
            'queue.listener' => \Illuminate\Queue\Listener::class,
            'queue.worker' => \Illuminate\Queue\Worker::class,
            'redirect' => \Illuminate\Routing\Redirector::class,
            'redis' => \Illuminate\Redis\RedisManager::class,
            'router' => \Illuminate\Routing\Router::class,
            'session' => \Illuminate\Session\SessionManager::class,
            'session.store' => \Illuminate\Session\Store::class,
            'translation.loader' => \Illuminate\Translation\FileLoader::class,
            'translator' => \Illuminate\Translation\Translator::class,
            'url' => \Illuminate\Routing\UrlGenerator::class,
            'validation.presence' =>
                \Illuminate\Validation\DatabasePresenceVerifier::class,
            'view' => \Illuminate\View\Factory::class,
            'view.engine.resolver' =>
                \Illuminate\View\Engines\EngineResolver::class,
            'view.finder' => \Illuminate\View\FileViewFinder::class,
        ])
    );

    override(\Illuminate\Support\Arr::add(0), type(0));
    override(\Illuminate\Support\Arr::except(0), type(0));
    override(\Illuminate\Support\Arr::first(0), elementType(0));
    override(\Illuminate\Support\Arr::last(0), elementType(0));
    override(\Illuminate\Support\Arr::get(0), elementType(0));
    override(\Illuminate\Support\Arr::only(0), type(0));
    override(\Illuminate\Support\Arr::prepend(0), type(0));
    override(\Illuminate\Support\Arr::pull(0), elementType(0));
    override(\Illuminate\Support\Arr::set(0), type(0));
    override(\Illuminate\Support\Arr::shuffle(0), type(0));
    override(\Illuminate\Support\Arr::sort(0), type(0));
    override(\Illuminate\Support\Arr::sortRecursive(0), type(0));
    override(\Illuminate\Support\Arr::where(0), type(0));
    override(\array_add(0), type(0));
    override(\array_except(0), type(0));
    override(\array_first(0), elementType(0));
    override(\array_last(0), elementType(0));
    override(\array_get(0), elementType(0));
    override(\array_only(0), type(0));
    override(\array_prepend(0), type(0));
    override(\array_pull(0), elementType(0));
    override(\array_set(0), type(0));
    override(\array_sort(0), type(0));
    override(\array_sort_recursive(0), type(0));
    override(\array_where(0), type(0));
    override(\head(0), elementType(0));
    override(\last(0), elementType(0));
    override(\with(0), type(0));
    override(\tap(0), type(0));
    override(\optional(0), type(0));
}
