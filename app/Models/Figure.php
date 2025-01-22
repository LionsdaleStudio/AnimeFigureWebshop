<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Figure extends Model
{
    /** @use HasFactory<\Database\Factories\FigureFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',        // Name of the item
        'price',       // Price of the item
        'description', // Description of the item
        'origin',      // Origin of the item
        'limited',     // Whether the item is limited edition (boolean)
        'quantity',    // Quantity available
    ];
}
