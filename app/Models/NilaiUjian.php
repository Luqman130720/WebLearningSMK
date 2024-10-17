<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiUjian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriSoal::class, 'kategori_id');
    }

   public function user()
    {
        return $this->belongsTo(User::class);
    }
}
