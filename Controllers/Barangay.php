<?php

namespace App\Controllers;

class Barangay extends BaseController
{
    public function dashboard()
    {
        return view('Dashboard');
    }

    public function residents_list()
    {
        return view('Residents_list');

    }
    
    public function certificates()
    {
        return view('Certificates');

    }

    public function services()
    {
        return view('Services');

    }

    public function mapping()
    {
        return view('Mapping');

    }


}
