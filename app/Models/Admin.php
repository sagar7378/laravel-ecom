<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends Model implements Authenticatable
{
    use AuthenticableTrait;

    // The table associated with the model.
    protected $table = 'admins';

    // The primary key associated with the table.
    protected $primaryKey = 'id';

    // Indicates if the model should be timestamped.
    public $timestamps = false;

    // Fillable fields for mass assignment.
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Additional methods, relationships, and configurations can be added here.
}
?>
