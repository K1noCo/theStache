@extends('layouts.app')

@section('content')
<div class="container">
    @if ($flash = session('message'))
        <div class="alert alert-success" role="alert">
            {{ $flash }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ( $snippets as $snippet )
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <a href="snippets/{{ $snippet->id }}">{{ $snippet->title }}</a>
                    </div>

                    <div class="panel-body">
                        {{ $snippet->code }}
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
