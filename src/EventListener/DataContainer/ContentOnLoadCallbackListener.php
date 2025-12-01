<?php

declare(strict_types=1);

namespace Berecont\ContaoGalleryThumbBundle\EventListener\DataContainer;

use Contao\ContentModel;
use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\DataContainer;
use Contao\Input;

#[AsCallback(target: 'config.onload', table: 'tl_content')]
class ContentOnLoadCallbackListener
{
    public function __invoke(?DataContainer $dc = null): void
    {
        // Defensive: kein DataContainer, dann nichts tun
        if (null === $dc) {
            return;
        }

        // ID ermitteln: entweder aus dem DC oder aus GET-Parameter
        $id = (int) ($dc->id ?? Input::get('id'));

        if ($id <= 0) {
            return;
        }

        // Datensatz laden
        if (null === ($model = ContentModel::findByPk($id))) {
            return;
        }

        // Nur für unser eigenes Inhaltselement
        if ($model->type !== 'gallerythumb') {
            return;
        }

        // Backend-CSS einbinden (Pfad relativ zu /public)
        $GLOBALS['TL_CSS'][] = 'bundles/berecontcontaogallerythumb/css/backend.css|static';
    }
}