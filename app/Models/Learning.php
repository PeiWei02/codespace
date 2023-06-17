<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning extends Model
{
    use HasFactory;

    protected $primaryKey = 'learningID';

    protected $fillable = ['title', 'description', 'image_path','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    // public funciton sluggable(): array
    // {

    // }
}
