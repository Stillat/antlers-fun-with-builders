<?php

namespace App\Tags;

use Statamic\Tags\Tags;
use Statamic\Contracts\Query\Builder;

class IsBuilder extends Tags
{
    public function index()
    {
        $value = $this->params->get('tags');

        return $value instanceof Builder;
    }
}
