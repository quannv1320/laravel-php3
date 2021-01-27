<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id');
    }

    public function orderDetail(){
        return $this->hasMany(
            OrderDetail::class, 'product_id'
        );
    }
    public function so_luong_da_ban()
    {
        $orderDetails = $this->orderDetail;
        $totalSellProduct = 0;
        foreach($orderDetails as $item){
            $totalSellProduct += $item->quantity;
        }
        return $totalSellProduct;
    }
}
