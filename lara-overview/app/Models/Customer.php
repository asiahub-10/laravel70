<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'phone', 'age', 'gender', 'image'])]
class Customer extends Model
{
    // protected $table = 'sale_customers';
}
