<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




/* --------------------------------------------------------------- */

// $nsc = name space controller
$nsc = 'App\Http\Controllers\\';

/* --------------------------------------------------------------- */

// $c = controller
$c = 'AuthController@';

// get all
Route::get		('auth'			, $nsc . $c . 'index');
// get 1
Route::get		('auth/{auth}'	, $nsc . $c . 'show');
// store 1
Route::post		('auth'			, $nsc . $c . 'store');
// update 1
Route::patch	('auth/{auth}'	, $nsc . $c . 'update');
// delete 1
Route::delete	('auth/{auth}'	, $nsc . $c . 'destroy');

/* --------------------------------------------------------------- */

// override
$c = 'ArtikelController@';

// get all
Route::get		('artikel'			, $nsc.$c. 'index');
// get 1
Route::get		('artikel/{artikel}', $nsc.$c. 'show');
// store 1
Route::post		('artikel'			, $nsc.$c. 'store');
// update 1
Route::patch	('artikel/{artikel}', $nsc.$c. 'update');
// delete 1
Route::delete	('artikel/{artikel}', $nsc.$c. 'destroy');

/* ---------------------------------------------------------------- */

// override
$c = 'KulinerController@';

// get all
Route::get		('kuliner'				, $nsc.$c. 'index');
// get 1
Route::get		('kuliner/{kuliner}'	, $nsc.$c. 'show');
// store 1
Route::post		('kuliner'				, $nsc.$c. 'store');
// update 1
Route::patch	('kuliner/{kuliner}'	, $nsc.$c. 'update');
// delete 1
Route::delete	('kuliner/{kuliner}'	, $nsc.$c. 'destroy');

/* --------------------------------------------------------------- */

// override
$c = 'KegiatanController@';

// get all
Route::get		('kegiatan'				, $nsc.$c. 'index');
// get 1
Route::get		('kegiatan/{kegiatan}'	, $nsc.$c. 'show');
// store 1
Route::post		('kegiatan'				, $nsc.$c. 'store');
// update 1
Route::patch	('kegiatan/{kegiatan}'	, $nsc.$c. 'update');
// delete 1
Route::delete	('kegiatan/{kegiatan}'	, $nsc.$c. 'destroy');





Route::get('', function ()	{
	$resp = [
		[
			'tabel' => 'auth',
			'kolom' => [
				'id',
				'username',
				'password',
				'created_at',
				'updated_at'
			],
			'fillable' => [
				'username',
				'password'
			],
			'route' => [
				'get all'   => [
					'endpoint' => '/api/auth',
					'method'   => 'GET'
				],
				'get 1'     => [
					'endpoint' => '/api/auth/{id}',
					'method'   => 'GET'
				],
				'insert 1 ' => [
					'endpoint' => '/api/auth/{id}',
					'method'   => 'POST'
				],
				'update 1'  => [
					'endpoint' => '/api/auth/{id}',
					'method'   => 'PATCH'
				],
				'delete 1'  => [
					'endpoint' => '/api/auth/{id}',
					'method'   => 'DELETE'
				]
			]
		],
		[
			'tabel' => 'artikel',
			'kolom'    => [
				'id',
				'judul',
				'penulis',
				'isi',
				'url',
				'created_at',
				'updated_at'
			],
			'fillable' => [
				'judul',
				'penulis',
				'isi',
				'url'
			],
			'route'    => [
				'get all'   => [
					'endpoint' => '/api/artikel',
					'method'   => 'GET'
				],
				'get 1'     => [
					'endpoint' => '/api/artikel/{id}',
					'method'   => 'GET'
				],
				'insert 1 ' => [
					'endpoint' => '/api/artikel/{id}',
					'method'   => 'POST'
				],
				'update 1'  => [
					'endpoint' => '/api/artikel/{id}',
					'method'   => 'PATCH'
				],
				'delete 1'  => [
					'endpoint' => '/api/artikel/{id}',
					'method'   => 'DELETE'
				]
			]
		],
		[
			'tabel' => 'kegiatan',
			'kolom'    => [
				'id',
				'judul',
				'urlFoto',
				'urlFotoAlt',
				'isi',
				'url',
				'created_at',
				'updated_at'
			],
			'fillable' => [
				'judul',
				'urlFoto',
				'urlFotoAlt',
				'isi',
				'url'
			],
			'route'    => [
				'get all'   => [
					'endpoint' => '/api/kegiatan',
					'method'   => 'GET'
				],
				'get 1'     => [
					'endpoint' => '/api/kegiatan/{id}',
					'method'   => 'GET'
				],
				'insert 1 ' => [
					'endpoint' => '/api/kegiatan/{id}',
					'method'   => 'POST'
				],
				'update 1'  => [
					'endpoint' => '/api/kegiatan/{id}',
					'method'   => 'PATCH'
				],
				'delete 1'  => [
					'endpoint' => '/api/kegiatan/{id}',
					'method'   => 'DELETE'
				]
			]
		],
		[
			'tabel' => 'kuliner',
			'kolom'    => [
				'id',
				'nama',
				'urlFoto',
				'urlFotoAlt',
				'isi',
				'url',
				'created_at',
				'updated_at'
			],
			'fillable' => [
				'nama',
				'urlFoto',
				'urlFotoAlt',
				'isi',
				'url'
			],
			'route'    => [
				'get all'   => [
					'endpoint' => '/api/kuliner',
					'method'   => 'GET'
				],
				'get 1'     => [
					'endpoint' => '/api/kuliner/{id}',
					'method'   => 'GET'
				],
				'insert 1 ' => [
					'endpoint' => '/api/kuliner/{id}',
					'method'   => 'POST'
				],
				'update 1'  => [
					'endpoint' => '/api/kuliner/{id}',
					'method'   => 'PATCH'
				],
				'delete 1'  => [
					'endpoint' => '/api/kuliner/{id}',
					'method'   => 'DELETE'
				]
			]
		]
	];
	return response()->json( $resp );
});
