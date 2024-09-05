<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusIdentity extends Model
{
    use HasFactory;

    protected $table = 'campus_identities';

    protected $fillable = [
        'campus_name',
        'abbreviated_name',
        'campus_logo',
        'campus_email',
        'campus_telephone',
        'address',
        'campus_twitter',
        'campus_instagram',
        'campus_linkedin',
        'campus_youtube',
    ];

}
