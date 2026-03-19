<?php

namespace OSVSalesDiscount\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\ContentBuilder\Contracts\ContentWidgetRepositoryContract;

class OSVSalesDiscountServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        pluginApp(ContentWidgetRepositoryContract::class)
            ->registerWidget(
                'OSVSalesDiscount\\Widgets\\DiscountBannerWidget'
            );
    }
}
