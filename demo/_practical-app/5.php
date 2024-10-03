<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

$num = array(1,2,3,4,5,6);
$arr2= array(1,3,5);
$num2= 10.5;
$str1= addslashes('hello this "is a" test');
$strarr= array(
	"h" => "Hello,",
	"i" => "Hey",
	"hello" => "hi",
);

print_r(array_diff($num, $arr2));
echo (is_finite( $num2));
echo (max($num));
echo $str1;
echo strtr("hi all, i said hello", $strarr);


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>