@extends('pages.tenacademy.layouts.app')
@section('title','Intro')
@section('content')
	<!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
			<h1>Instructor Profile</h1>

			<!-- Search Boxed -->
			<div class="search-boxed">
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="What do you want to learn?" required>
							<button type="submit"><span class="icon fa fa-search"></span></button>
						</div>
					</form>
				</div>
			</div>

        </div>
    </section>
    <!--End Page Title-->

	<!-- Profile Section -->
	<section class="profile-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="circle-one"></div>
		<div class="circle-two"></div>
		<div class="auto-container">

			<div class="row clearfix">

				<!-- Content Section -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Stephane Smith</h2>
						<h4>A certified instructor From Bootcamp</h4>
						<!-- Student List -->
						<ul class="student-list">
							<li>23,564 Total Students</li>
							<li><span class="theme_color">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> (1254 Rating)</li>
							<li>256 Reviews</li>
						</ul>
						<h5>About Me</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat</p>
						<h5>25 That Prevent Job Seekers From Overcoming Failure</h5>
						<p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
					</div>
				</div>

				<!-- Image Section -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="https://via.placeholder.com/278x319" alt="" />
						</div>
						<h3>Stephane Smith</h3>
						<div class="text">Certified instructor Architecture <br> & Developer</div>
						<div class="social-box">
							<a href="#" class="fa fa-facebook-square"></a>
							<a href="#" class="fa fa-twitter-square"></a>
							<a href="#" class="fa fa-linkedin-square"></a>
							<a href="#" class="fa fa-github"></a>
						</div>
					</div>
				</div>

			</div>

		</div>

		<!-- Browse Course Section -->
		<div class="browse-course-section">
			<div class="auto-container">
				<div class="sec-title">
					<h2>All Courses by Stephane</h2>
				</div>
				<div class="row clearfix">

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Interaction Design</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Visual Design</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Wireframe Protos</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Wireframe Protos</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Color Theory</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Typography</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Picture Selection</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Picture Selection</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Picture Selection</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Interaction Design</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Visual Design</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Cource Block Two -->
					<div class="cource-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="course-detail.html"><img src="https://via.placeholder.com/270x150" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><a href="course-detail.html">Visual Design</a></h5>
								<div class="text">Replenish of  third creature and meat blessed void a fruit gathered waters.</div>
								<div class="clearfix">
									<div class="pull-left">
										<div class="students">12 Lecturer</div>
									</div>
									<div class="pull-right">
										<div class="hours">54 Hours</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Post Share Options -->
				<div class="styled-pagination text-center">
					<ul class="clearfix">
						<li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li class="active"><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">8</a></li>
						<li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
					</ul>
				</div>

			</div>
		</div>

	</section>
	<!-- End Profile Section -->


@endsection
