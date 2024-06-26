<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojinha da ETEC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
    <?php 
       $method = $_SERVER["REQUEST_METHOD"]; 
       $uri    = $_SERVER["REQUEST_URI"]; 
       

       require_once('menu.php');
       

       if ($method=="GET") {
        switch ($uri) {
            case '/produto':
                require_once "controllers/produto.controller.php";
                $controller = new ProdutoController();
                $controller->list();
                break;
            case '/produto/create':
                require_once "controllers/produto.controller.php";
                $controller = new ProdutoController();
                $controller->create();
                break;

            case "/":
                break;                
            default:
                require_once "Error404.php";
                header("HTTP/1.0 404 Not Found");
                die();
                break;
        }
      }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>