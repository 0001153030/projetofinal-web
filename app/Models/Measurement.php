<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        "weight",
        "systolic",
        "diastolic",
        "heart_rate",
        "temperature",
        "spo2",
        "notes",
        "measured_at",
    ];

    protected $casts = [
        "weight" => "float",
        "systolic" => "integer",
        "diastolic" => "integer",
        "heart_rate" => "integer",
        "temperature" => "float",
        "spo2" => "integer",
        "measured_at" => "datetime",
    ];
}
