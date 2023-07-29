<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    // Disable mass addignment
    protected $guarded = []; // it worked with me without this but the supervisor insisted
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
