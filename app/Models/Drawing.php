<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drawing extends Model
{
    protected $table = 'drawing';

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id')->withTrashed();
    }

    public function user()
    {
        return $this->hasOne('App\\Models\\User', 'id', 'user_id');
    }
}
