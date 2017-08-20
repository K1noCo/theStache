@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard create</div>

                <div class="panel-body">
                    <form action="{{ URL::to('snippets') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input placeholder="Title" class="form-control" type="text" id="title" name="title">
                        </div>

                        <div class="form-group">
                            <label for="code">Code</label>
                            <textarea class="form-control" placeholder="Code" name="code" id="code" cols="30" rows="10"></textarea>
                        </div>

                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
