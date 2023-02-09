<?php

namespace Hankin\LaravelRemark;

use Hankin\LaravelRemark\Contracts\Remarkable;
use Hankin\LaravelRemark\Models\Remark;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait CanRemark
{
    public function remark(Remarkable $remarkable, $content, $pics):Remark
    {
        $remarkModel = config('remark.model');
        $remark = new $remarkModel([
            'content'    =>  $content,
            'pics'   =>  json_encode($pics),
            'remarked_id'   => (string)$this->getAttribute($this->primaryKey),
            'remarked_type' => get_class(),
        ]);
        $remarkable->remarks()->save($remark);
        return $remark;
    }

    public function remarks(): MorphMany
    {
        return $this->morphMany(config('remark.model'), 'remarked');
    }

//    private function primaryId(): string
//    {
//        return (string)$this->getAttribute($this->primaryKey);
//    }
}
