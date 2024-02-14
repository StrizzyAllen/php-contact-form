<?php
    if (isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "email@email.com";
        $headers = "From: ".$mailFrom;
        $txt = "You recieved an email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers); {
            header("Location: index.php?mailsend");
        }
    }

