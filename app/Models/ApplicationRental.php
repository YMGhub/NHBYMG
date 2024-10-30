<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationRental extends Model
{
    use HasFactory;


    protected $fillable = [
        'applicant_surname',
        'applicant_first',
        'applicant_middle',
        'applicant_address',
        'co_applicant_surname',
        'co_applicant_name',
        'co_applicant_middle',
        'co_applicant_address',
        'national_registration_number',
        'employer',
        'occupation',
        'citizenship',
        'income',
        'telephone',
        'size_of_family',
        'adults',
        'children',
        'own_landorproperty',
        'state_address',
        'financial_institution',
        'give_details',
        'occupedaunit',
        'photograph',
        'addmore',
        'tenantorlodger',
        'addressoflandlord',
        'present_accommodation',
        'structureofhouse',
        'rental_date',
        'typeofsanityfacilities',
        'water_supply',
        'housingofficercomments',
        'acknowledged',
        'dayof',
        'year',
        'by',
        'keysreceived',
        'thiskeys',
        'dayofkeys',
        'yearkeys',
        'whitnessed',
        'thiswhitnessed',
        'dayofwhitnessed',
        'yearwhitnessed',
        'housingofficer',
        'signatures',
        'datedthis',
        'dayofdatedthis',
        'yeardatedthis'
    ];
}