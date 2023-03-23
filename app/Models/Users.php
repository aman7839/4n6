<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'user_name',
        'password',
        'image',
        'school_email_address',
        'personal_email_address',
        'name',
        'school_phone_no',
        'school_name',
        'personal_phone_no',
        'school_address',
        'assistant_coach_name',
        'school_city',
        'assistant_coach_email_address',
        'school_state',
        'school_zip_code',
        'billing_contact_name',
        'billing_email_address',
        'billing_phone_no',
        'role_as',
        
       ];

       
       
     
}
