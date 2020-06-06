<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'adapter',
        'enabled',
        'priority'
    ];

    public function prefixes()
    {
        return $this->hasMany(CompanyPrefix::class);
    }

    public static function getOwnerByContainerNumber(string $containerNumber)
    {
        $prefix = substr($containerNumber, 0, 3);

        $prefixModel = CompanyPrefix::where('prefix', $prefix)->first();

        if ($prefixModel) {
            return $prefixModel->company;
        }

        return null;

    }
}
