<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_product';
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'quantity'];

    public function salesItem()
    {
        return $this->hasMany(SaleItem::class, 'fk_id_product', 'id_product');
    }
}
