<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'story',
        'url',
        'user_id',
    ];
    // public function avatar(){
    //     $avatarPath = ($this->avatar) ? $this->avatar : 'assets/images/notimage.jpg';

    //     return '/storage/' . $avatarPath;
    // }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
