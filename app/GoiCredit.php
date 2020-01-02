<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoiCredit extends Model
{
	use softDeletes;
    protected $table = 'Goi_credit';
}
