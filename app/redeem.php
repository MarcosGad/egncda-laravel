<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class redeem extends Model
{
    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'mr_mrs', 'dr', 'prof', 'nationality', 'passport', 'affiliation', 'mobile_no', 'type_of_attendance', 'type_of_contribution_submitted', 'conference_fee', 'email', 'title_of_the_contribution', 'conference_dinner', 'total_amount', 'money_order_issued_on', 'money_order_issued_to' 
    ];
}
