<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestadores</title>
    <style>
          body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
     .divmae{
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        width: 100%;
        height: 100%;
        flex-wrap:wrap;
        

     } 
     .inputbusca{
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        width: 100%;
        height: 100%;
        
        

     } 
     a{
        color:black;
        text-decoration:none;
        
     }
     li{
        margin-top:3px;
     }
     .divfilho{
        margin-left: 2%; 
        border: 5px solid black;
        padding: 2px;
        width: 25%;
     }  
     .deletebutton{
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        width: 100%;
     }
    </style>
</head>
<body>
<nav>
       <ul>
        <li >
            <a href="/">cadastro de prestadores</a>
        </li>
        <li >
            <a href="/csv">importar csv</a>
        </li>
       </ul> 
    </nav> 
    @if($prestdados)
    <div class="inputbusca">
        <form action="buscar" method="GET">
            <input type="text" id="busca" name="busca" placeholder="buscar prestador">
            <br>
            <input type="submit" class="btn btn-primary" value="buscar">
        </form>
    </div>
<div class='divmae'>
    @foreach($prestdados as $prestador)
    <div class='divfilho'>
        @if($prestador->imagem !="foto não informada" )
        <p>foto:</p>
     <img src="/img/fotos/{{ $prestador->imagem }}" alt="foto" width= 80px;>
     @else
     <p>foto não informada</p> 
     @endif  
    <p>nome: {{$prestador->nome}}</p>
    <p>numero: {{$prestador->telefone}}</p>
    <p>email: {{$prestador->email}}</p>
    @foreach(json_decode($prestador->servicos,TRUE) as $servico)
    @if(isset($servico['nome']))
    <p>nome do serviço: {{$servico['nome']}}</p>
    @endif
    @if(isset($servico['descricao']))
    <p>descrição do serviço: </p>
    <p>{{$servico['descricao']}}</p>
    @endif
    @if(isset($servico['valor']))
    <p>valor do serviço: {{$servico['valor']}}</p>
    @endif
    @endforeach
    <div class="deletebutton">
    <form action="/excluir/{{$prestador->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-primary" value="excluir">
       
    
    </form>
    </div>
    
    </div>
    @endforeach
    @endif
    </div>
</body>
</html>