<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        return view('register');
    }

    public function downloadFile($filename)
    {
        $myFile = public_path("files/". $filename . ".pdf");

        return response()->download($myFile);
    }

}
