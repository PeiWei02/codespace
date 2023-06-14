<?php

namespace App\Models\Forum;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Forum extends Model
{
    use HasFactory;
    protected $guarded  = [
        'title', 'content', 'channel'

    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
