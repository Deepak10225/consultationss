<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'scheduled_at'];

public function user()
{
    return $this->belongsTo(User::class);
}

}
