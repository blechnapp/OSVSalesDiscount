<?php

namespace OSVSalesDiscount\Widgets;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\WidgetTypes;

class DiscountBannerWidget extends BaseWidget
{
    protected $template = "OSVSalesDiscount::Widgets.DiscountBannerWidget";

    public function getData()
    {
        return WidgetDataFactory::make("OSVSalesDiscount::DiscountBannerWidget")
            ->withLabel("OSV Rabatt-Banner")
            ->withPreviewImageUrl("/images/discount-banner.svg")
            ->withType(WidgetTypes::ITEM)
            ->withCategory(WidgetCategories::ITEM)
            ->withPosition(500)
            ->toArray();
    }

    public function getSettings()
    {
        $settingsFactory = pluginApp(WidgetSettingsFactory::class);
        $settingsFactory->createCustomClass();
        return $settingsFactory->toArray();
    }
}
