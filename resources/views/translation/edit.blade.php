@extends('layouts.app')
@section('title','Edit Translation')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <form role="form" method="POST" action="{{ route('translation.update', $translation["id"]) }}">
                {{csrf_field()}}
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Language</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="language" value="{{$translation["language"]}}" type="text" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Translation</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" name="word" value="{{$translation["word"]}}" type="text" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button id="send" type="submit" class="btn btn-primary btn-lg" >Save Translation</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
