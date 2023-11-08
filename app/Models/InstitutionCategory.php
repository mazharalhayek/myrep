<?php

namespace App\Models;

use App\Models\Institutions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'order'];

    public function Institutions(){
        return $this->hasMany(Institutions::class);
    }

}
