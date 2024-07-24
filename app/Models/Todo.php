<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;


    public $table = "aktifitas.todo";

    protected $fillable = [
        "id",
        "todo",
        "keterangan",
    ];
}
