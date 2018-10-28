<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @section('css')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    @show

    <title>TRABALHO WEB III</title>
    
    </head>
    <body>
        <div style="background-color: #F5F5F5; ">
            <div class ="container">
                <div class ="navbar-header">
                    <a href = "/inicial/" class ="navbar-brand">TRABALHO WEB III</a>
                </div>
                
                <div>
                    <ul class="nav nav-tabs">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ORDENS_DETALHES</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/inicial/ConsultaOrdens_detalhes">CONSULTA ORDENS_DETALHES</a>
                                <a class="nav-link disabled" href="/inicial/CadastroOrdens_detalhes">CADASTRAR ORDENS_DETALHES</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">REGIÃO</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/inicial/ConsultaRegiao">CONSULTA REGIÃO</a>
                                <a class="nav-link disabled" href="/inicial/CadastroRegiao">CADASTRAR REGIÃO</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="container">
            @yield('content')
        </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  
</html>