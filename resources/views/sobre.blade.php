<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Sobre</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                    <a class="navbar-brand" href="#">HZ Informatica</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="categorias">Categorias</a></li>
                    <li><a href="produtos">Produtos</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">    
                    <li><a href="sobre">Sobre</a></li>
                </ul>
             </div>
        </div>
    </nav>

    <h1>HZ Informatica</h1> <br/>
    <h3>Nossa empresa é voltada para venda de produtos diversos referentes a Tecnologia da Informação.
     <br/><br/><b>Venha conhecer nossas ofertas imperdiveis!!!</b> </h3>
    <br/>
    <h4> Entre em contato pelo E-mail:
     {{$email}} ,<br />
     Fone: {{$telefone}}
    </h4>

    <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
  padding: 18px;
}
</style>


<div class="footer">
        &copy HZ Informatica 2019
    </div>


</body>
</html>
