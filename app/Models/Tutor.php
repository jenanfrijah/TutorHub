<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Subject;



class Tutor extends Model
{
    use SoftDeletes;

    protected $table='tutors';

       protected $fillable = [
        'user_id',
        'bio',
        'profile_img'
    ];
    protected $dates = ['deleted_at'];

      public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class , 'subject_tutor','tutor_id', 'subject_id');
    }

}
