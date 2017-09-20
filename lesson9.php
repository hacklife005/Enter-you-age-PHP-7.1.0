<?php 

/*$age = 320 ;

if ($age < 30) {
 	
 	echo "Тебе меньше 30 лет";
}

else if ($age == 30) {

	echo "Вам 30 лет";	
}

else {
	echo "Вам больше 30-ти лет";
}


echo " <br/>";
*/

 ?>
 <p style="color:red; font-size: 18px; padding: 0;margin-bottom: 0; font-style:'OSWALD'; margin-bottom: 5px; ">Введите ваш возраст</p>
 <form method="post">
<input style="padding: 3px;" type="text" name="fieldname" />
<input onmouseover="this.style.backgroundColor='yellow';" onmouseout="this.style.backgroundColor='aqua';" type="submit" value="Отправить Предсказателю" style="padding: 3px; border-radius: 5px;" >
</form>
<?php 
$age_1 = $_POST['fieldname'];

 if (($age_1>0)&&($age_1 < 50)) {
 	echo " <br/>Вам меньше 50 лет.";
 	echo " <br/>";
 	echo " <br/>";
 	if ($age_1 === $_POST['fieldname']) {
 		
 		echo "Вам $age_1 лет.";
 		echo " <br/>";
 		echo " <br/>";
 		echo "У вас еще встает 😉";
 	}
 }
   elseif ((50 < $age_1)&&($age_1< 120) ) {
 		echo " <br/> Вам больше 50 лет";
 		echo " <br/>";
 	echo " <br/>";
 	if ($age_1 === $_POST['fieldname'] ) {
 		echo "Вам $age_1 лет";
 		echo " <br/>";
 		echo "<br/> И вы скоро СДОХНИТЕ!";
 	}
 }
    elseif (($age_1 > 120)) {
 		echo " <br/> <strong>Не еби К Л О П А !</strong>";
 		echo " <br/>";
 }

 	else {
 		echo " <strong> Ты че гонишь бля, вся жопа в шрамах</strong>";
 	}
 ?>
