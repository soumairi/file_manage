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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/give-role-permissions', 'Admin\AdminController@getGiveRolePermissions');
Route::post('admin/give-role-permissions', 'Admin\AdminController@postGiveRolePermissions');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
Route::resource('projets', 'ProjetsController');
Route::resource('admin/projets', 'Admin\\ProjetsController');
Route::resource('admin/projets', 'Admin\\ProjetsController');
Route::resource('admin/projects', 'Admin\\ProjectsController');
Route::resource('admin/under_-projects', 'Admin\\Under_ProjectsController');
//Route::get('admin/under_-projects/details/{id}',[
//    'uses'=>'Admin\\Under_ProjectsController@details',
//    'as'=>'sousprojet.details'
//]);
Route::get('admin/under_-projects/download/{id}/{files}/{fichier}',[
    'uses'=>'Admin\\Under_ProjectsController@telecharger',
    'as'=>'sousprojet.telecharger'
]);
Route::get('admin/under_-projects/repertoire/{id}/{repe}',[
    'uses'=>'Admin\\Under_ProjectsController@detailsrepertoire',
    'as'=>'sousprojet.repertoire'
]);