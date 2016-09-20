<?php 
require_once("db_const.php");  
?> 

<!doctype html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Chuck Norris Facts</title> 
        <link rel="stylesheet" type="text/css" href="css/styles.css">	 
    </head>  
    <body>     	 
        <header> 
            <h1>Chuck Norris Facts</h1>
        
            <?php
            // 1. Etablerer forbindelse via et mysqli-objekt
            $connection = new mysqli(HOST, USER, PASS, NAME);
            // Set utf8 character set for data transfer.
            $connection->set_charset("utf8");
           
		 if ($connection->connect_error) {
			die('Connect Error: ' . $connection->connect_error);
			} else {
			echo '<span class="hint">[Successful connection to MySQL database!]</span>';
			}
		 
		 ?>
         </header>
        
         <?php 
		 $data = $connection->query("SELECT * FROM jokes ORDER BY id DESC"); 
		 while($joke = $data->fetch_assoc()){
		
		 ($joke);
			echo '<div class="joke">
					<img src="' . $joke['img'] . '" class="norris_pic" alt="Chuck Norris caricature"/>
					<h2>' . $joke['joke'] .  '</h2>	       
            </div>';}
        
       
        
         ###############################################################################################
		 # Oh my god - I need a way to render ALL records from the database, not only the last one :-( #
		 # This makes me sick...                                                                       # 
		 ###############################################################################################
		 ?>  
    </body> 
</html>