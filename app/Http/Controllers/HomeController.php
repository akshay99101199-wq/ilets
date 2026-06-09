<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('abouts');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function services()
    {
        return view('services');
    }
    public function pteonline()
    {
        return view('pteonline');
    }

    public function pteoffline()
    {
        return view('pteoffline');
    }

    public function german()
    {
        return view('german');
    }

    public function ielts()
    {
        return view('ilets');
    }

    public function englishonline()
    {
        return view('englishonline');
    }
    public function englishoffline()
    {
        return view('englishoffline');
    }
    public function support()
    {
        return view('support');
    }
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

     public function termCon()
    {
        return view('term-condition');
    }

     public function blogDetail()
    {
        return view('blog-detail');
    }
    
    public function visa(){
        return view('visa');
    }
}
