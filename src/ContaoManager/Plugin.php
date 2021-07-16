<?php

namespace ContaoNutshell\Core\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use ContaoNutshell\Framework\ContaoManagerCore;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoManagerCore::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}