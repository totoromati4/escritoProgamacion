<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tareas extends Model
{
    use HasFactory;
    public $timestamp = true;
    use SoftDeletes;
    protected $table = "tareas";
}
