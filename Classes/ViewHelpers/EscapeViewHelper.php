<?php
namespace SoerenKroell\SkBootstrapSlider\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Soeren Kroell <hallo@soerenkroell.com>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class EscapeViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Escapes oder Decodes special characters with their escaped counterparts as needed.
     *
     * @param string $value
     * @param string $type The type, one of html, entities, url
     * @param string $encoding
     * @return string the altered string.
     */
    public function render($value = NULL, $type = 'html', $encoding = NULL) {
 
        if (empty($value)) {
            $value = $this->renderChildren();
        }
 
        switch ($type) {
            case 'html':
                return htmlspecialchars_decode($value);
                break;
			case 'string';
				return ''.$value.'';
            default:
                //return parent::render($value, $type, $encoding);
                break;
        }
    }
    
}

?>


