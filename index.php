<?php get_header();?>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand" href="#">xenon</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                           <li><a href="#home">Home</a></li>
                           <li><a href="#about">About</a></li>
                           <li><a href="#services">Services</a></li>
                           <li><a href="#projects">Projects</a></li>
                           <li><a href="#experience">Experience</a></li>
                           <li><a href="#testimonials">Testimonials</a></li>
                           <li><a href="#blog">Blog</a></li>
                           <li><a href="#contact">Contact</a></li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area End -->
      <!-- Welcome Area Start -->
      <section class="welcome-area" id="home">
         <div class="container h-100">
            <div class="row h-100 align-items-center">
               <div class="col-xl-10 mx-auto">
                  <div class="welcome-content">
                     <h4><?php echo get_theme_mod('bannar_heading');?></h4>
                     <p><?php echo get_theme_mod('bannar_desc');?></p>
					 <a href="<?php echo get_theme_mod('bannar_btn_link');?>" class="box-btn"><?php echo get_theme_mod('bannar_btn');?></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Welcome Area End -->
      
	  <!-- Services Area Start -->
	  <section class="services-area pt-100 pb-70" id="services">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>what i do</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-dribbble"></i>
						<h4>design</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-code"></i>
						<h4>development</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-clone"></i>
						<h4>branding</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-rocket"></i>
						<h4>database</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-camera"></i>
						<h4>app</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-clock-o"></i>
						<h4>support</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Services Area End -->
	  
	   <!-- Projectss Area Start -->
      <section class="projects-area pb-100 pt-100" id="projects">
         <div class="container">
            <div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>see my projects</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
            <div class="row grid no-gutters">
               <div class="col-md-4">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/1.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php echo get_template_directory_uri();?>/assets/img/projects/1.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/2.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php echo get_template_directory_uri();?>/assets/img/projects/2.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4" >
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/3.jpg" alt=""/>
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php echo get_template_directory_uri();?>/assets/img/projects/3.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/4.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php echo get_template_directory_uri();?>/assets/img/projects/4.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/5.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php echo get_template_directory_uri();?>/assets/img/projects/5.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-portfolio">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/projects/6.jpg" alt="">
                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php echo get_template_directory_uri();?>/assets/img/projects/6.jpg" class="gallery"><i class="fa fa-plus"></i> project name <span>branding</span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Projectss Area End -->
      
	  <!-- Counter Area Start -->
	  <section class="counter-area pt-100 pb-100" id="counter">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>Working Statistics</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="single-counter">
						<i class="fa fa-user"></i>
						<h4 class="counter">87</h4>
						<p>happy clients</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-counter">
						<i class="fa fa-trophy"></i>
						<h4 class="counter">36</h4>
						<p>award winning</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-counter">
						<i class="fa fa-diamond"></i>
						<h4 class="counter">246</h4>
						<p>completed projects</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-counter">
						<i class="fa fa-coffee"></i>
						<h4 class="counter">1278</h4>
						<p>cup of coffees</p>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Counter Area End -->
      
	  <!-- Experience Area Start -->
	  <section class="experience pt-100 pb-100" id="experience">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>know about me</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
               <div class="col-xl-12">
                  <ul class="timeline-list">
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                           <span>2008</span>
                           <h4>Intern Developer span</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2007-2012</span>
                           <h4>Junior Developer</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2012-2015</span>
                           <h4>Senior Developer</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2015-2018</span>
                           <h4>Project Manager</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
		</div>
	  </section>
	  <!-- Experience Area End -->
	  
	  <!-- Testimonials Area Start -->
	  <section class="testimonials-area pt-100 pb-100 text-center" id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>what clients say</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<div class="testimonials owl-carousel">
						<div class="single-testimonial">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/testimonials/01.png" alt="" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<h4>john doe <span>web developer</span></h4>
						</div>
						<div class="single-testimonial">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/testimonials/02.png" alt="" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<h4>john doe <span>web developer</span></h4>
						</div>
						<div class="single-testimonial">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/testimonials/03.png" alt="" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<h4>john doe <span>web developer</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Testimonials Area End -->
	  
	  <!-- Price Area Start -->
	  <section class="price-area text-center pt-100 pb-100" id="price">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>latest price</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="single-price">
						<h4>basic</h4>
						<div class="price-box">
							<h5>&dollar;199</h5>
						</div>
						<ul>
							<li>10 Pages Website Design</li>
							<li>Free 1 Year Domain</li>
							<li>Unlimited My Sql Database</li>
							<li>10 GB Free Hosting</li>
							<li>24/7 support</li>
						</ul>
						<a href="" class="box-btn">sign up</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-price">
						<h4>standard</h4>
						<div class="price-box">
							<h5>&dollar;399</h5>
						</div>
						<ul>
							<li>10 Pages Website Design</li>
							<li>Free 1 Year Domain</li>
							<li>Unlimited My Sql Database</li>
							<li>10 GB Free Hosting</li>
							<li>24/7 support</li>
						</ul>
						<a href="" class="box-btn">sign up</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-price">
						<h4>premium</h4>
						<div class="price-box">
							<h5>&dollar;699</h5>
						</div>
						<ul>
							<li>10 Pages Website Design</li>
							<li>Free 1 Year Domain</li>
							<li>Unlimited My Sql Database</li>
							<li>10 GB Free Hosting</li>
							<li>24/7 support</li>
						</ul>
						<a href="" class="box-btn">sign up</a>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Price Area End -->
	  
	  <!-- Team Area Start -->
	  <section class="team-area pt-100 pb-100" id="team">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>my team</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="single-team">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/team/team1.jpg" alt="" />
						<div class="team-hover">
							<h4>john doe <span>web developer</span></h4>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-youtube"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-team">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/team/team2.jpg" alt="" />
						<div class="team-hover">
							<h4>john doe <span>web developer</span></h4>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-youtube"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-team">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/team/team3.jpg" alt="" />
						<div class="team-hover">
							<h4>john doe <span>web developer</span></h4>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-youtube"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Team Area End -->
	  
	  <!-- Blog Area Start -->
	  <section class="blog-area pt-100 pb-100" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>latest articles</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="single-blog">
					   <div class="blog-img">
						  <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog1.jpg" alt="" />
					   </div>
					   <h4><a href="">Focus on commitment</a></h4>
					   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, eos molestiae illo quam nemo pariatur sint.</p>
					   <a href="" class="box-btn">read more</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-blog">
					   <div class="blog-img">
						  <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog2.jpg" alt="" />
					   </div>
					   <h4><a href="">Focus on commitment</a></h4>
					   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, eos molestiae illo quam nemo pariatur sint.</p>
					   <a href="" class="box-btn">read more</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-blog">
					   <div class="blog-img">
						  <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog3.jpg" alt="" />
					   </div>
					   <h4><a href="">Focus on commitment</a></h4>
					   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, eos molestiae illo quam nemo pariatur sint.</p>
					   <a href="" class="box-btn">read more</a>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Blog Area End -->
	  
	  <!-- Hire Area Start -->
	  <section class="hire-area pt-100 pb-100 text-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<h4>I Am Available For Freelancer.</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum? Eos autem natus et veniam perspiciatis. </p>
					<a href="" class="box-btn">hire me</a>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Hire Area End -->
	  
	  <!-- Contact Area Start -->
	  <section class="contact-area pt-100 pb-100" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>contact us</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="contact-form">
						<h4 class="page-title">write me now
						</h4>
						<form>
							<input type="text" placeholder="name" />
							<input type="text" placeholder="email" />
							<input type="text" placeholder="subjct" />
							<textarea placeholder="message"></textarea>
							<input type="submit" value="send" />
						</form>
					</div>
				</div>
				<div class="col-md-5">
					<div class="contact-address">
						<ul>
							<li><i class="fa fa-map-marker"></i> <span>Address</span> New York, USA</li>
							<li><i class="fa fa-phone"></i> <span>Phone</span> +8748347934</li>
							<li><i class="fa fa-envelope"></i> <span>Email</span> info@example.com</li>
							<li><i class="fa fa-globe"></i> <span>Website</span> www.globe.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Contact Area End -->
	  
	  <!-- Footer Area Stat -->
	  <div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<p>xenon doe</p>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
					<a href=""><i class="fa fa-pinterest"></i></a>
				</div>
				<div class="col-xl-12 text-center">
					<p class="copy">all rights reserved &copy; 2020</p>
				</div>
			</div>
		</div>
	  </div>
	  <!-- Footer Area End -->
<?php get_footer();?>