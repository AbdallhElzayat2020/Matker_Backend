<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    // has many Products one to Many
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    protected $fillable =[
      'name'  
    ];
    
    protected $table ='categories';
}
