<?php ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Important meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 ,user-scalable=no">

	<!-- Title -->
	<title>Dashboard Page</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/Master_images_admin/favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap4.5/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/css_pages/dashboard.css">

</head>

<body>

	<!-- Header -->
	<header>
		<nav class="navbar fixed-top navbar-expand-lg">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
                        <!-- Mobile Menu Open Button -->
                        <span id="mobile-nav-open-btn" class="float-right">&#9776;</span>
						<!-- Logo -->
						<a class="navbar-brand" href="#">
							<img src="images/Master_images_admin/logo.png" alt="Logo" >
						</a>
					</div>

					<div class="">
						<!-- Main Menu-->
						<div class="collapse navbar-collapse">
							<ul class="navbar-nav ">

								<li class="nav-item dropdown">

									<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Dashboard
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="18.Notes-Under-Review.html">Notes Under Review</a>
										<a class="dropdown-item" href="19.Published-Notes.html">Published Notes</a>
										<a class="dropdown-item" href="20.Downloaded-Notes.html">Downloaded Notes</a>
										<a class="dropdown-item" href="21.Rejected-Notes.html">Rejected Notes</a>
									</div>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="13.note_details_page.html">Notes</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="15.members_details_page.html">Members</a>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Reports
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="16.spam_reports_page.html">Spam Reports</a>
                                        </div>
                                    </li>

								<li class="nav-item dropdown">

									<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Settings
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 5;">
										<a class="dropdown-item" href="17.manage_system_configuration.html">Manage System Configuration</a>
										<a class="dropdown-item" href="5.manage_administration.html">Manage Administrator</a>
										<a class="dropdown-item" href="7.manage_category_page.html">Manage Category</a>
										<a class="dropdown-item" href="11.manage_type_page.html">Manage Type</a>
										<a class="dropdown-item" href="9.manage_country_page.html">Manage Countries</a>
									</div>
								</li>

								<li class="nav-item dropdown">

									<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="images/Master_images_admin/user-img.png" style="width:50px;">
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="4.profile_page.html">Update Profile</a>
										<a class="dropdown-item" href="#">Change Password</a>
										<a class="dropdown-item clr-blue" href="../1.login-page.php">LOGOUT</a>
									</div>

								</li>

								<li class="nav-item">
									<a href="../1.login-page.php"><button class="btn btn-general allBtn">Logout</button></a>
								</li>

							</ul>
                        </div>
                         <!-- Mobile Menu -->
                         <div id="mobile-nav">
                            <!-- Mobile Menu Close Button -->
                            <span id="mobile-nav-close-btn">&times;</span>
    
                            <div id="mobile-nav-content">
                                <ul class="float-left">
                                    <li class="dropdown">
                                        <a class="nav-link smooth-scroll" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dashboard
                                        </a>
    
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Notes Under Review</a>
                                            <a class="dropdown-item" href="#">Published Notes</a>
                                            <a class="dropdown-item" href="#">Downloaded Notes</a>
                                            <a class="dropdown-item" href="#">Rejected Notes</a>
                                        </div>
                                    </li><br>
                                    <li><a class="" href="13.note_details_page.html">Notes</a></li><br>
                                    <li><a class="" href="sell.html">Members</a></li><br>
                                    <li class="dropdown">
                                        <a class="nav-link smooth-scroll" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Reports
                                        </a>
    
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="16.spam_reports_page.html">Spam Reports</a>
                                            </div>
                                    </li><br>
                                    <li class="dropdown">
                                        <a class="nav-link smooth-scroll" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Settings
                                        </a>
    
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="17.manage_system_configuration.html">Manage System Configuration</a>
                                            <a class="dropdown-item" href="5.manage_administration.html">Manage Administrator</a>
                                            <a class="dropdown-item" href="8.add_category_page.html">Manage Category</a>
                                            <a class="dropdown-item" href="11.manage_type_page.html">Manage Type</a>
                                            <a class="dropdown-item" href="9.manage_country_page.html">Manage Countries</a>
                                        </div>
                                    </li><br>
                                    <li class="dropdown">
                                        <a class="nav-link smooth-scroll" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/Master_images_admin/user-img.png" class="img-fluid rounded-circle" style="height: 70px;">
                                        </a>
    
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Update Profile</a>
                                            <a class="dropdown-item" href="#">Change Password</a>
                                            <a class="dropdown-item clr-blue" href="../1.login-page.php">LOGOUT</a>
                                        </div>
                                    </li><br>
                                   
                                    <li><a class="smooth-scroll" href="../1.login-page.php">Logout</a></li><br>
                                    
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header Ends -->
    <br><br><br><br>
    <!-- Dashboard Section -->
    <section id="dashboard">
        <div class="container">
            <div class="dash-heading">Dashboard
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                                       
                    <div class="dash-box text-center" style="height: 120px;">
                        <div class="head-dash">20</div>
                        <div class="para-head">Number of Notes in Reviews for Publish</div>
                    </div>
                   
                </div>
                
              
                <div class="col-md-4 col-sm-12">
                                       
                    <div class="dash-box text-center" style="height: 120px;">
                        <div class="head-dash">103</div>
                        <div class="para-head">Number of New Notes Downloaded <br> (Last 7 Days)</div>
                    </div>
                   
                </div>
              
                <div class="col-md-4 col-sm-12">
                                       
                    <div class="dash-box text-center" style="height: 120px;">
                        <div class="head-dash">223</div>
                        <div class="para-head">Number of New Registrations <br> (Last 7 Days)</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section Ends -->

    <!-- In Published Section -->
    <section id="progress">
        <div class="container">
            <div class="section-top">
            <div class="row section-top">
                <div class="col-xl-4 col-md-3 col-sm-12 section-heading">
                    Published Notes
                </div>

                <div class="col-xl-8 col-md-9 col-sm-12">

					<form class="form-inline float-right">
						<div class="form-group has-search">
							<img src="images/Master_images_admin/search-icon.png">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-general allBtn btn-search">SEARCH</button>
					&nbsp;&nbsp;
                        <div class="form-group">
                              <select id="typemonth" class="form-control">
                              <option selected>Select Month</option>
                              <option>...</option>
                            </select>
                          </div>
                </form> 

				</div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row notes-under-review-table">
    
                <div class="col-md-12">
                    <div class="table table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>SR. NO.</th>
                                    <th>TITLE</th>
                                    <th>CATEGORY</th>
                                    <th>ATTACHMENT SIZE</th>
                                    <th>SELL TYPE</th>
                                    <th>PRICE</th>
                                    <th>PUBLISHER</th>
                                    <th>PUBLISHED DATE</th>
                                    <th>NUMBER OF<br>DOWNLOADS</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                        <td class="text-center">1</td>
                                        <td class="clr-blue">Data Science</td>
                                        <td>Science</td>
                                        <td class="text-center">10 KB</td>
                                        <td class="text-center">Free</td>
                                        <td class="text-center">$0</td>
                                        <td>Pritesh Panchal</td>
                                        <td>09-10-2020, 10:10</td>
                                        <td class="text-center">10</td>
                                        <td>
                                                                                                                                                     
                                                <div class="dropdown">
                                                    <button class="dropbtn btn-general">
                                                        <img src="images/Master_images_admin/dots.png">
                                                    </button>
                                                    <div class="dropdown-content">
                                                        <a href="#">Download Notes</a>
                                                        <a href="#">View more Details</a>
                                                        <a href="#">Unpublish</a>
                                                    </div>
                                                </div>
                                        </td>                                      
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                        <td class="clr-blue">Accounts</td>
                                        <td>Commerce</td>
                                        <td class="text-center">23 MB</td>
                                        <td class="text-center">Paid</td>
                                        <td class="text-center">22</td>
                                        <td>Rahil Shah</td>
                                        <td>10-10-2020, 12:30</td>
                                        <td class="text-center">21</td>
                                        <td>
                                                                                                                                                     
                                                <div class="dropdown">
                                                    <button class="dropbtn btn-general">
                                                        <img src="images/Master_images_admin/dots.png">
                                                    </button>
                                                    <div class="dropdown-content">
                                                        <a href="#">Download Notes</a>
                                                        <a href="#">View more Details</a>
                                                        <a href="#">Unpublish</a>
                                                    </div>
                                                </div>
                                        </td>      
                                    
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="clr-blue">Social Studies</td>
                                    <td>Social</td>
                                    <td class="text-center">3 MB</td>
                                        <td class="text-center">Paid</td>
                                        <td class="text-center">$56</td>
                                        <td>Anish Patel</td>
                                        <td>11-10-2020, 01:00</td>
                                        <td class="text-center">13</td>
                                        <td>
                                                                                                                                                     
                                                <div class="dropdown">
                                                    <button class="dropbtn btn-general">
                                                        <img src="images/Master_images_admin/dots.png">
                                                    </button>
                                                    <div class="dropdown-content">
                                                        <a href="#">Download Notes</a>
                                                        <a href="#">View more Details</a>
                                                        <a href="#">Unpublish</a>
                                                    </div>
                                                </div>
                                        </td>      
                                    
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="clr-blue">AI</td>
                                    <td>IT</td>
                                    <td class="text-center">1 MB</td>
                                    <td class="text-center">Free</td>
                                    <td class="text-center">$0</td>
                                    <td>Vijay Vaishnav</td>
                                    <td>12-10-2020, 10:10</td>
                                    <td class="text-center">34</td>
                                    <td>
                                                                                                                                                 
                                            <div class="dropdown">
                                                <button class="dropbtn btn-general">
                                                    <img src="images/Master_images_admin/dots.png">
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#">Download Notes</a>
                                                    <a href="#">View more Details</a>
                                                    <a href="#">Unpublish</a>
                                                </div>
                                            </div>
                                    </td>      
                                    
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="clr-blue">Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td class="text-center">105 KB</td>
                                    <td class="text-center">Paid</td>
                                    <td class="text-center">$90</td>
                                    <td>Mehul Patel</td>
                                    <td>13-10-2020, 11:25</td>
                                    <td class="text-center">9</td>
                                    <td>
                                                                                                                                                 
                                            <div class="dropdown">
                                                <button class="dropbtn btn-general">
                                                    <img src="images/Master_images_admin/dots.png">
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#">Download Notes</a>
                                                    <a href="#">View more Details</a>
                                                    <a href="#">Unpublish</a>
                                                </div>
                                            </div>
                                    </td>      
                                    
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="row paging">
				<div class="col-md-12 text-center">
					<div class="pagination isotope-filters">
						<a href="#"><img src="images/Master_images_admin/left-arrow.png"></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#"><img src="images/Master_images_admin/right-arrow.png"></a>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!-- In Published Section Ends -->

      <!-- Footer -->
      <footer class="social-footer">
        <div class="container">
                version:1.1.24      
                <ul class="social-list float-right">
                    <li>
                        Copyright &copy; Tatvasoft All Rights Reserved.   
                    </li>
                    
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->
    
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap4.5/bootstrap.min.js"></script>

    <!-- Responsive Tabs -->
    <script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>

    <script src="js/js_pages/login_password.js"></script>


</body>
</html>