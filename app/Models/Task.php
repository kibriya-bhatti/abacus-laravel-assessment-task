<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'task_created_at'
    ];
    //  accessors //
    public function getTaskCreatedAtAttribute()
    {
        if (session()->has("timezone") && session()->has("countryCode")) {
            date_default_timezone_set(session("timezone"));
            $created_at = "";
            $strtotime = $this->attributes['task_created_at'];
            $created_at .= date("F jS, Y", $strtotime);
            $created_at .= " at " . date("h:i A", $strtotime)."<br>";
            $created_at .= session("country")." (" . session("countryCode").")";
            return $created_at;
        }
    }

    public function setTaskCreatedAtAttribute()
    {
        if (session()->has("timezone") && session()->has("countryCode")) {
            date_default_timezone_set(session("timezone"));
            $this->attributes['task_created_at'] = time();
        }
    }
}
