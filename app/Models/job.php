<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\In;

class Job extends Model {

    protected $table = 'job_listings';

    protected $fillable = ['title','salary'];

}
