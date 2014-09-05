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
 * Test case for class \SoerenKroell\SkBootstrapSlider\Domain\Model\Item.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Soeren Kroell <hallo@soerenkroell.com>
 */
class ItemTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SoerenKroell\SkBootstrapSlider\Domain\Model\Item
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SoerenKroell\SkBootstrapSlider\Domain\Model\Item();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getCaptionTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCaptionTitle()
		);
	}

	/**
	 * @test
	 */
	public function setCaptionTitleForStringSetsCaptionTitle() {
		$this->subject->setCaptionTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'captionTitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCaptionTextReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCaptionText()
		);
	}

	/**
	 * @test
	 */
	public function setCaptionTextForStringSetsCaptionText() {
		$this->subject->setCaptionText('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'captionText',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}
}
