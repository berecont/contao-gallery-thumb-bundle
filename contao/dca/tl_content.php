<?php

declare(strict_types=1);

$GLOBALS['TL_DCA']['tl_content']['palettes']['gallerythumb'] =
    '{type_legend},type,headline;'
  . '{source_legend},multiSRC,useHomeDir,sortBy,metaIgnore;'
  . '{image_legend},size,fullsize,galleryVersion;'
  . '{template_legend:hide},customTpl;'
  . '{protected_legend:hide},protected;'
  . '{expert_legend:hide},cssID;' 
  . '{invisible_legend:hide},invisible,start,stop'
;

$GLOBALS['TL_DCA']['tl_content']['fields']['fullsize']['eval']['tl_class'] = 'w50 m12';
$GLOBALS['TL_DCA']['tl_content']['fields']['multiSRC']['eval']['isGallery'] = true;
$GLOBALS['TL_DCA']['tl_content']['fields']['multiSRC']['eval']['isSortable'] = true;

$GLOBALS['TL_DCA']['tl_content']['fields']['galleryVersion'] = [
    'inputType' => 'radio',
    'exclude' => true,
    'options' => [
        'versiona',
        'versionb',
        'versionc',
        'versiond',
        'versione',
        'versionf',
        'versiong',
        'versionh',
        'versioni',
        'versionj',
        'versionk',
        'versionl'
    ],
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['galleryVersion'],
    'eval' => [
        'tl_class' => 'clr widgetGalleryVersion',
        'multiple' => false,
        'mandatory' => true,
    ],
    'sql' => "text NULL",
];