@extends('layout.layout')

@section('content')

    @section('subtitle','each record')

    <h2></h2>

    <table class="table is-fullwidth">
        <tr>
            <th>Brand name</th>
            <th>Brand Description</th>
            <th>Created Date</th>
            <th>Edit</th>
        </tr>

        <tr>
            <td>{{$device->brand}}</td>
            <td>{{$device->description}}</td>
            <td>{{$device->created_at->diffForHumans()}}</td>
            <td><a class="button is-medium is-link" href="{{url('devices/'.$device->id.'/edit')}}">edit</a></td>
        </tr>

    </table>

@stop

