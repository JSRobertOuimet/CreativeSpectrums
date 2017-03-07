<?php
/* Set e-mail recipient */
$myemail  = "hello@creativespectrums.com";

/* Check all form inputs using check_input function */
$firstname = check_input($_POST['first-name'], "Enter your first name.");
$lastname = check_input($_POST['last-name'], "Enter your last name.");
$email    = check_input($_POST['email']);
$siteurl  = check_input($_POST['site-url']);
$message = check_input($_POST['message'], "Write your message.");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("Email address not valid.");
}

/* If URL is not valid set $website to empty */
if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $siteurl))
{
    $siteurl = '';
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

First name: $firstname
Last name: $firstname
Email: $email
Site URL: $siteurl

Message:
$message

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

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