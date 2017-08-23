@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard edit</div>

                <div class="panel-body">
                    <form action="{{ route('snippets.update', $snippet) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input placeholder="Title" class="form-control" type="text" id="title" name="title" value="{{ $snippet->title }}">
                        </div>

                        <div class="form-group">
                            <label for="code">Code</label>
                            <textarea class="form-control" placeholder="Code" name="code" id="code" cols="30" rows="10">{{ $snippet->code }}</textarea>
                        </div>

                        <button class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
