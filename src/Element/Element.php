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

namespace PhpSvg\Element;

use \DOMElement;

class Element extends DOMElement
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}

