<?php

namespace Osmianski\Attributes;

use Attribute;

/**
 * Marks a class as a plain object that only serves for code completion
 * and that is never instantiated. Plain object classes must be abstract.
 */
#[Attribute(Attribute::TARGET_CLASS)]
final class PlainObject
{

}
