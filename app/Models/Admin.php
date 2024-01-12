<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin;
use Hash;
use Auth;
class Admin extends Authenticatable
{
    use HasFactory;
}
