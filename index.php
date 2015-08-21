<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Selector Plantilla</title>

        <!-- Bootstrap >
        <link href="css/bootstrap.min.css" rel="stylesheet"-->
        <?php
                    $archivo = fopen("tema.txt", "r");
                    $linea = fgets($archivo);
                    if ($linea=="") {
                        echo ' <link href="css/bootstrap.min.css" rel="stylesheet">';
                    } else {
                        echo ' <link href="css/Temas/'.$linea.'.css" rel="stylesheet">';
                    }
                    ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <h1>Hello, world!</h1>
                    <button class="btn btn-default" type="submit">Default</button>
                    <button class="btn btn-primary" type="submit">Primary</button>
                    <button class="btn btn-success" type="submit">Primary</button>
                    <button class="btn btn-info" type="submit">Info</button>
                    <button class="btn btn-danger" type="submit">Danger</button>
                    <button class="btn btn-warning" type="submit">Warning</button>
                </div>
                <div class="col-md-2"></div>
            </div>  
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
