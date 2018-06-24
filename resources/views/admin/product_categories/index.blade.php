@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    <h2>КАТЕГОРИИ ТОВАРОВ</h2>
</div>

<hr>

<a href="{{route('admin.product_category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Добавить товар </a>
<table class="table table-striped text-center">
    <thead>
        <th><h4><b> Наименование </b></h4></th>
        <th><h4><b> Товаров </b></h4></th>
        <th><h4><b> Действие </b></h4></th>
    </thead>
    <tbody>
        @forelse ($product_categories as $product_category)
            <tr>
                <td>{{$product_category->name}}</td>
                <td>{{$product_category->products_count}}</td>
                <td>
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.product_category.destroy', $product_category)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('admin.product_category.edit', $product_category)}}"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3"><h2> Данные отсутствуют </h2></td>
            </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr class="text-right">
            <td colspan="3">
                <ul class="pagination pull-right">{{$product_categories->links()}}</ul>
            </td>
        </tr>
    </tfoot>
</table>

@endsection