@extends('layout.layout')

@section('content')


@section('subtitle','Records')


<div class="column is-medium is-centered">

    <div>
    <a class="button is-link is-large" href="devices/create"> <span class="fa fa-plus"></span> &nbsp;Add</a>
    </div>
    <br>

    <div class="is-centered  has-text-centered has-background-grey-lighter">
        <div class="columns">
            <div class="column is-size-5">
               Page {{$paginator->currentPage()}}
            </div>
            <div class="column is-size-5">
                Each page  {{$paginator->count()}}
            </div>
            <div class="column is-size-5">
               Tota Records {{$paginator->total()}}
            </div>
        </div>


    </div>
    <br/>

    <table class="table is-fullwidth">
        <tr>
            <th>Brand Name</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
        @foreach($paginator as $one)
            <tr>

{{--                <td>{{$one->}}</td>--}}
                <td>{{$one->brand}}</td>
                <td><a class="button is-info is-medium" href="devices/{{$one->id}}"> <span class="fa fa-eye"></span>&nbsp;View</a>
                </td>
                <td><a class="button is-dark is-medium" href="devices/{{$one->id}}/edit"> <span
                            class="fa fa-edit"></span>
                        &nbsp;Edit</a></td>
                <td>
                    <form action="devices/{{$one->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="button is-danger is-medium" onclick="return confirm('Are you sure?')"
                                type="submit"><i class="fa fa-trash"></i> &nbsp;Delete
                        </button>
                        {{--                <span class="fa fa-trash"> </span>--}}
                    </form>
                </td>
                <td><span class="text-center has-text-grey-light"> {{$one->created_at->diffForHumans() }}</span></td>
                <td><span class="text-center has-text-primary"> {{$one->updated_at->diffForHumans() }}</span></td>
            </tr>
        @endforeach


    </table>

{{--    <nav class="pagination is-large is-centered">--}}

{{--        <ul class="pagination-list ">--}}
{{--            <li class="">{{$paginator->links()}}</li>--}}
{{--            {{$paginator->hasMorePages()}}--}}
{{--        </ul>--}}

{{--    </nav>--}}


    @if ($paginator->hasPages())
        <nav class="pagination is-large is-centered">
            @if ($paginator->onFirstPage())
                <a class="pagination-previous" disabled>Previous</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous pagination-link">Previous</a>
            @endif

            @if ($paginator->hasMorePages())
                <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
            @else
                <a class="pagination-next" disabled>Next page</a>
            @endif
        </nav>
    @endif






</div>


@endsection
