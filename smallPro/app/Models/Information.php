<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table= 'informations';

    protected $fillable = ['user_id','father_name','mother_name','national_id','gender'];


}
