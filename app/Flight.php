<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'name_book','pre_book','photo_book','pdf_book','desc','cat_id','categoriesofdoctors_id','basicmanagements_id','cvscurriculums_id','diabetescurriculums_id','respiratorycurriculums_id','oncolcgycurriculums_id','miscellaneouscurriculums_id'
    ];
}
