<?php

declare(strict_types=1);

namespace Berecont\ContaoGalleryThumbBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\ImagesController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(
    type: 'gallerythumb',
    category: 'media',
    template: 'content_element/gallerythumb'
)]
final class GalleryThumbController extends ImagesController
{
    protected function getResponse(
        FragmentTemplate $template,
        ContentModel $model,
        Request $request
    ): Response {
        // Rohwert aus tl_content (z.B. "versiona", "versionb", ...)
        $template->galleryVersion = $model->galleryVersion;

        // OPTIONAL: Mapping auf Zahlen, falls du das brauchst
        $versionMap = [
            'versiona' => 1,
            'versionb' => 2,
            'versionc' => 2,
            'versiond' => 3,
            'versione' => 3,
            'versionf' => 3,
            'versiong' => 3,
            'versionh' => 4,
            'versioni' => 4,
            'versionj' => 5,
            'versionk' => 5,
            'versionl' => 5,
        ];

        $template->galleryVersionNumber = $versionMap[$model->galleryVersion] ?? 0;

        // Restliche Logik (Bilder/Galerie) übernimmt der Core-Controller
        return parent::getResponse($template, $model, $request);
    }
}