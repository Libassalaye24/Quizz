
<?php 
if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&view=connexion');
    
     if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['view'])) {
            if ($_GET['view'] == 'list.question') {
                require(ROUTE_DIR.'views/admin/list.question.html.php');
            }elseif ($_GET['view'] == 'creer.question') {
                require(ROUTE_DIR.'views/admin/creer.question.html.php'); 
            }elseif ($_GET['view'] == 'list.joueur') {
                require(ROUTE_DIR.'views/admin/list.joueur.html.php'); 
            }
           
        }else {
            require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }
?>