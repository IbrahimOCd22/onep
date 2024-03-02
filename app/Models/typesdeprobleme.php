<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typesdeprobleme extends Model
{
    use HasFactory;
    protected $fillable= ["nom_de_problemes","Type_Problemes_id"];
    protected $table="type_de_problemes";
    public function typeProblemes() {
        return $this->belongsTo(type_probleme::class);
        }
}
