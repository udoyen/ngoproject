<?php

namespace ebs_george_udosen;

use Illuminate\Database\Eloquent\Model;

class Business_Category extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}
