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

class Rectangle extends Element
{
    use \PhpSvg\Traits\PopulateAttributes;

    public function __construct(
        public int $width,
        public int $height,
        public int $x = 0,
        public int $y = 0,
        public array $style = [],
        public int|string $rx = 'auto',
        public int|string $ry = 'auto',
        public ?float $pathLength = null
    ) {
        parent::__construct('rect');
        $this->populateAttributes();
    }
}


