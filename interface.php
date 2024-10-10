<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te amo amor (Heitor)</title>
    <style>
   body {
    background-image: url(namoradalinda.jpeg );
    background-size:500px;
    
    
   }
   .form {
    color:white;
    text-align:center;
    font-size:20px;
   }
    .titulo{
        color: white;
        text-align:center;
        font-size:40px;
        
    }
    .sim {
        font-size: 20px; 
        color: lime;
        text-shadow: 0.1em 0.1em #333
       }

       .nao{
        font-size: 20px;
        color:red;
        text-shadow: 0.1em 0.1em #333
           }
           .form2 {
            text-align:center;
           }
    </style>
</head>
<body>
        <div class=borda> <form action="interface.php" method="post">
           <div class= titulo> <h1>Você me ama amor?</h1> <div>
            <br>
            <div class= form><input type="radio" name="botao" id="botao" value= "sim">SIM!!!
            <br>
            <input type="radio" name="botao" id="botao" value= "Nao">NÃO<div>
            <br>
            <input type="submit" name= enviar value="ENVIAR"><div> <div>
        </form> 
<?php
if (isset ($_POST ['enviar'])){
$escolha= $_POST['botao'];
switch($escolha){
    case 'sim':
    echo  "<div class='sim'>QUE BOMM AMORRR EU TE AMO MUITO MINHA VIDA, <br> AGORA CLIQUE NESTE BOTÃO MOMOI:<div>";
    break;
    case 'Nao':
    echo "<div class='nao'>ESCOLHA ERRADA, ESTAREI NA SUA CASA EM 5 SEGUNDOS, <br>ESCOLHA A OUTRA OPÇÃO.<div>";
    break;
    default:
    echo "Você precisa selecionar momoi";



    
}}

?>
<div class= form2>
<form action="video.html" method="post">
 <input type="submit" value="Entrar">   
</form> <div>
</body>
</html>