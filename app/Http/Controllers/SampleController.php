<?php namespace App\Http\Controllers;

class SampleController extends Controller {

    public function index() {
        return view('sample.index');
    }

    public function csrf() {
        return view('sample.csrf');
    }

}