<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Exception;
use App\Models\Servicos;
class ServicosController extends Controller
{
    public function store(Request $request){
        
        //tranforma o csv em um json e manda para o banco
        try{
        $servicos = new Servicos;
        $csvfile = $request->csv;
        $fp = fopen($csvfile, 'r');
        $key = fgetcsv($fp,"1024",",");
        $json = array();
            while ($row = fgetcsv($fp,"1024",",")) {
            $json[] = array_combine($key, $row);
        }
        fclose($fp);
      $servicos->servicos = json_encode($json);
      $servicos->save();
      return view('csvimport');
    } catch(\Error){
        $pastainvalida = TRUE;
        return view('csvimport',['pastainvalida'=>$pastainvalida]);
    }
    
      return view('csvimport');
     } 
     public function csvpage(){    
        
       
        return view('csvimport');
     }   
}