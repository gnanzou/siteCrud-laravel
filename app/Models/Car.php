<?php

namespace App\Models;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = ['marque','categorie', 'model', 'couleur', 'annee', 'prix', 'telephone'];

    public function images(){
        return $this->hasMany(Image::class, 'car_id');
    }
    
}
