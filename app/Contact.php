<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    public $table = 'contacts';

    public $fillable = [
        'id',
        'name',
        'activity',
        'mobile',
        'email',
        'created_at',
        'last_contact',
        'status'
    ];
}
