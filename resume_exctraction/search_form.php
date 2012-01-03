
 <?php
 require_once'include/bootstrap.php';
                                            ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery-ui-1.8.5.custom.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
        <script type="text/javascript" src="js/resume_search.js"></script>
        <script>

</script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>

<body>
	<header>
		<nav>
			<div class="container">
				<div class="wrapper">
					<h1><a href="index.php"><strong>Resume Extraction</strong></a></h1>
					<ul>
						 <?php
                                            if($_SESSION['uid'] == 1)
                                            {
                                            print '<li><a href="test.php" class="current">Home</a></li>';

                                            }
                                            ?>

                                            if(isset($_SESSION['user_type']))
                                            {
                                            print '<li><a href="logout.php" class="current">logout</a></li>';

                                            }

                                            
         				</ul>
				</div>
			</div>
		</nav>
		<section class="adv-content">
			<div class="container">
				<ul class="breadcrumbs">
                                    <li><strong> Please select your requirement from the following list</strong></li>
				</ul>
				
			</div>
		
	</header>
	<section id="content">
		<div class="top">
			<div class="container">
				<section>
                                    <div id="add_field">
                                        <form id="search"  method="get" action="search.php">                                  	 
         <label>Select Your Requirements:</label><br><br>
    
         <label>First Name</label><br><input type="text" name="first_name" /><br>
         <label>Last Name</label><br><input type="text" name="last_name" /><br>
         <label>Email</label><br><input type="text" name="email" /><br>
        <label>City</label><br><input type="text" name="city" /><br>
        <label>State</label><br><input type="text" name="state" /><br>
        <label>Zip</label><br><input type="text" name="zip" /><br>
        <label>Degree</label><br><input type="text" name="degree" /><br>
        <label>College</label><br><input type="text" name="college" /><br>
        <label>Skills</label><br><input type="text" name="skills" /><br>
        <label>Experience</label><br><input type="text" name="exp" /><br>
        <label>job title</label><br><input type="text" name="job_title" /><br>

                                    <br>
                                        <input type="submit" value="search" name="submit"  />
                                        </form>
                                         </div>
                                    
	 </section>
				</div>
			</div>
		
	</section>
	<footer>
		
	</footer>
	

</body>
</html>
