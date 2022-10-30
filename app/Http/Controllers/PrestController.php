<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prest;
class PrestController extends Controller
{
    
    public function index() {
    return view('welcome',);
     }
     public function store(Request $request ) {
        $prest = new Prest;
        $prest->nome = $request->nome;
        $prest->telefone = $request->telefone;
        $prest->email = $request->email;
        $servicos='{}';
        $servico['nome'] = $request->serviço_nome;
        $servico['descricao'] = $request->serviço_descricao;
        $servico['valor'] = $request->serviço_valor;
        $servicos = json_decode($servicos, true);
        array_push( $servicos, $servico );
        $servico['nome'] = $request->serviço_nome2;
        $servico['descricao'] = $request->serviço_descricao2;
        $servico['valor'] = $request->serviço_valor2;
        array_push( $servicos, $servico );
        $servico['nome'] = $request->serviço_nome3;
        $servico['descricao'] = $request->serviço_descricao3;
        $servico['valor'] = $request->serviço_valor3;
        array_push( $servicos, $servico );
        $servicos = json_encode($servicos);
        $prest->servicos =$servicos;
        
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

         $requestImage = $request->file('imagem');

         $extension = $requestImage->extension();

         $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

         $requestImage->move(public_path('img/fotos'), $imageName);

         $prest->imagem = $imageName;

     }else{
      $prest->imagem = "foto não informada";
     }
        $prest->save();
        return redirect("/");
         }

         public function list(){
           
            $busca = request('busca');
            if(isset($busca)){
               $prestdados = Prest::where([
                  ['nome','like','%'.$busca.'%']
               ]
               )->get();
            }else{
               $prestdados = Prest::all();
            }

           
            return view('exibir',['prestdados'=>$prestdados]);
         }
         public function get_prestadores(){
            
        
         return Prest::all();

         }    
        
}