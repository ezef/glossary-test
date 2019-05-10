<?php

namespace App\Http\Controllers;

use App\Glossary;
use App\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($glossary_id)
    {
        $terms = Glossary::find($glossary_id)->terms()->get()->toArray();

        return view("term/list_glossary_terms")->with("terms", $terms)->with("glossary_id", $glossary_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($glossary_id)
    {
        return view("term/create")->with("glossary_id", $glossary_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $glossary_id)
    {
        Term::create([
            "word"        => $request->input("term"),
            "glossary_id" => $glossary_id,
        ]);

        return redirect()->route("term.index", $glossary_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($term_id)
    {
        $term = term::find($term_id);
        foreach ($term->translations as $translation) {
            $translation->delete();
        }
        $glossary_id = $term->glossary_id;
        $term->delete();
        return redirect()->route("term.index", $glossary_id);
    }
}
