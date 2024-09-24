<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForEmploymentWeekly extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'telephone_no',
        'citizenship',
        'date_of_birth',
        'national_registration_no',
        'nis_no',
        'Masonry',
        'Carpentry',
        'Painting',
        'Electrical',
        'Plumbing',
        'Labourer',
        'Other',
        'work_experience',
        'education_qualification',
        'refereejob_name',
        'refereejob_address',
        'refereejob_lenght_of_time',
        'refereejob_name_2',
        'refereejob_address_2',
        'refereejob_lenght_of_time_2',
        'any_other_information',
        'signature',
        'date',
        'status',
    ];
}
