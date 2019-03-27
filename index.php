<?php 

//on inclut la classe, pour que PHP sache de quoi on parle on instancie $controller juste en desous
require(__DIR__.'/controllers/MainController.php'); 

$controller = new MainController();


if (isset($_GET['page'])){
    $page = $_GET['page'];
}

else {
$page = 'home';
}


if ($page === 'home') {
$controller->home();
}

elseif ($page === 'about'){
    $controller->about();
}

elseif ($page === 'products'){
  $controller->products();
}

elseif ($page === 'store'){
   $controller->store();
}

else {
  $controller->pls($page);
}
?>