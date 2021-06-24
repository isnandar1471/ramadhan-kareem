<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KulinerController;
use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// 	return $request->user();
// });
// Route::group(["middleware" => "auth:sanctum"], function () {
// 	Route::get('admin', function () {
// 		// return view('admin/admin');
// 		return response()->json([
// 			"message" => "berhasil ke halaman admin"
// 		]);
// 	});
// });



Route::post("cek_page", function (Request $request) {
	// $token = $request->token;

	$cek = DB::table("personal_access_tokens")->where("token", $request->old_token)->first();

	// $user = Auth::all();
	// $user = DB::table("personal_access_tokens")->get();
	// foreach ($user->tokens as $token) {
	// dump($cek);
	if (!$cek) {
		return response()->json([
			"message" => "not ok"
		]);
	};
	// };

	return response()->json([
		"message" => "ok"
	]);
});

/* --------------------------------------------------------------- */

// get all
Route::post('auth/login', [AuthController::class, 'login'])->name('login');;
// get all
Route::get('auth', [AuthController::class, 'index']);
// get 1
Route::get('auth/{auth}', [AuthController::class, 'show']);
// store 1
Route::post('auth', [AuthController::class, 'store']);
// update 1
Route::patch('auth/{auth}', [AuthController::class, 'update']);
// delete 1
Route::delete('auth/{auth}', [AuthController::class, 'destroy']);

/* --------------------------------------------------------------- */

// get all
Route::get('artikel', [ArtikelController::class, 'index']);
// get 1
Route::get('artikel/{artikel}', [ArtikelController::class, 'show']);
// store 1
Route::post('artikel', [ArtikelController::class, 'store']);
// update 1
Route::patch('artikel/{artikel}', [ArtikelController::class, 'update']);
// delete 1
Route::delete('artikel/{artikel}', [ArtikelController::class, 'destroy']);

/* ---------------------------------------------------------------- */

// get all
Route::get('kuliner', [KulinerController::class, 'index']);
// get 1
Route::get('kuliner/{kuliner}', [KulinerController::class, 'show']);
// store 1
Route::post('kuliner', [KulinerController::class, 'store']);
// update 1
Route::patch('kuliner/{kuliner}', [KulinerController::class, 'update']);
// delete 1
Route::delete('kuliner/{kuliner}', [KulinerController::class, 'destroy']);

/* --------------------------------------------------------------- */

// override
$c = 'KegiatanController@';

// get all
Route::get('kegiatan', [KegiatanController::class, 'index']);
// get 1
Route::get('kegiatan/{kegiatan}', [KegiatanController::class, 'show']);
// store 1
Route::post('kegiatan', [KegiatanController::class, 'store']);
// update 1
Route::patch('kegiatan/{kegiatan}', [KegiatanController::class, 'update']);
// delete 1
Route::delete('kegiatan/{kegiatan}', [KegiatanController::class, 'destroy']);





Route::get('', function () {
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
	return response()->json($resp);
});
