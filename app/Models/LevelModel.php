<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserModel;

class LevelModel extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'm_level';

    // Primary key
    protected $primaryKey = 'level_id';

    // Kolom yang boleh diisi
    protected $fillable = [
        'level_nama',
    ];

    // Relasi ke User: 1 level punya banyak user
    public function users()
    {
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}
