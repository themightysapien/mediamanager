<?php
namespace Themighty\Mediamanager\Http\Controllers;


use App\Http\Controllers\Controller;

class MediaController extends Controller {

    public function getHome(){
        return view("themighty/mediamanager::media.index");
    }
} 