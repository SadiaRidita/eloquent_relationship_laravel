<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;
// Catagory.php

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'catagory_posts');
    }
}



