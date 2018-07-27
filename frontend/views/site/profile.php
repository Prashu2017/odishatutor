<?php 
require_once('header.php');


?>
		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-12.jpg">
			<div class="container">
				<?php
				// echo $results->firstname;
// exit;
				?>
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div class="tg-innerbannercontent">
							<div class="tg-jobhead">
								<span class="tg-priceperhour">29$ <em>Per Hour</em></span>
								<h1><?php echo $results->firstname; ?><?php echo $results->lastname ?></h1>
								<span class="tg-tutioncategory">Mathematics &amp; Statistics</span>
								<ul class="tg-jobsmetadata">
									<li><span class="tg-stars"><span></span></span></li>
									<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
									<li><a href="#">1509 view</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-content" class="tg-content">
						<div class="tg-detailpage tg-tutordetail">
							<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
								<div class="tg-widget tg-widgettutionimage">
									<div class="tg-widgetcontent">
										<figure class="tg-tuitioncenterdp">
											<a href="#"><img src="<?= Yii::$app->params['mediaUrl'] .'tutor/'.$results->image ?>" style="height:200px; width:200px" alt="image description"></a>
											<figcaption>
												<a class="tg-usericon tg-iconfeatured" href="#">
													<em class="tg-usericonholder">
														<i class="fa fa-bolt"></i>
														<span>featured</span>
													</em>
												</a>
												<a class="tg-usericon tg-iconvarified" href="#">
													<em class="tg-usericonholder">
														<i class="fa fa-shield"></i>
														<span>varified</span>
													</em>
												</a>
											</figcaption>
										</figure>
									</div>
								</div>
								<div class="tg-widget tg-widgetcontact">
									<div class="tg-widgettitle">
										<h3>contact details</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul class="tg-address">
											<li><i class="fa fa-envelope-o"></i><a href="mailto:<?php//= $tuto->email ?>"><?php//= $tuto->email ?></a></li>
											<li><i class="fa fa-phone"></i><a href="tel:<?= $results->phone ?>"><?= $results->phone ?></a></li>
											
											<li><i class="fa fa-skype"></i><a href="statecs772.html">statecs772</a></li>
											<li><i class="fa fa-link"></i><a href="<?= $results->website ?>" target="_blank"><?= $results->website ?></a></li>
										</ul>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
										<a href="#" class="tg-btn">get direction</a>
									</div>
								</div>
								<div class="tg-widget tg-widgetacadmeyurl">
									<div class="tg-widgettitle">
										<h3>Tutors's Public URL</h3>
									</div>
									<div class="tg-widgetcontent">
										<a href="<?= $results->website ?>" target="_blank"><i class="fa fa-link"></i><em><?= $results->website ?></em></a>
									</div>
								</div>
								<div class="tg-widget tg-widgetschedule">
									<div class="tg-widgettitle">
										<h3>Schedule</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li><a href="#">sunday<em>day off</em></a></li>
											<li><a href="#">monday<em>09:00 - 17:00</em></a></li>
											<li><a href="#">tuesday<em>09:00 - 17:00</em></a></li>
											<li><a href="#">wednesday<em>09:00 - 17:00</em></a></li>
											<li><a href="#">thursday<em>(09:00 - 17:00</em></a></li>
											<li><a href="#">friday<em>09:00 - 17:00</em></a></li>
											<li><a href="#">saturday<em>09:00 - 17:00</em></a></li>
										</ul>
									</div>
								</div>
								<div class="tg-widget tg-widgetformcontact">
									<div class="tg-widgettitle">
										<h3>Contact Now</h3>
									</div>
									<div class="tg-widgetcontent">
										<form class="tg-themeform tg-formcontactus">
											<fieldset>
												<div class="form-group">
													<input type="text" name="text" class="form-control" placeholder="Full Name *">
												</div>
												<div class="form-group">
													<input type="text" name="mobile" class="form-control" placeholder="Mobile *">
												</div>
												<div class="form-group">
													<input type="email" name="email" class="form-control" placeholder="Your Email *">
												</div>
												<div class="form-group">
													<input type="text" name="subject" class="form-control" placeholder="Subject *">
												</div>
												<div class="form-group">
													<textarea placeholder="Message *"></textarea>
												</div>
												<button type="submit" class="tg-btn">send now</button>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="tg-widget tg-widgetsocial">
									<div class="tg-widgettitle">
										<h3>share this job</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="tg-widget tg-widgetclaimreport">
									<div class="tg-widgettitle">
										<h3>Claim/Report This User</h3>
									</div>
									<div class="tg-widgetcontent">
										<div id="tg-filterscrollbar" class="tg-filterscrollbar tg-themescrollbar tg-languagesradio">
											<span class="tg-radio">
												<input type="radio" id="all" name="language" value="all" checked="">
												<label for="all">Consectetur adipisicing elit</label>
											</span>
											<span class="tg-radio">
												<input type="radio" id="eng" name="language" value="english">
												<label for="eng">Eiusmod tempor incididunt labore dolore magna?</label>
											</span>
											<span class="tg-radio">
												<input type="radio" id="arabic" name="language" value="arabic">
												<label for="arabic">Ut enim ad minim veniam</label>
											</span>
											<span class="tg-radio">
												<input type="radio" id="czech" name="language" value="czech">
												<label for="czech">Nostrud exercitation ullamco</label>
											</span>
											<span class="tg-radio">
												<input type="radio" id="danish" name="language" value="danish">
												<label for="danish">Laboris nisi ut aliquip</label>
											</span>
											<span class="tg-radio">
												<input type="radio" id="chinese" name="language" value="chinese">
												<label for="chinese">Nostrud exercitation ullamco</label>
											</span>
											<span class="tg-radio">
												<input type="radio" id="french" name="language" value="french">
												<label for="french">Ut enim ad minim veniam</label>
											</span>
										</div>
										<div class="form-group">
											<textarea placeholder="Report Detail"></textarea>
										</div>
										<button class="tg-btn" type="submit">report now</button>
									</div>
								</div>
							</div>
							<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
								<div class="tg-jobhead">
									<span class="tg-priceperhour"><?= $results->pricing ?> INR <em>Per Hour</em></span>
									<h1><?php echo $results->firstname; ?> <?php echo $results->lastname ?></h1>
									<span class="tg-tutioncategory">Mathematics &amp; Statistics</span>
									<ul class="tg-jobsmetadata">
										<li><span class="tg-stars"><span></span></span></li>
										<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
										<li><a href="#">1509 view</a></li>
									</ul>
								</div>
								<div id="tg-location-map" class="tg-jobsmap"></div>
								<div class="tg-contentbox">
									<h2>About <?php echo $results->firstname; ?> <?php echo $results->lastname ?></h2>
									<div class="tg-description">
										<p><?= $results->describe_you ?></p>
									</div>
									<ul class="tg-fullinfo">
										<li>
											<div class="tg-detailbox">
												<strong>Level: </strong>
												<span>A-Level</span>
											</div>
											<div class="tg-detailbox">
												<strong>Language: </strong>
												<span>English, Litrature</span>
											</div>
											<div class="tg-detailbox">
												<strong>Gender: </strong>
												<span><?= $results->gender ?></span>
											</div>
										</li>
										<li>
											<div class="tg-detailbox">
												<strong>Age : </strong>
												<span><?= $results->age ?></span>
											</div>
											<div class="tg-detailbox">
												<strong>Available Time Slot: </strong>
												<span>09:00 - 17:00</span>
											</div>
											<div class="tg-detailbox">
												<strong>Others: </strong>
												<span>none</span>
											</div>
										</li>
									</ul>
								</div>
								<div class="tg-contentbox">
									<h2>Skills</h2>
									<ul class="tg-skillsrequired">
										<li>Labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco</li>
										<li>Aliquip ex ea commodo consequat aute irure dolor in reprehenderit</li>
										<li>Voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat</li>
										<li>Cupidatat non proident in culpa qui officia deserunt mollit anim id</li>
										<li>Estorum Sed ut perspiciatis unde omnis iste natus error sit voluptatem</li>
										<li>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</li>
										<li>Quasi architecto beatae vitae dicta sunt explicabo</li>
										<li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</li>
										<li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</li>
										<li>Neque porro quisquam est</li>
										<li>Qui dolorem ipsum quia dolor sit amet consectetur adipisci velit</li>
										<li>Sed quia non numquam eius modi tempora incidunt ut labore et</li>
										<li>Dolore magnam aliquam quaerat voluptatem</li>
									</ul>
								</div>
								<div class="tg-contentbox">
									<h2>Experience</h2>
									<ul class="tg-hounoradnawards">
										<li>
											<div class="tg-dotstyletitle">
												<h3>Lecturer, Department Of Mathematics (Jan, 2016 - Present)</h3>
												<span>Mathematics &amp; Statistics</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
										<li>
											<div class="tg-dotstyletitle">
												<h3>Jr. Lecturer, Department Of Economics (Mar, 2015 - Dec, 2015)</h3>
												<span>Mathematics &amp; Statistics</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
										<li>
											<div class="tg-dotstyletitle">
												<h3>Best Project Presentation (Jun, 2016)</h3>
												<span>University of Manchester</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="tg-contentbox">
									<h2>Honour &amp; Awards</h2>
									<ul class="tg-hounoradnawards">
										<li>
											<div class="tg-dotstyletitle">
												<h3>Best Speech On Parent Meeting (Mar, 2015)</h3>
												<span>University of Manchester</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
										<li>
											<div class="tg-dotstyletitle">
												<h3>Best Campus Student (Apr, 2016)</h3>
												<span>University of Manchester</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
										<li>
											<div class="tg-dotstyletitle">
												<h3>Best Project Presentation (Jun, 2016)</h3>
												<span>University of Manchester</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="tg-contentbox">
									<h2>Views Per Day</h2>
									<div id="tg-viewperdaychart" class="tg-viewperdaychart tg-viewschart"></div>
								</div>
								<div class="tg-contentbox">
									<h2>Presentation Video</h2>
									<div class="tg-videobox">
										<figure>
											<img src="images/video-img-01.jpg" alt="image description">
											<iframe src="https://www.youtube.com/embed/TiwjRgLZMG4"></iframe>
										</figure>
									</div>
								</div>
								<div class="tg-contentbox">
									<h2>Photo Gallery</h2>
									<div class="tg-photogallery">
										<ul>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-07.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-08.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-09.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-10.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-11.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-12.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-13.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-14.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-15.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
											<li>
												<div class="tg-thumbnail">
													<figure>
														<img src="images/flicker/img-16.jpg" alt="image description">
														<figcaption><span></span></figcaption>
													</figure>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="tg-contentbox">
									<h2>03 Reviews</h2>
									<div class="tg-userreviews">
										<div class="tg-ratingbox">
											<div class="tg-averagerating">
												<h3>Average Rating</h3>
												<em>4.7</em>
												<span class="tg-stars"><span></span></span>
											</div>
											<div id="tg-userskill" class="tg-userskill">
												<div class="tg-skill">
													<span class="tg-skillname">5 Stars</span>
													<span class="tg-skillpercentage">75%</span>
													<div class="tg-skillbox">
														<div class="tg-skillholder" data-percent="75%">
															<div class="tg-skillbar"></div>
														</div>
													</div>
												</div>
												<div class="tg-skill">
													<span class="tg-skillname">4 Stars</span>
													<span class="tg-skillpercentage">64%</span>
													<div class="tg-skillbox">
														<div class="tg-skillholder" data-percent="64%">
															<div class="tg-skillbar"></div>
														</div>
													</div>
												</div>
												<div class="tg-skill">
													<span class="tg-skillname">3 Stars</span>
													<span class="tg-skillpercentage">30%</span>
													<div class="tg-skillbox">
														<div class="tg-skillholder" data-percent="30%">
															<div class="tg-skillbar"></div>
														</div>
													</div>
												</div>
												<div class="tg-skill">
													<span class="tg-skillname">2 Stars</span>
													<span class="tg-skillpercentage">46%</span>
													<div class="tg-skillbox">
														<div class="tg-skillholder" data-percent="46%">
															<div class="tg-skillbar"></div>
														</div>
													</div>
												</div>
												<div class="tg-skill">
													<span class="tg-skillname">1 Stars</span>
													<span class="tg-skillpercentage">16%</span>
													<div class="tg-skillbox">
														<div class="tg-skillholder" data-percent="16%">
															<div class="tg-skillbar"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<ul class="tg-comment">
											<li>
												<div class="tg-commenter">
													<figure class="tg-commenterimg">
														<img src="images/avatar/avatarimg-01.jpg" alt="commenter image">
													</figure>
													<div class="tg-commenterinfo">
														<div class="tg-authorhead">
															<div class="tg-authorname">
																<h3><a href="#">Dante Edberg</a></h3>
																<time datetime="2016-10-10">2 days ago</time>
															</div>
															<span class="tg-stars"><span></span></span>
														</div>
														<div class="tg-description">
															<p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exmmodo consequat irure dolor in reprehenderit in voluptate sint occaecat cupidatat non proident.</p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="tg-commenter">
													<figure class="tg-commenterimg">
														<img src="images/avatar/avatarimg-02.jpg" alt="commenter image">
													</figure>
													<div class="tg-commenterinfo">
														<div class="tg-authorhead">
															<div class="tg-authorname">
																<h3><a href="#">Dante Edberg</a></h3>
																<time datetime="2016-10-10">2 days ago</time>
															</div>
															<span class="tg-stars"><span></span></span>
														</div>
														<div class="tg-description">
															<p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exmmodo consequat irure dolor in reprehenderit in voluptate sint occaecat cupidatat non proident.</p>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="tg-commenter">
													<figure class="tg-commenterimg">
														<img src="images/avatar/avatarimg-03.jpg" alt="commenter image">
													</figure>
													<div class="tg-commenterinfo">
														<div class="tg-authorhead">
															<div class="tg-authorname">
																<h3><a href="#">Dante Edberg</a></h3>
																<time datetime="2016-10-10">2 days ago</time>
															</div>
															<span class="tg-stars"><span></span></span>
														</div>
														<div class="tg-description">
															<p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exmmodo consequat irure dolor in reprehenderit in voluptate sint occaecat cupidatat non proident.</p>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							
								<div class="tg-contentbox">
									<h2>Leave Your Review</h2>
									<form class="tg-themeform tg-formreview">
										<fieldset>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
													<input type="text" name="user_subject" class="form-control" placeholder="Subject">
													</div>
												</div>
												<div class="col-sm-6">
													<ul class="tg-ratingarea">
														<li>
															<span class="tg-radio">
																<input type="radio" id="notsatisfide" name="feedback" value="not satisfide">
																<label for="notsatisfide">not satisfide</label>
															</span>
														</li>
														<li>
															<span class="tg-radio">
																<input type="radio" id="satisfide" name="feedback" value="satisfide">
																<label for="satisfide">satisfide</label>
															</span>
														</li>
														<li>
															<span class="tg-radio">
																<input type="radio" id="good" name="feedback" value="good" checked>
																<label for="good">good</label>
															</span>
														</li>
														<li>
															<span class="tg-radio">
																<input type="radio" id="verygood" name="feedback" value="very good">
																<label for="verygood">very good</label>
															</span>
														</li>
														<li>
															<span class="tg-radio">
																<input type="radio" id="excellent" name="feedback" value="excellent">
																<label for="excellent">excellent</label>
															</span>
														</li>
													</ul>
												</div>
												<div class="col-sm-12">
													<div class="form-group">
														<textarea placeholder="Review Description *"></textarea>
													</div>
												</div>
												<div class="col-sm-12">
													<button class="tg-btn" type="submit">Submit Review</button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-infobox">
				<div class="container">
					<div class="row">
						<div class="tg-fcols">
							<div class="tg-fcol">
								<strong class="tg-logo"><a href="#"><img src="images/logo.png" alt="image description"></a></strong>
								<div class="tg-description">
									<p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip exeaodo consequat aute irure dolor.</p>
								</div>
								<ul class="tg-socialicons">
									<li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<div class="tg-fcol">
								<div class="tg-icon">
									<i class="fa fa-bullhorn"></i>
								</div>
								<div class="tg-title">
									<h3>Talk To Us</h3>
								</div>
								<ul class="tg-email">
									<li><a href="query%40domain.html">query@domain.com</a></li>
									<li><a href="support%40domain.html">support@domain.com</a></li>
								</ul>
							</div>
							<div class="tg-fcol">
								<div class="tg-icon">
									<i class="fa fa-paper-plane-o"></i>
								</div>
								<div class="tg-title">
									<h3>Stay Updated</h3>
								</div>
								<form class="tg-newsletter" action="http://mydesignhoard.com/HTML/tutor/index_submit" method="post" enctype="text/plain">
									<fieldset>
										<input type="email" class="form-control" name="email" placeholder="Your Email">
										<button type="submit"><i class="fa fa-check"></i></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-quicklinks">
				<div class="container">
					<div class="row">
						<div class="tg-fcols">
							<div class="tg-fcol">
								<div class="tg-title tg-icon">
									<h3 class="fa fa-map-signs">By Location</h3>
								</div>
								<ul>
									<li><a href="#">United Kingdom</a></li>
									<li><a href="#">France</a></li>
									<li><a href="#">U.S.A</a></li>
									<li><a href="#">Egypt</a></li>
									<li><a href="#">United Emirate</a></li>
									<li><a href="#">China</a></li>
									<li><a href="#">Saudi Arab</a></li>
									<li><a href="#">Brazil</a></li>
									<li><a href="#">Germany</a></li>
									<li><a href="#">Canada</a></li>
									<li><a href="#">Sydney</a></li>
									<li><a href="#">View All</a></li>
								</ul>
							</div>
							<div class="tg-fcol">
								<div class="tg-title tg-icon">
									<h3 class="fa fa-location-arrow">By City</h3>
								</div>
								<ul>
									<li><a href="#">Arnos Grove</a></li>
									<li><a href="#">Dalston</a></li>
									<li><a href="#">Balham</a></li>
									<li><a href="#">Denmark Hill</a></li>
									<li><a href="#">Barkingside</a></li>
									<li><a href="#">Derry Downs</a></li>
									<li><a href="#">Barnes Cray</a></li>
									<li><a href="#">East Bedfont</a></li>
									<li><a href="#">Camden Town</a></li>
									<li><a href="#">Eden Park</a></li>
									<li><a href="#">Canonbury</a></li>
									<li><a href="#">View All</a></li>
								</ul>
							</div>
							<div class="tg-fcol">
								<div class="tg-title tg-icon">
									<h3 class="fa fa-graduation-cap">By Discipline</h3>
								</div>
								<ul>
									<li><a href="#">All Disciplines</a></li>
									<li><a href="#">Culinary</a></li>
									<li><a href="#">Academics</a></li>
									<li><a href="#">Dance</a></li>
									<li><a href="#">Acting</a></li>
									<li><a href="#">Health &amp; Fitness</a></li>
									<li><a href="#">Advising</a></li>
									<li><a href="#">Languages</a></li>
									<li><a href="#">Athletics</a></li>
									<li><a href="#">Mental Health</a></li>
									<li><a href="#">Counseling</a></li>
									<li><a href="#">View All</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<nav id="tg-footernav" class="tg-footernav">
								<ul>
									<li class="tg-active"><a href="#">Home</a></li>
									<li><a href="#">jobs</a></li>
									<li><a href="#">tutors</a></li>
									<li><a href="#">Academies</a></li>
									<li><a href="#">How it works?</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Pages</a></li>
								</ul>
							</nav>
							<span class="tg-copyright">2017 All Rights Reserved &copy; <a href="#">Tutor Directory</a></span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/bootstrap-add-clear.min.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/mapclustering/data.json"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/mapclustering/markerclusterer.min.js"></script>
	<script src="js/mapclustering/infobox.js"></script>
	<script src="js/mapclustering/map.js"></script>
	<script src="js/customScrollbar.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/simplyscroll.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/loader.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
	<script>
		google.charts.load('current', {'packages':['bar']});
		google.charts.setOnLoadCallback(drawStuff);
		function drawStuff() {
			var data = new google.visualization.arrayToDataTable([
				['Date', 'Views'],
				["Feb 01, 2016", 20],
				["Feb 02, 2016", 25],
				["Feb 03, 2016", 28],
				["Feb 04, 2016", 42],
				["Feb 05, 2016", 23],
				["Feb 06, 2016", 25],
				["Feb 07, 2016", 33],
				["Feb 08, 2016", 27],
				["Feb 09, 2016", 45],
				["Feb 10, 2016", 38],
				["Feb 11, 2016", 15],
				["Feb 12, 2016", 25],
				["Feb 13, 2016", 20],
				["Feb 14, 2016", 42],
				["Feb 15, 2016", 28],
				["Feb 16, 2016", 50],
				["Feb 17, 2016", 45],
				["Feb 18, 2016", 35],
				["Feb 19, 2016", 43],
				["Feb 20, 2016", 30],
				["Feb 21, 2016", 28],
				["Feb 22, 2016", 35],
				["Feb 23, 2016", 30],
				["Feb 24, 2016", 43],
				["Feb 25, 2016", 38],
				["Feb 26, 2016", 32],
				["Feb 27, 2016", 50],
				["Feb 28, 2016", 35],
			]);
			var options = {
				title: '',
				colors: '#ddd',
				legend: { position: 'none' },
				chart: { subtitle: '' },
				axes: {
					x: {
						0: { side: 'bottom', label: '', }
					}
				},
				bar: { groupWidth: "25%" },
				chartArea: {
					backgroundColor: {
						stroke: '',
						strokeWidth: 0,
					}
				},
			};
			var chart = new google.charts.Bar(document.getElementById('tg-viewperdaychart'));
			chart.draw(data, google.charts.Bar.convertOptions(options));
		};
	</script>
</body>
</html>