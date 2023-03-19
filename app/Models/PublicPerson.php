<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicPerson extends Model
{
    use HasFactory;
    protected $table = 'public_persons';

    protected $fillable = [
        'deparment',
        'locality',
        'municipality',
        'name',
        'active_years',
        'type_person',
        'type_charge'
    ];
}
