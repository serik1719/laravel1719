@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    <h2>ТОВАРЫ</h2>
</div>

<hr>

<a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Добавить товар </a>
<table class="table table-striped">
    <thead>
        <th><h4><b> Наименование </b></h4></th>
        <th><h4><b> Обычный/Новинка </b></h4></th>
        <th class="text-right"><h4><b> Действие </b></h4></th>
    <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td><?=($product->novelty == 1) ? '<b>Новинка</b>' : 'Обычный'?></td>
                <td class="text-right">
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
                <td colspan="3" class="text-center"><h2> Данные отсутствуют </h2></td>
            </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination pull-right">{{$products->links()}}</ul>
            </td>
        </tr>
    </tfoot>
    </thead>
</table>

@endsection