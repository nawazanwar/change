<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        $page_meta_description = __('change.home_page_meta_description');
        $page_meta_keywords = __('change.home_page_meta_keywords');
        $page_title = __('change.home_page_title');
        return view('home',
            compact(
                'page_meta_description',
                'page_meta_keywords',
                'page_title')
        );
    }
}
