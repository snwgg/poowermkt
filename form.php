<?php

$nome = addslaches ($_POST(["name"]))
$email = addslaches ($_POST(["email"]))

$to = "gustavoramalho2702@gmail.com"
$subject = "site power"
$body = "nome:  " $nome. "/n"
"nome:  " $email. "/n"
$header = "from:gustavoramalho2702@gmail.com" "/n"reply-to".$email "
"x=mailer:PHP/" .phpversion();
mail($to,$subject,$body,$header)
if (condition) {
    # code...
}{echo(email enviado)}
}else {
    echo("nao foi enviado")
}

?>