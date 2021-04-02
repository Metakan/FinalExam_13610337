@extends('layouts.app')
@section('content')
    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <p>{{$message}}</p>
            </div>
        @endif
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-tittle">
                    <div class="d-flex justify-content-between">
                        <div>list URL</div>
                        <div>
                            <a href="/new" class="btn btn-primary">Create URL</a>
                        </div>
                    </div>
                </h5>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Long URL</th>
                        <th>Short URL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!$urls->isEmpty())
                        @foreach($urls as $index=>$urls)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$urls->pastLong_url}}</td>
                                <td>{{$urls->first_name}}</td>
                                <td>{{$urls->last_name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/show/{{$urls->id}}" class="btn btn-outline-primary">edit</a>
                                        <form action="/delete/{{$urls->id}}" method="post">
                                            @csrf
                                            <button class="btn btn-outline-danger">del</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
