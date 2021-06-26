<?php
	$page = "Contact Form";
	$path = ""

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
?>

				<h1>Contact Form</h1> 
				<div>Use the form to send a message.</div>

        <script>
                function isvalid(){
                    if(name == ""){
                        return false;
                    }
                }
        </script>

                <form>
                </form>
<?php
	include($path . "assets/inc/footer.php");
?>