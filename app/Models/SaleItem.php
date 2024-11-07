<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_sale_item';
    protected $table = 'sales_item';
    protected $fillable = ['fk_id_sale_order', 'fk_id_product', 'quantity', 'price', 'subtotal'];

    public function saleOrder()
    {
        return $this->belongsTo(SaleOrder::class, 'fk_id_sale_order', 'id_sale_order');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'fk_id_product', 'id_product');
    }
}
