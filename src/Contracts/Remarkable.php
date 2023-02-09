<?php

namespace Hankin\LaravelRemark\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Remarkable
{
    public function remarks(): MorphMany;

//    public function primaryId(): string;
}
