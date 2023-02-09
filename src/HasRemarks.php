<?php

namespace Hankin\LaravelRemark;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasRemarks
{
    public function remarks(): MorphMany
    {
        return $this->morphMany(config('remark.model'), 'remarkable');
    }

//    public function primaryId(): string
//    {
//        return (string)$this->getAttribute($this->primaryKey);
//    }
}
