<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 05-Apr-17
 * Time: 1:54 PM
 */
?>

@extends('layouts.default')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Show Item</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('itemsCRUD.index') }}"> Back</a>

        </div>

    </div>

</div>

<div class="row">


    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Title:</strong>

            {{ $itemRequested->title }}

        </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Description:</strong>

            {{ $itemRequested->description }}

        </div>

    </div>


</div>


@endsection
