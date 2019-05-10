@extends('layouts.app')
@section('title','Glossaries')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="row form-group">
                  <div class="form-group clearfix">
                        <a href={{route("glossary.create")}} class="btn btn-default btn-md">Add Glossary</a></td>
                      </div>
                    <div class="table-responsive col-sm-12">
                        <table id="glossaries" class="table table-striped jambo_table">
                            <thead>
                              <tr class="headings">
                                <th>Name</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($glossaries as $glossary)
                              <tr class="pointer">
                                <td>{{$glossary['name']}}</td>
                                <td><a href={{route("term.index",$glossary["id"])}} class="btn btn-default btn-sm">View Terms</a></td>
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
