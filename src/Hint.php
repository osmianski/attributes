<?php

namespace Osmianski\Attributes;

use Attribute;

/**
 * Marks a class as a hint that only serves for code completion
 * and that is never instantiated. Hint classes must be abstract and
 * has `Hint` suffix.
 */
#[Attribute(Attribute::TARGET_CLASS)]
final class Hint
{

}
