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

namespace PhpSvg;

use PhpSvg\{
    Document\Document,
    Element\Element
};

class PhpSvg
{
    public static ?Document $dom = null;

    public static function init(
        int $width,
        int $height,
        string $version = '1.0',
        string $encoding = 'UTF-8',
        string $svgVersion = '1.1',
        string $xmlNs = 'http://www.w3.org/2000/svg'
    ): Element {
        self::$dom = new Document($version, $encoding, $width, $height, $svgVersion, $xmlNs);

        return self::$dom::$root;
    }

    public static function draw(): string
    {
        return self::$dom->saveXML();
    }
}

