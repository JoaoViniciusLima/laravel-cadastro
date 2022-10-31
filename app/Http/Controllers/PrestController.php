<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prest;
class PrestController extends Controller
{
    
    public function index() {
    return view('cadastro',);
     }
     public function store(Request $request ) {
      //mandando os dados do formulario para o banco
        $prest = new Prest;
        $prest->nome = $request->nome;
        $prest->telefone = $request->telefone;
        $prest->email = $request->email;
        //criando um json com os serviços
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
        //verificando se a imagem foi informada,salvando ela em uma pasta e mandando a path para o banco
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
           //caso o usuario tenha feito uma busca procura pelo 
           //prestador que ele tenha buscado  
            $busca = request('busca');
            if(isset($busca)){
               $prestdados = Prest::where([
                  ['nome','like','%'.$busca.'%']
               ]
               )->get();
            }else{
               $prestdados = Prest::all();
            }
            //mostra os prestadores cadastrados

            return view('exibir',['prestdados'=>$prestdados]);
         }
         public function get_prestadores(){
            
        
         return Prest::all();

         } 
         public function destroy($id){
            Prest::findOrFail($id)->delete();
          
            return redirect('/exibir');
   
            }       
        
}