@extends('layouts.app')
@section('title','New Glossary')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <form role="form" method="POST" action="{{ route('glossary.store') }}">
                {{csrf_field()}}
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Glossary Name</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="name" placeholder="Name..." type="text" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Language</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="lang" placeholder="Language of the Glossary..." type="text" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 1</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="term[]"  type="text" autocomplete="off" required>
                                </div>
                            </div>                            
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 2</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="term[]"  type="text" autocomplete="off" required>
                                </div>
                            </div>                            
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 3</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="term[]" type="text" autocomplete="off" required>
                                </div>
                            </div>                            
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 4</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="term[]"  type="text" autocomplete="off" >
                                </div>
                            </div>                            
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 5</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="term[]" type="text" autocomplete="off" >
                                </div>
                            </div>                            



                        </div>
                        <div class="col-sm-6">
                            <button id="send" type="submit" class="btn btn-primary btn-lg" >Create Glossary</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
