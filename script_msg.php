if ($mail->send()) 
{

  header("location:controlador.php");

  echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';

  } else {

  echo "Mailer Error: " . $mail->ErrorInfo;
}