<?php

namespace App\Services;

use App\Term;

class TermService
{
    protected $term_model;
    public function _construct(Term $term_model)
    {
        $this->term_model = $term_model;
    }
    public function countTerms()
    {
        return $term_model->all()->count();
    }

}
