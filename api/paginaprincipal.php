<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paginaprincipal</title>

<style>   
body{
background-color:#faeed1;
}

.coffeebar{
background-color:#607274;
width: 100%;
height:15%;
position: fixed;
left:0%;
top:0%;
display: flex;
align-items: center;
}

.coffeetitle{
color:#faeed1;
position: relative;
left: 10%;
display:flex;
}

.profilebox{
background-color:#607274;
position: fixed;
width: 11%;
height:30%;
right:0%;
top:0%;
border-radius:15%;

}



.profileboxcontent p{
color:#faeed1;
position:relative;
left:5%;
}


.buttonsell{
position: absolute;
top:25%;
left:20%;
color:#faeed1;
border:none;
border-radius:5%;
background-color:#B2A59B;
height:68%;
width:20%;
font-size:45px;
}

.buttonhistory{
position: absolute;
top:25%;
left:55%;
color:#faeed1;
border:none;
border-radius:5%;
background-color:#B2A59B;
height:30%;
width:25%;
font-size:45px;
}

.buttonstock{
position: absolute;
top:63%;
left:55%;
color:#faeed1;
border:none;
border-radius:5%;
background-color:#B2A59B;
height:30%;
width:25%;
font-size:45px;
}








</style> 



</head>

<!-- colocar nessa parte o endereço verdadeiro das páginas correspondentes -->

<body>
<div class="buttonscontainer">
<a href= "sucesso.php">
<button  class="buttonsell" >Vendas</button>
</a>
<a href= "sucesso.php">
<button class="buttonhistory" >Histórico de Vendas</button>
</a>
<a href= "sucesso.php">
<button class="buttonstock" >Gestão de Estoque</button>
</a>

</div>





<div class="coffeebar">
<h1 class="coffeetitle" >COOFEE'S</h1>

<div class="profilebox">

    <div class="profileboxcontent">
        <a href= "Pagperfil1.php">
            <button  class="profiletext" id="perfillink" >Perfil</button>
        </a>
        <a href= "sucesso.php">
            <button  class="profiletext" id="sairlink">Sair</button>
        </a>

    </div>

</div>

</div>
    
</body>
</html>
