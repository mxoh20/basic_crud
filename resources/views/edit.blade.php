@extends('layout.layout')

@section('content')

@section('subtitle','Edit')


<div class="column is-medium is-centered">
    <form action="{{url('devices/'.$device->id)}}" method="post">

        @method('patch')
        @csrf

        @foreach($errors->all() as $err)
            <ul>
                <li class="notification is-capitalized is-size-5 is-medium is-danger">{{$err}}</li>
            </ul>
        @endforeach

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input {{$errors->has('brand') ? 'is-danger':''}} is-medium" type="text" name="brand"
                       value="{{$device->brand}}">
            </div>
        </div>

        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea is-medium {{$errors->has('description') ? 'is-danger':''}}"
                          name="description">{{$device->description}}</textarea>
            </div>
        </div>

        <input class="button is-info is-medium" type="submit" value="update">

    </form>

</div>


@endsection
