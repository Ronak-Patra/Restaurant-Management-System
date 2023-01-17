<?php 
	if(isset($_POST['post'])) {
		// print_r($_POST);
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$data = [
			'secret' => "6LfjT7UhAAAAAI07XFDqSiEK_6ClLA2rnn-kFbxd",
			'response' => $_POST['token'],
			// 'remoteip' => $_SERVER['REMOTE_ADDR']
		];

		$options = array(
		    'http' => array(
		      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		      'method'  => 'POST',
		      'content' => http_build_query($data)
		    )
		  );

		$context  = stream_context_create($options);
  		$response = file_get_contents($url, false, $context);

		$res = json_decode($response, true);
		if($res['success'] == true) {

			// Perform you logic here for ex:- save you data to database
  			echo '<div class="alert alert-success">
			  		<strong>Success!</strong> Your inquiry successfully submitted.
		 		  </div>';
		} else {
			echo '<div class="alert alert-warning">
					  <strong>Error!</strong> You are not a human.
				  </div>';
		}
	}

 ?>

<?php

include('rms.php');

$object = new rms();

if(!$object->Is_set_up_done())
{
    header("location:".$object->base_url."register.php");
}

if($object->is_login())
{
    header("location:".$object->base_url."dashboard.php");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shiva Fancy Food</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"></script>
    
    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .bg-gradient-primary{
            background-image:url(https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?cs=srgb&dl=pexels-pixabay-531880.jpg&fm=jpg);
        }
        .col-lg-12{
            background-color:#e262dc;
        }
    </style>
  <script src="https://www.google.com/recaptcha/api.js?render=6LfjT7UhAAAAABqIG8HcbitMSV0zNHO9YGeNfm1A"></script>
</head>

<body class="bg-gradient-primary">
    <body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-5 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <?php
                                        if(isset($_SESSION['success']))
                                        {
                                            echo $_SESSION['success'];
                                            unset($_SESSION['success']);
                                        }
                                        ?>
                                        <span id="error"></span>
                                        <h1 class="h4 text-gray-900 mb-4">Shiva Fancy Food</h1>
                                    </div>
                                    <form method="post" id="login_form">
                                        <div class="form-group">
                                            <input type="text" name="user_email" id="user_email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter Email Address..." />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="user_password" id="user_password" class="form-control" required  data-parsley-trigger="keyup" placeholder="Password" />
                                        </div>
                                        <div class="g-recaptcha" data-sitekey="6LfjT7UhAAAAABqIG8HcbitMSV0zNHO9YGeNfm1A"></div>
      <br/>
                                        <!-- <div class="captcha">
                                            <label for="captcha-input">Enter Captcha</label>
                                            <div class="preview"></div>
                                            <div class="captcha-form">
                                                <input type="text" id="captcha-form" placeholder="Enter Captcha Text">
                                                <button class ="captcha-refresh"><i class ="fa fa-refresh"></i></button>
                                            </div> 
                                        </div>  -->
                                        <div class="form-group">
                                            <button type="submit" value="Post" name="login_button" id="login_button" class="btn btn-success btn-user btn-block" name="post">Login</button>
                                        </div>
                                        <input type="hidden" id="token" name="token">
                                        <div class="form-group">
                                            <!-- <button type="home"  class="btn btn-success btn-user btn-block"><a href="index.html">Home</a></button> -->
                                            <div class="btn btn-success btn-user btn-block"><a href="cust_register.html">Sign Up</a></div>
                                            <div class="btn btn-success btn-user btn-block"><a href="index.html">Home</a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php 
    // if(isset($_POST['Submit']))

    // $secretKey=""
    // $response=$_POST['']?>
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script type="text/javascript" src="vendor/parsley/dist/parsley.min.js"></script>

</body>

</html>
<script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LfjT7UhAAAAABqIG8HcbitMSV0zNHO9YGeNfm1A', {action: 'dashboard.php'}).then(function(token) {
         // console.log(token);
         document.getElementById("token").value = token;
      });
  });
  </script>
<script>

$(document).ready(function(){

    $('#login_form').parsley();

    $('#login_form').on('submit', function(event){
        event.preventDefault();
        if($('#login_form').parsley().isValid())
        {       
            $.ajax({
                url:"login_action.php",
                method:"POST",
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function()
                {
                    $('#login_button').attr('disabled', 'disabled');
                    $('#login_button').val('wait...');
                },
                success:function(data)
                {
                    $('#login_button').attr('disabled', false);
                    if(data.error != '')
                    {
                        $('#error').html(data.error);
                        $('#login_button').val('Login');
                    }
                    else
                    {
                        window.location.href = "<?php echo $object->base_url; ?>dashboard.php";
                    }
                }
            })
        }
    });

});

</script>