<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    
    use HasFactory;

    // マスアサインメントを許可するプロパティ
    protected $fillable = ['name'];
}
