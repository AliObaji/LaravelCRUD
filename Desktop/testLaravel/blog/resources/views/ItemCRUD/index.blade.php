<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 04-Apr-17
 * Time: 12:38 PM
 */
?>
@extends('layouts.default')



@section('content')
<h1>HELLO</h1>

@foreach ($items as $key => $item)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $item->title }}</td>

    <td>{{ $item->description }}</td>

    <td>

        <a class="btn btn-info" href="{{ route('itemCRUD.show',$item->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->id) }}">Edit</a>

        {!! Form::open(['method' => 'DELETE','route' => ['itemCRUD.destroy', $item->id],'style'=>'display:inline']) !!}

        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}

    </td>

</tr>

@endforeach
@endsection
