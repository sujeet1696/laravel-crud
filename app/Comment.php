<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation: morphMap([
  'link' => 'App\Link',
  'video' => 'App\Video',
]);

class Comment extends Model
{
    public function commentable() {
        return $this->morphTo();
    }
}
