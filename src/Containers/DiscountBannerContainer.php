<?php

namespace OSVSalesDiscount\Containers;

use Plenty\Plugin\Templates\Twig;

class DiscountBannerContainer
{
    public function call(Twig $twig): string
    {
        return $twig->render("OSVSalesDiscount::Containers.DiscountBanner");
    }
}
