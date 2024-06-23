<?php

/**
 * php-svg - A simple component that extends PHP's DOM-ext to produce SVG documents
 *
 * @version 0.1.0-alpha
 * @author Er Galvão Abbott <galvao@php.net>
 * @license Apache-2.0
 * @link https://github.com/galvao-eti/php-svg
 */

declare(strict_types = 1);

namespace PhpSvg\Element\Base;

use PhpSvg\Element\Element;

class Svg extends Element
{
    public static bool $lazyInit = true;

    use \PhpSvg\Traits\PopulateAttributes;

    public function __construct(
        public int $width,
        public int $height,
        public string $version = '1.1',
        public string $xmlns = 'http://www.w3.org/2000/svg'
    ) {
        parent::__construct('svg');
        $this->populateAttributes();
    }
}


