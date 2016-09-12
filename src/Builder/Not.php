<?php

namespace SRL\Builder;

use SRL\Builder;

class Not extends Builder
{
    /** @var string Desired match group. */
    protected $isNegative = true;
}