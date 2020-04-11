<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" type ="text/css" href= "style6.css">
    <script src="https://kit.fontawesome.com/f3a9b11f28.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   

	

		<!-- Banner -->
			<section id="banner">
            <h2 class="success"> Hi, <?php echo $_SESSION['username']; ?> </h2>
				<h1>Welcome to The Accelerated Academy</h1>
                <p>A community with high expectation and high academic achievement.</p>
                
   <div class="php">
   <a href =" logout.php"> LOGOUT </a> </div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">
						<article>
							<header>
								<h3>Help your students take more ownership  over classroom collaboration.</h3>
							</header>
							<p>Conventional wisdom among teachers agrees with the research: Student collaboration is essential to learning. As teachers, we have our students work together in class all the time.</p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
						<article>
							<header>
								<h3>Learn how to keep student information confidential on social media.</h3>
							</header>
							<p>Social media is an increasingly important part of students' lives; in fact, the average teen spends over an hour a day using social media. </p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
						<article>
							<header>
								<h3>Emphasize core values such as respect, patience, and teamwork.</h3>
							</header>
							<p>Student collaboration can take many forms. Whether it's peer-to-peer teaching, connecting with kids in other countries, or working together on websites and projects. </p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<header>
						<h2 class="success"> <?php echo $_SESSION['username']; ?>, Here are your mentors  </h2>
						<p>Everybody who is incapable of learning has taken to teaching.</p>
					</header>
					<div class="flex flex-4">
						<div class="box person">
							<div class="image round">
								<img src="images/pic03.jpg" alt="Person 1" />
							</div>
							<h3>Rocky Kent</h3>
							<p>DSA Professor</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic04.jpg" alt="Person 2" />
							</div>
							<h3>Elizabeth kut</h3>
							<p>DBMS Professor</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic05.jpg" alt="Person 3" />
							</div>
							<h3>Brad Traversy</h3>
							<p>Web Design Professor</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic06.jpg" alt="Person 4" />
							</div>
							<h3>Shanaya Singh</h3>
							<p>Mathematics Porfessor</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper special">
				<div class="inner">
					<header class="align-center">
						<h2>Your Courses</h2>
						<p>A Person should never stop Learning!</p>
					</header>
					<div class="flex flex-2">
						<article>
							<div class="image fit">
								<img src="course2.jpg" alt="Pic 01" />
							</div>
							<header>
								<h3>Mastering Data structures with C & C++
                                </h3>
							</header>
							<p>You may be new to Data Structure or you have already Studied and Implemented Data Structures but still you feel you need to learn more about Data Structure in detail so that it helps you solve challenging problems and used Data Structure efficiently..</p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
						<article>
							<div class="image fit">
								<img src="course.jpg" alt="Pic 02" />
							</div>
							<header>
								<h3>Full Stack Development: Full course</h3>
							</header>
							<p>
Full Stack Web Development Masters Program makes you proficient in skills to work with back-end and front-end web technologies. It includes training on Web Development, jQuery, Angular, NodeJS, ExpressJS and MongoDB. </p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Footer -->
        <footer>
    
    <img width="200"  src="./Resources/Images/logo.png">
  
<div class="end">
<div class="ends">
  <ul class="footer-nav">
    <li><a href="contact-us.html">Contact Us</a></li>
    <li><a href="#articles.html">Blog</a></li>
    <li><a href="book-recommendation.html">Book recommendations</a></li>
    <li><a href="resources.html">Downloads</a></li>
    <li><a href="#discussions">Q&A</a></li>
  </ul>
</div>

<div class="ends">
<ul class="social-list">
    <li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
    <li><a href="#"><i class="fab fa-facebook  fa-2x "></i></a></li>
    <li><a href="#"><i class="fab fa-pinterest  fa-2x "></i></a></li>
    <li><a href="#"><i class="fab fa-snapchat  fa-2x "></i></a></li>
    <li><a href="#"><i class="fab fa-google-plus  fa-2x"></i></a></li>
</ul>
</div>
</div>
<div class="row-end">
<p>Copyright &copy; 2019 by Accelerated Academy. All rights reserved.</p>
</div>
</footer>
    
</body>
</html>