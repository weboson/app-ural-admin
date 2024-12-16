{{--подключение шаблона--}}
@extends('catalog.layout.master')

{{--конент--}}
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{route('admin.main')}}">Admin panel</a>
                <p>Значение атрибута 'title': {{$title}}</p>
            </div>
        </div>
    </div>
@endsection
