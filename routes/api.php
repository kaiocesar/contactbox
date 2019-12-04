<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get( 'contacts', 'ContactsController@index' );

Route::post( 'contacts', 'ContactsController@store' );

Route::get( 'contacts/{contact_id}', 'ContactsController@show' );

Route::put( 'contacts/{contact_id}', 'ContactsController@update' );

Route::delete( 'contacts/{contact_id}', 'ContactsController@destroy' );
