<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     use HasFactory;

     protected $table = 'job_list';

     protected $fillable = [
          'title',
          'company',
          'salary',
          'date',
          'emp_id',
     ];

     public function employe()
     {
          return $this->belongsTo(Employe::class, 'emp_id');
     }

     public function tags()
     {
          return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_id');
     }
}
