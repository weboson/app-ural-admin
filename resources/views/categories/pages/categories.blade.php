{{--подключение шаблона--}}
@extends('categories.layout.master')

{{--конент--}}
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="/">Home</a>
                <p>Значение атрибута 'title': {{$title}}</p>
            </div>
        </div>
    </div>
@endsection
