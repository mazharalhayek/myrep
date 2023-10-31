<?php

namespace App\Models;

use App\Models\InstitutionCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    use HasFactory;
    protected $fillable = ['category' , 'name' , 'order'];

    public function category (){
        return $this->belongsTo(InstitutionCategory::class);
    }
}
