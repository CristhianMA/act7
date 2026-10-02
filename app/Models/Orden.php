<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'order_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class, 'order_id');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_orden');
    }
}