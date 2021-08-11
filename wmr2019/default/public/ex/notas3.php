<div style="text-align: center; height: 600px; border: none;" >

<?php 

		//$alumno = addslashes(htmlspecialchars($_POST["valorCaja1"]));
		$curso = $_POST["curso"];
		$letra = $_POST["letra"];
		$asignatura = $_POST["asignatura"];
		$semestre = $_POST["semestre"];

		//echo $curso.' - '. $asignatura.' - '.$semestre;


		include ('cone.php');
		
		if ($connect) 

		{
			if($semestre=='valor')
			{
				include("s1.php");
			}
			if($semestre=='valor2')
			{
				include("s2.php");
			}								 

		}			
	

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<!-- PROMEDIO asignatura 1--> 

<script>

	var alum = '<?php echo $alumno;?>';

	var lenguaje = ["n1"+alum+"1", "n2"+alum+"1", "n3"+alum+"1", "n4"+alum+"1", "n5"+alum+"1",

			"n6"+alum+"1", "n7"+alum+"1", "n8"+alum+"1", "n9"+alum+"1", "n10"+alum+"1"];



	var n1 = document.getElementById(lenguaje[0]).value;

	var n2 = document.getElementById(lenguaje[1]).value;

	var n3 = document.getElementById(lenguaje[2]).value;

	var n4 = document.getElementById(lenguaje[3]).value;

	var n5 = document.getElementById(lenguaje[4]).value;

	var n6 = document.getElementById(lenguaje[5]).value;

	var n7 = document.getElementById(lenguaje[6]).value;

	var n8 = document.getElementById(lenguaje[7]).value;

	var n9 = document.getElementById(lenguaje[8]).value;

	var n10 = document.getElementById(lenguaje[9]).value;	



	var suma = parseFloat(n1)+parseFloat(n2)+parseFloat(n3)+parseFloat(n4)+parseFloat(n5)

		  	  +parseFloat(n6)+parseFloat(n7)+parseFloat(n8)+parseFloat(n9)+parseFloat(n10);



		if(n1!='0')

		{

			cont=1;

			 

		}

		if(n2!='0')

		{

			cont=2;

			 

		}

			 

		if(n3!='0')

		{

			cont=3;

			 

		}

			 

		if(n4!='0')

		{

			cont=4;

			 

		}

			 

		if(n5!='0')

		{

			cont=5;

			 

		}

		 

		if(n6!='0')

		{

			cont=6;

			 

		}

		 

		if(n7!='0')

		{

			cont=7;

			 

		}

		 

		if(n8!='0')

		{

			cont=8;

			 
		}

		 

		if(n9!='0')

		{

			cont=9;

			 

		}

		 

		if(n10!='0')

		{

			cont=10;

			 

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio1").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 2--> 

<script>

	var alum = '<?php echo $alumno;?>';

	var asig2 = ["n1"+alum+"2", "n2"+alum+"2", "n3"+alum+"2", "n4"+alum+"2", "n5"+alum+"2",

			"n6"+alum+"2", "n7"+alum+"2", "n8"+alum+"2", "n9"+alum+"2", "n10"+alum+"2"];

	var n1a2 = document.getElementById(asig2[0]).value;

	var n2a2 = document.getElementById(asig2[1]).value;

	var n3a2 = document.getElementById(asig2[2]).value;

	var n4a2 = document.getElementById(asig2[3]).value;

	var n5a2 = document.getElementById(asig2[4]).value;

	var n6a2 = document.getElementById(asig2[5]).value;

	var n7a2 = document.getElementById(asig2[6]).value;

	var n8a2 = document.getElementById(asig2[7]).value;

	var n9a2 = document.getElementById(asig2[8]).value;

	var n10a2 = document.getElementById(asig2[9]).value;	

	var suma = parseFloat(n1a2)+parseFloat(n2a2)+parseFloat(n3a2)+parseFloat(n4a2)+parseFloat(n5a2)

		  	  +parseFloat(n6a2)+parseFloat(n7a2)+parseFloat(n8a2)+parseFloat(n9a2)+parseFloat(n10a2);

		if(n1a2!='0')

		{

			cont=1;

			 

		}

			 

		if(n2a2!='0')

		{

			cont=2;

			 

		}

			 

		if(n3a2!='0')

		{

			cont=3;

			 

		}

			 

		if(n4a2!='0')

		{

			cont=4;

			 

		}

			 

		if(n5a2!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a2!='0')

		{

			cont=6;

			 

		}

		 

		if(n7a2!='0')

		{

			cont=7;

			 

		}

		 

		if(n8a2!='0')

		{

			cont=8;

			 

		}

		 

		if(n9a2!='0')

		{

			cont=9;

			 

		}

		 

		if(n10a2!='0')

		{

			cont=10;

			 

		}

		 

	var prom = suma/cont;

	document.getElementById("promedio2").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 3--> 

<script>

	var alum = '<?php echo $alumno;?>';

	var asig3 = ["n1"+alum+"3", "n2"+alum+"3", "n3"+alum+"3", "n4"+alum+"3", "n5"+alum+"3",

			"n6"+alum+"3", "n7"+alum+"3", "n8"+alum+"3", "n9"+alum+"3", "n10"+alum+"3"];



	var n1a3 = document.getElementById(asig3[0]).value;

	var n2a3 = document.getElementById(asig3[1]).value;

	var n3a3 = document.getElementById(asig3[2]).value;

	var n4a3 = document.getElementById(asig3[3]).value;

	var n5a3 = document.getElementById(asig3[4]).value;

	var n6a3 = document.getElementById(asig3[5]).value;

	var n7a3 = document.getElementById(asig3[6]).value;

	var n8a3 = document.getElementById(asig3[7]).value;

	var n9a3 = document.getElementById(asig3[8]).value;

	var n10a3 = document.getElementById(asig3[9]).value;	



	var suma = parseFloat(n1a3)+parseFloat(n2a3)+parseFloat(n3a3)+parseFloat(n4a3)+parseFloat(n5a3)

		  	  +parseFloat(n6a3)+parseFloat(n7a3)+parseFloat(n8a3)+parseFloat(n9a3)+parseFloat(n10a3);



		if(n1a3!='0')

		{

			cont=1;

			 

		}

			if(n2a3!='0')

		{

			cont=2;

			 

		}

		

		if(n3a3!='0')

		{

			cont=3;

			 

		}

		if(n4a3!='0')

		{

			cont=4;

			 

		}

		 

		if(n5a3!='0')

		{

			cont=5;

			 

		}

		 

		if(n6a3!='0')

		{

			cont=6;

			document.getElementById('nt63').style.background='white';

			document.getElementById('nt63').style.color='black';

		}

		 

		if(n7a3!='0')

		{

			cont=7;

			document.getElementById('nt73').style.background='white';

			document.getElementById('nt73').style.color='black';

		}

		 

		if(n8a3!='0')

		{

			cont=8;

			document.getElementById('nt83').style.background='white';

			document.getElementById('nt83').style.color='black';

		}

		 

		if(n9a3!='0')

		{

			cont=9;

			document.getElementById('nt93').style.background='white';

			document.getElementById('nt93').style.color='black';

		}

		 

		if(n10a3!='0')

		{

			cont=10;

			document.getElementById('nt103').style.background='white';

			document.getElementById('nt103').style.color='black';

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio3").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 4--> 

<script>

	var alum = '<?php echo $alumno;?>';

	var asig4 = ["n1"+alum+"4", "n2"+alum+"4", "n3"+alum+"4", "n4"+alum+"4", "n5"+alum+"4",

			"n6"+alum+"4", "n7"+alum+"4", "n8"+alum+"4", "n9"+alum+"4", "n10"+alum+"4"];



	var n1a4 = document.getElementById(asig4[0]).value;

	var n2a4 = document.getElementById(asig4[1]).value;

	var n3a4 = document.getElementById(asig4[2]).value;

	var n4a4 = document.getElementById(asig4[3]).value;

	var n5a4 = document.getElementById(asig4[4]).value;

	var n6a4 = document.getElementById(asig4[5]).value;

	var n7a4 = document.getElementById(asig4[6]).value;

	var n8a4 = document.getElementById(asig4[7]).value;

	var n9a4 = document.getElementById(asig4[8]).value;

	var n10a4 = document.getElementById(asig4[9]).value;	



	var suma = parseFloat(n1a4)+parseFloat(n2a4)+parseFloat(n3a4)+parseFloat(n4a4)+parseFloat(n5a4)

		  	  +parseFloat(n6a4)+parseFloat(n7a4)+parseFloat(n8a4)+parseFloat(n9a4)+parseFloat(n10a4);



		if(n1a4!='0')

		{

			cont=1;

			document.getElementById('nt14').style.background='white';

			document.getElementById('nt14').style.color='black';

		}

		 

		if(n2a4!='0')

		{

			cont=2;

			document.getElementById('nt24').style.background='white';

			document.getElementById('nt24').style.color='black';

		}

		 

		if(n3a4!='0')

		{

			cont=3;

			document.getElementById('nt34').style.background='white';

			document.getElementById('nt34').style.color='black';

		}

		 

		if(n4a4!='0')

		{

			cont=4;

			document.getElementById('nt44').style.background='white';

			document.getElementById('nt44').style.color='black';

		}

		 

		if(n5a4!='0')

		{

			cont=5;

			document.getElementById('nt54').style.background='white';

			document.getElementById('nt54').style.color='black';

		}

		 

		if(n6a4!='0')

		{

			cont=6;

			document.getElementById('nt64').style.background='white';

			document.getElementById('nt64').style.color='black';

		}

		 

		if(n7a4!='0')

		{

			cont=7;

			document.getElementById('nt74').style.background='white';

			document.getElementById('nt74').style.color='black';

		}

		 

		if(n8a4!='0')

		{

			cont=8;

			document.getElementById('nt84').style.background='white';

			document.getElementById('nt84').style.color='black';

		}

		 

		if(n9a4!='0')

		{

			cont=9;

			document.getElementById('nt94').style.background='white';

			document.getElementById('nt94').style.color='black';

		}

		 

		if(n10a4!='0')

		{

			cont=10;

			document.getElementById('nt104').style.background='white';

			document.getElementById('nt104').style.color='black';

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio4").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 5--> 

<script>

	var alum = '<?php echo $alumno;?>';

	var asig5 = ["n1"+alum+"5", "n2"+alum+"5", "n3"+alum+"5", "n4"+alum+"5", "n5"+alum+"5",

			"n6"+alum+"5", "n7"+alum+"5", "n8"+alum+"5", "n9"+alum+"5", "n10"+alum+"5"];



	var n1a5 = document.getElementById(asig5[0]).value;

	var n2a5 = document.getElementById(asig5[1]).value;

	var n3a5 = document.getElementById(asig5[2]).value;

	var n4a5 = document.getElementById(asig5[3]).value;

	var n5a5 = document.getElementById(asig5[4]).value;

	var n6a5 = document.getElementById(asig5[5]).value;

	var n7a5 = document.getElementById(asig5[6]).value;

	var n8a5 = document.getElementById(asig5[7]).value;

	var n9a5 = document.getElementById(asig5[8]).value;

	var n10a5 = document.getElementById(asig5[9]).value;	



	var suma = parseFloat(n1a5)+parseFloat(n2a5)+parseFloat(n3a5)+parseFloat(n4a5)+parseFloat(n5a5)

		  	  +parseFloat(n6a5)+parseFloat(n7a5)+parseFloat(n8a5)+parseFloat(n9a5)+parseFloat(n10a5);



		if(n1a5!='0')

		{

			cont=1;

			document.getElementById('nt15').style.background='white';

			document.getElementById('nt15').style.color='black';

		}

		 

		if(n2a5!='0')

		{

			cont=2;

			document.getElementById('nt25').style.background='white';

			document.getElementById('nt25').style.color='black';

		}

		 

		if(n3a5!='0')

		{

			cont=3;

			document.getElementById('nt35').style.background='white';

			document.getElementById('nt35').style.color='black';

		}

		 

		if(n4a5!='0')

		{

			cont=4;

			document.getElementById('nt45').style.background='white';

			document.getElementById('nt45').style.color='black';

		}

		 

		if(n5a5!='0')

		{

			cont=5;

			document.getElementById('nt55').style.background='white';

			document.getElementById('nt55').style.color='black';

		}

		 

		if(n6a5!='0')

		{

			cont=6;

			document.getElementById('nt65').style.background='white';

			document.getElementById('nt65').style.color='black';

		}

		 

		if(n7a5!='0')

		{

			cont=7;

			document.getElementById('nt75').style.background='white';

			document.getElementById('nt75').style.color='black';

		}

		 

		if(n8a5!='0')

		{

			cont=8;

			document.getElementById('nt85').style.background='white';

			document.getElementById('nt85').style.color='black';

		}

		 

		if(n9a5!='0')

		{

			cont=9;

			document.getElementById('nt95').style.background='white';

			document.getElementById('nt95').style.color='black';

		}

		 

		if(n10a5!='0')

		{

			cont=10;

			document.getElementById('nt105').style.background='white';

			document.getElementById('nt105').style.color='black';

		}

		 

	var prom = suma/cont;

	document.getElementById("promedio5").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 6--> 

<script>

	var alum = '<?php echo $alumno;?>';

	var asig6 = ["n1"+alum+"6", "n2"+alum+"6", "n3"+alum+"6", "n4"+alum+"6", "n5"+alum+"6",

			"n6"+alum+"6", "n7"+alum+"6", "n8"+alum+"6", "n9"+alum+"6", "n10"+alum+"6"];



	var n1a6 = document.getElementById(asig6[0]).value;

	var n2a6 = document.getElementById(asig6[1]).value;

	var n3a6 = document.getElementById(asig6[2]).value;

	var n4a6 = document.getElementById(asig6[3]).value;

	var n5a6 = document.getElementById(asig6[4]).value;

	var n6a6 = document.getElementById(asig6[5]).value;

	var n7a6 = document.getElementById(asig6[6]).value;

	var n8a6 = document.getElementById(asig6[7]).value;

	var n9a6 = document.getElementById(asig6[8]).value;

	var n10a6 = document.getElementById(asig6[9]).value;	



	var suma = parseFloat(n1a6)+parseFloat(n2a6)+parseFloat(n3a6)+parseFloat(n4a6)+parseFloat(n5a6)

		  	  +parseFloat(n6a6)+parseFloat(n7a6)+parseFloat(n8a6)+parseFloat(n9a6)+parseFloat(n10a6);



		if(n1a6!='0')

		{

			cont=1;

			document.getElementById('nt16').style.background='white';

			document.getElementById('nt16').style.color='black';

		}

		 

		if(n2a6!='0')

		{

			cont=2;

			document.getElementById('nt26').style.background='white';

			document.getElementById('nt26').style.color='black';

		}

		 

		if(n3a6!='0')

		{

			cont=3;

			document.getElementById('nt36').style.background='white';

			document.getElementById('nt36').style.color='black';

		}

		 

		if(n4a6!='0')

		{

			cont=4;

			document.getElementById('nt46').style.background='white';

			document.getElementById('nt46').style.color='black';

		}

		 

		if(n5a6!='0')

		{

			cont=5;

			document.getElementById('nt56').style.background='white';

			document.getElementById('nt56').style.color='black';

		}

		 

		if(n6a6!='0')

		{

			cont=6;

			document.getElementById('nt66').style.background='white';

			document.getElementById('nt66').style.color='black';

		}

		 

		if(n7a6!='0')

		{

			cont=7;

			document.getElementById('nt76').style.background='white';

			document.getElementById('nt76').style.color='black';

		}

		 

		if(n8a6!='0')

		{

			cont=8;

			document.getElementById('nt86').style.background='white';

			document.getElementById('nt86').style.color='black';

		}

		 

		if(n9a6!='0')

		{

			cont=9;

			document.getElementById('nt96').style.background='white';

			document.getElementById('nt96').style.color='black';

		}

		 

		if(n10a6!='0')

		{

			cont=10;

			document.getElementById('nt106').style.background='white';

			document.getElementById('nt106').style.color='black';

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio6").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 7--> 

<script>

	var alum = '<?php echo $alumno;?>';

	var asig7 = ["n1"+alum+"7", "n2"+alum+"7", "n3"+alum+"7", "n4"+alum+"7", "n5"+alum+"7",

			"n6"+alum+"7", "n7"+alum+"7", "n8"+alum+"7", "n9"+alum+"7", "n10"+alum+"7"];



	var n1a7 = document.getElementById(asig7[0]).value;

	var n2a7 = document.getElementById(asig7[1]).value;

	var n3a7 = document.getElementById(asig7[2]).value;

	var n4a7 = document.getElementById(asig7[3]).value;

	var n5a7 = document.getElementById(asig7[4]).value;

	var n6a7 = document.getElementById(asig7[5]).value;

	var n7a7 = document.getElementById(asig7[6]).value;

	var n8a7 = document.getElementById(asig7[7]).value;

	var n9a7 = document.getElementById(asig7[8]).value;

	var n10a7 = document.getElementById(asig7[9]).value;	



	var suma = parseFloat(n1a7)+parseFloat(n2a7)+parseFloat(n3a7)+parseFloat(n4a7)+parseFloat(n5a7)

		  	  +parseFloat(n6a7)+parseFloat(n7a7)+parseFloat(n8a7)+parseFloat(n9a7)+parseFloat(n10a7);



		if(n1a7!='0')

		{

			cont=1;

			document.getElementById('nt17').style.background='white';

			document.getElementById('nt17').style.color='black';

		}

		 

		if(n2a7!='0')

		{

			cont=2;

			document.getElementById('nt27').style.background='white';

			document.getElementById('nt27').style.color='black';

		}

		 

		if(n3a7!='0')

		{

			cont=3;

			document.getElementById('nt37').style.background='white';

			document.getElementById('nt37').style.color='black';

		}

		 

		if(n4a7!='0')

		{

			cont=4;

			document.getElementById('nt47').style.background='white';

			document.getElementById('nt47').style.color='black';

		}

		 

		if(n5a7!='0')

		{

			cont=5;

			document.getElementById('nt57').style.background='white';

			document.getElementById('nt57').style.color='black';

		}

		 

		if(n6a7!='0')

		{

			cont=6;

			document.getElementById('nt67').style.background='white';

			document.getElementById('nt67').style.color='black';

		}

		 

		if(n7a7!='0')

		{

			cont=7;

			document.getElementById('nt77').style.background='white';

			document.getElementById('nt77').style.color='black';

		}

		 

		if(n8a7!='0')

		{

			cont=8;

			document.getElementById('nt87').style.background='white';

			document.getElementById('nt87').style.color='black';

		}

		 

		if(n9a7!='0')

		{

			cont=9;

			document.getElementById('nt97').style.background='white';

			document.getElementById('nt97').style.color='black';

		}

		 

		if(n10a7!='0')

		{

			cont=10;

			document.getElementById('nt107').style.background='white';

			document.getElementById('nt107').style.color='black';

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio7").value = Math.round(prom);

</script>



<!-- PROMEDIO asignatura 8--> 

<script>

	var alum = '<?php echo $alumno;?>';

	var asig8 = ["n1"+alum+"8", "n2"+alum+"8", "n3"+alum+"8", "n4"+alum+"8", "n5"+alum+"8",

			"n6"+alum+"8", "n7"+alum+"8", "n8"+alum+"8", "n9"+alum+"8", "n10"+alum+"8"];



	var n1a8 = document.getElementById(asig8[0]).value;

	var n2a8 = document.getElementById(asig8[1]).value;

	var n3a8 = document.getElementById(asig8[2]).value;

	var n4a8 = document.getElementById(asig8[3]).value;

	var n5a8 = document.getElementById(asig8[4]).value;

	var n6a8 = document.getElementById(asig8[5]).value;

	var n7a8 = document.getElementById(asig8[6]).value;

	var n8a8 = document.getElementById(asig8[7]).value;

	var n9a8 = document.getElementById(asig8[8]).value;

	var n10a8 = document.getElementById(asig8[9]).value;	



	var suma = parseFloat(n1a8)+parseFloat(n2a8)+parseFloat(n3a8)+parseFloat(n4a8)+parseFloat(n5a8)

		  	  +parseFloat(n6a8)+parseFloat(n7a8)+parseFloat(n8a8)+parseFloat(n9a8)+parseFloat(n10a8);



		if(n1a8!='0')

		{

			cont=1;

			document.getElementById('nt18').style.background='white';

			document.getElementById('nt18').style.color='black';

		}

		 

		if(n2a8!='0')

		{

			cont=2;

			document.getElementById('nt28').style.background='white';

			document.getElementById('nt28').style.color='black';

		}

		 

		if(n3a8!='0')

		{

			cont=3;

			document.getElementById('nt38').style.background='white';

			document.getElementById('nt38').style.color='black';

		}

		 

		if(n4a8!='0')

		{

			cont=4;

			document.getElementById('nt48').style.background='white';

			document.getElementById('nt48').style.color='black';

		}

		 

		if(n5a8!='0')

		{

			cont=5;

			document.getElementById('nt58').style.background='white';

			document.getElementById('nt58').style.color='black';

		}

		 

		if(n6a8!='0')

		{

			cont=6;

			document.getElementById('nt68').style.background='white';

			document.getElementById('nt68').style.color='black';

		}

		 

		if(n7a8!='0')

		{

			cont=7;

			document.getElementById('nt78').style.background='white';

			document.getElementById('nt78').style.color='black';

		}

		 

		if(n8a8!='0')

		{

			cont=8;

			document.getElementById('nt88').style.background='white';

			document.getElementById('nt88').style.color='black';

		}

		 

		if(n9a8!='0')

		{

			cont=9;

			document.getElementById('nt98').style.background='white';

			document.getElementById('nt98').style.color='black';

		}

		 

		if(n10a8!='0')

		{

			cont=10;

			document.getElementById('nt108').style.background='white';

			document.getElementById('nt108').style.color='black';

		}

		 



	var prom = suma/cont;

	document.getElementById("promedio8").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 9--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig9 = ["n1"+alum+"9", "n2"+alum+"9", "n3"+alum+"9", "n4"+alum+"9", "n5"+alum+"9",
			"n6"+alum+"9", "n7"+alum+"9", "n8"+alum+"9", "n9"+alum+"9", "n10"+alum+"9"];

	var n1a9 = document.getElementById(asig9[0]).value;
	var n2a9 = document.getElementById(asig9[1]).value;
	var n3a9 = document.getElementById(asig9[2]).value;
	var n4a9 = document.getElementById(asig9[3]).value;
	var n5a9 = document.getElementById(asig9[4]).value;
	var n6a9 = document.getElementById(asig9[5]).value;
	var n7a9 = document.getElementById(asig9[6]).value;
	var n8a9 = document.getElementById(asig9[7]).value;
	var n9a9 = document.getElementById(asig9[8]).value;
	var n10a9 = document.getElementById(asig9[9]).value;

	var suma = parseFloat(n1a9)+parseFloat(n2a9)+parseFloat(n3a9)+parseFloat(n4a9)+parseFloat(n5a9)
		  	  +parseFloat(n6a9)+parseFloat(n7a9)+parseFloat(n8a9)+parseFloat(n9a9)+parseFloat(n10a9);

		if(n1a9!='0')
		{
			cont=1;
		}
		if(n2a9!='0')
		{
			cont=2;
		}
		if(n3a9!='0')
		{
			cont=3;
		}
		if(n4a9!='0')
		{
			cont=4;
		}
		if(n5a9!='0')
		{
			cont=5;
		}
		if(n6a9!='0')
		{
			cont=6;
		}
		if(n7a9!='0')
		{
			cont=7;
		}
		if(n8a9!='0')
		{
			cont=8;
		}
		if(n9a9!='0')
		{
			cont=9;
		}
		if(n10a9!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio9").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 10--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig10 = ["n1"+alum+"10", "n2"+alum+"10", "n3"+alum+"10", "n4"+alum+"10", "n5"+alum+"10",
				  "n6"+alum+"10", "n7"+alum+"10", "n8"+alum+"10", "n9"+alum+"10", "n10"+alum+"10"];

	var n1a10 = document.getElementById(asig10[0]).value;
	var n2a10 = document.getElementById(asig10[1]).value;
	var n3a10 = document.getElementById(asig10[2]).value;
	var n4a10 = document.getElementById(asig10[3]).value;
	var n5a10 = document.getElementById(asig10[4]).value;
	var n6a10 = document.getElementById(asig10[5]).value;
	var n7a10 = document.getElementById(asig10[6]).value;
	var n8a10 = document.getElementById(asig10[7]).value;
	var n9a10 = document.getElementById(asig10[8]).value;
	var n10a10 = document.getElementById(asig10[9]).value;

	var suma = parseFloat(n1a10)+parseFloat(n2a10)+parseFloat(n3a10)+parseFloat(n4a10)+parseFloat(n5a10)
		  	  +parseFloat(n6a10)+parseFloat(n7a10)+parseFloat(n8a10)+parseFloat(n9a10)+parseFloat(n10a10);

		if(n1a10!='0')
		{
			cont=1;
		}
		if(n2a10!='0')
		{
			cont=2;
		}
		if(n3a10!='0')
		{
			cont=3;
		}
		if(n4a10!='0')
		{
			cont=4;
		}
		if(n5a10!='0')
		{
			cont=5;
		}
		if(n6a10!='0')
		{
			cont=6;
		}
		if(n7a10!='0')
		{
			cont=7;
		}
		if(n8a10!='0')
		{
			cont=8;
		}
		if(n9a10!='0')
		{
			cont=9;
		}
		if(n10a10!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio10").value = Math.round(prom);
		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10);

		var promp = sumap/10;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>

<!-- PROMEDIO alumno 11--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig11 = ["n1"+alum+"11", "n2"+alum+"11", "n3"+alum+"11", "n4"+alum+"11", "n5"+alum+"11",
				  "n6"+alum+"11", "n7"+alum+"11", "n8"+alum+"11", "n9"+alum+"11", "n10"+alum+"11"];

	var n1a11 = document.getElementById(asig11[0]).value;
	var n2a11 = document.getElementById(asig11[1]).value;
	var n3a11 = document.getElementById(asig11[2]).value;
	var n4a11 = document.getElementById(asig11[3]).value;
	var n5a11 = document.getElementById(asig11[4]).value;
	var n6a11 = document.getElementById(asig11[5]).value;
	var n7a11 = document.getElementById(asig11[6]).value;
	var n8a11 = document.getElementById(asig11[7]).value;
	var n9a11 = document.getElementById(asig11[8]).value;
	var n10a11 = document.getElementById(asig11[9]).value;

	var suma = parseFloat(n1a11)+parseFloat(n2a11)+parseFloat(n3a11)+parseFloat(n4a11)+parseFloat(n5a11)
		  	  +parseFloat(n6a11)+parseFloat(n7a11)+parseFloat(n8a11)+parseFloat(n9a11)+parseFloat(n10a11);

		if(n1a11!='0')
		{
			cont=1;
		}
		if(n2a11!='0')
		{
			cont=2;
		}
		if(n3a11!='0')
		{
			cont=3;
		}
		if(n4a11!='0')
		{
			cont=4;
		}
		if(n5a11!='0')
		{
			cont=5;
		}
		if(n6a11!='0')
		{
			cont=6;
		}
		if(n7a11!='0')
		{
			cont=7;
		}
		if(n8a11!='0')
		{
			cont=8;
		}
		if(n9a11!='0')
		{
			cont=9;
		}
		if(n10a11!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio11").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 12--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig12 = ["n1"+alum+"12", "n2"+alum+"12", "n3"+alum+"12", "n4"+alum+"12", "n5"+alum+"12",
				  "n6"+alum+"12", "n7"+alum+"12", "n8"+alum+"12", "n9"+alum+"12", "n10"+alum+"12"];

	var n1a12 = document.getElementById(asig12[0]).value;
	var n2a12 = document.getElementById(asig12[1]).value;
	var n3a12 = document.getElementById(asig12[2]).value;
	var n4a12 = document.getElementById(asig12[3]).value;
	var n5a12 = document.getElementById(asig12[4]).value;
	var n6a12 = document.getElementById(asig12[5]).value;
	var n7a12 = document.getElementById(asig12[6]).value;
	var n8a12 = document.getElementById(asig12[7]).value;
	var n9a12 = document.getElementById(asig12[8]).value;
	var n10a12 = document.getElementById(asig12[9]).value;

	var suma = parseFloat(n1a12)+parseFloat(n2a12)+parseFloat(n3a12)+parseFloat(n4a12)+parseFloat(n5a12)
		  	  +parseFloat(n6a12)+parseFloat(n7a12)+parseFloat(n8a12)+parseFloat(n9a12)+parseFloat(n10a12);

		if(n1a12!='0')
		{
			cont=1;
		}
		if(n2a12!='0')
		{
			cont=2;
		}
		if(n3a12!='0')
		{
			cont=3;
		}
		if(n4a12!='0')
		{
			cont=4;
		}
		if(n5a12!='0')
		{
			cont=5;
		}
		if(n6a12!='0')
		{
			cont=6;
		}
		if(n7a12!='0')
		{
			cont=7;
		}
		if(n8a12!='0')
		{
			cont=8;
		}
		if(n9a12!='0')
		{
			cont=9;
		}
		if(n10a12!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio12").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 13--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig13 = ["n1"+alum+"13", "n2"+alum+"13", "n3"+alum+"13", "n4"+alum+"13", "n5"+alum+"13",
				  "n6"+alum+"13", "n7"+alum+"13", "n8"+alum+"13", "n9"+alum+"13", "n10"+alum+"13"];

	var n1a13 = document.getElementById(asig13[0]).value;
	var n2a13 = document.getElementById(asig13[1]).value;
	var n3a13 = document.getElementById(asig13[2]).value;
	var n4a13 = document.getElementById(asig13[3]).value;
	var n5a13 = document.getElementById(asig13[4]).value;
	var n6a13 = document.getElementById(asig13[5]).value;
	var n7a13 = document.getElementById(asig13[6]).value;
	var n8a13 = document.getElementById(asig13[7]).value;
	var n9a13 = document.getElementById(asig13[8]).value;
	var n10a13 = document.getElementById(asig13[9]).value;

	var suma = parseFloat(n1a13)+parseFloat(n2a13)+parseFloat(n3a13)+parseFloat(n4a13)+parseFloat(n5a13)
		  	  +parseFloat(n6a13)+parseFloat(n7a13)+parseFloat(n8a13)+parseFloat(n9a13)+parseFloat(n10a13);

		if(n1a13!='0')
		{
			cont=1;
		}
		if(n2a13!='0')
		{
			cont=2;
		}
		if(n3a13!='0')
		{
			cont=3;
		}
		if(n4a13!='0')
		{
			cont=4;
		}
		if(n5a13!='0')
		{
			cont=5;
		}
		if(n6a13!='0')
		{
			cont=6;
		}
		if(n7a13!='0')
		{
			cont=7;
		}
		if(n8a13!='0')
		{
			cont=8;
		}
		if(n9a13!='0')
		{
			cont=9;
		}
		if(n10a13!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio13").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 14--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig14 = ["n1"+alum+"14", "n2"+alum+"14", "n3"+alum+"14", "n4"+alum+"14", "n5"+alum+"14",
				  "n6"+alum+"14", "n7"+alum+"14", "n8"+alum+"14", "n9"+alum+"14", "n10"+alum+"14"];

	var n1a14 = document.getElementById(asig14[0]).value;
	var n2a14 = document.getElementById(asig14[1]).value;
	var n3a14 = document.getElementById(asig14[2]).value;
	var n4a14 = document.getElementById(asig14[3]).value;
	var n5a14 = document.getElementById(asig14[4]).value;
	var n6a14 = document.getElementById(asig14[5]).value;
	var n7a14 = document.getElementById(asig14[6]).value;
	var n8a14 = document.getElementById(asig14[7]).value;
	var n9a14 = document.getElementById(asig14[8]).value;
	var n10a14 = document.getElementById(asig14[9]).value;

	var suma = parseFloat(n1a14)+parseFloat(n2a14)+parseFloat(n3a14)+parseFloat(n4a14)+parseFloat(n5a14)
		  	  +parseFloat(n6a14)+parseFloat(n7a14)+parseFloat(n8a14)+parseFloat(n9a14)+parseFloat(n10a14);

		if(n1a14!='0')
		{
			cont=1;
		}
		if(n2a14!='0')
		{
			cont=2;
		}
		if(n3a14!='0')
		{
			cont=3;
		}
		if(n4a14!='0')
		{
			cont=4;
		}
		if(n5a14!='0')
		{
			cont=5;
		}
		if(n6a14!='0')
		{
			cont=6;
		}
		if(n7a14!='0')
		{
			cont=7;
		}
		if(n8a14!='0')
		{
			cont=8;
		}
		if(n9a14!='0')
		{
			cont=9;
		}
		if(n10a14!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio14").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 15--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig15 = ["n1"+alum+"15", "n2"+alum+"15", "n3"+alum+"15", "n4"+alum+"15", "n5"+alum+"15",
				  "n6"+alum+"15", "n7"+alum+"15", "n8"+alum+"15", "n9"+alum+"15", "n10"+alum+"15"];

	var n1a15 = document.getElementById(asig15[0]).value;
	var n2a15 = document.getElementById(asig15[1]).value;
	var n3a15 = document.getElementById(asig15[2]).value;
	var n4a15 = document.getElementById(asig15[3]).value;
	var n5a15 = document.getElementById(asig15[4]).value;
	var n6a15 = document.getElementById(asig15[5]).value;
	var n7a15 = document.getElementById(asig15[6]).value;
	var n8a15 = document.getElementById(asig15[7]).value;
	var n9a15 = document.getElementById(asig15[8]).value;
	var n10a15 = document.getElementById(asig15[9]).value;

	var suma = parseFloat(n1a15)+parseFloat(n2a15)+parseFloat(n3a15)+parseFloat(n4a15)+parseFloat(n5a15)
		  	  +parseFloat(n6a15)+parseFloat(n7a15)+parseFloat(n8a15)+parseFloat(n9a15)+parseFloat(n10a15);

		if(n1a15!='0')
		{
			cont=1;
		}
		if(n2a15!='0')
		{
			cont=2;
		}
		if(n3a15!='0')
		{
			cont=3;
		}
		if(n4a15!='0')
		{
			cont=4;
		}
		if(n5a15!='0')
		{
			cont=5;
		}
		if(n6a15!='0')
		{
			cont=6;
		}
		if(n7a15!='0')
		{
			cont=7;
		}
		if(n8a15!='0')
		{
			cont=8;
		}
		if(n9a15!='0')
		{
			cont=9;
		}
		if(n10a15!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio15").value = Math.round(prom);

	var cursoalum = "<?php echo $curso;?>";

	
		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15);

		var promp = sumap/15;
		document.getElementById("pfinal1s").value = Math.round(promp);
		

</script>

<!-- PROMEDIO alumno 16--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig16 = ["n1"+alum+"16", "n2"+alum+"16", "n3"+alum+"16", "n4"+alum+"16", "n5"+alum+"16",
				  "n6"+alum+"16", "n7"+alum+"16", "n8"+alum+"16", "n9"+alum+"16", "n10"+alum+"16"];

	var n1a16 = document.getElementById(asig16[0]).value;
	var n2a16 = document.getElementById(asig16[1]).value;
	var n3a16 = document.getElementById(asig16[2]).value;
	var n4a16 = document.getElementById(asig16[3]).value;
	var n5a16 = document.getElementById(asig16[4]).value;
	var n6a16 = document.getElementById(asig16[5]).value;
	var n7a16 = document.getElementById(asig16[6]).value;
	var n8a16 = document.getElementById(asig16[7]).value;
	var n9a16 = document.getElementById(asig16[8]).value;
	var n10a16 = document.getElementById(asig16[9]).value;

	var suma = parseFloat(n1a16)+parseFloat(n2a16)+parseFloat(n3a16)+parseFloat(n4a16)+parseFloat(n5a16)
		  	  +parseFloat(n6a16)+parseFloat(n7a16)+parseFloat(n8a16)+parseFloat(n9a16)+parseFloat(n10a16);

		if(n1a16!='0')
		{
			cont=1;
		}
		if(n2a16!='0')
		{
			cont=2;
		}
		if(n3a16!='0')
		{
			cont=3;
		}
		if(n4a16!='0')
		{
			cont=4;
		}
		if(n5a16!='0')
		{
			cont=5;
		}
		if(n6a16!='0')
		{
			cont=6;
		}
		if(n7a16!='0')
		{
			cont=7;
		}
		if(n8a16!='0')
		{
			cont=8;
		}
		if(n9a16!='0')
		{
			cont=9;
		}
		if(n10a16!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio16").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 17--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig17 = ["n1"+alum+"17", "n2"+alum+"17", "n3"+alum+"17", "n4"+alum+"17", "n5"+alum+"17",
				  "n6"+alum+"17", "n7"+alum+"17", "n8"+alum+"17", "n9"+alum+"17", "n10"+alum+"17"];

	var n1a17 = document.getElementById(asig17[0]).value;
	var n2a17 = document.getElementById(asig17[1]).value;
	var n3a17 = document.getElementById(asig17[2]).value;
	var n4a17 = document.getElementById(asig17[3]).value;
	var n5a17 = document.getElementById(asig17[4]).value;
	var n6a17 = document.getElementById(asig17[5]).value;
	var n7a17 = document.getElementById(asig17[6]).value;
	var n8a17 = document.getElementById(asig17[7]).value;
	var n9a17 = document.getElementById(asig17[8]).value;
	var n10a17 = document.getElementById(asig17[9]).value;

	var suma = parseFloat(n1a17)+parseFloat(n2a17)+parseFloat(n3a17)+parseFloat(n4a17)+parseFloat(n5a17)
		  	  +parseFloat(n6a17)+parseFloat(n7a17)+parseFloat(n8a17)+parseFloat(n9a17)+parseFloat(n10a17);

		if(n1a17!='0')
		{
			cont=1;
		}
		if(n2a17!='0')
		{
			cont=2;
		}
		if(n3a17!='0')
		{
			cont=3;
		}
		if(n4a17!='0')
		{
			cont=4;
		}
		if(n5a17!='0')
		{
			cont=5;
		}
		if(n6a17!='0')
		{
			cont=6;
		}
		if(n7a17!='0')
		{
			cont=7;
		}
		if(n8a17!='0')
		{
			cont=8;
		}
		if(n9a17!='0')
		{
			cont=9;
		}
		if(n10a17!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio17").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 18--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig18 = ["n1"+alum+"18", "n2"+alum+"18", "n3"+alum+"18", "n4"+alum+"18", "n5"+alum+"18",
				  "n6"+alum+"18", "n7"+alum+"18", "n8"+alum+"18", "n9"+alum+"18", "n10"+alum+"18"];

	var n1a18 = document.getElementById(asig18[0]).value;
	var n2a18 = document.getElementById(asig18[1]).value;
	var n3a18 = document.getElementById(asig18[2]).value;
	var n4a18 = document.getElementById(asig18[3]).value;
	var n5a18 = document.getElementById(asig18[4]).value;
	var n6a18 = document.getElementById(asig18[5]).value;
	var n7a18 = document.getElementById(asig18[6]).value;
	var n8a18 = document.getElementById(asig18[7]).value;
	var n9a18 = document.getElementById(asig18[8]).value;
	var n10a18 = document.getElementById(asig18[9]).value;

	var suma = parseFloat(n1a18)+parseFloat(n2a18)+parseFloat(n3a18)+parseFloat(n4a18)+parseFloat(n5a18)
		  	  +parseFloat(n6a18)+parseFloat(n7a18)+parseFloat(n8a18)+parseFloat(n9a18)+parseFloat(n10a18);

		if(n1a18!='0')
		{
			cont=1;
		}
		if(n2a18!='0')
		{
			cont=2;
		}
		if(n3a18!='0')
		{
			cont=3;
		}
		if(n4a18!='0')
		{
			cont=4;
		}
		if(n5a18!='0')
		{
			cont=5;
		}
		if(n6a18!='0')
		{
			cont=6;
		}
		if(n7a18!='0')
		{
			cont=7;
		}
		if(n8a18!='0')
		{
			cont=8;
		}
		if(n9a18!='0')
		{
			cont=9;
		}
		if(n10a18!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio18").value = Math.round(prom);

</script>

<!-- PROMEDIO alumno 19--> 
<script>

	var alum = '<?php echo $alumno;?>';
	var asig19 = ["n1"+alum+"19", "n2"+alum+"19", "n3"+alum+"19", "n4"+alum+"19", "n5"+alum+"19",
				  "n6"+alum+"19", "n7"+alum+"19", "n8"+alum+"19", "n9"+alum+"19", "n10"+alum+"19"];

	var n1a19 = document.getElementById(asig19[0]).value;
	var n2a19 = document.getElementById(asig19[1]).value;
	var n3a19 = document.getElementById(asig19[2]).value;
	var n4a19 = document.getElementById(asig19[3]).value;
	var n5a19 = document.getElementById(asig19[4]).value;
	var n6a19 = document.getElementById(asig19[5]).value;
	var n7a19 = document.getElementById(asig19[6]).value;
	var n8a19 = document.getElementById(asig19[7]).value;
	var n9a19 = document.getElementById(asig19[8]).value;
	var n10a19 = document.getElementById(asig19[9]).value;

	var suma = parseFloat(n1a19)+parseFloat(n2a19)+parseFloat(n3a19)+parseFloat(n4a19)+parseFloat(n5a19)
		  	  +parseFloat(n6a19)+parseFloat(n7a19)+parseFloat(n8a19)+parseFloat(n9a19)+parseFloat(n10a19);

		if(n1a19!='0')
		{
			cont=1;
		}
		if(n2a19!='0')
		{
			cont=2;
		}
		if(n3a19!='0')
		{
			cont=3;
		}
		if(n4a19!='0')
		{
			cont=4;
		}
		if(n5a19!='0')
		{
			cont=5;
		}
		if(n6a19!='0')
		{
			cont=6;
		}
		if(n7a19!='0')
		{
			cont=7;
		}
		if(n8a19!='0')
		{
			cont=8;
		}
		if(n9a19!='0')
		{
			cont=9;
		}
		if(n10a19!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio19").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		 

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19);

		var promp = sumap/19;
		document.getElementById("pfinal1s").value = Math.round(promp);

		

</script>

<!-- PROMEDIO alumno 20--> 
<script>

	var alum = '<?php echo $alumno;?>';
	var asig20 = ["n1"+alum+"20", "n2"+alum+"20", "n3"+alum+"20", "n4"+alum+"20", "n5"+alum+"20",
				  "n6"+alum+"20", "n7"+alum+"20", "n8"+alum+"20", "n9"+alum+"20", "n10"+alum+"20"];

	var n1a20 = document.getElementById(asig20[0]).value;
	var n2a20 = document.getElementById(asig20[1]).value;
	var n3a20 = document.getElementById(asig20[2]).value;
	var n4a20 = document.getElementById(asig20[3]).value;
	var n5a20 = document.getElementById(asig20[4]).value;
	var n6a20 = document.getElementById(asig20[5]).value;
	var n7a20 = document.getElementById(asig20[6]).value;
	var n8a20 = document.getElementById(asig20[7]).value;
	var n9a20 = document.getElementById(asig20[8]).value;
	var n10a20 = document.getElementById(asig20[9]).value;

	var suma = parseFloat(n1a20)+parseFloat(n2a20)+parseFloat(n3a20)+parseFloat(n4a20)+parseFloat(n5a20)
		  	  +parseFloat(n6a20)+parseFloat(n7a20)+parseFloat(n8a20)+parseFloat(n9a20)+parseFloat(n10a20);

		if(n1a20!='0')
		{
			cont=1;
		}
		if(n2a20!='0')
		{
			cont=2;
		}
		if(n3a20!='0')
		{
			cont=3;
		}
		if(n4a20!='0')
		{
			cont=4;
		}
		if(n5a20!='0')
		{
			cont=5;
		}
		if(n6a20!='0')
		{
			cont=6;
		}
		if(n7a20!='0')
		{
			cont=7;
		}
		if(n8a20!='0')
		{
			cont=8;
		}
		if(n9a20!='0')
		{
			cont=9;
		}
		if(n10a20!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio20").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20);

		var promp = sumap/20;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>

<!-- PROMEDIO alumno 21--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig21 = ["n1"+alum+"21", "n2"+alum+"21", "n3"+alum+"21", "n4"+alum+"21", "n5"+alum+"21",
				  "n6"+alum+"21", "n7"+alum+"21", "n8"+alum+"21", "n9"+alum+"21", "n10"+alum+"21"];

	var n1a21 = document.getElementById(asig21[0]).value;
	var n2a21 = document.getElementById(asig21[1]).value;
	var n3a21 = document.getElementById(asig21[2]).value;
	var n4a21 = document.getElementById(asig21[3]).value;
	var n5a21 = document.getElementById(asig21[4]).value;
	var n6a21 = document.getElementById(asig21[5]).value;
	var n7a21 = document.getElementById(asig21[6]).value;
	var n8a21 = document.getElementById(asig21[7]).value;
	var n9a21 = document.getElementById(asig21[8]).value;
	var n10a21 = document.getElementById(asig21[9]).value;

	var suma = parseFloat(n1a21)+parseFloat(n2a21)+parseFloat(n3a21)+parseFloat(n4a21)+parseFloat(n5a21)
		  	  +parseFloat(n6a21)+parseFloat(n7a21)+parseFloat(n8a21)+parseFloat(n9a21)+parseFloat(n10a21);

		if(n1a21!='0')
		{
			cont=1;
		}
		if(n2a21!='0')
		{
			cont=2;
		}
		if(n3a21!='0')
		{
			cont=3;
		}
		if(n4a21!='0')
		{
			cont=4;
		}
		if(n5a21!='0')
		{
			cont=5;
		}
		if(n6a21!='0')
		{
			cont=6;
		}
		if(n7a21!='0')
		{
			cont=7;
		}
		if(n8a21!='0')
		{
			cont=8;
		}
		if(n9a21!='0')
		{
			cont=9;
		}
		if(n10a21!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio21").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21);

		var promp = sumap/21;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>


<!-- PROMEDIO alumno 22--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig22 = ["n1"+alum+"22", "n2"+alum+"22", "n3"+alum+"22", "n4"+alum+"22", "n5"+alum+"22",
				  "n6"+alum+"22", "n7"+alum+"22", "n8"+alum+"22", "n9"+alum+"22", "n10"+alum+"22"];

	var n1a22 = document.getElementById(asig22[0]).value;
	var n2a22 = document.getElementById(asig22[1]).value;
	var n3a22 = document.getElementById(asig22[2]).value;
	var n4a22 = document.getElementById(asig22[3]).value;
	var n5a22 = document.getElementById(asig22[4]).value;
	var n6a22 = document.getElementById(asig22[5]).value;
	var n7a22 = document.getElementById(asig22[6]).value;
	var n8a22 = document.getElementById(asig22[7]).value;
	var n9a22 = document.getElementById(asig22[8]).value;
	var n10a22 = document.getElementById(asig22[9]).value;

	var suma = parseFloat(n1a22)+parseFloat(n2a22)+parseFloat(n3a22)+parseFloat(n4a22)+parseFloat(n5a22)
		  	  +parseFloat(n6a22)+parseFloat(n7a22)+parseFloat(n8a22)+parseFloat(n9a22)+parseFloat(n10a22);

		if(n1a22!='0')
		{
			cont=1;
		}
		if(n2a22!='0')
		{
			cont=2;
		}
		if(n3a22!='0')
		{
			cont=3;
		}
		if(n4a22!='0')
		{
			cont=4;
		}
		if(n5a22!='0')
		{
			cont=5;
		}
		if(n6a22!='0')
		{
			cont=6;
		}
		if(n7a22!='0')
		{
			cont=7;
		}
		if(n8a22!='0')
		{
			cont=8;
		}
		if(n9a22!='0')
		{
			cont=9;
		}
		if(n10a22!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio22").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;
		var p22 = document.getElementById('promedio22').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21)+parseFloat(p22);

		var promp = sumap/22;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>


<!-- PROMEDIO alumno 23--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig23 = ["n1"+alum+"23", "n2"+alum+"23", "n3"+alum+"23", "n4"+alum+"23", "n5"+alum+"23",
				  "n6"+alum+"23", "n7"+alum+"23", "n8"+alum+"23", "n9"+alum+"23", "n10"+alum+"23"];

	var n1a23 = document.getElementById(asig23[0]).value;
	var n2a23 = document.getElementById(asig23[1]).value;
	var n3a23 = document.getElementById(asig23[2]).value;
	var n4a23 = document.getElementById(asig23[3]).value;
	var n5a23 = document.getElementById(asig23[4]).value;
	var n6a23 = document.getElementById(asig23[5]).value;
	var n7a23 = document.getElementById(asig23[6]).value;
	var n8a23 = document.getElementById(asig23[7]).value;
	var n9a23 = document.getElementById(asig23[8]).value;
	var n10a23 = document.getElementById(asig23[9]).value;

	var suma = parseFloat(n1a23)+parseFloat(n2a23)+parseFloat(n3a23)+parseFloat(n4a23)+parseFloat(n5a23)
		  	  +parseFloat(n6a23)+parseFloat(n7a23)+parseFloat(n8a23)+parseFloat(n9a23)+parseFloat(n10a23);

		if(n1a23!='0')
		{
			cont=1;
		}
		if(n2a23!='0')
		{
			cont=2;
		}
		if(n3a23!='0')
		{
			cont=3;
		}
		if(n4a23!='0')
		{
			cont=4;
		}
		if(n5a23!='0')
		{
			cont=5;
		}
		if(n6a23!='0')
		{
			cont=6;
		}
		if(n7a23!='0')
		{
			cont=7;
		}
		if(n8a23!='0')
		{
			cont=8;
		}
		if(n9a23!='0')
		{
			cont=9;
		}
		if(n10a23!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio23").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;
		var p22 = document.getElementById('promedio22').value;
		var p23 = document.getElementById('promedio23').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21)+parseFloat(p22)+parseFloat(p23);

		var promp = sumap/23;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>

<!-- PROMEDIO alumno 24--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig24 = ["n1"+alum+"24", "n2"+alum+"24", "n3"+alum+"24", "n4"+alum+"24", "n5"+alum+"24",
				  "n6"+alum+"24", "n7"+alum+"24", "n8"+alum+"24", "n9"+alum+"24", "n10"+alum+"24"];

	var n1a24 = document.getElementById(asig24[0]).value;
	var n2a24 = document.getElementById(asig24[1]).value;
	var n3a24 = document.getElementById(asig24[2]).value;
	var n4a24 = document.getElementById(asig24[3]).value;
	var n5a24 = document.getElementById(asig24[4]).value;
	var n6a24 = document.getElementById(asig24[5]).value;
	var n7a24 = document.getElementById(asig24[6]).value;
	var n8a24 = document.getElementById(asig24[7]).value;
	var n9a24 = document.getElementById(asig24[8]).value;
	var n10a24 = document.getElementById(asig24[9]).value;

	var suma = parseFloat(n1a24)+parseFloat(n2a24)+parseFloat(n3a24)+parseFloat(n4a24)+parseFloat(n5a24)
		  	  +parseFloat(n6a24)+parseFloat(n7a24)+parseFloat(n8a24)+parseFloat(n9a24)+parseFloat(n10a24);

		if(n1a24!='0')
		{
			cont=1;
		}
		if(n2a24!='0')
		{
			cont=2;
		}
		if(n3a24!='0')
		{
			cont=3;
		}
		if(n4a24!='0')
		{
			cont=4;
		}
		if(n5a24!='0')
		{
			cont=5;
		}
		if(n6a24!='0')
		{
			cont=6;
		}
		if(n7a24!='0')
		{
			cont=7;
		}
		if(n8a24!='0')
		{
			cont=8;
		}
		if(n9a24!='0')
		{
			cont=9;
		}
		if(n10a24!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio24").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;
		var p22 = document.getElementById('promedio22').value;
		var p23 = document.getElementById('promedio23').value;
		var p24 = document.getElementById('promedio24').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21)+parseFloat(p22)+parseFloat(p23)+parseFloat(p24);

		var promp = sumap/24;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>

<!-- PROMEDIO alumno 25--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig25 = ["n1"+alum+"25", "n2"+alum+"25", "n3"+alum+"25", "n4"+alum+"25", "n5"+alum+"25",
				  "n6"+alum+"25", "n7"+alum+"25", "n8"+alum+"25", "n9"+alum+"25", "n10"+alum+"25"];

	var n1a25 = document.getElementById(asig25[0]).value;
	var n2a25 = document.getElementById(asig25[1]).value;
	var n3a25 = document.getElementById(asig25[2]).value;
	var n4a25 = document.getElementById(asig25[3]).value;
	var n5a25 = document.getElementById(asig25[4]).value;
	var n6a25 = document.getElementById(asig25[5]).value;
	var n7a25 = document.getElementById(asig25[6]).value;
	var n8a25 = document.getElementById(asig25[7]).value;
	var n9a25 = document.getElementById(asig25[8]).value;
	var n10a25 = document.getElementById(asig25[9]).value;

	var suma = parseFloat(n1a25)+parseFloat(n2a25)+parseFloat(n3a25)+parseFloat(n4a25)+parseFloat(n5a25)
		  	  +parseFloat(n6a25)+parseFloat(n7a25)+parseFloat(n8a25)+parseFloat(n9a25)+parseFloat(n10a25);

		if(n1a25!='0')
		{
			cont=1;
		}
		if(n2a25!='0')
		{
			cont=2;
		}
		if(n3a25!='0')
		{
			cont=3;
		}
		if(n4a25!='0')
		{
			cont=4;
		}
		if(n5a25!='0')
		{
			cont=5;
		}
		if(n6a25!='0')
		{
			cont=6;
		}
		if(n7a25!='0')
		{
			cont=7;
		}
		if(n8a25!='0')
		{
			cont=8;
		}
		if(n9a25!='0')
		{
			cont=9;
		}
		if(n10a25!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio25").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;
		var p22 = document.getElementById('promedio22').value;
		var p23 = document.getElementById('promedio23').value;
		var p24 = document.getElementById('promedio24').value;
		var p25 = document.getElementById('promedio25').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21)+parseFloat(p22)+parseFloat(p23)+parseFloat(p24)+parseFloat(p25);

		var promp = sumap/25;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>

<!-- PROMEDIO alumno 26--> 


<script>

	var alum = '<?php echo $alumno;?>';
	var asig26 = ["n1"+alum+"26", "n2"+alum+"26", "n3"+alum+"26", "n4"+alum+"26", "n5"+alum+"26",
				  "n6"+alum+"26", "n7"+alum+"26", "n8"+alum+"26", "n9"+alum+"26", "n10"+alum+"26"];

	var n1a26 = document.getElementById(asig26[0]).value;
	var n2a26 = document.getElementById(asig26[1]).value;
	var n3a26 = document.getElementById(asig26[2]).value;
	var n4a26 = document.getElementById(asig26[3]).value;
	var n5a26 = document.getElementById(asig26[4]).value;
	var n6a26 = document.getElementById(asig26[5]).value;
	var n7a26 = document.getElementById(asig26[6]).value;
	var n8a26 = document.getElementById(asig26[7]).value;
	var n9a26 = document.getElementById(asig26[8]).value;
	var n10a26 = document.getElementById(asig26[9]).value;

	var suma = parseFloat(n1a26)+parseFloat(n2a26)+parseFloat(n3a26)+parseFloat(n4a26)+parseFloat(n5a26)
		  	  +parseFloat(n6a26)+parseFloat(n7a26)+parseFloat(n8a26)+parseFloat(n9a26)+parseFloat(n10a26);

		if(n1a26!='0')
		{
			cont=1;
		}
		if(n2a26!='0')
		{
			cont=2;
		}
		if(n3a26!='0')
		{
			cont=3;
		}
		if(n4a26!='0')
		{
			cont=4;
		}
		if(n5a26!='0')
		{
			cont=5;
		}
		if(n6a26!='0')
		{
			cont=6;
		}
		if(n7a26!='0')
		{
			cont=7;
		}
		if(n8a26!='0')
		{
			cont=8;
		}
		if(n9a26!='0')
		{
			cont=9;
		}
		if(n10a26!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio26").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;
		var p22 = document.getElementById('promedio22').value;
		var p23 = document.getElementById('promedio23').value;
		var p24 = document.getElementById('promedio24').value;
		var p25 = document.getElementById('promedio25').value;
		var p26 = document.getElementById('promedio26').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21)+parseFloat(p22)+parseFloat(p23)+parseFloat(p24)+parseFloat(p25)
			  	   +parseFloat(p26);

		var promp = sumap/26;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>


<!-- PROMEDIO alumno 27--> 


<script>

	var alum = '<?php echo $alumno;?>';
	var asig27 = ["n1"+alum+"27", "n2"+alum+"27", "n3"+alum+"27", "n4"+alum+"27", "n5"+alum+"27",
				  "n6"+alum+"27", "n7"+alum+"27", "n8"+alum+"27", "n9"+alum+"27", "n10"+alum+"27"];

	var n1a27 = document.getElementById(asig27[0]).value;
	var n2a27 = document.getElementById(asig27[1]).value;
	var n3a27 = document.getElementById(asig27[2]).value;
	var n4a27 = document.getElementById(asig27[3]).value;
	var n5a27 = document.getElementById(asig27[4]).value;
	var n6a27 = document.getElementById(asig27[5]).value;
	var n7a27 = document.getElementById(asig27[6]).value;
	var n8a27 = document.getElementById(asig27[7]).value;
	var n9a27 = document.getElementById(asig27[8]).value;
	var n10a27 = document.getElementById(asig27[9]).value;

	var suma = parseFloat(n1a27)+parseFloat(n2a27)+parseFloat(n3a27)+parseFloat(n4a27)+parseFloat(n5a27)
		  	  +parseFloat(n6a27)+parseFloat(n7a27)+parseFloat(n8a27)+parseFloat(n9a27)+parseFloat(n10a27);

		if(n1a27!='0')
		{
			cont=1;
		}
		if(n2a27!='0')
		{
			cont=2;
		}
		if(n3a27!='0')
		{
			cont=3;
		}
		if(n4a27!='0')
		{
			cont=4;
		}
		if(n5a27!='0')
		{
			cont=5;
		}
		if(n6a27!='0')
		{
			cont=6;
		}
		if(n7a27!='0')
		{
			cont=7;
		}
		if(n8a27!='0')
		{
			cont=8;
		}
		if(n9a27!='0')
		{
			cont=9;
		}
		if(n10a27!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio27").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;
		var p22 = document.getElementById('promedio22').value;
		var p23 = document.getElementById('promedio23').value;
		var p24 = document.getElementById('promedio24').value;
		var p25 = document.getElementById('promedio25').value;
		var p26 = document.getElementById('promedio26').value;
		var p27 = document.getElementById('promedio27').value;


		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21)+parseFloat(p22)+parseFloat(p23)+parseFloat(p24)+parseFloat(p25)
			  	   +parseFloat(p26)+parseFloat(p27);

		var promp = sumap/27;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>



<!-- PROMEDIO alumno 28--> 


<script>

	var alum = '<?php echo $alumno;?>';
	var asig28 = ["n1"+alum+"28", "n2"+alum+"28", "n3"+alum+"28", "n4"+alum+"28", "n5"+alum+"28",
				  "n6"+alum+"28", "n7"+alum+"28", "n8"+alum+"28", "n9"+alum+"28", "n10"+alum+"28"];

	var n1a28 = document.getElementById(asig28[0]).value;
	var n2a28 = document.getElementById(asig28[1]).value;
	var n3a28 = document.getElementById(asig28[2]).value;
	var n4a28 = document.getElementById(asig28[3]).value;
	var n5a28 = document.getElementById(asig28[4]).value;
	var n6a28 = document.getElementById(asig28[5]).value;
	var n7a28 = document.getElementById(asig28[6]).value;
	var n8a28 = document.getElementById(asig28[7]).value;
	var n9a28 = document.getElementById(asig28[8]).value;
	var n10a28 = document.getElementById(asig28[9]).value;

	var suma = parseFloat(n1a28)+parseFloat(n2a28)+parseFloat(n3a28)+parseFloat(n4a28)+parseFloat(n5a28)
		  	  +parseFloat(n6a28)+parseFloat(n7a28)+parseFloat(n8a28)+parseFloat(n9a28)+parseFloat(n10a28);

		if(n1a28!='0')
		{
			cont=1;
		}
		if(n2a28!='0')
		{
			cont=2;
		}
		if(n3a28!='0')
		{
			cont=3;
		}
		if(n4a28!='0')
		{
			cont=4;
		}
		if(n5a28!='0')
		{
			cont=5;
		}
		if(n6a28!='0')
		{
			cont=6;
		}
		if(n7a28!='0')
		{
			cont=7;
		}
		if(n8a28!='0')
		{
			cont=8;
		}
		if(n9a28!='0')
		{
			cont=9;
		}
		if(n10a28!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio28").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;
		var p22 = document.getElementById('promedio22').value;
		var p23 = document.getElementById('promedio23').value;
		var p24 = document.getElementById('promedio24').value;
		var p25 = document.getElementById('promedio25').value;
		var p26 = document.getElementById('promedio26').value;
		var p27 = document.getElementById('promedio27').value;
		var p28 = document.getElementById('promedio28').value;


		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21)+parseFloat(p22)+parseFloat(p23)+parseFloat(p24)+parseFloat(p25)
			  	   +parseFloat(p26)+parseFloat(p27)+parseFloat(p28);

		var promp = sumap/28;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>





<!-- PROMEDIO alumno 29--> 

<script>

	var alum = '<?php echo $alumno;?>';
	var asig29 = ["n1"+alum+"29", "n2"+alum+"29", "n3"+alum+"29", "n4"+alum+"29", "n5"+alum+"29",
				  "n6"+alum+"29", "n7"+alum+"29", "n8"+alum+"29", "n9"+alum+"29", "n10"+alum+"29"];

	var n1a29 = document.getElementById(asig29[0]).value;
	var n2a29 = document.getElementById(asig29[1]).value;
	var n3a29 = document.getElementById(asig29[2]).value;
	var n4a29 = document.getElementById(asig29[3]).value;
	var n5a29 = document.getElementById(asig29[4]).value;
	var n6a29 = document.getElementById(asig29[5]).value;
	var n7a29 = document.getElementById(asig29[6]).value;
	var n8a29 = document.getElementById(asig29[7]).value;
	var n9a29 = document.getElementById(asig29[8]).value;
	var n10a29 = document.getElementById(asig29[9]).value;

	var suma = parseFloat(n1a29)+parseFloat(n2a29)+parseFloat(n3a29)+parseFloat(n4a29)+parseFloat(n5a29)
		  	  +parseFloat(n6a29)+parseFloat(n7a29)+parseFloat(n8a29)+parseFloat(n9a29)+parseFloat(n10a29);

		if(n1a29!='0')
		{
			cont=1;
		}
		if(n2a29!='0')
		{
			cont=2;
		}
		if(n3a29!='0')
		{
			cont=3;
		}
		if(n4a29!='0')
		{
			cont=4;
		}
		if(n5a29!='0')
		{
			cont=5;
		}
		if(n6a29!='0')
		{
			cont=6;
		}
		if(n7a29!='0')
		{
			cont=7;
		}
		if(n8a29!='0')
		{
			cont=8;
		}
		if(n9a29!='0')
		{
			cont=9;
		}
		if(n10a29!='0')
		{
			cont=10;
		}

	var prom = suma/cont;
	document.getElementById("promedio29").value = Math.round(prom);

		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;
		var p21 = document.getElementById('promedio21').value;
		var p22 = document.getElementById('promedio22').value;
		var p23 = document.getElementById('promedio23').value;
		var p24 = document.getElementById('promedio24').value;
		var p25 = document.getElementById('promedio25').value;
		var p26 = document.getElementById('promedio26').value;
		var p27 = document.getElementById('promedio27').value;
		var p28 = document.getElementById('promedio28').value;
		var p29 = document.getElementById('promedio29').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20)
			  	   +parseFloat(p21)+parseFloat(p22)+parseFloat(p23)+parseFloat(p24)+parseFloat(p25)
			  	   +parseFloat(p26)+parseFloat(p27)+parseFloat(p28)+parseFloat(p29);

		var promp = sumap/29;
		document.getElementById("pfinal1s").value = Math.round(promp);

</script>





<!-- PROMEDIO FINAL-->

<script>
	/*var cursoalum = "<?php echo $curso;?>";

	if(cursoalum == '1')
	{
		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15);

		var promp = sumap/15;
		document.getElementById("pfinal1s").value = cursoalum;
		//Math.round(promp);
	}

	if(cursoalum == '2')
	{
		var p1 = document.getElementById('promedio1').value;
		var p2 = document.getElementById('promedio2').value;
		var p3 = document.getElementById('promedio3').value;
		var p4 = document.getElementById('promedio4').value;
		var p5 = document.getElementById('promedio5').value;
		var p6 = document.getElementById('promedio6').value;
		var p7 = document.getElementById('promedio7').value;
		var p8 = document.getElementById('promedio8').value;
		var p9 = document.getElementById('promedio9').value;
		var p10 = document.getElementById('promedio10').value;
		var p11 = document.getElementById('promedio11').value;
		var p12 = document.getElementById('promedio12').value;
		var p13 = document.getElementById('promedio13').value;
		var p14 = document.getElementById('promedio14').value;
		var p15 = document.getElementById('promedio15').value;
		var p16 = document.getElementById('promedio16').value;
		var p17 = document.getElementById('promedio17').value;
		var p18 = document.getElementById('promedio18').value;
		var p19 = document.getElementById('promedio19').value;
		var p20 = document.getElementById('promedio20').value;

		var sumap = parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)
			  	   +parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9)+parseFloat(p10)
			  	   +parseFloat(p11)+parseFloat(p12)+parseFloat(p13)+parseFloat(p14)+parseFloat(p15)
			  	   +parseFloat(p16)+parseFloat(p17)+parseFloat(p18)+parseFloat(p19)+parseFloat(p20);

		var promp = sumap/20;
		document.getElementById("pfinal1s").value = cursoalum;
	}
	 
	*/
	

	

</script>





</head>

<body>

</body>

</html>

