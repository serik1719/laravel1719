@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    <h2>ТОВАРЫ</h2>
</div>

<hr>

<a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Добавить товар </a>
<table class="table table-striped text-center">
    <thead>
        <th><h4><b> Наименование </b></h4></th>
        <th><h4><b> Категория </b></h4></th>
        <th><h4><b> Создатель </b></h4></th>
        <th><h4><b> Новизна </b></h4></th>
        <th><h4><b> Действие </b></h4></th>
    </thead>
    <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{isset($product->product_category->name) ? $product->product_category->name : 'Без категории'}}</td>
                <td>{{$product->user->name}}</td>
                <td><?=($product->novelty == 1) ? '<b>Новинка</b>' : 'Обычный'?></td>
                <td>
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.product.destroy', $product)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('product', $product->id)}}"><i class="fa fa-search-plus"></i></a>
                        <a class="btn btn-default" href="{{route('admin.product.edit', $product)}}"><i class="fa fa-edit"></i></a>
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
            <td colspan="6">
                <ul class="pagination pull-right">{{$products->links()}}</ul>
            </td>
        </tr>
    </tfoot>
</table>

@endsection