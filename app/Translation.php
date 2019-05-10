<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = [
        'word', 'language', 'term_id',
    ];

    public function term()
    {
        return $this->belongsTo('App\Term');
    }
}
