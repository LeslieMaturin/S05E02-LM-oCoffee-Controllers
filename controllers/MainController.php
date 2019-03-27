<?php 

class MainController {

    //Cette méthode affiche la homepage. 
    //Elle est appellée depuis index.php, notre page "d'atterrissage".
    public function home(){
        $this->show('home', ['title'=>'Welcome to our Coffee Shop']);
    }
    //Cette méthode affiche l'a propos. 
    //Elle est appellée depuis index.php.
    public function about(){
        $this->show('about', ['title'=>'About to our Coffee Shop']);
    }
    //Cette méthode affiche les produits. 
    //Elle est appellée depuis index.php.
    public function products(){
        $this->show('products', ['title'=>'Amazing Products, tremendous quality']);
    }
    //Cette méthode affiche la boutique. 
    //Elle est appellée depuis index.php.
    public function store(){
        $this->show('store', ['title'=>'Our store wait you !']);
    }
    //Cette méthode se charge d'afficher notre page d'erreur
    public function pls($pageAppelee){
        $this->show('404', ['title' => 'Erreur','pageAppelee' => $pageAppelee]);
    }

    public function show($viewName, $viewVars=array()) {
        // $viewVars est disponible dans chaque fichier de vue
        //et il correspond au tableau qu'on a passé en 2eme arguement lors de l'appel de show()
        include(__DIR__.'/../views/header.tpl.php');
        include(__DIR__.'/../views/'.$viewName.'.tpl.php');
        include(__DIR__.'/../views/footer.tpl.php');
      }
}