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


Route::get('/', function(){
    $sql = "select * from item";
    $items = DB::select($sql);
    
    return view('items.item_list')->with('items', $items); 
});

Route::get('item_detail/{id}', function($id){
    $item = get_item($id);
    return view('items.item_detail')->with('item', $item); 
});


Route::get('add_item', function(){
    return view('items.add_item');
});


Route::get('update_item/{id}', function($id){
    $item = get_item($id);
    return view('items.update_item')->with('item', $item); 
});

Route::get('delete_item/{id}', function($id){
    $item = delete_item($id);
    return view('items.delete_item')->with('item', $item); 
});

// get item function
function get_item($id){
    $sql = "select * from item where id =?";    // ? is used as a placeholder for SQL sanitisation 
    $items = DB::select($sql, array($id));
    if (count ($items) != 1){                   // if id is not exactly to 1, raise an error. 
        die ("Something has gone wrong");
    }
    $item = $items[0];
    return $item;
}



// delete item action and function
Route::post('delete_item_action', function (){
    $id = request('id');
    $item = delete_item($id);
});
function delete_item($id) {
    $sql = "delete from item where id = ?";
    DB::delete($sql, array($id));
} 

//update item action and function
Route::post('update_item_action', function (){
    $summary = request('summary');
    $details = request('details');
    $id = request('id');
    $item = update_item($summary, $details, $id);
    return redirect (url("item_detail/$id"));     // this will redirect to item details. url() for absolute path 
});
function update_item($summary, $details, $id) {
    $sql = "update item set summary = ?, details = ? where id = ?";
    DB::update($sql, array($summary, $details, $id));
    }


// add item action and function
Route::post('add_item_action', function (){
    $summary = request('summary');
    $details = request('details');
    $id = add_item($summary, $details);
    if ($id){
        return redirect (url("item_detail/$id"));     // this will redirect to item details. url() for absolute path 
    } else {
        die ("Error while updating item.");
    }
});
function add_item($summary, $details){
    $sql = "insert into item (summary, details) values (?,?)";
    DB::insert($sql, array($summary, $details));
    $id = DB::getPdo()->lastInsertId();     //DB::getPdo()->lastInsertId()to fetch last inserted item's id
    return ($id);
}


