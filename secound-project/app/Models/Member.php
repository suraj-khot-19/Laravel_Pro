<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //This is because Laravel is adding timestamp for column created_at and update_at Solution Either make a column’s or define this in a model

    public  $timestamps = false;
    use HasFactory;
}
