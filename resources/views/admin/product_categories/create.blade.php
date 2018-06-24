@extends('admin.layouts.app_admin')

@section('content')
    
    <div class="container">
        <h2>ДОБАВЛЕНИЕ КАТЕГОРИИ ТОВАРА</h2>
    </div>

    <hr>

    <div class="container">
        <form class="form-horizontal" action="{{ route('admin.product_category.store') }}" method="post">
            {{ csrf_field() }}

            @include('admin.product_categories.layouts.form')

            <input class="btn btn-primary" type="submit" value="Создать">
        </form>
    </div>
    
@endsection