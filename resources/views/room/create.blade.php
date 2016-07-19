@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" >
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6"><h5>Создать место</h5></div>
                        <div class="col-md-6 "><a href="{{ url('/room')}}" class="btn btn-default pull-right">Отмена</a></div>
                    </div>
                </div> 

                <div class="panel-body">
                    @include('errors.form')

                    {!! Form::open(array('url' => 'room')) !!}
                    
                    @include('room.__form')
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.scripts')

@endsection