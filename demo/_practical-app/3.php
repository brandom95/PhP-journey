<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php 
/* if statement */ 
$x= 5;
if($x === 4){
	echo"cat stole the code";
}elseif($x != 4){
	echo"i love PHP<br>" ;
};

/* for loop */

for($x=0; $x <= 10; $x++){
	echo "{$x} <br>";
}

/* switch */

switch ($x) {
	case 5:
		echo"this cat is hungry";
		break;
	case 1:
		echo"this cat is handsome";
		break;
	case 2:
		echo"this cat is grumpy";
		break;
	case 11:
		echo"this cat is long";
		break;
	case 4:
		echo"this cat is short";
		break;
		
	
	default:
	echo"where is the cat?";
		break;
}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>