<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    //список полей для заполнения Тест Контроллере
    // public $timestamps = false; 
    protected $fillable = ['name','str'];
}