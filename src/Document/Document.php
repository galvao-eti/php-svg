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

namespace PhpSvg\Document;

use \DOMDocument;
use PhpSvg\Element\Base\Svg;

class Document extends DOMDocument
{
    public static ?Svg $root = null;

    public function __construct(
        string $xmlVersion,
        string $xmlEncoding,
        int $width,
        int $height,
        string $version = '1.1',
        string $xmlNs = 'http://www.w3.org/2000/svg'
    ) {
        parent::__construct($xmlVersion, $xmlEncoding);

        self::$root = new Svg($width, $height, $version, $xmlNs);

        $this->appendChild(self::$root);
    }
}
