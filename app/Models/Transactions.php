<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    public function orders() {
return $this->belongsTo(Orden::class);
    }
}
