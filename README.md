[![Latest Stable Version](https://poser.pugx.org/raigu/php80-stringable-polyfill/v/stable)](https://packagist.org/packages/raigu/php80-stringable-polyfill)
[![GitHub license](https://img.shields.io/github/license/raigu/php80-stringable-polyfill)](LICENSE.md)

# Plyfill of Stringable interface of PHP8.0 to PHP7.4+

Allows to use [Stringable interface](https://wiki.php.net/rfc/stringable), which will be in PHP8.0, in PHP7.4+.

# Motivation

Current polyfill in [sympfony/polyfill](https://github.com/symfony/polyfill) did not meet my needs.

First it did not follow explicitly the same interface signature ([link](https://github.com/symfony/polyfill/blob/master/src/Php80/Resources/stubs/Stringable.php)) as in [proposal](https://wiki.php.net/rfc/stringable#proposal) (return type missing). 

Secondly I discovered from [__toString](https://www.php.net/manual/en/language.oop5.magic.php#object.tostring) documentation 
that it was not possible to throw an exception from within a __toString() method before PHP 7.4.0. Doing so will result in a fatal error.
The symphony/polyfill does not warn about it and allows to use polyfill starting from PHP 7.0.8.  This package is explicit 
about this restriction in composer.json thus avoiding misuse. 

# Install

```bash
$ composer require raigu/php80-stringable-polyfill
```

# License 

This project is licensed under the [MIT license](LICENSE.md)

# Acknowledgments

I would like to thank Guilliam Xavier for [posting](https://externals.io/message/108214#108475) alternative names to Stringable interface. 
Although his recommendations where not accepted Google picked up the keywords.  I was solving the same problem
and where checking up my name candidates when I stumbled to Guilliam's post. Instead of continuing my own now I can 
create future compatible solutions that are easier to justify. 
