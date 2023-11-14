<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    protected $fillable = [
        'name',
        'phonenumberid',
        'emailid',
        'imgUrl',
        'address',
        'correspondence_address',
    ];

    protected $casts = [
        'phonenumberid' => 'integer',
        'emailid' => 'integer',
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class, 'phonenumberid', 'id');
    }

    public function mail()
    {
        return $this->hasOne(Mail::class, 'emailid', 'id');
    }

    use HasFactory;
}
