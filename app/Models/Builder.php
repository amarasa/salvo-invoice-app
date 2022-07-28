<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{
    use HasFactory;
    protected $table = 'builders';

    protected $fillable = [
        'builder_name', 'company_name', 'address_one', 'address_two',
        'city', 'state', 'zip', 'phone',
    ];

    public function homes()
    {
        return $this->hasMany(Home::class);
    }
}
