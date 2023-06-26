<?php

namespace Astrogoat\Ipqs;

use Astrogoat\Ipqs\Settings\IpqsSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class IpqsServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('ipqs')
            ->settings(IpqsSettings::class)
            ->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToEnd('ipqs::script');
            })
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->backendRoutes(__DIR__.'/../routes/backend.php')
            ->frontendRoutes(__DIR__.'/../routes/frontend.php');
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('ipqs')->hasConfigFile()->hasViews();
    }
}
