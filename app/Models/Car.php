<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function scopeFilter($query, array $filters) {
        if($filters['brand'] ?? false) {
            $query->where('brand', 'like', '%' . request('brand') . '%');
        }
        if($filters['price-from'] ?? false) {
            $query->where('price', '>=', request('price-from'));
        }
        if($filters['price-upto'] ?? false) {
            $query->where('price', '<=', request('price-upto'));
        }
        if($filters['prod_year-from'] ?? false) {
            $query->where('prod_year', '>=', request('prod_year-from'));
        }
        if($filters['prod_year-upto'] ?? false) {
            $query->where('prod_year', '<=', request('prod_year-upto'));
        }
        if($filters['km-from'] ?? false) {
            $query->where('km', '>=', request('km-from'));
        }
        if($filters['km-upto'] ?? false) {
            $query->where('km', '<=', request('km-upto'));
        }
        if($filters['power-from'] ?? false) {
            $query->where('power', '>=', request('power-from'));
        }
        if($filters['power-upto'] ?? false) {
            $query->where('power', '<=', request('power-upto'));
        }
        if($filters['type'] ?? false) {
            $query->where('type', 'like', '%' . request('type') . '%');
        }
        if($filters['fuel'] ?? false) {
            $query->where('fuel', 'like', '%' . request('fuel') . '%');
        }
        if($filters['gearbox'] ?? false) {
            $query->where('gearbox', 'like', '%' . request('gearbox') . '%');
        }
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
