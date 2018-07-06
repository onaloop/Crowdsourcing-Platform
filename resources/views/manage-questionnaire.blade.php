@extends('loggedin-environment.layout')

@section('content-header')
    <h1>Manage Questionnaire</h1>
@stop

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Under construction</h3>
                </div>
                <div class="box-body">
                    <a href="{{route("create-questionnaire")}}"><i class="fa fa-plus"></i> Create new questionnaire</a>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')

@endpush