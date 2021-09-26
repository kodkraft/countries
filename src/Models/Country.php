<?php

namespace Kodkraft\Countries\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  int $id
 * @property  string $name
 * @property  string $alpha2Code
 * @property  string $alpha3Code
 * @property  array $callingCodes
 * @property  string $capital
 * @property  array $altSpellings
 * @property  string $region
 */
class Country extends Model
{
    protected $fillable = ['alpha3Code', 'alpha2Code', 'name', 'callingCodes'];
    protected $casts = [
        'callingCodes' => 'array',
        'altSpellings' => 'array'
    ];

}
