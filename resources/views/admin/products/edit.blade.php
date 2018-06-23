@extends('admin.layouts.app_admin')

@section('content')
    
    <div class="container">
        <h2>РЕДАКТИРОВАНИЕ ТОВАРА</h2>
    </div>

    <hr>

    <div class="container">
        <form class="form-horizontal" action="{{ route('admin.product.update', $product) }}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            @include('admin.products.layouts.form')

            <input class="btn btn-primary" type="submit" value="Изменить">

            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        </form>
    </div>
    
@endsection