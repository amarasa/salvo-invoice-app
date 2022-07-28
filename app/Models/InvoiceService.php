<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceService extends Model
{
    protected $table = 'services';
    use HasFactory;

    protected $fillable = [
        'service_detail',
        'service_type',
        'cost',
        'quantity',
        'total'
    ];

    public function homes()
    {
        return $this->belongsTo(Homes::class);
    }
}
