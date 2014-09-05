<?php

namespace SoerenKroell\SkBootstrapSlider\Tests\Unit\Domain\Model;

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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \SoerenKroell\SkBootstrapSlider\Domain\Model\Slider.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Soeren Kroell <hallo@soerenkroell.com>
 */
class SliderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SoerenKroell\SkBootstrapSlider\Domain\Model\Slider
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SoerenKroell\SkBootstrapSlider\Domain\Model\Slider();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getItemsReturnsInitialValueForItem() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getItems()
		);
	}

	/**
	 * @test
	 */
	public function setItemsForObjectStorageContainingItemSetsItems() {
		$item = new \SoerenKroell\SkBootstrapSlider\Domain\Model\Item();
		$objectStorageHoldingExactlyOneItems = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneItems->attach($item);
		$this->subject->setItems($objectStorageHoldingExactlyOneItems);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneItems,
			'items',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addItemToObjectStorageHoldingItems() {
		$item = new \SoerenKroell\SkBootstrapSlider\Domain\Model\Item();
		$itemsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$itemsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($item));
		$this->inject($this->subject, 'items', $itemsObjectStorageMock);

		$this->subject->addItem($item);
	}

	/**
	 * @test
	 */
	public function removeItemFromObjectStorageHoldingItems() {
		$item = new \SoerenKroell\SkBootstrapSlider\Domain\Model\Item();
		$itemsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$itemsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($item));
		$this->inject($this->subject, 'items', $itemsObjectStorageMock);

		$this->subject->removeItem($item);

	}
}
