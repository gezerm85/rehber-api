<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birim extends Model
{
    use HasFactory;

    protected $table = 'birimler';

    protected $fillable = [
        'birim_adı',
        'konum',
    ];

    /**
     * Get the users that belong to this unit.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
