<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 04-Apr-17
 * Time: 11:28 PM
 */
?>
@extends('layouts.default')


@section('content')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Create New Item</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('itemsCRUD.index') }}"> Back</a>

        </div>

    </div>

</div>
@if (count($errors) > 0)

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif
{!! Form::open(array('route'=>'itemsCRUD.store','method'=>'post')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {!! Form::text('title',null,array('placeholder'=>'title','class'=>'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {!! Form::textarea('description',null,array('placeholder'=>'description', 'class'=>'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</div>
{!! Form::close() !!}
@endsection
