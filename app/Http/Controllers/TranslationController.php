<?php

namespace App\Http\Controllers;

use App\Term;
use App\Translation;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($term_id)
    {
        $term         = Term::find($term_id);
        $translations = $term->translations()->get()->toArray();

        return view("translation/list_translations_term")->with("translations", $translations)->with("term_id", $term_id)->with("term_word", $term->word)->with("glossary_id", $term->glossary_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($term_id)
    {
        return view("translation/create")->with("term_id", $term_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r, $term_id)
    {
        Translation::create([
            "word"     => $r->input("translation"),
            "language" => $r->input("language"),
            "term_id"  => $term_id,
        ]);

        return redirect()->route("translation.index", $term_id);
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
    public function edit($translation_id)
    {
        $translation = Translation::find($translation_id)->toArray();
        return view("translation/edit")->with("translation", $translation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $translation_id)
    {
        $translation           = Translation::find($translation_id);
        $translation->word     = $request->input("word");
        $translation->language = $request->input("language");
        $translation->update();

        return redirect()->route("translation.index", $translation->term_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($translation_id)
    {
        $translation = Translation::find($translation_id);
        $term_id     = $translation->term_id;
        $translation->delete();
        return redirect()->route("translation.index", $term_id);
    }
}
