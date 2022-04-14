<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;
use Statamic\Contracts\Query\Builder;

class TestForBuilder extends Modifier
{
    public function index($value, $params, $context)
    {
        return $value instanceof Builder;
    }
}
