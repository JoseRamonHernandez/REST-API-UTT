<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos_egresados extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'lastname', 'email', 'password', 'specialty', 'generation', 'dateOfBirthday', 'phoneNumber'];
}
