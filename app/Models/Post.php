<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable = [
        'user_id',
        'title',
        'type',
        'visibility',
        'highlight_title',
        'date',
        'description',
        'video_url',
        'image',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owned_by');
    }
    public function manager()
    {
        return $this->belongsTo(User::class, 'managed_by');
    }
     public function creater()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
