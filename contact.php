<?php 
if($_POST['name'] != '' && $_POST['email'])
{
    $to = 'contact@knocklogics.com'; 
    $from = $_POST['email']; 
    $fromName = $_POST['name']; 
     
    $subject = $_POST['subject']; 
    $message = $_POST['message'];
     
    $htmlContent = ' 
        <html> 
        <head> 
            <title>'.$fromName.' Contact you</title> 
        </head> 
        <body> 
            <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
                <tr> 
                    <th>Name:</th><td>'.$fromName.'</td> 
                </tr> 
                <tr> 
                    <th>Email:</th><td>'.$from.'</td> 
                </tr> 
                <tr> 
                    <th>Subject:</th><td>'.$subject.'</td> 
                </tr> 
                <tr > 
                    <th>Email:</th><td>'.$from.'</td> 
                </tr> 
                <tr style="background-color: #e0e0e0;"> 
                    <th>Message:</th><td>'.$message.'</td> 
                </tr>
            </table> 
        </body> 
        </html>'; 
     
    // Set content-type header for sending HTML email 
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Create email headers
    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion(); 
    //$headers .= 'Cc: welcome@example.com' . "\r\n"; 
    //$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
   
    
    // Send email 
    if(mail($to, $subject, $htmlContent, $headers))
    { 
        print_r('if'); exit;
        header('location contact.html');
    }
    else
    { 
        print_r('else'); exit;
        header('location contact.html');
    }
}

?>