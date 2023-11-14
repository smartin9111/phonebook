<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonenumber extends Model
{
    
    protected $fillable = ['number'];

    public function phonebook()
    {
        return $this->belongsTo(Phonebook::class, 'phonenumberid', 'id');
    }
    use HasFactory;
}