@extends('layout.layout')

@section('content')

@section('subtitle','Add new')



<div class="column is-medium is-centered">

    <form action="/devices" method="post">

        @csrf

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input is-medium {{$errors->has('name') ? 'is-danger':''}}" name="name" placeholder="brand"
                       type="text" value="{{old('name')}}">
            </div>
            @if($errors->has('name'))
                <div class="text-danger is-capitalized is-size-5 has-text-danger is-medium">  {{$errors->first('name')}}</div>
            @endif
        </div>

        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea {{$errors->has('description')? 'is-danger':''}}" name="description"
                          placeholder="Description">{{old('description')}}</textarea>
                @if($errors->has('description'))
                    <div class="text-danger is-capitalized is-size-5 has-text-danger is-medium"> {{$errors->first('description')}}</div>

                @endif

            </div>
        </div>

        <div class="field">
            <input class="button is-primary is-medium" type="submit">
        </div>
    </form>

</div>

@endsection
