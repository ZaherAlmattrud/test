<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $fillable = ['name', 'email'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'company_project');
    }
}
