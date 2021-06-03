<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['view'])) {
            if ($_GET['view'] == 'connexion') {
                require(ROUTE_DIR.'views/security/connexion.html.php');
            }elseif ($_GET['view'] == 'inscription') {
                require_once(ROUTE_DIR.'views/security/inscription.html.php');
            }elseif($_GET['view']=='deconnexion') {
                deconnect();
                require(ROUTE_DIR.'views/security/connexion.html.php');
            }
           
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['action'])) {
           
            if ($_POST['action'] == 'connexion') {
              
                connexion($_POST['login'] , $_POST['password']);
            } elseif ($_POST['action'] == 'inscription') {
                unset($_POST['controlleurs']);
                unset($_POST['action']);
                unset($_POST['submit']);
                
               
                inscription($_POST);
            }
        }
    }

    function connexion( $login ,  $password): void{
        $arrayError=array();
      valide_email($login , 'login',$arrayError);
        validation_password($password , $arrayError ,'password');
        var_dump($arrayError);
        
        if (form_valid($arrayError)){
            $user = find_login_password($login , $password);
            if(count($user)==0){
                $arrayError['erreurConnexion'] = 'login ou password incorrect';
                $_SESSION['arrayError'] = $arrayError;
                header("location:" .WEB_ROUTE.'?controlleurs=security&view=connexion.html.php');
            }else{
                $_SESSION['userConnect']=$user;
                if($user['role']=='ROLE_ADMIN'){
                    header("location:" .WEB_ROUTE.'?controlleurs=admin&view=list.question');
                }elseif($user['role']=='ROLE_JOUEUR'){
                    header("location:" .WEB_ROUTE.'?controlleurs=joueur&view=jeu');
                }
            } 
        } else{
            $_SESSION['arrayError'] = $arrayError;
            header("location:" .WEB_ROUTE.'?controlleurs=security&view=connexion');
        } if (form_valid($arrayError)){
            $user = find_login_password($login , $password);
            if(count($user)==0){
                $arrayError['erreurConnexion'] = 'login ou password incorrect';
                $_SESSION['arrayError'] = $arrayError;
                header("location:" .WEB_ROUTE.'?controlleurs=security&view=connexion.html.php');
            }else{
                $_SESSION['userConnect']=$user;
                if($user['role']=='ROLE_ADMIN'){
                    header("location:" .WEB_ROUTE.'?controlleurs=admin&view=list.question');
                }elseif($user['role']=='ROLE_JOUEUR'){
                    header("location:" .WEB_ROUTE.'?controlleurs=joueur&view=jeu');
                }
            } 
        } else{
            $_SESSION['arrayError'] = $arrayError;
            header("location:" .WEB_ROUTE.'?controlleurs=security&view=connexion');
        }

    }
    
    function inscription(array $data) : void{
        $arrayError=array();
        extract($data);
        valide_email($mail ,'email' ,$arrayError);
        validation_password($mdp ,$arrayError, 'mdp');
        valide_bithdate($date ,'date',$arrayError);
        validation_username($prenom , 'prenom',$arrayError);
        validation_username($name , 'name',$arrayError);
        if ($mdp != $password) {
            $arrayError['password'] = 'les deux password ne sont pas identique';
        }
        if (form_valid($arrayError)){
            $user = find_login_password($login , $password);
            if(count($user)==0){
                $arrayError['erreurConnexion'] = 'login ou password incorrect';
                $_SESSION['arrayError'] = $arrayError;
                header("location:" .WEB_ROUTE.'?controlleurs=security&view=connexion.html.php');
            }else{
                $_SESSION['userConnect']=$user;
                if($user['role']=='ROLE_ADMIN'){
                    header("location:" .WEB_ROUTE.'?controlleurs=admin&view=list.question');
                }elseif($user['role']=='ROLE_JOUEUR'){
                    header("location:" .WEB_ROUTE.'?controlleurs=joueur&view=jeu');
                }
            } 
        } else{
            $_SESSION['arrayError'] = $arrayError;
            header("location:" .WEB_ROUTE.'?controlleurs=security&view=inscription');
        }
       
        
    }
    function deconnect():void{
        unset($_SESSION['userConnect']);
    }

?>