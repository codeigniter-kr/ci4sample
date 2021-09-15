<?php
namespace App\Controllers\Tutorial;

/**
 * Tutorial Home
 *
 * @author hoksi
 */
class Home extends \App\Controllers\BaseController
{
    public function index()
    {
        return $this->page();
    }
    
    public function page()
    {
        return view('tutorial/home', [
            'title' => 'Tutorial',
            'location' => 'example',
            'menu' => 'tutorial',
            'type' => 'page',
        ]);
    }

    public function news()
    {
        return view('tutorial/home', [
            'title' => 'Tutorial',
            'location' => 'example',
            'menu' => 'tutorial',
            'type' => 'news',
        ]);
    }
}