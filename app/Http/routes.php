<?php

use App\Post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
// 	    return view('welcome');

// 		//return "Hello Dear";

// });

// Route::get('/hello',function () {
//     retur4n('welcome');
// });

// Route::get('/world', function () {
// 	return view('welcome');
//  });

// Route::get('/post/{id}/{name}', function ($id,$name) {
// 	return "this is post number ".$id." "  .$name;
// }); 

// Route::get('admin/posts/example', array('as'=>'admin.home',function(){
// 	$url = route('admin.home');
// 	return "this url is " .$url;
// }));

//Route::get('/post/{id}','PostsController@index');

//Route::resource('posts', 'PostsController');

// Route::get('/contact','PostsController@contact');

// Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');
/*
|--------------------------------------------------------------------------
| Raw SQL Queries
|--------------------------------------------------------------------------
*/
// Route::get('/insert', function() {

// 	DB::insert('insert into posts(title,content) values(?,?)',['PHP with 
// 		Laravel','This is very easy,interesting and exciting to work with 
// 		the laravel framework but the concept of opp and pdo is still confusing to me.']);
// });

// Route::get('/read', function() {

// 	$results= DB::select('select * from posts where id= ?',[1]);

// 	return $results;
// 	// foreach($results as $post) {
// 	// 	return $post->title;
// 	// }
// });

// Route::get('/update', function(){
// 	$updated = DB::update('update posts set title ="New updated title" where id = ?', [1]);
// 	return $updated;
// });

// Route::get('/delete', function() {
// 	$deleted = DB::delete('delete from posts where id=?',[1]);
// 	return $deleted;
// });
/*
|--------------------------------------------------------------------------
| Eloquent ORM(object relational model)
|--------------------------------------------------------------------------
*/

// Route::get('/read', function() {

// 	$post=Post::find(3);
// 	return $post->title;

// 	//$post = Post::all();
// 	// foreach($post as $posts){
// 	// return $posts->title;
// 	// }
// });

// Route::get('/insert',function() {
// 	$post = new Post;			//creating instance of the Post class
// 	$post->title = 'Eloquent use';
// 	$post->content = 'it gives ready to use methods.';
// 	$post->save();

// });

// Route::get('/basicupdate', function() {
// 	$post = Post::find(3);   //finding which id to update

// 	$post->title ="New HTML";
// 	$post->content = "The advance content of the new HTML";

// 	$post->save();
// });

Route::get('/create',function() {

	Post::create(['title'=>'new data','content'=>'inserting 
		in the db by create method. also called mass assignment']);
});

// Route::get('/update',function() {

// 	Post::where('id',2)->update(['title'=>'PHP upadate','content'=>'updating
// 		 the data is real easy.']);
// });
/*
-----------------
2 ways of deleting.  1).By finding the id  2). By simply destroying 
		Also we can delete multiple data at the same time.
---------
*/
/**fist method */
// Route::get('/delete', function() {

// 	$post=Post::find(3);
// 	$post->delete();
// });

/**second method */
// Route::get('/delete2', function() {
// 	Post::destroy(9);
// });

/**multiple data delete */
Route::get('/delete3',function() {
	Post::destroy([6,7,8]);
});

/**other ways of deleting: through statements like; */
// Route::get('/delete4',function () {
// 	Post::where('is_admin', 0)->delete();
// });

Route::get('/softDelete',function() {

	Post::find(10)->delete();
});