@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($news as $n)
                <div class="card">
                    <div class="card-header">{{ $n->title }}</div>
                    <div class="card-body">
                        {{ $n->article_body }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
