<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

    public $timestamps = false; //create and update gaada

    // protected $fillable = ['title','description']; //whitelist apa yang boleh di isi
    protected $guarded = []; //blacklist
}
