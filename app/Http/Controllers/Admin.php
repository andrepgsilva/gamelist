<?php
    namespace gamelist\Http\Controllers;

    class Admin extends Controller
    {
        public function home()
        {
            return view('admin.home');
        }
    }
