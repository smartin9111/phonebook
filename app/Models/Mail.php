<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = ['email'];

    public function phonebook()
    {
        return $this->belongsTo(Phonebook::class, 'emailid', 'id');
    }
    use HasFactory;
}