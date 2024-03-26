<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'lastname', 
        'firstname',
          'jshshir',
            'phone',
        'region_id',
      'district_id',
       'quarter_id',
          'street',
        'privilege',
       'fakultet_id',
         'group_id',
            'kurs',
   'privilege_file',
    ];
}
