<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>importar csv</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
       
        .box{
            
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 50%;
            

            
        }
        .botao{
            display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        flex-direction:column;
        }
        .inputimage{
            
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 80%;
            letter-spacing: 2px;
        }
        a{
        color:black;
        text-decoration:none;
        
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
            <a href="/exibir">prestadores cadastrados</a>
        </li>
       </ul> 
    </nav> 
<div class='box'>
<form action="/importar" method="POST" enctype="multipart/form-data">
@csrf
    <label for="imagem" >arquivo csv:</label>
                    <input type="file" name="csv" id="csv" class='inputimage' >
                    
                    <br><br>
                    <div class="botao">
                    @if(isset($pastainvalida))
                     <p>pasta invalida</p>
                     <br>
                      @endif

                    <input type="submit" class="btn btn-primary" value="enviar" >
                    </div>
                   
</form>
</div>
                    
    
</body>
</html>