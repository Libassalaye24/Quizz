<?php 
  if (isset($_SESSION['arrayError'])) {
    $arrayError=$_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

     
    <div class="registration-form mb-40">
        <form method="POST" action="<?php WEB_ROUTE ?>">
            <div style="text-align: center; color:darkred;" >
              <h3>Connexion</h3>
            </div>
            <input type="hidden" name="controlleurs" value="security">
              <input type="hidden" name="action" value="inscription">
            <div class="row">
                <div class="col">
                <div class="form-group">
                <label for=""><b>Prenom</label>
                    <input type="text" class="form-control item" id="username" name="prenom" placeholder="Prenom">
                </div>
                <div class="danger">
                <?=isset($arrayError['prenom']) ? $arrayError['prenom'] : ""; ?>
              </div>
                </div>
               
                <div class="form-group">
                <label for=""><b>Nom </label>
                    <input type="text" class="form-control item" id="username" name="name" placeholder="Nom">
                </div>
                <div class="danger">
                <?=isset($arrayError['name']) ? $arrayError['name'] : ""; ?>
              </div>
            </div>
           
            <div class="form-group">
            <label for=""><b>Login</label>
                <input type="text" class="form-control item" id="email" name="mail" placeholder="Email">
            </div>
            <div class="danger">
                <?=isset($arrayError['email']) ? $arrayError['email'] : ""; ?>
              </div>
              <div class="row">
                  <div class="col">
                  <div class="form-group">
                    <label for=""><b>Mot de passe</label>
                        <input type="password" class="form-control item" id="password" name="mdp" placeholder="Password">
                    </div>
                    <div class="danger">
                <?=isset($arrayError['mdp']) ? $arrayError['mdp'] : ""; ?>
              </div>
                  </div>
               
                    <div class="form-group">
                    <label for=""><b>Confirmer le mot de passe</label>
                        <input type="password" class="form-control item" id="password" name="password" placeholder="Password">
                </div>
                <div class="danger">
                <?=isset($arrayError['password']) ? $arrayError['password'] : ""; ?>
              </div>
              </div>
            
            <div class="row">
            <div class="col-6">
            <div class="form-group">
            <label for=""><b>Sexe</label>
                <select class="form-control item" name="sexe" id="">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
          </div>
            </div>
            <div class="form-group">
                <label for=""><b>Date de Naissance</label>
                    <input type="text" class="form-control item" name="date" id="birth-date" placeholder="Birth Date">
                </div>
            </div>
          
            <div class="form-group" >
                <label for="">Choisir un Avatar</label>
                    <img href=".../public/img/avatar.png" />
                    <input type="file" name="avatar" class="form-control item" name='file1' />
            </div>
            <div class="form-group">
                <button type="submit" name="submit"  class="btn btn-danger red form-control item">Create Account</button>
            </div>
        </form>
        
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>    
    <script src="assets/js/script.js"></script>
</body>
</html>

   
	<style>
        .danger{
            color: darkred;
        }
	.red{
        background-color: darkred;
    }
    .red:hover{
        background-color: white;
        color: darkred;
    }
.registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}
.container-fluid{
 
 text-align: center;
background-color: darkred;
color: #fff;
height: 100px;
position: fixed;
}

.registration-form .form-icon{
	text-align: center;
    background-color: darkred;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
	</style>
</html>
