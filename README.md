# php-svg
![Logo](media/logo.png)

A simple component that extends [PHP's dom-ext](https://www.php.net/manual/en/book.dom.php) to produce [SVG](https://www.w3.org/Graphics/SVG/) documents

The component is in it's initial phase and in alpha release. The intended use case is to draw diagrams from server objects, such as databases, classes, dependencies, etc...

## Basic Usage

1.  Initialize php-svg;
2.  Add Elements;
3.  Process the Output.

php-svg has one single method that outputs the svg document as a string so you can, for an example, pipe it to a binary or direct it to a file.

See the [shapes](bin/example/shapes) example for details.

## License

Licensed via the Apache License by [Galvão Desenvolvimento Ltda](https://galvao.eti.br/).

## Credits

php-svg's logo is a a work done on top of the PHP's [ElePHPant](https://www.vincentpontier.com/elephpant/) (by [Vincent Pontier](https://www.vincentpontier.com/)) and the SVG logo (by [W3C](https://www.w3.org/)).
