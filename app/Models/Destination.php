<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'countryName',
        'conjonction',
        'computerName'
    ];

    public function quote(){
        return $this->hasMany(Quote::class);
    }
}
