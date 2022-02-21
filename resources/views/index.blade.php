<!DOCTYPE html>
<!--
	Canvas by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Upload Image and Video</title>

    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- =============== Google fonts =============== -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
        <div id="loading">
        </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="img/mono.png" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#upload_image">Upload Image</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#upload_video">Upload Video</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>
    <!-- =============== header =============== -->
    <header>
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <h2 class="wow bounceIn animated" data-wow-delay=".40s">PHOTOGRAPHY IS THE ART</h2>
                    
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 wow slideInLeft animated">
                    <img src="img/phones-3.png" alt="phones" />
                </div>
            </div>
        </div>
		<!-- =============== container end =============== -->
    </header>
    <!-- =============== About =============== -->
    <section id="about" class="">
		<!-- =============== container =============== -->
        <div class="container">
            <span class="angle2"></span>
            <span class="angle"></span>
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-3 wow fadeInLeft animated" data-wow-delay=".5s">
                    <h1><span>INTRODUCTION TO PHOTOGRAPHY</span></h2>      
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-9 wow fadeInRight animated" data-wow-delay=".5s">
                  <h2>What Is Photography?</h2>
                  <p>hotography is the art of capturing light with a camera, usually via a digital sensor or film, to create an image. With the right camera equipment, you can even photograph wavelengths of light invisible to the human eye, including UV, infrared, and radio. The first permanent photograph was captured in 1826 (some sources say 1827) by Joseph Nicéphore Niépce in France. It shows the roof of a building lit by the sun. 
                  </p>
                  <h2>A Brief History of Photography and the People Who Made It Succeed</h2>
                  <p>Color photography started to become popular and accessible with the release of Eastman Kodak’s “Kodachrome” film in the 1930s. Before that, almost all photos were monochromatic – although a handful of photographers, toeing the line between chemists and alchemists, had been using specialized techniques to capture color images for decades before. You’ll find some fascinating galleries of photos from the 1800s or early 1900s captured in full color, worth exploring if you have not seen them already.
                  </p>
                  <p>These scientist-magicians, the first color photographers, are hardly alone in pushing the boundaries of one of the world’s newest art forms. The history of photography has always been a history of people – artists and inventors who steered the field into the modern era.
                  </p>

                  </div>     
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>
    <!-- =============== how it works =============== -->
    <section id="upload_image" class="parallax">
	<!-- =============== container =============== -->
    <div class="container">
     <span class="angle2"></span>
    <span class="angle"></span>
     <div class="row">

       <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding" data-wow-delay=".5s">
          <h2>Upload <span>Image</span></h2>
            <form id= "uploadImage" method="post" enctype="multipart/form-data" action="">
        @csrf
          <div class="form-group">
            <table class="table">
              <tr>
                <td width="40%" align="right"><label>Select File for Upload</label></td>
                  <td width="30">
                  <input type="file" name="select_file" />
                  </td>
                  <td width="30%" align="left">
                  <input type="submit" name="uploadImage" class="btn btn-success" value="Upload Image">
                  </td>
              </tr>
              <tr>
                  <td width="40%" align="right"></td>
                  <td width="30"><span class="text-muted">.jpg, .png Files Only</span></td>
                  <td width="30%" align="left"></td>
              </tr>
            </table>
          </div>
      </form>
       </div>

      </div>

     
         
     
      </div>
    </div>
    </div>   
	<!-- =============== container end =============== -->	
    </section>
    <!-- =============== upload_video =============== -->
    <section id="upload_video" class="">
	<!-- =============== container =============== -->
        <div class="container">
        <span class="angle2"></span>
        <span class="angle"></span>

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 wow zoomIn animated headding" data-wow-delay=".1s">
               <h2>Upload <span>Video</span></h2>
               <form id= "fromImportSalary" method="post" enctype="multipart/form-data" action="">
        @csrf
          <div class="form-group">
            <table class="table">
              <tr>
                <td width="40%" align="right"><label>Select File for Upload</label></td>
                  <td width="30">
                  <input type="file" name="select_file" />
                  </td>
                  <td width="30%" align="left">
                  <input type="submit" name="upload" class="btn btn-success" value="Upload">
                  </td>
              </tr>
              <tr>
                  <td width="40%" align="right"></td>
                  <td width="30"><span class="text-muted">.xls, .xslx Files Only</span></td>
                  <td width="30%" align="left"></td>
              </tr>
            </table>
          </div>
      </form>
           </div>
        </div>
        </div>    <!-- =============== container end =============== -->  
        </section>
    <!-- =============== Contact =============== -->
    <section id="contact">
	<!-- =============== container =============== -->
		<div class="container">
			    <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding" data-wow-delay=".1s">
                   <h2>Contact <span>Us</span></h2>
               </div>


			</div>

			<div class="row">

				<div class="col-xs-12 wow bounceIn animated" data-wow-delay=".1s">

					<form>
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp animated">
								<label for="c_name" class="sr-only">Name</label>
								<input type="text" placeholder="Name" name="c_name" class="form-control" id="c_name">
							</div>

							<div data-wow-delay=".1s" class="form-group wow fadeInUp animated">
								<label for="c_email" class="sr-only">Email</label>
								<input type="email" placeholder="E-mail" name="c_email" class="form-control" id="c_email">
							</div>

							<div data-wow-delay=".2s" class="form-group wow fadeInUp animated">
								<textarea placeholder="Message" rows="7" name="c_message" id="c_message" class="form-control"></textarea>
							</div>

							<button data-wow-delay=".3s" class="btn btn-sm btn-block wow fadeInUp animated" type="submit">Send Message</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>
              
                    
			</div>
		</div><!-- =============== container end =============== -->
	</section>
    <!-- Footer -->
    <footer id="footer">
	<!-- =============== container =============== -->
    <div class="container">
			    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <p class="copyright">&copy; 2022 Canvas</p>
				        </div>
			</div>
    </div><!-- =============== container end =============== -->
	</footer>
    <!-- =============== jQuery =============== -->
    <script src="js/jquery.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="js/creative.js"></script>
    <!-- =============== owl carousel =============== -->
    <script src="owl-carousel/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000,
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });
    </script>
</body>
</html>