<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalUjian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriSoal::class);
    }
}
