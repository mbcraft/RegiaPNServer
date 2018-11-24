<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use Mbcraft\Laravel\Routing\HttpError;
use View;

class PagesController extends Controller {

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

    public function showHome() {

        return View::make('admin/index');
        
    }

    public function showView($name = null) {

        if (View::exists('admin/' . $name)) {
            return View::make('admin/' . $name);
        } else {
            return HttpError::not_found("View ".$name." not found.");
        }
    }

    public function showFrontEndView($name = null) {

        if (View::exists($name)) {
            return View::make($name);
        } else {
            return HttpError::not_found("View ".$name." not found.");
        }
    }
}