<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;

class Link extends Model
{
    use HasFactory;

    /**
     * @var array
    */
    protected $fillable = [
        'seller',
        'call_date',
        'lead_id'
    ];

    protected $dates = [
        'call_date',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lead()
    {
        return $this->belongsTo(Lead::class, 'lead_id');
    }

}
