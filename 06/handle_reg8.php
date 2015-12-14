<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
    <h1>Registration Results</h1>
    <?php
        $current_year=2015;
        /*
        $resultados=print_r($_POST);
        $resultados=nl2br($resultados);
        print "<div> $resultados </div>";*/

        $okay=TRUE;

        // Validate the email address:
        if (empty($_POST['email'])) {
            print '<p class="error">Please enter your email address.</p>';
            $okay = FALSE;
        }

        // Validate the password:
        if (empty($_POST['password'])) {
            print '<p class="error">Please enter your password.</p>';
            $okay = FALSE;
        }

        // Check the two passwords for equality:
        if ($_POST['password'] != $_POST['confirm']) {
            print '<p class="error">Your confirmed password does not match the original password.</p>';
            $okay = FALSE;
        }

        // Validate the birth date:
        if ( empty($_POST['month']) ) {
        
            print '<p class="error">Please enter the month you were born.</p>';
            $okay = FALSE;

        } else if ( empty($_POST['day'])){ 

            print '<p class="error">Please enter the day you were born.</p>';
            $okay = FALSE;

        } else if (empty($_POST['year'])){

            print '<p class="error">Please enter the year you were born.</p>';
            $okay = FALSE;
        }
        else{
            $age=$current_year-$_POST['year'];
            $date_birth=$_POST['month']."/".$_POST['day']."/".$_POST['year'];
        }

        // Validate the terms:
        if ( !isset($_POST['terms'])) {
            print '<p class="error">You must accept the terms.</p>';
            $okay = FALSE;  
        }

        // Validate the color:
        switch ($_POST['color']) {
            case 'red':
                $color_type = 'primary';
                $color=$_POST['color'];
                break;
            case 'yellow':
                $color_type = 'primary';
                $color=$_POST['color'];
                break;
            case 'green':
                $color_type = 'secondary';
                $color=$_POST['color'];
                break;
            case 'blue':
                $color_type = 'primary';
                $color=$_POST['color'];
                break;
            default:
                print '<p class="error">Please select your favorite color.</p>';
                $okay = FALSE;
                break;
        } // End of switch.

        // If there were no errors, print a success message:
        if ($okay) {
            print '<p>You have been successfully registered (but not really).</p>';
            print "<p>You will turn $age this year.</p>";
            print "<p>Your favorite color is <span style=\"color:$color\"> $color </span> and this is a $color_type color.</p>";
            print "<p>The day you were born was $date_birth.</p>";
        }
    ?>
</body>
</html>