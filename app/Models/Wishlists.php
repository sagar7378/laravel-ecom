<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    // Fillable fields for mass assignment.
    protected $table = 'wishlist';
    
    protected $fillable = [
        'user_id',
        'product_id',
    ];

    // Additional methods, relationships, and configurations can be added here.
}
?>
