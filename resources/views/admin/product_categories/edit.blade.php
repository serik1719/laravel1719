@extends('admin.layouts.app_admin')

@section('content')
    
    <div class="container">
        <h2>РЕДАКТИРОВАНИЕ КАТЕГОРИИ ТОВАРА</h2>
    </div>

    <hr>

    <div class="container">
        <form class="form-horizontal" action="{{ route('admin.product_category.update', $product_category) }}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            @include('admin.product_categories.layouts.form')

            <input class="btn btn-primary" type="submit" value="Изменить">
        </form>
    </div>
    
@endsection