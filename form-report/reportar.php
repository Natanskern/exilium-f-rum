<?php
        $message_sent = false;
        if(isset($_POST['email']) && $_POST['email'] != ''){

            if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        

        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];

        $email_from = 'natanskern@protonmail.com';
        $email_subject = "Bugs em Exilio Intelectual";
        $email_body = "User Name : $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

            $to = "natanskern@protonmail.com";

            $headers = "From: $email_from \r\n";
            $headers .= "Reply-To: $visitor_email \r\n";

            mail($to,$email_subject,$email_body,$headers);

            header("Location: reportar.html");

            $message_sent = true;
                }
                else{
                    $invalid_class_name = "form-invalid";
                }
            }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../images/ei.png" />
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="main.css" media="screen" />
<title>Reporte um bug</title>
</head>
<body>
<a href="../index.html">Voltar ao fórum</a>
<div class="formemail" align="center">
        <h2 class="titleform">Reporte um bug no fórum</h2>
        </div>
        <div class="form-email" align="center">
        <form id="contact-form" method="post" action="report-bug.php">
        <input name="name" type="text" class="form-control" placeholder="Nome de usuário" required>
        <br>
        <input name="email" type="text" class="form-control" placeholder="Seu melhor email" required>
        <br>
        <textarea name="message" class="form-control" placeholder="Houston we have a problem!" row="4" required></textarea>
        <br>
        <input type="submit" class="form-control submit" value="SEND">
        <br>
        </div>
        </div>
         <div class="iconskill" align="left">
        </div>
</body>
</html>
