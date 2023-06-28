<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'siteId',
        'destinationId',
        'dateQuoted'
    ];

    public function destination(){
        return $this->belongsToMany(Destination::class);
    }

    public function site(){
        return $this->belongsToMany(Site::class);
    }
}
