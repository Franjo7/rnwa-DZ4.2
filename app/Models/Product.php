<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';

  protected $primaryKey = 'ProductID';

    protected $fillable = [
        'ProductName',
        'UnitPrice',
        'UnitsInStock',
        'UnitsOnOrder',
        'ReorderLevel',
        'Discontinued',
    ];

    public $timestamps = false;

    public $incrementing = true;

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'ProductID', 'ProductID');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'SupplierID', 'SupplierID');
    }

    use HasFactory;
}
