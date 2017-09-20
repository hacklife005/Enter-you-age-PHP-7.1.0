 <form method="post">
 	<h3>Каркулятор </h3>
 	<p>Введите число больше 0</p>
 	<input type="text" name="nm">
 	<input type="submit" value="ok">
 </form>


<?php 

	$n = $_POST['nm'];
	

	if ($n<0) {
		echo "Введенное должно быть ' 0 ' или больше ' 0 '.";
	}


	elseif ($n>=0) {


		if (($n==0)||($n==1)) {

		echo "Факториал чила $n! = 1";			
			
		}

		elseif ($n>1) {
			
			
			$k = 1;
			for( $i = 1; $i <= $_POST['nm']; $i++ ){
			 $k =$k* $i;
			}

			echo "Факториал числа ".$_POST['nm']."! = ".$k;

		}

/*		elseif ($n>1) {
            $f = 1;
            for($n; $n > 0; $n--) {
                $f *= $n;
            }
            echo $f;
}
*/
				

		

	}

 ?>



