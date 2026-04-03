<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopPayment extends Model
{
    protected $fillable = [
        'user_id',
        'product_name',
        'amount',
        'payment_status',
        'payment_method',
        'transaction_id',
        'paid_at',
    ];

    protected $casts = [
        'amount' => 'integer',
        'paid_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
