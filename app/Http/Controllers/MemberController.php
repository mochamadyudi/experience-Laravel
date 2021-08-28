<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){

        $args = [
            "title"=> "Member Area",
            'heading'=> 'Member Area',
            'subheading'=> '',
            'data'=> [1,2,3,4,5,6,7]
        ];
        return view('pages/member._index', $args);

    }
}
