<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    // use HasFactory;
    protected $table = 'produits';
    protected $primaryKey = 'id';
    protected $fillable = ['categories_id', 'user_id', 'libelle', 'qte', 'prix', ];

    public static $rules = [
        'categories_id' =>'required|integer',
        'user_id' =>'required|bigInteger',
        'libelle' =>'min:2',
        'qte' =>'integer',
        'prix' =>'numeric',
    ];

    public function categories(){
        return $this->belongsTo('App\Categories');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}

