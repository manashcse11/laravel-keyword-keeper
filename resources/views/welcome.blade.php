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
                    <h4>First class function</h4>
                    <p>Lorem ipsum test for something new jsdafhkj kjsdhf</p>
                    <hr>
                    <h4>First class function</h4>
                    <p>Lorem ipsum test for something new jsdafhkj kjsdhf</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>New</h4>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <input class="form-control" name="title" type="text" placeholder="Keyword">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
