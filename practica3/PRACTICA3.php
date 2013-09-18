<html>
 <title> Tabla Zebra </title>
  <head>
    	<meta name="descripcion " content = "Tabla Zebra"/>
	<meta name="KEYWORDS " content = "HTML5,CSS3,JAVASCRIPT"/>
	<TITLE>Practica3</TITLE>
	<LINK REL ="stylesheet"  href= "clasep3.css">
     </head>
  <body>

    <?php

	echo "<br><br>Tabla Zebra<br><br>";
	echo "<table border=1>";
	echo "<tr>";

	$num=0;
	
	

	for ($fil=0;$fil<10;$fil++)
	{

		echo "<tr>";
		$clase="";
		
	   
           if ($fil%2==0)
	   {

                    $clase='class="par"';

           }

           for($col=0;$col<10;$col++)
	   {
			
			echo "<td ".$clase." > ".++$num;
			echo "</td>";
	   } 
		
	   echo "</tr>";
	}
		
 	   echo "</table>";


     ?>
  </body>
</html
