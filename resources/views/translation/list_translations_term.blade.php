@extends('layouts.app')
@section('title','Translations for Term "'. $term_word . '"')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="row form-group">
                    <div class="table-responsive col-sm-12">
                      <div class="form-group clearfix">
                        <a href={{route("translation.create",$term_id)}} class="btn btn-info btn-md">Add Translation</a>
                        <a href={{route("term.index",$glossary_id)}} class="btn btn-info btn-md pull-right">Go Back</a>
                      </div>
                        <table id="translations" class="table table-striped jambo_table">
                            <thead>
                              <tr class="headings">
                                <th>Language</th>
                                <th>Translation</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($translations as $translation)
                              <tr class="pointer">
                                <td>{{$translation['language']}}</td>
                                <td>{{$translation['word']}}</td>
                                <td><a href="{{route("translation.edit",$translation["id"])}}" class="btn btn-default btn-sm">Edit Translation</a><a href="{{route("translation.destroy",$translation["id"])}}" class="btn btn-default btn-sm">Delete Translation</a></td>
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