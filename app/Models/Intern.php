<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;


    protected $fillabes = [
        'title',
        'slug',
        'description',
        'position',
        'address',
        'type',
        'status',
        'lastdate'
    ];

    public function company(){
        return $this->belongsTo('App\Company');
    }
}