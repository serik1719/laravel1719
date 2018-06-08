@extends('layouts.app')

@section('content')

<h1>Посты</h1>

<div class="panel-body">
<table class="table table-striped task-table">
    <ul>
        @foreach ($categories as $category)
            <li style="display:inline-block;"><a href="{{ url('/categories/'.$category->id) }}"><h4><i>{{ $category->name }}</i></h4></a></li>
        @endforeach
    </ul>
    @foreach ($posts as $post)
        <tr>
            <!-- TODO: Кнопка Удалить -->
            <tr>
                <!-- Имя задачи -->
                <td class="table-text">
                    <div>
                        <!--hr-->
                        <!--h3>(user_id={{ $post->user_id }})    {{ $post->description }}</h3-->
                        
                        <div class="container">
                            <b>{{ $post->title }}</b>      <i>{{ $post->category_id.'. '.$post->category['name'] }}</i>     <u>{{ 'Автор: '.$post->user['name'] }}</u>
                        </div>
                        
                        <!--h2>{{ $post->description }}</h2-->
                        <h3>{{ $post->text }}</h3>
                    </div>
                </td>
            </tr>
        </tr>
    @endforeach
</table>
</div>

@endsection