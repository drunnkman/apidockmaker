<?php

namespace Druunkman\Apidockmaker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiDocumentController extends Controller
{
    public function add($a, $b){
        $result = $a + $b;
        return view('apidocmaker::add', compact('result'));
    }

    public function subtract($a, $b){
        echo $a - $b;
    }
}
