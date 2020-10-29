<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class EditoresController extends Controller
{
    //
    public function index(){
        
        $editores = Editor::paginate(4);
        return view('editores.index', [
            'editores'=>$editores
        ]);
    }
}