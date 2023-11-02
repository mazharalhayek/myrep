<?php

namespace App\Models;

use App\Models\InstitutionCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institutions extends Model
{
    use HasFactory;
    protected $fillable = ['category_id' , 'name' , 'order'];


    //each institution has one category.
    public function category()
    {
        return $this->hasOne(InstitutionCategory::class, 'id','category_id');
    }


}
