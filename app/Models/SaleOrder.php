<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleOrder extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_sale_order';
    protected $table = 'sales_order';
    protected $fillable = ['fk_id_client', 'data_order','total'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'fk_id_client', 'id_client');
    }

    public function salesItem()
    {
        return $this->hasMany(SaleItem::class, 'fk_id_sale_order', 'id_sale_order');
    }
}
