<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
            
        use HasFactory;

        protected $fillable = ['name', 'status', 'occupancy', 'description', 'type', 'article_number'];
}

