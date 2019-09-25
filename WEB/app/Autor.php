<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\OrderLine;
use App\Llibre;
use App\TypeMass;
use App\Ingredient;
use App\Menu;
use App\Promotion;
use App\Autor;

class Autor extends Model
{
    protected $fillable = ['nom'];

    public static function createRules() {
        return [
            'nom' => ['required', 'string']
        ];
    }

    public function updateRules() {
        return Autor::createRules();
    }
}
