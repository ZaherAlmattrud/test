<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = ['title'];
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_project');
    }
}
