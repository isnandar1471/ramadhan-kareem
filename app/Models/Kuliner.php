<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;

	protected $table = 'kuliner';

	protected $fillable = [
		'nama',
		'urlFoto',
		'urlFotoAlt',
		'isi',
		'url',
	];
}
