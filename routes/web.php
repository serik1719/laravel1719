<?php

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Task;
use App\Models\Category;

Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');
Route::get('/product/{id}', 'ProductController@show')->name('product');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
});

Route::get('/', function () {
    return view('blog.home');
});




Route::get('welcome', function () {
    return view('welcome');
});

//DB::listen(function($query) {
//    var_dump($query->sql, $query->bindings);
//});

//  Tasks - Задачи  --->
//Route::get('/', function () {
//    $tasks = Task::orderBy('created_at', 'asc')->get();
//    
//    return view('tasks', [
//        'tasks' => $tasks
//    ]);
//});

Route::post('/task', function (Request $request) {
  
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',                   //  поле name и зададим, что оно должно содержать не более 255 символов
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/');
});
//  Tasks - Задачи  <---


Route::get('/posts', function () {
    
//    $posts = Post::all()->category;
    $posts = Post::all();
//    $posts = Post::find(1)->category;
 //   return $posts;
//    dd($posts);

//    $categories = Category::all();
    $categories = Category::orderBy('name')->get();
    
    return view('posts.index', [
        'posts' => $posts,
        'categories' => $categories    
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
