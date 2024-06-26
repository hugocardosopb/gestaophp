<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{   
    use SoftDeletes;
    use HasFactory;

    protected $table = 'fornecedors';
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
