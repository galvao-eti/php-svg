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

class Circle extends Element
{
    use \PhpSvg\Traits\PopulateAttributes;

    public function __construct(
        public int $r,
        public int $cx = 0,
        public int $cy = 0,
        public array $style = []
    ) {
        parent::__construct('circle');
        $this->populateAttributes();
    }
}


