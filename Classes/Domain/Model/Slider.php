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
 * Slider
 */
class Slider extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * Slider Items
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SoerenKroell\SkBootstrapSlider\Domain\Model\Item>
	 * @cascade remove
	 * @lazy
	 */
	protected $items = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->items = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Adds a Item
	 *
	 * @param \SoerenKroell\SkBootstrapSlider\Domain\Model\Item $item
	 * @return void
	 */
	public function addItem(\SoerenKroell\SkBootstrapSlider\Domain\Model\Item $item) {
		$this->items->attach($item);
	}

	/**
	 * Removes a Item
	 *
	 * @param \SoerenKroell\SkBootstrapSlider\Domain\Model\Item $itemToRemove The Item to be removed
	 * @return void
	 */
	public function removeItem(\SoerenKroell\SkBootstrapSlider\Domain\Model\Item $itemToRemove) {
		$this->items->detach($itemToRemove);
	}

	/**
	 * Returns the items
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SoerenKroell\SkBootstrapSlider\Domain\Model\Item> $items
	 */
	public function getItems() {
		return $this->items;
	}

	/**
	 * Sets the items
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SoerenKroell\SkBootstrapSlider\Domain\Model\Item> $items
	 * @return void
	 */
	public function setItems(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $items) {
		$this->items = $items;
	}

}