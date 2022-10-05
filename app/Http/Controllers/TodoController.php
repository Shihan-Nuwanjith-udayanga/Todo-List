<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $task;

    public function __construct(){
        $this->task = new Todo();
    }

    public function index(){

        $response['tasks']=$this->task->all();
        // dd($response);
        return view('pages\todo\index')->with($response);
    }

    public function store(Request $request){
        // dd($request);
       $this->task->create($request->all());

        // $this->task->title = $request->title;
        // $this->task->save();

        return redirect()->back();
        // return redirect()->route('home');
    }
}
