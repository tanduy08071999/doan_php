<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CauHoi extends Model
{
    protected $table ='cau_hoi';
    use softDeletes;
}
