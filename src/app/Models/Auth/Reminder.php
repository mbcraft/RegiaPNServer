<?php

namespace App\Models\Auth;

use Cartalyst\Sentinel\Reminders\EloquentReminder;

class Reminder extends EloquentReminder {
    
    protected $table = "SENTINEL_reminders";
}