<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobPosting extends Model
{
    use HasUuids;
    //

    protected $fillable = [
        'title',
        'description',
        'salary',
        'date',
        'classification',
        'location',
        'company_id'
    ];
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
