<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    public function builder()
    {
        return $this->belongsTo(Builder::class);
    }

    public function services()
    {
        return $this->hasMany(InvoiceService::class);
    }
}
