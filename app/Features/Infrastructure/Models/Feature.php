<?php

namespace App\Features\Infrastructure\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'enabled',
    ];

    protected function casts(): array {
        return [
            'enabled' => 'boolean',
        ];
    }
}
