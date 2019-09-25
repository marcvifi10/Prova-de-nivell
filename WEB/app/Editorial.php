<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\OrderLine;
use App\ProductSize;
use App\TypeMass;
use App\Ingredient;
use App\Menu;
use App\Promotion;

class Editorial extends Model
{
    protected $fillable = ['nom','autor','editorial','preu'];

    public static function createRules() {
        return [
            'nom' => ['required', 'string'],
            'autor' => ['required', 'string'],
			'editorial' => ['required', 'string'],
            'preu' => ['required', 'decimal']
        ];
    }

    public function updateRules() {
        return Product::createRules();
    }


    public function orderline()
    {
        return $this->hasMany(OrderLine::class);
    }

    public function productsize()
    {
        return $this->belongsTo(ProductSize::class);
    }

    public function typemass()
    {
        return $this->belongsTo(TypeMass::class);
	}
}
