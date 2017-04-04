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
<h1>Create New Item</h1>
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Items CRUD</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('itemsCRUD.index') }}"> Back</a>

        </div>

    </div>

</div>
@endsection
