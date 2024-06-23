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

namespace PhpSvg\Traits;

trait PopulateAttributes
{
    public static bool $lazyInit = true;

    public function populateAttributes(): void
    {
        if (!self::$lazyInit) {
            return;
        }

        $attributes = get_object_vars($this);
        $parentArgs = array_keys(get_class_vars(parent::class));

        foreach ($attributes as $attr => $value) {
            if (!in_array($attr, $parentArgs) and $value !== null) {
                if ($attr == 'style') {
                    $style = '';

                    foreach ($value as $property => $pValue) {
                        $style .= $property . ': ' . $pValue . '; ';
                    }

                    $value = rtrim($style);
                } else if ($attr == 'points') {
                    $value = implode(', ', $value);
                }

                $this->setAttribute($attr, (string)$value);
            }
        }
    }
}
