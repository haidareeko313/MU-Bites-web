<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_student')
                    ->withPivot('quantity', 'purchase_date')
                    ->withTimestamps();
    }
}
