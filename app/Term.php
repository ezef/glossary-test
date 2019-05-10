<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $fillable = [
        'word', 'glossary_id',
    ];

    public function translations()
    {
        return $this->hasMany('App\Translation');
    }

    public function glossary()
    {
        return $this->belongsTo('App\Glossary');
    }

}
