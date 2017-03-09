<?php
/* Set e-mail recipient */
$myemail  = "hello@creativespectrums.com";

/* Check all form inputs using check_input function */
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email    = $_POST['email'];
$siteurl  = $_POST['siteurl'];
$message = $_POST['message'];

/* If e-mail is not valid show error message */
// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
// {
//     show_error("Email address not valid.");
// }

// /* If URL is not valid set $website to empty */
// if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $siteurl))
// {
//     $siteurl = '';
// }

/* Let’s prepare the message for the e-mail */
$message ="

First name: $firstname
Last name: $lastname
Email: $email
Site URL: $siteurl

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thanks.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>