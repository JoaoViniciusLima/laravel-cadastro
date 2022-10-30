<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servicos;
class ServicosController extends Controller
{
    public function store(Request $request){
        $servicos = new Servicos;
        $csvfile = $request->csv;
        if (!($fp = fopen($csvfile, 'r'))) {
            die("Can't open file...");
        }
        
        //read csv headers
        $key = fgetcsv($fp,"1024",",");
        
        // parse csv rows into array
        $json = array();
            while ($row = fgetcsv($fp,"1024",",")) {
            $json[] = array_combine($key, $row);
        }
        
        // release file handle
        fclose($fp);
        
        // encode array to json
        //return json_encode($json);
      $servicos->servicos = json_encode($json);
      $servicos->save();
      return view('csvimport');
     } 
     public function csvpage(){    
        //$prestdados = Prest::all();
       
        return view('csvimport');
     }   
}