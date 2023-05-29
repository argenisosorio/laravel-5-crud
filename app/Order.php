<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\Supplier;
use App\Product;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = [
        'supplier_id',
        'product',
        'brand_id',
        'quantity',
        'price',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
