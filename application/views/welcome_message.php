<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tubagus's Profile</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

		*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		list-style: none;
		font-family: 'Josefin Sans', sans-serif;
		}

		body{
		background-color: #f9fad9;
		}

		.wrapper{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 450px;
		display: flex;
		box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
		}

		.wrapper .left{
		width: 35%;
		background: linear-gradient(to right,#66b2e8,#4c9ed9);
		padding: 30px 25px;
		border-top-left-radius: 5px;
		border-bottom-left-radius: 5px;
		text-align: center;
		color: #fff;
		}

		.wrapper .left img{
		border-radius: 5px;
		margin-bottom: 10px;
		}

		.wrapper .left h4{
		margin-bottom: 10px;
		}

		.wrapper .left p{
		font-size: 12px;
		}

		.wrapper .right{
		width: 65%;
		background: #fff;
		padding: 30px 25px;
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
		}

		.wrapper .right .info,
		.wrapper .right .projects{
		margin-bottom: 25px;
		}

		.wrapper .right .info h3,
		.wrapper .right .projects h3{
			margin-bottom: 15px;
			padding-bottom: 5px;
			border-bottom: 1px solid #e0e0e0;
			color: #353c4e;
		text-transform: uppercase;
		letter-spacing: 5px;
		}

		.wrapper .right .info_data,
		.wrapper .right .projects_data{
		display: flex;
		justify-content: space-between;
		}

		.wrapper .right .info_data .data,
		.wrapper .right .projects_data .data{
		width: 45%;
		}

		.wrapper .right .info_data .data h4,
		.wrapper .right .projects_data .data h4{
			color: #353c4e;
			margin-bottom: 5px;
		}

		.wrapper .right .info_data .data p,
		.wrapper .right .projects_data .data p{
		font-size: 13px;
		margin-bottom: 10px;
		color: #919aa3;
		}

		.wrapper .social_media ul{
		display: flex;
		}

		.wrapper .social_media ul li{
		width: 45px;
		height: 45px;
		background: linear-gradient(to right,#dbca48,#f2dd72);
		margin-right: 10px;
		border-radius: 5px;
		text-align: center;
		line-height: 45px;
		}

		.wrapper .social_media ul li a{
		color :#fff;
		display: block;
		font-size: 18px;
		}
	</style>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="left">
		<br>
        <img src="foto.jpeg" 
		alt="user" width="100" height="100">
		<h3>¡Hola!</h3><br>
		<h3>I'm Tubagus Irkham</h3>
		<br>
		 <p>A sixth semester student and currently pursuing my dream by taking Informatics Major in ITS Surabaya.
			 Interested in anything about Data and Design.
		 </p>

    </div>
    <div class="right">
        <div class="info">
            <h3>Contact Me</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
					<p>tubagusirkham@gmail.com</p><br>
					<h4>Phone</h4>
                    <p>0812-8181-3238</p>
                 </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Skills</h3>
            <div class="projects_data">
                 <div class="data">
					<h5>UI/UX</h5><br>
					<h5>Python</h5><br>
					<h5>Adobe Illustrator</h5>
				 </div>
				 <div class="data">
				 	<h5>Data Visualization</h5><br>
					<h5>Data Interpretation</h5>
				 </div>
            </div>
        </div>
	  
		<br><br>
        <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
    </div>
</div>

</body>
</html>