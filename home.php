<?php
if(isset($_POST['submitted'])) {
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = __("You forgot to enter your name.", "site5framework");
			$hasError = true;
		} else {
			$name = trim($_POST['contactName
		}

		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = __("You forgot to enter your email address.", "site5framework");
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = __("You entered an invalid email address.", "site5framework");
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}

		//Check to make sure comments were entered
		if(trim($_POST['comments']) === '') {
			$commentError = __("You forgot to enter your comments.", "site5framework");
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}

		//If there is no error, send the email
		if(!isset($hasError)) {
			$msg .= "------------User Info------------ \r\n"; //Title
			$msg .= "User IP : ".$_SERVER["REMOTE_ADDR"]."\r\n"; //Sender's IP
			$msg .= "Browser Info : ".$_SERVER["HTTP_USER_AGENT"]."\r\n"; //User agent
			$msg .= "User Come From : ".$_SERVER["HTTP_REFERER"]; //Referrer

			$emailTo = ''.of_get_option('contact_email').'';
			$subject = 'Contact Form Submission From '.$name;
			$body = "Name: $name \n\nEmail: $email \n\nMessage: $comments \n\n $msg";
			$headers = 'From: '.get_bloginfo('name').' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

			if(mail($emailTo, $subject, $body, $headers)) $emailSent = true;

	}

}

get_header(); ?>

<div class="pictogramms">
<div class="wrapper">
                <div class="icon">
                            <img class="icon_pic" src="http://oberegliman.ru/wp-content/uploads/2016/02/2.png">
                            <span class="icon_text"> Круглосуточно </span>
                            
                </div>
				 				 
                <div class="icon">
                            <img class="icon_pic" src="http://oberegliman.ru/wp-content/uploads/2016/02/1.png">
                            <span class="icon_text"> Бесплатный Wi-Fi </span>
                </div>

                 <div class="icon">
                            <img class="icon_pic" src="http://oberegliman.ru/wp-content/uploads/2016/02/10.png">
                            <span class="icon_text"> Парковка </span>
                 </div>
				 <div class="icon">
                            <img class="icon_pic" src="http://oberegliman.ru/wp-content/uploads/2016/02/3.png">
                            <span class="icon_text"> Предоставляем чеки </span>
                 </div>
				 <div class="icon">
                            <img class="icon_pic" src="http://oberegliman.ru/wp-content/uploads/2016/02/4.png">
                            <span class="icon_text"> Отдых </span>
                 </div>
