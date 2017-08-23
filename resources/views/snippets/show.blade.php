@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $snippet->title }}
                    <form method="POST" action="{{ route('snippets.destroy', $snippet) }}">
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary pull-right">Delete</button>
                    </form>
                </div>
                
                <div class="panel-body">
                    {{ $snippet->code }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
