<?php

include('rms.php');

$object = new rms();

// if(!$object->is_login())
// {
// header("location:".$object->base_url."");
// }

// include('header.php');

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shiva Fancy Food</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/bootstrap-select.min.css"/>
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      * {
        /* box-sizing: border-box; */
        margin: 0;
        padding: 0;
        color: black;
        font-family: sans-serif;
        letter-spacing: 1px;
        font-weight: 300;
      }

      body {
        background-color: #f1f1f1;
        /* padding: 20px; */
        font-family: Arial;
      }
      nav {
        height: 6rem;
        width: 100vw;
        background-color: #e262dc;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
        display: flex;
        position: fixed;
        z-index: 10;
      }

      /*Styling logo*/
      .logo {
        padding: 1vh 1vw;
        text-align: center;
        display: flex;
      }
      .logo img {
        height: 5rem;
        width: 5rem;
      }
      .logo ul {
        padding-top: 25px;
        font-size: 25px;
        white-space: nowrap;
      }
      /*Styling Links*/
      .nav-links {
        display: flex;
        list-style: none;
        width: 15%;
        padding: 0 0.7vw 0 80vh;
        /* padding: 0 0.7vw; */
        justify-content: space-evenly;
        align-items: center;
        text-transform: uppercase;
        float: right;
        white-space: nowrap;
      }
      .nav-links li a {
        text-decoration: none;
        margin: 0 0.7vw;
      }
      .nav-links li a:hover {
        color: #ff0000;
      }
      .nav-links li {
        position: relative;
      }
      .nav-links li a::before {
        content: "";
        display: block;
        height: 3px;
        width: 0%;
        background-color: #92fb61;
        position: absolute;
        transition: all ease-in-out 250ms;
        margin: 20% 0 0 10%;
      }
      .nav-links li a:hover::before {
        width: 80%;
      }

      /*Styling Buttons*/
      /* .login-button{
    background-color: transparent;
    border: 1.5px solid #f2f5f7;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    margin-left: 2vw;
    font-size: 1rem;
    cursor: pointer;

}
.login-button:hover {
    color: #131418;
    background-color: #f2f5f7;
    border:1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
}
.join-button{
    color: #131418;
    background-color: #61DAFB;
    border: 1.5px solid #61DAFB;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    font-size: 1rem;
    cursor: pointer;
}
.join-button:hover {
    color: #f2f5f7;
    background-color: transparent;
    border:1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
} */

      /*Styling Hamburger Icon*/
      .hamburger div {
        width: 30px;
        height: 3px;
        background: #000;
        margin: 5px;
        transition: all 0.3s ease;
      }
      .hamburger {
        display: none;
      }

      /*Stying for small screens*/
      @media screen and (max-width: 1230px) {
        nav {
          position: fixed;
          z-index: 3;
          width: 100%;
        }
        .hamburger {
          display: block;
          position: absolute;
          cursor: pointer;
          right: 5%;
          top: 50%;
          transform: translate(-5%, -50%);
          z-index: 2;
          transition: all 0.7s ease;
        }
        .nav-links {
          position: fixed;
          background: #e262dc;
          height: 100vh;
          width: 100vw;
          flex-direction: column;
          clip-path: circle(50px at 90% -20%);
          -webkit-clip-path: circle(50px at 90% -10%);
          transition: all 1s ease-out;
          pointer-events: none;
          /* display: flex; */
          list-style: none;
          /* width: 45%; */
          padding: 0 0.7vw 80vh;
          /* padding: 0 0.7vw; */
          justify-content: space-evenly;
          align-items: right;
          text-transform: uppercase;
          /* float: right; */
          white-space: nowrap;
        }
        .nav-links.open {
          clip-path: circle(1000px at 90% -10%);
          -webkit-clip-path: circle(1000px at 90% -10%);
          pointer-events: all;
        }
        .nav-links li {
          opacity: 0;
        }
        .nav-links li:nth-child(1) {
          transition: all 0.5s ease 0.2s;
        }
        .nav-links li:nth-child(2) {
          transition: all 0.5s ease 0.4s;
        }
        .nav-links li:nth-child(3) {
          transition: all 0.5s ease 0.6s;
        }
        .nav-links li:nth-child(4) {
          transition: all 0.5s ease 0.7s;
        }
        .nav-links li:nth-child(5) {
          transition: all 0.5s ease 0.8s;
        }
        .nav-links li:nth-child(6) {
          transition: all 0.5s ease 0.9s;
          margin: 0;
        }
        .nav-links li:nth-child(7) {
          transition: all 0.5s ease 1s;
          margin: 0;
        }
        .nav-links li:nth-child(8) {
          transition: all 0.5s ease 1.1s;
          margin: 0;
        }
        .nav-links li:nth-child(9) {
          transition: all 0.5s ease 1.2s;
          margin: 0;
        }
        .nav-links li:nth-child(10) {
          transition: all 0.5s ease 1.3s;
          margin: 0;
        }
        li.fade {
          opacity: 1;
        }
      }
      /*Animating Hamburger Icon on Click*/
      .toggle .line1 {
        transform: rotate(-45deg) translate(-5px, 6px);
      }
      .toggle .line2 {
        transition: all 0.7s ease;
        width: 0;
      }
      .toggle .line3 {
        transform: rotate(45deg) translate(-5px, -6px);
      }

      /* Center website */
      .main {
        max-width: 1000px;
        margin: auto;
        padding: 8% 0 0 0;
      }

      h1 {
        font-size: 50px;
        word-break: break-all;
      }

      .row {
        margin: 10px -16px;
        box-sizing: border-box;
      }

      /* Add padding BETWEEN each column */
      .row,
      .row > .column {
        padding: 8px;
      }

      /* Create three equal columns that floats next to each other */
      .column {
        float: left;
        width: 33.33%;
        display: none; /* Hide all elements by default */
      }

      /* Clear floats after rows */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Content */
      .content {
        background-color: white;
        /* padding: 10px; */
      }

      /* The "show" class is added to the filtered elements */
      .show {
        display: block;
        box-sizing: border-box;
      }

      /* Style the buttons */
      .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: white;
        cursor: pointer;
      }

      .btn:hover {
        background-color: #ddd;
      }

      .btn.active {
        background-color: rgb(196, 44, 44);
        color: white;
      }
      @media screen and (max-width: 1230px){
        .main{
          padding: 25% 0 0 0;
        }
      }

      #footer{
    padding: 100px 0 20px;
    /* background:#efefef; */
    position: relative;
    background-image: url(images/orange-6508617_1920.jpg);
    background-size: cover;
    background-position:center;
    /* opacity: 0.1; */
    /* height: 100vh; */
    /* z-index: -1; */
    background-image: z-index(-1);
    background-image: opacity(0.1);
}
 /* .footer-row{
    width: 80%;
    margin: 0 auto;
    display:flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.footer-left,.footer-right{
    flex-basis: 45%;
    padding: 10px;
    margin-bottom: 20px;
}
.footer-right{
    text-align: right;
}
.footer-row h1{
    margin: 10px 0;
}
.footer-row p{
    line-height: 35px;
}
.footer-left .fa,.footer-right .fa{
    font-size: 20px;
    color: #009688;
    margin: 10px;
}
.footer-img{
    max-width: 370px;
    opacity: 0.1;
    position: absolute;
    left:50%;
    top: 35%;
    transform: translate(-50%,-50%);
    z-index: -2;
} */
.social-links{
    text-align: center;
}
.social-links i{
    z-index: 1;
}
.social-links .fa{
    height: 40px;
    width: 40px;
    font-size: 20px;
    line-height: 40px;
    border: 1px solid #000;
    margin: 40px 5px 0;
    color: #009688;
    cursor: pointer;
    transition: .5s;
}
.social-links .fa:hover{
    background: #009688;
    color: #e262dc;
    transform: translateY(-7px);
}
.social-links p{
    font-size: 12px;
    margin-top: 20px;
}
@media screen and (max-width: 770px){
    .footer-left,.footer-right{
        flex-basis: 100%;
        font-size: 14px;
    }
    .footer-img{
        top: 15%;
    }
}
.footer-distributed{
	background: #e262dc;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #000000;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #000;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  white;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #fff;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #000000;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #000;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
.col-md-12{
  padding-top:100px;
}

    </style>
  </head>
  <body>
    <nav>
      <div class="logo">
        <a href="index.html"><img src="images/logo.png" alt="SFF" /></a>
        <ul>
          Shiva Fancy Food
        </ul>
      </div>
      <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-links">
        <li><a href="restaurant.html">Home</a></li>
        <li><a href="rimages.html">Gallery</a></li>
        <li><a href="rmenu.html">Menu</a></li>
        <li><a href="rabout.html">About Us</a></li>
        <li><a href="rservice.html">Services</a></li>
        <li><a href="rfeedback.html">Feedback</a></li>
        <li><a href="rcontact.html">Contact Us</a></li>
        <!-- <li><a href="catering.html">Catering</a></li> -->
        <!--             <li><button class="login-button" href="#">Login</button></li>
            <li><button class="join-button" href="#">Join</button></li>-->
      </ul>
    </nav>
 
                   <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="m-0 font-weight-bold text-primary">Are any Tables Free?</h6>
                                        </div>
                                        <div class="col" align="right">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="table_status"></div>
                                </div>
                            </div>
                        
                    </div>
 
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                            		<h6 class="m-0 font-weight-bold text-primary">Checkout Our Menu</h6>
                            	</div>
                            	<div class="col" align="right">
                            		<!-- <button type="button" name="add_tax" id="add_tax" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button> -->
                            	</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tax_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Food Category</th>
                                            <th>Dish Name</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										                          $con=mysqli_connect('localhost','root','','rms');

											                        $qry="select * from product_table where product_status='enable'";
                                              $query=$con->query($qry);
											                        while($row=$query->fetch_assoc()){
										                    ?>
										                    <tr>
												                      <td><?php echo $row['category_name'];?></td>
												                      <td><?php echo $row['product_name'];?></td>
												                      <td><?php echo $row['product_price'];?></td>
										                    </tr>
										                    <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



    <!-- <footer class="footer-distributed">

			<div class="footer-left">

				<h3>SHIVA FANCY FOOD</h3>

				<p class="footer-links">
          <a href="restaurant.html" class="link-1">HOME</a>

          <a href="rimages.html" class="link-2">GALLERY</a>

          <a href="rmenu.html" class="link-3">MENU</a>

          <a href="rabout.html" class="link-4">ABOUT US</a>

          <a href="rservice.html" class="link-5">SERVICES</a>

          <a href="rfeedback.html" class="link-6">FEEDBACK</a>

          <a href="rcontact" class="link-7">CONTACT US</a>

          <a href="catering.html" class="link-8">CATERING</a>
        </p>
        <p class="footer-company-name">SFF © 2022</p>
      </div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<a href="https://goo.gl/maps/SRQanP4iLrygm9Xv7" target="_blank"><p>New Link Rd, Motilal Nagar I,<br> Goregaon West, Mumbai, Maharashtra 400104</p></a>
				</div>

				<div>
					<a href="Tel:+91 9136217150"><i class="fa fa-phone"></i>
					<p>+91 9136217150</p></a>
				</div>
        <div>
					<i class="fa fa-whatsapp"></i>
					<a href="https://wa.me/+919136217150" target="_blank"><p>+91 9136217150</p></a>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:ronvpatra999@gmail.com" target="_blank">Ronvpatra999@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span font-size="50px">About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="social-links">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-youtube-play"></i></a>

				</div>

			</div>
      <?php
                include('footer.php');
                ?>
		</footer> -->
    <script>
      const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});

      filterSelection("all");
      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          w3RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
      }

      function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
          }
        }
      }

      function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
          }
        }
        element.className = arr1.join(" ");
      }

      // Add active class to the current button (highlight it)
      var btnContainer = document.getElementById("myBtnContainer");
      var btns = btnContainer.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
    </script>
    <script>

$(document).ready(function(){

    reset_table_status();

    setInterval(function(){
        reset_table_status();
    }, 5000);

    function reset_table_status()
    {
        $.ajax({
            url:"order_action.php",
            method:"POST",
            data:{action:'dashboard_reset'},
            success:function(data){
                $('#table_status').html(data);
            }
        });
    }

});

</script>

<!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript" src="vendor/parsley/dist/parsley.min.js"></script>

    <script type="text/javascript" src="vendor/bootstrap-select/bootstrap-select.min.js"></script>

  </body>
</html>
