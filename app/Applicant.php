<?php

namespace ebs_george_udosen;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'age', 'sex', 'email', 'city', 'country_of_origin', 'Business_Category', 'registration_date'];
}
