<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasUuids;

    protected $fillable = [
        'applicant_id',
        'job_posting_id',
        'cover_letter_path',
        'application_date'
    ];

    public function applicant()
    {
        return $this->belongsTo(User::class, 'applicant_id');
    }

    public function posting()
    {
        return $this->belongsTo(JobPosting::class);
    }
}