</div>
</div>
         <section id="slider"  class="bg" data-stellar-background-ratio="0.5"  style="background-image: url('<?php echo of_get_option('main_img')  ?>')">
            
            <?php if(of_get_option("propertyaddress")!="") { ?>
                <div class="propertyaddress">
                    <?php echo of_get_option("propertyaddress"); ?>  
                    <?php if(of_get_option("propertyprice")!=" ") echo
					'<div class="propertyprice">'.of_get_option('propertyprice').' </div>	';?> 
                      </div> <?php } ?>
        </section>


		<?php if ( is_home() ) { ?>
		<!-- begin homepage -->
		<section id="homepage" class="bg" data-stellar-background-ratio="0.5">

				<!-- begin .homesummary -->
				<div class="homesummary">
					<div class="homecontent">
						<h2><?php echo of_get_option('hometitle')  ?></h2>
						<img class="alignright wp-image-120 size-medium" width="368" height="230" sizes="(max-width: 300px) 100vw, 300px" src="http://oberegliman.ru/wp-content/themes/fastsale/images/c.jpg"><a name="price"></a>
					    <p>Вас приветствует мини-гостиница "Оберег" , р.п. Лиман, Лиманский район, Астраханская область. В Вашем распоряжении 4 уютных двухместных и трёхместных номера.</p> 
<p align="left"><img class="galka" src="http://oberegliman.ru/wp-content/uploads/2016/02/g.png">Сплит-системы</p>
<p align="left"><img class="galka" src="http://oberegliman.ru/wp-content/uploads/2016/02/g.png">Зона приготовления пищи с набором техники и посуды</p>
<p align="left"><img class="galka" src="http://oberegliman.ru/wp-content/uploads/2016/02/g.png">Зона отдыха / барбекю / беседка</p> 
<p align="left"><img class="galka" src="http://oberegliman.ru/wp-content/uploads/2016/02/g.png">В шаговой доступности продуктовый магазин</p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>
<p>  </p>



						<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter35646920 = new Ya.Metrika({ id:35646920, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ut:"noindex" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <!-- /Yandex.Metrika counter -->

						
						<div class="price">
                            <img class="price_pic" src="http://oberegliman.ru/wp-content/uploads/2016/02/8.png">
                            <span class="price_text"><span class="pric_text">600</span> рублей</span>
                    </div>

                    <div class="price">
                            <img class="price_pic" src="http://oberegliman.ru/wp-content/uploads/2016/02/7.png">
                            <span class="price_text"><span class="pric_text">5000</span> рублей</span>
                     </div>
						<p> <?php echo of_get_option('homesummary')  ?></p>
					   </div>
				</div>
				
				<!-- end .homesummary -->

		</section>
		<!-- end homepage -->
		<?php } ?>

		<!-- begin about -->
		<section id="about" class="bg" data-stellar-background-ratio="0.5" style="background-color: <?php echo of_get_option('aboutbgcolor')  ?>; background-image: url('<?php echo of_get_option('aboutbg')  ?>')">
            <div class="section_container clearfix">
                <div class="container">
                    
                    <?php
                    $the_query = new WP_Query( 'page_id='.of_get_option('aboutpage').'' );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
				
					
                    <!-- begin .summary -->
                    <div class="summary">
                        <div class="content">
                            <h2><?php the_title() ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <!-- end .summary -->

                    <?php endwhile; wp_reset_postdata();?>

					
					
                    <div id="service">
                        <?php
                        $the_query = new WP_Query( 'post_type=detail&orderby=date&order=ASC' );
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        $s_icon = get_post_meta($post->ID,'fastsale_d_icon',true);
                        ?>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>

					
					
                   	<div class="price">
                            <img class="price_pic" src="http://oberegliman.ru/wp-content/uploads/2016/02/5.png">
                            <span class="price_text">&nbsp;&nbsp;&nbsp;&nbsp; +7(929)742-60-81</span>
                    </div>

                    
                   





				   <div id="feature" class="clearfix">
                        <?php
                        $the_query = new WP_Query( 'post_type=highlight&orderby=date&order=ASC' );
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>
                        <div class="feature col3_3">
                            <h4><?php the_title()  ?></h4>
                            <?php the_excerpt(); ?>
                        </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                    <span class="clear"></span>
                </div><!-- .container -->
                <span class="clear"></span>
			</div><!-- .section_container -->

		</section>
		<!-- end about -->


		<?php
		$the_query = new WP_Query( 'page_id='.of_get_option('portfoliopage').'' );
		while ( $the_query->have_posts() ) : $the_query->the_post();
		?>

		<!-- begin portfolio -->
		<section id="portfolio" class="bg" data-stellar-background-ratio="0.5" style="background-color: <?php echo of_get_option('portfoliobgcolor')  ?>; background-image: url('<?php echo of_get_option('portfoliobg')  ?>')">


				<!-- begin .summary -->
				<div class="summary1">
					<div class="content">
						<h2><?php the_title()  ?></h2>
						
						<div class="vcard">
 
 
                 <div>
                        <span class="category">Гостиница</span>
                        <span class="fn org">"Оберег"</span>
                 </div>
                 <div class="adr">
				        <span class="region">Астраханская область</span>,
                        <span class="locality">р.п. Лиман</span>,
                        <span class="street-address">улица Матросова, дом 14</span>
						<span class="geo">
                       
					   <span class="latitude">
                            <span class="value-title" title="45.784708"> </span>
                        </span>
                        <span class="longitude">
                            <span class="value-title" title="47.210619"> </span>
                        </span>
                        </span>
                 </div>
                 
				 <div>Телефон: <span class="tel">+7 (929) 742-60-81</span></div>
                 <div>Электронная почта:
                 <a class="email" href="mailto:obereg.liman@yandex.ru">
                    obereg.liman@yandex.ru
                 </a>
                  </div>
				<div>Мы работаем <span class="workhours">ежедневно, круглосуточно</span>
                                  <span class="url">
                                         <span class="value-title" title="http://oberegliman.ru"> </span>
                                  </span>
                 </div>
                  
				  
				  </div>
				  
				  
				  <div class="yandex">
				  <script src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=tW7F13tbs80IdoefpUGVw0aFGqPfi-Jp&amp;width=900&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor" type="text/javascript" charset="utf-8"></script>
				  </div>	
				  
				
								

				  
				  
						<?php the_content(); ?>
					</div>
				</div>
				
				<!-- end .summary -->
                 <div class="footer">
				            <div class="foot">
				                   <div class="line">
								          <span class="lin">Гостиница "Оберег" - 2016г.</span>
								   </div>
								   
				                   <div class="my_contact">
				                          <span class="contact">Понравился сайт? Закажи по телефону +7(961)816-13-10</span>
                                   </div>
							</div>
                 </div>

		<?php endwhile; wp_reset_postdata();?>

			<div id="gallery">

				<ul class="gallery clearfix">
				<?php
					global $post;
								$term = get_query_var('term');
								$tax = get_query_var('taxonomy');
								$args=array('post_type'=> 'work','post_status'=> 'publish', 'orderby'=> 'menu_order', 'caller_get_posts'=>1, 'paged'=>$paged, 'posts_per_page'=>9);
								$taxargs = array($tax=>$term);
								if($term!='' && $tax!='') { $args  = array_merge($args, $taxargs); }


					query_posts($args);
				?>

				<?php if (have_posts()) : $count = 0; ?>
				<?php while (have_posts()) : the_post(); $count++; global $post; $taxo = wp_get_object_terms( get_the_ID(), 'workcat');?>

					<!-- gallery item -->

					<li data-type="<?php foreach ($taxo as $taxx) { echo strtolower(preg_replace('/\s+/', '-', $taxx->slug)). ' '; } ?>" data-id="id-<?php the_ID(); ?>" class="view <?php foreach ($taxo as $taxx) { echo strtolower(preg_replace('/\s+/', '-', $taxx->slug)). ' '; } ?>">
						<?php
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-item-small','portfolio-item-small' );
							$large = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', false);
							if(has_post_thumbnail()): echo '<img src="'.$thumbnail[0].'" alt="'.get_the_title().'"/>'; else: ?><img src="<?php bloginfo('template_url'); ?>/images/gallery_sample.jpg" alt="portfolio" />

						<?php endif; ?>
						<div class="mask">
							<h4><?php the_title(); ?></h4>
							<a class="info" href="<?php echo $large[0] ?>" data-rel="prettyPhoto"><?php _e('+','site5framework') ?></a>
						</div>
					</li>

					<!-- end gallery item -->

				<?php endwhile; endif; wp_reset_postdata();?>
				</ul>

			</div>


		</section>
		<!-- end portfolio -->

		<?php
		$the_query = new WP_Query( 'page_id='.of_get_option('contactpage').'' );
		while ( $the_query->have_posts() ) : $the_query->the_post();
		?>

		<!-- begin contact -->
		<section id="contact" class="bg" data-stellar-background-ratio="0.5" >
				<!-- begin .summary -->
				<div class="summary">
					<h2><?php the_title()  ?></h2>
				</div>
				<!-- end .summary -->
                
                
				<div class="row">
				    <?php if(of_get_option('contact_map')!=''){?>
                        <div id="contact-map">
                            <?php echo of_get_option('contact_map') ?>
                        </div>
                    <?php }?>
                
					<div class="one-half column contactinfo">
					    <?php if(of_get_option('contact_person_photo')) echo '<img src="'.of_get_option('contact_person_photo').'" alt="'.of_get_option('contact_person_name').' - '.of_get_option('contact_person_description').'" />'; ?>
					    <div class="person_info">
                            <h4><?php echo of_get_option('contact_person_name')  ?></h4>
                            <p><?php echo of_get_option('contact_person_description')  ?></p>
                            <span><i class="fa fa-envelope"></i> <?php echo of_get_option('contact_email')  ?></span>
                            <span><i class="fa fa-phone"></i> <?php echo of_get_option('contact_phone')  ?></span>
                            <span><i class="fa fa-map-marker"></i> <?php echo of_get_option('contact_address')  ?></span>
						</div>
						<span class="clearfix"></span>
						<a href="#" class="request_callback">Request a callback</a>
					</div>				

				</div>
				<span class="clearfix"></span>
				<div class="one-half column contactform">
						<p class="error" <?php if($hasError != '') echo 'style="display:block;"'; ?>><?php _e('There was an error submitting the form.', 'site5framework'); ?></p>

						<p class="thanks"><?php _e('<strong>Thanks!</strong> Your email was successfully sent. We should be in touch soon.', 'site5framework'); ?></p>

						<form id="contactForm" method="POST">

						<label for="nameinput"><?php _e("Your name", "site5framework"); ?> *</label>
							<input type="text" id="nameinput" name="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField"/>
							<span class="error" <?php if($nameError != '') echo 'style="display:block;"'; ?>><?php _e("You forgot to enter your name.", "site5framework");?></span>
						<label for="emailinput"><?php _e("Your email", "site5framework"); ?>*</label>
							<input type="text" id="emailinput" name="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email"/>
							  <span class="error" <?php if($emailError != '') echo 'style="display:block;"'; ?>><?php _e("You forgot to enter your email address.", "site5framework");?></span>

						<label for="commentinput"><?php _e("Your message", "site5framework"); ?>*</label>
							<textarea cols="20" rows="7" id="commentinput" name="comments" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							  <span class="error" <?php if($commentError != '') echo 'style="display:block;"'; ?>><?php _e("You forgot to enter your comments.", "site5framework");?></span>

						<br />
						<input type="hidden" name="submitted" id="submitted" value="true" />
						<button type="submit" id="submitbutton" class="submitbutton"><?php _e('SEND', 'site5framework'); ?></button>

						</form>
					</div>
				<!-- end .content -->
                <span class="clearfix"></span>
               <div class="summary clearfix">
                <?php the_content(); ?>
                </div>
                <a href="#" class="schedule_showing"><?php _e('Schedule A Showing', 'site5framework'); ?></a>
		</section>
		<!-- end contact -->
		<?php endwhile; wp_reset_postdata();?>

<?php get_footer(); ?>