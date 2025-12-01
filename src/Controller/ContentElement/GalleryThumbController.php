<?php

declare(strict_types=1);

namespace Berecont\ContaoGalleryThumbBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\Template;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Contao\StringUtil;

#[AsContentElement(
    type: 'gallerythumb',
    category: 'media',
    template: 'content_element/gallerythumb'
)]
final class GalleryThumbController extends AbstractContentElementController
{

    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {

        return $template->getResponse();
    }
}
