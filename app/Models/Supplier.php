<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = "suppliers";
    protected $fillable = ['name','cell_number','street_address'];
    protected $guarded = ['id','created_at', 'updated_at'];
}
