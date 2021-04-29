<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey="student_id";
    public $fillable=['student_name'];
    protected $guard=[];
    public $timestamps=false;
}