<?php
  if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['value']) && !empty($_POST['value']))
  {
     echo htmlspecialchars($_POST['value']);
  }
  else
  {
     echo 'Erreur';
  }
?>