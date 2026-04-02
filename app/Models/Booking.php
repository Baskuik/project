<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'stay_id',
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'arrive_date',
        'leaving_date',
        'number_adults',
        'number_kids',
        'special_wish',
        'status',
        'total_price',
    ];

    protected function casts(): array
    {
        return [
            'arrive_date' => 'date',
            'leaving_date' => 'date',
            'number_adults' => 'integer',
            'number_kids' => 'integer',
            'total_price' => 'integer',
        ];
    }

    public function getFormattedTotalPriceAttribute(): string
    {
        return '€' . number_format($this->total_price / 100, 2, ',', '.');
    }

    public function stay(): BelongsTo
    {
        return $this->belongsTo(Stay::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function extras(): BelongsToMany
    {
        return $this->belongsToMany(Extra::class)
            ->withPivot(['quantity', 'unit_price'])
            ->withTimestamps();
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
}