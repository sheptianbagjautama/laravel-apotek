<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $guarded = [
        'id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productTransaction()
    {
        return $this->belongsTo(ProductTransaction::class);
    }
}
