<?php 
  if (isset($_SESSION['arrayError'])) {
    $arrayError=$_SESSION['arrayError'];
    unset($_SESSION['arrayError']);
  }

 require_once(ROUTE_DIR.'views/IMC/header.html.php');
?>
    <div class="container-fluid">
        <header>
            <h1 style="margin-top:2%">
              Le plaisisr de jouer
            </h1>
        </header>
           
   
    </div>


	  <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<div>
  <img src="" alt="">
</div>
  <div class="container mt-10 bordure col-10">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 12%;">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h3 class="card-title text-center">Se connecter</h3>
            <form action="<?php WEB_ROUTE ?>" method="POST" >
             
              <input type="hidden" name="controlleurs" value="security">
              <input type="hidden" name="action" value="connexion">
  <?php if(isset($arrayError['erreurConnexion'])):?>
              <div class="alert alert-danger" role="alert">
                <strong><?php echo isset($arrayError['erreurConnexion']) ? $arrayError['erreurConnexion']: "" ; ?></strong>
              </div>
   <?php endif ?>
              <div class="form-group">
  
              <label for=""> Address Email</label>
                <input type="text" id="" name="login" class="form-control rounded-pill btn-lg" placeholder="Email address"  >
                
              </div>
              <div class="danger">
                <?=isset($arrayError['login']) ? $arrayError['login'] : ""; ?>
              </div>

              <div class="form-group">
              <label for="">Mot de passe</label>
                <input type="password" id="" name="password" class="form-control rounded-pill btn-lg " placeholder="Password" >
               
              </div>
              <div class="danger">
                <?=isset($arrayError['password']) ? $arrayError['password'] : ""; ?>
              </div>
              

              <div class="custom-control custom-checkbox mb-3">
                  <a href="http://">Mot de passe oublié?</a>
              </div>
              <button class="btn btn-lg btn-danger btn-block rounded-pill text-uppercase red" type="submit">Sign in</button>
              <hr class="my-4">
              <div>
                <a href="">Vous n'avez pas de compte ? </a>
               <a href="<?= WEB_ROUTE.'?controlleurs=security&view=inscription'?>"><b>S'inscrire</b> </a>
              </div>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php 
   require_once(ROUTE_DIR.'views/IMC/footer.html.php');
?>
  <style>
	:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}
.danger{
  color: darkred;
}
.container-fluid{
 
	text-align: center;
  background-color: darkred;
  color: #fff;
  height: 130px;
  position: fixed;
}




.red{
  background-color: darkred;
}
.red:hover{
  background-color: #fff;
  color: darkred;
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}

  </style>
</html>