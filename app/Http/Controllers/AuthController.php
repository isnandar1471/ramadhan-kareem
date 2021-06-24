<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
	/**
	 * Fungsi Untuk Login
	 * 
	 */
	public function login(Request $request)
	{
		$user = Auth::where('username', $request->username)
			->where('password', $request->password)
			->first();
		if (!$user) {
			return response()->json([
				"message" => "Gagal login"
			], 401);
		};

		// $token = $user->createToken("token.name")->plainTextToken;
		$token = $user->createToken("token.name");
		$idtoken = explode("|", $token->plainTextToken)[0];

		$tokenTable = DB::table("personal_access_tokens")->where("id", $idtoken)->first();
		return
			response()
			// view("admin/admin")
			->json([
				"message" => "Berhasil login",
				"username" => $request->username,
				"token" => $tokenTable->token
			], 200);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return Auth::all();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		return Auth::create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Auth  $auth
	 * @return \Illuminate\Http\Response
	 */
	public function show(Auth $auth)
	{
		return Auth::find($auth->id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Auth  $auth
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Auth $auth)
	{
		return Auth::find($auth->id)->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Auth  $auth
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Auth $auth)
	{
		return Auth::destroy($auth->id);
	}
}
