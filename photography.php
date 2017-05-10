<!DOCTYPE html>
<html>
<title>My Passion for Photography</title>
<head>
<?php require_once("ahtmlheader.php"); ?>
</head>
<body>
    <div id = "myCarousel" class="carousel slide">
    
    <ol class="carousel-indicators">
        <li class="active" data-target = "#myCarousel" data-slide-to = "0"></li>
        <li data-target = "#myCarousel" data-slide-to = "1"></li>
        <li data-target = "#myCarousel" data-slide-to = "2"></li>
        <li data-target = "#myCarousel" data-slide-to = "3"></li>
        <li data-target = "#myCarousel" data-slide-to = "4"></li> 
        <li data-target = "#myCarousel" data-slide-to = "5"></li>
        <li data-target = "#myCarousel" data-slide-to = "6"></li> 
        <li data-target = "#myCarousel" data-slide-to = "7"></li>
        <li data-target = "#myCarousel" data-slide-to = "8"></li> 
        <li data-target = "#myCarousel" data-slide-to = "9"></li>
        <li data-target = "#myCarousel" data-slide-to = "10"></li> 
        <li data-target = "#myCarousel" data-slide-to = "11"></li>
    </ol>
        
        <div class="carousel-inner">
            <div id="imaging" class="item active">
                <img src="images/photographyimages/1jan.JPG" alt="January 1st, 2017">
                <div class="carousel-caption">
                <h3>January 1st, 2017</h3>
                    <p>First day of 2017, well spend in 6'.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/boatfar.JPG" alt="Bracebridge, ON">
                <div class="carousel-caption">
                <h3>Bracebridge, ON</h3>
                    <p>Coolest place I know so far.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/chair.JPG" alt="Snow Chair" >
                <div class="carousel-caption">
                <h3>Snow Chair</h3>
                    <p>It was -27 C.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/landscaspe.JPG" alt="River Side" class="img-responsive">
                <div class="carousel-caption">
                <h3>River Side</h3>
                    <p>It looks beautiful.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/lights.jpg" alt="Amazing" class="img-responsive">
                <div class="carousel-caption">
                <h3>Amazing</h3>
                    <p>There is a lot to see in something.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/lighttree.JPG" alt="Brampton Downtown" class="img-responsive">
                <div class="carousel-caption">
                <h3>Brampton Downtown</h3>
                    <p>Looks nice in lights.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/nobodystreet.jpg" alt="Lonely Street" class="img-responsive">
                <div class="carousel-caption">
                <h3>Lonely Street</h3>
                    <p>Shadows says it all.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/santa.jpg" alt="Super Car" class="img-responsive">
                <div class="carousel-caption">
                <h3>Super Car</h3>
                    <p>Have you thought about a super car like this.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/sist.JPG" alt="Colors" class="img-responsive">
                <div class="carousel-caption">
                <h3>Colors</h3>
                    <p>I was learning colouring from her.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/sistblack.JPG" alt="Love" class="img-responsive">
                <div class="carousel-caption">
                <h3>Love</h3>
                    <p>Classic Love.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/slc.JPG" alt="Student Life Center" class="img-responsive">
                <div class="carousel-caption">
                <h3>Student Life Center</h3>
                    <p>University of Waterloo, Student Life Center.</p>
                </div>
            </div>
            <div id="imaging" class="item ">
                <img src="images/photographyimages/toronto.JPG" alt="Lights" class="img-responsive">
                <div class="carousel-caption">
                <h3>Lights</h3>
                    <p>World of only Lights.</p>
                </div>
            </div>
        </div>
        
        <a class="left carousel-control" href="https://getbootstrap.com/examples/carousel/#myCarousel"  role="button" data-slide="prev">
        <i class="fa fa-angle-double-left" style="font-size:48px;color:black"></i>
        </a>

        <a class="right carousel-control" href="https://getbootstrap.com/examples/carousel/#myCarousel"  role="button" data-slide="next">
        <i class="fa fa-angle-double-right" style="font-size:48px;color:black"></i>
        </a>
    
    </div>

    <!-- Adding the search bar 
	<div class="flex-container">-->
