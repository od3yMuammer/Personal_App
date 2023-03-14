<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;

class ProcesesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proceses = Process::orderBy('created_at','DESC')->get();
        return view('admin.proceses_log.index',compact('proceses'));
    }
}
