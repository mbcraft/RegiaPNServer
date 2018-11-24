<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use View;

class GuestPagesController extends Controller {

    /**
     * Message bag.
     *
     * @var MessageBag
     */
    protected $messageBag = null;

    /**
     * Initializer.
     *
     * @return void
     */
    public function __construct() {
        // CSRF Protection
        $this->beforeFilter('csrf', array('on' => 'post'));

        //
        $this->messageBag = new MessageBag;
    }

    public function getHome() {
        
        return View::make('welcome');
        
    }
    
    public function getCredits() {
        
        return View::make('credits');
        
    }

}