<!-- Search field -->
    <!--
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Search Media Gallery</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<form action="#" class="main-search">
								<div class="input-group content-group">
									<div class="has-feedback has-feedback-left">
                                        // onchange function to display images
                                        <script>
                                        $('.searchImages').keyup(function(event) {
                                              newText = event.target.value;
                                              $('.printResult').text(newText);
                                         });
                                        </script>
                                       //  /onchange function to display images 
										<input type="text" id="searchImages" class="form-control input-xlg">
										<div class="form-control-feedback">
											<i class="icon-search4 text-muted text-size-base"></i>
										</div>
									</div>

									<div class="input-group-btn">
										<button type="submit" class="btn btn-primary btn-xlg">Search</button>
									</div>
								</div>

								<div class="row search-option-buttons">
									<div class="col-sm-6">
										<ul class="list-inline list-inline-condensed no-margin-bottom">
											<li class="dropdown">
												<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-stack2 position-left"></i> All categories <span class="caret"></span>
												</a>

												<ul class="dropdown-menu">
													<li><a href="#"><i class="icon-question7"></i> Getting started</a></li>
													<li><a href="#"><i class="icon-accessibility"></i> Registration</a></li>
													<li><a href="#"><i class="icon-reading"></i> General info</a></li>
													<li><a href="#"><i class="icon-gear"></i> Your settings</a></li>
													<li><a href="#"><i class="icon-graduation"></i> Copyrights</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-mail-read"></i> Contacting authors</a></li>
												</ul>
											</li>
											<li><a href="#" class="btn btn-link"><i class="icon-reload-alt position-left"></i> Refine your search</a></li>
										</ul>
									</div>

									<div class="col-sm-6 text-right">
										<ul class="list-inline no-margin-bottom">
											<li><a href="#" class="btn btn-link"><i class="icon-make-group position-left"></i> Browse website</a></li>
											<li><a href="#" class="btn btn-link"><i class="icon-menu7 position-left"></i> Advanced search</a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div> -->
					<!-- /search field -->
    
    <!-- Result from the search bar -->
                <div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Search Media Gallery</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
                 <div class="printResult">
                 </div>
                </div>        
                    
    <!-- /result from the search bar -->  
                    
    <!-- Images collection of images -->
    <!-- Content area -->
				<div class="content">

					<!-- Square thumbs -->
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0253.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0253.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Snow Fall<small class="display-block">"Every things looks pretty in light"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0263.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0263.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Long Way <small class="display-block">"Many times long routes are better than Shortcuts"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0347.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0347.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Shine<small class="display-block">"One decision away from shine"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0356.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0356.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Reflection<small class="display-block">"It never lies!"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0450.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0450.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Colors <small class="display-block">"Colors makes us happy"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0501.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0501.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Future<small class="display-block">"Trust in yourself today, for bright.."</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0504.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0504.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Blur<small class="display-block">"Its all our brain"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0513.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0513.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">House<small class="display-block">"Its always good to be at home!"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0573.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0573.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Calm<small class="display-block">Its good, not speek sometimes!</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0584.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0584.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Caution <small class="display-block">"Fear not"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0022.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0022.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Education <small class="display-block">"Should be right of everyone alive"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0638.JPG" alt=""> 
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0638.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Window <small class="display-block">"Light in the Dark"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0712.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0712.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">River<small class="display-block">"Its a never ending story"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0748.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0748.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Snow Hot-tub <small class="display-block">"Sometimes, cold is hot" </small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0776.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0776.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Moon <small class="display-block">"Enlight"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0821.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0821.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div> 
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Fog <small class="display-block">"Feel the Fog"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0837.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0837.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Crystals <small class="display-block">"Life"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0840.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0840.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Droplet<small class="display-block">"Makes Ocean"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0868.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0868.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Maple Leaf<small class="display-block">"Great"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_1014.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_1014.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Ways<small class="display-block">"All goes to everywhere you wanna go"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_1046.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_1046.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Patio <small class="display-block">"Need break"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_1047.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_1047.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Table-Chair<small class="display-block">"Essentials"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0035.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0035.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Street Lights <small class="display-block">"Beautiful"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0779.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0779.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Nature<small class="display-block">"Love nature"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0600.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0600.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Overload <small class="display-block"> "Excess is bad sometimes!"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0636.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0636.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Strom <small class="display-block"> "We need em' sometimes" </small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding">
								<div class="thumb">
									<img src="images/thumbnail/DSC_0279.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0279.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Flowers <small class="display-block">"Smells good"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="thumbnail no-padding"> 
								<div class="thumb">
									<img src="images/thumbnail/DSC_0805.JPG" alt="">
									<div class="caption-overflow">
										<span>
											<a href="images/thumbnail/DSC_0805.JPG" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
 										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Water<small class="display-block">"Nothing and Everything"</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
						</div>
					</div>
    </div>	
                    

</body>
</html>