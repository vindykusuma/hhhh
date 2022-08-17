<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function jenisfoto() {
        return $this->belongsTo(Jenisfoto::class);
    }

    public function pesanan()
    {
        return $this->HasOne(Pesanan::class);
    }
}
