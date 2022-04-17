<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InboxController extends Controller
{
    public function index()
    {
        return view('oa.inbox.index');
    }
}
