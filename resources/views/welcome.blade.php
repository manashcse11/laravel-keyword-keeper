@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Keyword List</h4>
                </div>

                <div class="panel-body">
                    @foreach($keywords as $keyword)
                        <h4>{{ $keyword->title }}</h4>
                        <p>
                            {{ $keyword->description }}
                        </p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>New</h4>
                </div>

                <div class="panel-body">
                    <form method="POST" action="/keyword">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" name="title" type="text" placeholder="Keyword" value="{{ old('title') }}">
                        </div>
                        @if($errors->has('title'))
                            <div class="alert alert-danger">
                                {{$errors->first('title')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Description">
                                {{ old('description') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
