<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;
    public $timestamps=true;
    protected $guarded=[];

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }


    public function job(){
        return $this->belongsTo(JobPost::class);
    }

}
