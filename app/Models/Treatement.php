<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatement extends Model
{
    use HasFactory;
    protected $table = "Treatment";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "drug",
        "dose",
        "duration",
        "consultationId"
    ];
}
