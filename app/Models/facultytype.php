<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class facultytype extends Model
{
    protected $table = "tbl_faculty_types";
    protected $fillable = ["faculty_type","dd_status"];
}
