<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    public function Vaccine()
    {
        return $this->belongsTo(Vaccines::class);
    }
}
