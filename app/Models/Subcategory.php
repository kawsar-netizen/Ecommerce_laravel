<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
        use HasFactory;
        protected $fillable = ['category_id','subcategory_name','subcat_slug',
    ];
    
        public function category(){
            return $this->belongsTo(Category::class);
        }
}
