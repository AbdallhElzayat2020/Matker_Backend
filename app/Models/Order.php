<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'offer',
        'status',
        'country_code'
    ];

    public function getStatusAttribute($value)
    {
        switch ($value) {
            case 0:
                return 'Pending';
            case 1:
                return 'Completed';
            case 2:
                return 'Canceled';
            default:
                return 'Unknown';
        }
    }
}
