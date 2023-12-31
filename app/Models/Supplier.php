<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';

    protected $fillable = [
        'name',
        'description',
        'email',
        'telephone',
        'address',
        // 'deleted_at'
    ];

    public function product() {
        return $this->hasMany(Product::class,'category_id', 'id');
    }
}
