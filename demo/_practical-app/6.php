
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 
<form  method="POST">
	<input name="userSend" type="text" placeholder="write something here">
	<input type="submit" >
</form>

	<?php  
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$textSend = $textErr = "";

	if(empty($_POST['userSend'])){
		$textErr= "please write something below";
		
	}else{
		$textSend =  htmlspecialchars(trim($_POST['userSend']));
		
	}

	if(empty($textErr)){
		echo $textSend;
	} else{
		echo $textErr;
	}

}
/*  Step1: Make a form that submits one value to POST super global


 */

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>