<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyWorkApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_for_the_post',
        'surname',
        'christian_names',
        'permanent_address',
        'telephone_no',
        'date_of_birth',
        'nationality',
        'national_registration_no',
        'national_insurance_no',
        'addmore1',
        'addmore2',
        'addmore3',
        'addmore4',
        'addmore5',
        'name_personal_1',
        'address_personal_1',
        'occupation_personal_1',
        'length_personal_1',
        'name_personal_2',
        'address_personal_2',
        'occupation_personal_2',
        'length_personal_2',
        'name_testimonial_1',
        'address_testimonial_1',
        'occupation_testimonial_1',
        'name_testimonial_2',
        'address_testimonial_2',
        'occupation_testimonial_2',
        'signature',
        'any_other_information',
        'date'

    ];
}