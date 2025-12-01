<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Gallery Thumb extension.
 *
 * (c) Bernhard Renner beRecont
 *
 * @license MIT
 */

namespace Berecont\ContaoGalleryThumbBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Berecont\ContaoGalleryThumbBundle\BerecontContaoGalleryThumbBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(BerecontContaoGalleryThumbBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
