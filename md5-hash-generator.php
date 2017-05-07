<!DOCTYPE html>
<html>
    <head><style>
        
        *{
            font-family:arial;
            font-size:100%
        }
        

        
        body{
            margin: auto; 
            width:600px;
            height:100%
        }
        
        h1{
        margin: 2em 0;}
        
        input {
            border: dashed 1px black;
                margin: 0em 2em 2em 0em;
    padding: 1em;
}
   
                input[type="submit"] {
    background: black;
    color: white;
            border: 0;
}
        
        </style>
        
    </head>
<body>


    
    
    <?php

 echo "<h1>MD5-Hash-Generator</h1>";

	echo '<form action="'.$PHP_SELF.'" method="post">
 
<h2>Passwort:</h2>
	<input name="passwort">
 
	<input type="submit" name="md5" value="Ermittle MD5-Hash">
 
	</form>';


echo "<h2>MD5-Hash:</h2>";
echo "<h3>". md5($_POST["passwort"]) ."</h3>";
 
?>
    <p><small>Nach einer Idee von Webstylez: http://webstylez.net/Passwort-verschluesseln-in-PHP</small></p>
 
</body>
</html>
