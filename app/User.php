<?php

namespace App;

use DGvai\Review\Reviewable;
// use Cmgmyr\Messenger\Traits\Messagable;
use Laravel\Passport\HasApiTokens;
use Musonza\Chat\Traits\Messageable;
use Inani\Messager\Helpers\TagsCreator;
use Illuminate\Notifications\Notifiable;
use Inani\Messager\Helpers\MessageAccessible;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, MessageAccessible, TagsCreator, Reviewable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'title', 'location', 'rate', 'mobile', 'description', 'cover_pic'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }

    public function bids()
    {

        return $this->hasMany("App\Bid");
    }
    public function attachments()
    {
        return $this->morphMany('App\Attachment', 'attachee');
    }
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
