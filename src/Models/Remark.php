<?php

namespace Hankin\LaravelRemark\Models;

use Hankin\LaravelRemark\HasRemarks;
use Hankin\LaravelRemark\Contracts\Remarkable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Remark extends Model implements Remarkable
{
    use HasRemarks;

    protected $guarded = [];

    public function remarkable(): MorphTo
    {
        return $this->morphTo();
    }

    public function remarked(): MorphTo
    {
        return $this->morphTo();
    }
}
