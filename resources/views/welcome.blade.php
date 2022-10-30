<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
        .box{
            
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 47%;
            
        }
       
        
        
        .inputUser{
            
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 70%;
            letter-spacing: 2px;
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
        
     }
     li{
        margin-top:3px;
       
     }

       
        
    </style>
</head>
<body>
    <nav>
       <ul>
        <li>
            <a href="/exibir">prestadores cadastrados</a>
        </li>
        <li>
            <a href="/csv">importar csv</a>
        </li>
       </ul>
    </nav>
    <div class="box">
    <form action="/inserir" method="POST" enctype="multipart/form-data">
     @csrf
           
                <br>
                <div class="inputBox">
                <label for="imagem" >foto:</label>
                    <input type="file" name="imagem" id="imagem" class='inputimage'  >
                    
                </div>
                <div class="inputBox">
                <p>nome: <input type="text" name="nome" id="nome" class="inputUser" required></p>
                    
                   
                </div>
                
                <div class="inputBox">
                    
                    <p>email: <input type="text" name="email" id="email" class="inputUser" required></p>
                </div>
                
                <div class="inputBox">
                    
                    <p>telefone: <input type="tel" name="telefone" id="telefone" class="inputUser" required></p>
                </div>
                <p>serviços:</p>
                <div class="inputBox">
                    
                    <p>nome: <input type="text" name="serviço_nome" id="serviço_nome" class="inputUser" required> </p>
                    </div> 
                    <div class="inputBox">
                    
                    <p>descrição: </p>
                    <textarea type="text" name="serviço_descricao" id="serviço_descrição"  rows="2" cols="50">
                    </textarea>
                    </div> 
                    <div class="inputBox">
                    
                    <p>valor: <input type="text" name="serviço_valor" id="serviço_valor" class="inputUser" ></p>
                    </div> 
                    <br>
    
                    <div class="inputBox">
                    
                    <p>nome: <input type="text" name="serviço_nome2" id="serviço_nome2" class="inputUser" ></p>
                    </div> 
                    <div class="inputBox">
                    <p>descrição:</p>
                    <textarea  name="serviço_descricao2" id="serviço_descrição2"  rows="2" cols="50" >
                    
                    </textarea>
                    </div> 
                    <div class="inputBox">
                    
                    <p>valor: <input type="text" name="serviço_valor2" id="serviço_valor2" class="inputUser" ></p>
                    </div> 
                    <div class="inputBox">
                    
                    <p>nome: <input type="text" name="serviço_nome3" id="serviço_nome3" class="inputUser" > </p>
                    </div> 
                    <div class="inputBox">
                    
                    <p>descrição: </p>
                    <textarea  name="serviço_descricao3" id="serviço_descrição3"  rows="2" cols="50" >
                    
                    </textarea>
                    </div> 
                    <div class="inputBox" >
                    
                    <p>valor: <input type="text" name="serviço_valor3" id="serviço_valor3" class="inputUser" > </p>
                    </div> 
                
                <br><br>
                <input type="submit" class="btn btn-primary" value="enviar">
            
        </form>
    </div>
</body>
</html>