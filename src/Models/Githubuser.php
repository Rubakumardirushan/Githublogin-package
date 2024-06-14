<?php

namespace Dirushan\Githublogin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Githubuser extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'github_id'];
}
