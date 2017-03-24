<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');

//Auth::routes();
//Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
//    Route::get('index',['as' =>'admin.index','uses'=>'IndexController@index']);
//    Route::get('options', 'OptionController@index')->name('option.index');
//    Route::post('options', 'OptionController@store')->name('option.store');
//    Route::resource('categories','CategoryController');
//    Route::resource('post-categories','PostCategoryController');
//    Route::resource('posts','PostController');
//    Route::resource('subjects','SubjectController');
//});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/',['as'=>'admin.index','uses'=>'IndexController@index']);

//    Post
    Route::group(['prefix' => 'post'], function () {
        //list
        Route::get('/', ['as' => 'admin.post.getList', 'uses' => 'PostController@getList']);
        //add
        Route::get('add', ['as' => 'admin.post.getAdd', 'uses' => 'PostController@getAdd']);
        Route::post('add', ['as' => 'admin.post.postAdd', 'uses' => 'PostController@postAdd']);
        //edit
        Route::get('edit/{id}', ['as' => 'admin.post.getEdit', 'uses' => 'PostController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.post.postEdit', 'uses' => 'PostController@postEdit']);
        Route::post('delete/{id}', ['as' => 'admin.post.delete', 'uses' => 'PostController@delete']);

    });

//    Category
    Route::group(['prefix' => 'category'], function () {
        //list
        Route::get('/', ['as' => 'admin.category.getList', 'uses' => 'CategoryController@getList']);
        //add
        Route::get('add', ['as' => 'admin.category.getAdd', 'uses' => 'CategoryController@getAdd']);
        Route::post('add', ['as' => 'admin.category.postAdd', 'uses' => 'CategoryController@postAdd']);
        //edit
        Route::get('edit/{id}', ['as' => 'admin.category.getEdit', 'uses' => 'CategoryController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.category.postEdit', 'uses' => 'CategoryController@postEdit']);

    });

    //    option
    Route::group(['prefix' => 'option'], function () {
        //list
        Route::get('/', ['as' => 'admin.option.index', 'uses' => 'OptionController@index']);
        //add
//        Route::get('add', ['as' => 'admin.option.getAdd', 'uses' => 'OptionController@getAdd']);
        Route::post('add', ['as' => 'admin.option.postAdd', 'uses' => 'OptionController@postAdd']);
        //edit
//        Route::get('edit/{id}', ['as' => 'admin.option.getEdit', 'uses' => 'OptionController@getEdit']);
//        Route::post('edit/{id}', ['as' => 'admin.option.postEdit', 'uses' => 'OptionController@postEdit']);

    });

    //    subject
    Route::group(['prefix' => 'subjects'], function () {
        //list
        Route::get('/', ['as' => 'admin.subjects.getList', 'uses' => 'SubjectController@getList']);
        //add
        Route::get('add', ['as' => 'admin.subjects.getAdd', 'uses' => 'SubjectController@getAdd']);
//        take curriculum from ajax
        Route::get('curriculum', ['as' => 'admin.subjects.getCurriculum', 'uses' => 'SubjectController@getCurriculum']);

        Route::post('add', ['as' => 'admin.subjects.postAdd', 'uses' => 'SubjectController@postAdd']);
        //edit
        Route::get('edit/{id}', ['as' => 'admin.subjects.getEdit', 'uses' => 'SubjectController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.subjects.postEdit', 'uses' => 'SubjectController@postEdit']);
        Route::get('edit_curriculum', ['as' => 'admin.subjects.getCurriculum', 'uses' => 'SubjectController@getCurriculumEdit']);
//        show detail
        Route::get('detailSubject',['as'=>'admin.subjects.detailSubject','uses'=>'SubjectController@detailSubject']);

    });

    //    instructor
    Route::group(['prefix' => 'instructor'], function () {
        //list
        Route::get('/', ['as' => 'admin.instructor.getList', 'uses' => 'InstructorController@getList']);
        //add
        Route::get('add', ['as' => 'admin.instructor.getAdd', 'uses' => 'InstructorController@getAdd']);
        Route::post('add', ['as' => 'admin.instructor.postAdd', 'uses' => 'InstructorController@postAdd']);
        //edit
        Route::get('edit/{id}', ['as' => 'admin.instructor.getEdit', 'uses' => 'InstructorController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.instructor.postEdit', 'uses' => 'InstructorController@postEdit']);
    });
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/khoa-hoc/{slug?}', 'SubjectController@show')->name('subject.show');
Route::get('/blog/{slug?}', 'PostController@show')->name('post.show');
Route::get('/lien-he', 'IndexController@contact')->name('contact');
//Route::get('/dang-ky-khoa-hoc','SubjectController@register')->name('subject.register');
Route::post('/dang-ky-khoa-hoc', 'SubjectController@register')->name('subject.store');
Route::get('/danh-muc/{slug}', 'IndexController@category')->name('category.show');


