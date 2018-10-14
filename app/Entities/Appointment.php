<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id', 'user_id', 'start_time', 'finish_time', 'comments'
    ];

    public function employee()
    {
        return $this->belongsTo('App\Entities\Employee', 'employee_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Entities\User', 'user_id');
    }
}
