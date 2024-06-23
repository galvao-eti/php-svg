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

class Text extends Element
{
    use \PhpSvg\Traits\PopulateAttributes;

    public function __construct(
        public int $x = 0,
        public int $y = 0,
        public ?int $dx = null,
        public ?int $dy = null,
        public array $style = [],
        public ?array $rotate = null,
        public string $lengthAndJust = 'spacing',
        public ?float $textLength = null
    ) {
        parent::__construct('text');
        $this->populateAttributes();
    }

    public function addContent(string $text, bool $after = true): void
    {
        if ($after) {
            $this->insertAdjacentText('beforeend', $text);
            return;
        }

        $this->insertAdjacentText('afterbegin', $text);
    }
}


