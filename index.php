<?php
if(isset($_SERVER["PATH_INFO"])){
    header("Location: " . "/");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'utils/head.php'; ?>
    <?= head() ?>
  </head>
  <body>
    <?php require_once "utils/menu.php"?>
    <div class="ftco-appointment ftco-section hero-wrap page-section" id="hero-wrap" style="background-image: url('images/staff/group_image.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-10 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
	            <h1 class="mb-4" id="slug-title" style="color: white">Hello</h1>
	            <p class="mb-4" id="slug" style="color: white">Description</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro aside-stretch d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-checklist"></span>
    					</div>
    					<div class="text" style="display: flex; align-items: center">
    						<h2 id="benefit-1">Confidential</h2>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-employee"></span>
    					</div>
    					<div class="text" style="display: flex; align-items: center">
    						<h2 id="benefit-2">Qualified Team</h2>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-umbrella"></span>
    					</div>
    					<div class="text" style="display: flex; align-items: center">
    						<h2 id="benefit-3">Individual Approach</h2>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section page-section" id="about">
    </section>
    <style>
        .img.img-3 {
            width: 570px;
            height: 734px;
        }

        .img.img-3 img {
            width: 500px;
            height:500px;
            object-fit: fill; /* fills block, distorts image to fit */
        }

        @media (max-width: 768px) {
            #slug-title {
                font-size: 2.5rem !important;
            }
            #main_info_title, #form-title {
                font-size: 1.5rem !important;
            }
            h2 {
                font-size: 1.2rem !important;
            }
            p {
                font-size: 1rem !important;
            }
        }
    </style>
    <section class="ftco-section ftco-no-pb ftco-no-pt" id="counselor">
			<div class="container">
                <div class="row">
                    <div class="col-md-12 wrap-about px-md-5 ftco-animate py-5 bg-light">
                        <div class="heading-section">
                            <span class="subheading" id="main_info_sub_heading">Բարի գալուստ Մայնդֆուլ</span>
                            <h2 class="mb-4" id="main_info_title"> Բարի գալուստ Մայնդֆուլ հոգեկան առողջության խորհրդատվության կենտրոնի պաշտոնական էջ.</h2>

                            <p id="main_info_description_1">
                                Մեր կարգախոսն է՝ «Սովորիր լինել mindful»։ Կենտրոնի հիմնական նպատակն է օգտագործել մասնագիտական ողջ ներուժը և հոգեկան առողջության գիտության հնարավորությունները՝ ի շահ բուժառուների, նպաստելով նրանց հոգեկան բարեկեցության բարելավմանը և ամրապնդմանը։
                            </p>
                            <p id="main_info_description_2">
                                Մայնդֆուլ կենտրոնում կարևորվում է թիմային աշխատանքը, միջմասնագիտական համագործակցությունը բժշկական ոլորտի տարբեր ուղղությունների հետ, կարևորելով հոգեկան և ֆիզիկական առողջությունների միջև սերտ ու անջնջելի կապը։
                            </p>
                            <p id="main_info_description_3">
                                Մայնդֆուլում դու կարող ես գտնել քո սրտի հոգեկան ոլորտի մասնագետին։
                            </p>

                            <a href="https://youtube.com/XmLpo6qhnYg" class="play-video popup-vimeo d-flex align-items-center mt-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-play"></span>
                                </div>
                                <span class="watch" id="watch_video">Watch Our Consultant Video</span>
                            </a>
                        </div>
                    </div>
                </div>
				</div>
			</div>
		</section>

    <section class="ftco-section page-section"></section>
	<section class="ftco-appointment ftco-section img page-section" id="contact" style="background-image: url(images/staff/staff_page.JPG);">
	<div class="overlay"></div>
    <div class="container">
    		<div class="row">
    			<div class="col-md-6 half ftco-animate">
    				<h2 class="mb-4" id="form-title">Send a Message &amp; Get in touch!</h2>
    				<form action="" class="appointment">
    					<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Your Name" id="form-name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Email" id="form-email">
			            </div>
								</div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" id="form-subject">
                                </div>
                            </div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="form-message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4" id="form-submit">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>
    <?php require_once "utils/footer.php"?>
    <?php footer(); ?>

  </body>
</html>
