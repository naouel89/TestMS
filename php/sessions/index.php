<?php    

session_start();

if ($_SESSION["login"]) 
{
   echo"Vous êtes autorisé à voir cette page.";  
} 
else 
{
   echo"Cette page nécessite une identification.";  
}
?>

