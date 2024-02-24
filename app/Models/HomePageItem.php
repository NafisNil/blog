<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageItem extends Model
{
    use HasFactory;
    protected $fillable = ['banner_title','banner_person_name','banner_person_designation','banner_description','banner_button_text','banner_button_url','banner_photo','testimonial_subtitle','testimonial_title'];
}
