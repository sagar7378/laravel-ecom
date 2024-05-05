<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Customer extends Model implements Authenticatable
{
    use AuthenticableTrait;

    // The table associated with the model.
    protected $table = 'customers';

    // The primary key associated with the table.
    protected $primaryKey = 'id';

    // Indicates if the model should be timestamped.
    public $timestamps = false;

    // Fillable fields for mass assignment.
    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'password',
        'phone',
        'address',
        'city',
        'pincode',
    ];

    // Additional methods, relationships, and configurations can be added here.

   
}
?>
