{{--подключение шаблона--}}
@extends('admin.layout.master')

{{--конент--}}
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="">Список продуктов:</a>
                <p>Значение атрибута 'name': {{$name}}</p>
            </div>
        </div>
    </div>
@endsection
