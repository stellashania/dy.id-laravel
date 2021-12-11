<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'description', 'price', 'rating'];

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'TransactionDetail')
            ->withPivot('quantity');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_details')
            ->withPivot('quantity');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
