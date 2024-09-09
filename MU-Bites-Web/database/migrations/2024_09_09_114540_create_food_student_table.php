<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodStudent extends Model
{
    protected $table = 'food_student'; // Specify the table name

    protected $fillable = ['student_id', 'food_id', 'quantity', 'purchase_date'];

    // Optionally, you can define relationships here if needed
}
