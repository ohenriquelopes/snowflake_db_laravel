<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_client';
    protected $table = 'clients';
    protected $fillable = ['name', 'email'];

    public function salesOrder()
    {
        return $this->hasMany(SaleOrder::class, 'fk_id_client', 'id_client');
    }
}
