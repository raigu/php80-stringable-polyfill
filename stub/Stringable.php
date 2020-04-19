<?php

/**
 * Stringable interface.
 *
 * Copy-pasted from RFC: https://wiki.php.net/rfc/stringable#proposal
 */
interface Stringable
{
   public function __toString(): string;
}
