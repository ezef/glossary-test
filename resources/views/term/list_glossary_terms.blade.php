@extends('layouts.app')
@section('title','Terms in Glossary #'.$glossary_id)
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="row form-group">
                  <div class="form-group clearfix">
                        <a href={{route("term.create",$glossary_id)}} class="btn btn-info btn-md">Add Term</a>
                        <a href={{route("glossaries.index")}} class="btn btn-info btn-md pull-right">Go Back</a>
                      </div>
                    <div class="table-responsive col-sm-12">
                        <table id="glossaries" class="table table-striped jambo_table">
                            <thead>
                              <tr class="headings">
                                <th>Word</th>
                                <th>See translations</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($terms as $term)
                              <tr class="pointer">
                                <td>{{$term['word']}}</td>
                                <td><a href={{route("translation.index",$term["id"])}} class="btn btn-default btn-sm">View Translations</a><a href={{route("term.destroy",$term["id"])}} class="btn btn-default btn-sm">Delete Term</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
