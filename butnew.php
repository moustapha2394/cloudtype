<?php
		try {
			$bdd=new PDO('mysql:host=localhost;dbname=cloudtype;charset=utf8','root','');
		} catch (Exception $e) {
			die('Erreur :'.$e->getMessage());
		}
	if (isset($_POST['savebut'])) {
		if (!empty($_POST['nameF']) && !empty($_POST['code']) ){
			$nameF=htmlspecialchars($_POST['nameF']);
			$code=htmlspecialchars($_POST['code']);
			$req1 =	$bdd->prepare('INSERT INTO `functions`(`name_func`, `function`, `auteur`, `date_de_creation`, `derniere_modif`) VALUES (?,?,?,CURDATE(),NOW())');
            $req1->execute(array($nameF, $code, $_SESSION['user']));
            echo "<script>alert(\"function saved.\")</script>";
		}else {
			echo "<script>alert(\"la variable est nulle\")</script>";
        }
    }
?>
<style>
.boite{
	background-color: #57606f;
	color: #ffffff;
	position: fixed;
	top:100px;
	left:400px;
	border: 3px solid black;
	border-radius: 10px;
	display:none;
	width: 750px;
	height: 530px;
}
.fermer{
	background-color: #57606f;
	font-size: 2em;
	position: relative;
	top:-55px;
	left:700px;
	display: inline-block;
	border-style: none
}
.fermer:hover{
	cursor: pointer;
}
.boite form{
	margin: 30px;
	position: absolute;
	top: 65px;
}
textarea{
	overflow: scroll;
	resize: none;
	width: 690px;
	height: 350px;
}
.savebut{
	position: relative;
	left:650px;
	margin-top: 15px;
	margin-bottom: 15px;
}
</style>
<div class="boite boiteF" >
		<h2 style="text-align:center;">New function</h2>
		<button type="button" class="fermer">X</button>
		<form action=<?php echo 'function.php?ID='.$_SESSION['ID'].'&func=default' ?> method="POST">
			<label for="name">Function's name :</label>
			<input type="text" name="nameF" ></br>
			<textarea name="code" class="codepart" ></textarea>
			<button name="savebut" class="savebut">Save</button>
		</form>
	</div>
	<div class="boite boiteP" >
		<h2 style="text-align:center;">New Project</h2>
		<button type="button" class="fermer">X</button>
		<form>
			<label for="name">Project's name :</label>
			<input type="text" name="name" >
			<label for="share">Share it with: </label>
		
			<textarea name="code" class="codepart"></textarea>
			<button name="savebutP" class="savebutP">Save</button>
		</form>
	</div>
	<script src="butnew.js" async></script>