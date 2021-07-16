<?php

namespace ContaoNutshell\Framework\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use ContaoNutshell\Framework\ContaoNutshellFramework;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoNutshellFramework::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}