<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisaRequest extends Model
{
    use HasFactory;

    protected $table = 'visa_requests';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'nationality',
        'destination',
        'message',
        'skip_payment',
        'edit_token'
    ];

    protected $casts = [
        'skip_payment' => 'boolean',
    ];

    /**
     * Relationship with user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}