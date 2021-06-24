<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Auth extends Model
{
	use HasApiTokens, Notifiable, HasFactory;

	protected $table = 'auth';

	protected $fillable = [
		'username',
		'password'
	];
}
