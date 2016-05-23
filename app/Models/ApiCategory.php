<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiCategory extends Model
{
    //
    protected $table = 'api_category';

    protected $connection = 'mysql';

    protected $fillable = ['category_code', 'category_name', 'create_uid'];
}
