<?php 
include "../model/user.php";
include "../controller/userc.php" ;

$error = "";
$s=0;
    
    

$userc=new userc(); 

if(isset($_POST['Id'])&&
isset($_POST['Nom'])&& 
isset($_POST['Prenom']) && 
isset($_POST['Passwor'])&&
isset($_POST['Age'])&&
isset($_POST['Telephone'])&&
isset($_POST['Genre'])

){
    if (
        !empty($_POST["Id"]) && 
        !empty($_POST['Nom']) &&
        !empty($_POST["Prenom"]) && 
        !empty($_POST["Passwor"]) && 
        !empty($_POST["Age"]) &&
        !empty($_POST["Telephone"]) && 
        !empty($_POST["Genre"]) 
    ) {

    $user=new user($_POST['Id'],$_POST['Nom'],$_POST['Prenom'],$_POST['Passwor'],$_POST['Age'],$_POST['Telephone'],$_POST['Genre']);
    $userc->ajouter($user);
            header('Location:afficher.php');
        }
        else
            $error = "Missing information";
    
 
}
?>
<html>
<head>
  <title>
    Create an account
  </title>

<link rel="stylesheet" href="../css/test1.css">

 </head>
<body>


<div class="login-wrap">
	<div class="login-html">
		
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<form method="POST">
			<div class="sign-up-htm">
				
				<div class="group">
					<label class="label">Nom</label>
					<input name="Nom"  id="Nom" type="text" class="input" placeholder="Nom">
				</div>
        <div class="group">
					<label class="label">Prenom</label>
					<input name="Prenom"  id="Prenom" type="text" class="input" placeholder="Prenom">
				</div>
				<div class="group">
					<label  class="label">Passwor</label>
					<input name="Passwor"  id="Passwor" type="passwor" class="input" placeholder=" Mot de passe" >
				</div>
				<div class="group">
					<label class="label">Repeat Passwor</label>
					<input id="Passwor" type="Passwor" class="input" 
          placeholder="Confirmer Mot de passe"  >

				</div>
				<div class="group">
					<label  class="label">Email Address</label>
					<input name="Email" id="Email" type="text" class="input" placeholder="Email">
				</div>

        

        <div class="group">
					<label class="label">Age</label>
					<input name="Age" id="Age" type="number" class="input" placeholder="Age">
				</div>

        <div class="group">
					<label class="label">Genre</label>

					<div class="value">
            <select id="sexe">
              <option value="F" name="sexe">Femme</option>
              <option value="H" name="sexe">Homme</option>
            </select>
          </div>
				</div>

        <div class="group">
					<label class="label">Telephone</label>
					<input name="Telephone" id="Telephone" type="number" class="input" placeholder="+216">
				</div>


				<div class="group">
					<input name="bouton" type="submit" class="button" value="Sign Up">
					<button> <a type="submit" href ="Ajouter.php" name="bouton"> 
						Ajouter 
						
</button>
				</div>
</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>