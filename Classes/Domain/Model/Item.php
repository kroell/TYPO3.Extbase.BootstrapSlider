<?php
namespace SoerenKroell\SkBootstrapSlider\Domain\Model;


/***************************************************************
 *
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
 * Single Slider Item
 */
class Item extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * captionTitle
	 *
	 * @var string
	 */
	protected $captionTitle = '';

	/**
	 * captionText
	 *
	 * @var string
	 */
	protected $captionText = '';
	
	/**
	 * captionBullets
	 *
	 * @var string
	 */
	protected $captionBullets = '';

	/**
	 * link
	 *
	 * @var string
	 */
	protected $link = '';
	
	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 * @validate NotEmpty
	 */
	protected $image = NULL;

	/**
	 * Returns the captionTitle
	 *
	 * @return string $captionTitle
	 */
	public function getCaptionTitle() {
		return $this->captionTitle;
	}

	/**
	 * Sets the captionTitle
	 *
	 * @param string $captionTitle
	 * @return void
	 */
	public function setCaptionTitle($captionTitle) {
		$this->captionTitle = $captionTitle;
	}

	/**
	 * Returns the captionText
	 *
	 * @return string $captionText
	 */
	public function getCaptionText() {
		return $this->captionText;
	}

	/**
	 * Sets the captionText
	 *
	 * @param string $captionText
	 * @return void
	 */
	public function setCaptionText($captionText) {
		$this->captionText = $captionText;
	}
	
	/**
	 * Returns the captionBullets
	 *
	 * @return string $captionBullets
	 */
	public function getCaptionBullets() {
		return $this->captionBullets;
	}

	/**
	 * Sets the $captionBullets
	 *
	 * @param string $captionBullets
	 * @return void
	 */
	public function setCaptionBullets($captionBullets) {
		$this->captionBullets = $captionBullets;
	}
	
	/**
	 * Returns the link
	 *
	 * @return string $link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets the link
	 *
	 * @param string $link
	 * @return void
	 */
	public function setlink($link) {
		$this->link = $link;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

}