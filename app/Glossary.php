<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    protected $fillable = [
        'name', 'language',
    ];

    public function terms()
    {
        return $this->hasMany('App\Term');
    }

    public function addTerm($term)
    {
        Term::create(["word" => $term, "glossary_id" => $this->id]);
    }

}
