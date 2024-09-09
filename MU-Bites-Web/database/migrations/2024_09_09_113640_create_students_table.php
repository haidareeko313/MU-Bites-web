<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password']; // Add fields as needed

    // Many-to-many relationship with Food
    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_student')
                    ->withPivot('quantity', 'purchase_date')
                    ->withTimestamps();
    }
}
