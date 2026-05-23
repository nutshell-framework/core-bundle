<?php
declare(strict_types=1);

/*
 * This file is part of Contao Nutshell Framework.
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

// add <div> to headline options
$GLOBALS['TL_DCA']['tl_content']['fields']['headline']['options'][] = 'div';

// Dachzeile (supline) above the headline
PaletteManipulator::create()
    ->addField('supline', 'type')
    ->applyToPalette('headline', 'tl_content')
    ->applyToPalette('text', 'tl_content')
;

$GLOBALS['TL_DCA']['tl_content']['fields']['supline'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['supline'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => ['maxlength' => 200, 'basicEntities' => true, 'tl_class' => 'w50'],
    'sql'       => "varchar(255) NOT NULL default ''",
];