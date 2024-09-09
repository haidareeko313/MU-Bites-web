<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\cafe;
use App\Models\Category;
use App\Models\Food; // Import the Food model

class CafeCommand extends Command
{
    // ... rest of the code
    protected $signature = 'app:cafe';
    public function handle()
    {
        $food = Food::first(); // Use the Food model instead of food
        dd($food->ToArray()); 
    }
}