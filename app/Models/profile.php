<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    // Disable mass addignment
    protected $guarded = []; // it worked with me without this but the supervisor insisted

    function profileImage()
    {
        return ($this->image) ? '/storage/' . $this->image : '/storage/profile/defoultImage.jpg';
    }
    public function user()
    {
        return $this->belongsTo(User::class); // one to one relationship
    }
    public function followers()
    {
        return $this->belongsToMany(User::class); // many to many relationship
    }
}
