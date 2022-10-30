<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
 
       
    </style>
   
</head>
<body>
<div class='box'>
<form action="/importar" method="POST" enctype="multipart/form-data">
@csrf
    <label for="imagem" >arquivo csv:</label>
                    <input type="file" name="csv" id="csv" class='inputimage' >
        
   
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="enviar">
</form>
</div>
                    
    
</body>
</html>