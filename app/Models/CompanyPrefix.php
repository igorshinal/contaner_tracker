<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPrefix extends Model
{
    protected $fillable = [
        'company_id',

        'prefix'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
