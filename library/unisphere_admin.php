<?php   
	if($_POST['unisphere_hidden'] == 'Y') {  
		//Form data sent  
		
		$unisphere_skin = $_POST['unisphere_skin'];  
		update_option('unisphere_skin', $unisphere_skin);  
		
		$unisphere_logo = $_POST['unisphere_logo'];  
		update_option('unisphere_logo', $unisphere_logo);  
		
		$unisphere_top_nav_excluded_pages = $_POST['unisphere_top_nav_excluded_pages'];  
		update_option('unisphere_top_nav_excluded_pages', $unisphere_top_nav_excluded_pages);  
		
		$unisphere_slider_cat = $_POST['unisphere_slider_cat'];  
		update_option('unisphere_slider_cat', $unisphere_slider_cat);  
		
		$unisphere_slider_posts_number = $_POST['unisphere_slider_posts_number'];  
		update_option('unisphere_slider_posts_number', $unisphere_slider_posts_number);  
		
		$unisphere_slider_seconds = $_POST['unisphere_slider_seconds'];  
		update_option('unisphere_slider_seconds', $unisphere_slider_seconds);
		
		$unisphere_left_section_title = stripslashes(htmlspecialchars($_POST['unisphere_left_section_title'],ENT_QUOTES)); 
		update_option('unisphere_left_section_title', $unisphere_left_section_title);  
		
		$unisphere_left_section_text = stripslashes(htmlspecialchars($_POST['unisphere_left_section_text'],ENT_QUOTES));
		update_option('unisphere_left_section_text', $unisphere_left_section_text);  
		
		$unisphere_middle_section_title = stripslashes(htmlspecialchars($_POST['unisphere_middle_section_title'],ENT_QUOTES));
		update_option('unisphere_middle_section_title', $unisphere_middle_section_title);  
		
		$unisphere_middle_section_text = stripslashes(htmlspecialchars($_POST['unisphere_middle_section_text'],ENT_QUOTES));
		update_option('unisphere_middle_section_text', $unisphere_middle_section_text);  
		
		$unisphere_right_section_title = stripslashes(htmlspecialchars($_POST['unisphere_right_section_title'],ENT_QUOTES));
		update_option('unisphere_right_section_title', $unisphere_right_section_title);  
		
		$unisphere_right_section_text = stripslashes(htmlspecialchars($_POST['unisphere_right_section_text'],ENT_QUOTES));
		update_option('unisphere_right_section_text', $unisphere_right_section_text);  
		
		$unisphere_enable_portfolio = $_POST['unisphere_enable_portfolio'];  
		update_option('unisphere_enable_portfolio', $unisphere_enable_portfolio);  
		
		$unisphere_portfolio_cat = $_POST['unisphere_portfolio_cat'];  
		update_option('unisphere_portfolio_cat', $unisphere_portfolio_cat);  
		
		$unisphere_portfolio_page_headline = stripslashes(htmlspecialchars($_POST['unisphere_portfolio_page_headline'],ENT_QUOTES)); 
		update_option('unisphere_portfolio_page_headline', $unisphere_portfolio_page_headline);  
		
		$unisphere_enable_blog = $_POST['unisphere_enable_blog'];  
		update_option('unisphere_enable_blog', $unisphere_enable_blog);  
		
		$unisphere_blog_cat = $_POST['unisphere_blog_cat'];  
		update_option('unisphere_blog_cat', $unisphere_blog_cat);  
		
		$unisphere_blog_page_headline = stripslashes(htmlspecialchars($_POST['unisphere_blog_page_headline'],ENT_QUOTES));
		update_option('unisphere_blog_page_headline', $unisphere_blog_page_headline);  
		
		$unisphere_destination_email = $_POST['unisphere_destination_email'];  
		update_option('unisphere_destination_email', $unisphere_destination_email);  
		?>  
		<div class="updated"><p><strong>Options saved.</strong></p></div>  
<?php  
    } else {  
		//Normal page display  
		$unisphere_skin = get_option('unisphere_skin');
		$unisphere_logo = get_option('unisphere_logo');
		$unisphere_top_nav_excluded_pages = get_option('unisphere_top_nav_excluded_pages');
		$unisphere_slider_cat = get_option('unisphere_slider_cat');  
		$unisphere_slider_posts_number = get_option('unisphere_slider_posts_number'); 
		$unisphere_slider_seconds = get_option('unisphere_slider_seconds');  
		
		$unisphere_left_section_title = get_option('unisphere_left_section_title');  
		$unisphere_left_section_text = get_option('unisphere_left_section_text');  
		$unisphere_middle_section_title = get_option('unisphere_middle_section_title');  
		$unisphere_middle_section_text = get_option('unisphere_middle_section_text');  
		$unisphere_right_section_title = get_option('unisphere_right_section_title');  
		$unisphere_right_section_text = get_option('unisphere_right_section_text');
		  
		$unisphere_enable_portfolio = get_option('unisphere_enable_portfolio');  
		$unisphere_portfolio_cat = get_option('unisphere_portfolio_cat');  
		$unisphere_portfolio_page_headline = get_option('unisphere_portfolio_page_headline');  
		
		$unisphere_enable_blog = get_option('unisphere_enable_blog');  
		$unisphere_blog_cat = get_option('unisphere_blog_cat');  
		$unisphere_blog_page_headline = get_option('unisphere_blog_page_headline');  
		
		$unisphere_destination_email = get_option('unisphere_destination_email'); 
	}
?>  

<style>
	.spacer{clear:both; height:1px;}
	.spacer10{clear:both; height:10px;}

	/* ----------- My Form ----------- */
	.myform{ margin:0; width:750px; padding:14px; }
	
	/* ----------- stylized ----------- */
	#stylized{ border:solid 2px #b7ddf2; background:#ebf4fb; }
	#stylized h4 { font-size:18px; font-weight:bold; margin-bottom:8px;	}
	#stylized p{ font-size:11px; color:#666666;	margin-bottom:20px;	border-bottom:solid 1px #b7ddf2; padding-bottom:10px; }
	#stylized label{ display:block; font-weight:bold; text-align:right; width:200px; float:left; }
	#stylized .small{ color:#666666; display:block; font-size:11px; font-weight:normal; text-align:right; width:200px; }
	#stylized input{ float:left; font-size:12px; padding:4px 2px; border:solid 1px #aacfe4; width:500px; margin:2px 0 20px 10px; }
	#stylized input[type="radio"]{ float:none; padding:4px 2px; border: 0!important; width:10px!important; margin:2px 0 20px 10px; }
	#stylized textarea{ float:left; font-size:12px; padding:4px 2px; border:solid 1px #aacfe4; width:500px; margin:2px 0 20px 10px; }
	#stylized select{ float:left; font-size:12px; padding:4px 2px; border:solid 1px #aacfe4;  margin:2px 0 20px 10px; }
	#stylized button{ clear:both; margin-right:40px; width:125px; height:31px; font-size:11px; font-weight:bold; float: right; }
</style>

<div class="wrap">  
    <h2>UniSphere Corporate Theme Options</h2>
    
    <div id="stylized" class="myform">
    	<form name="unisphere_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">		
	        <input type="hidden" name="unisphere_hidden" value="Y">

    		<h4>Layout Settings</h4>
    		<p></p>
    		
    		<label><?php _e("Select the Theme Skin") ?>
			<span class="small"></span>
			</label>
			<select name="unisphere_skin" id="unisphere_skin" class="postform">
				<option class="level-0" value="skin1" <?php if($unisphere_skin == 'skin1') { echo "selected=\"selected\""; } ?>>Blue/Brown Light</option>
				<option class="level-0" value="skin2" <?php if($unisphere_skin == 'skin2') { echo "selected=\"selected\""; } ?>>Blue/Brown Dark</option>
				<option class="level-0" value="skin3" <?php if($unisphere_skin == 'skin3') { echo "selected=\"selected\""; } ?>>Grey/Red Light</option>
				<option class="level-0" value="skin4" <?php if($unisphere_skin == 'skin4') { echo "selected=\"selected\""; } ?>>Grey/Red Dark</option>
				<option class="level-0" value="skin5" <?php if($unisphere_skin == 'skin5') { echo "selected=\"selected\""; } ?>>Blue Light</option>
				<option class="level-0" value="skin6" <?php if($unisphere_skin == 'skin6') { echo "selected=\"selected\""; } ?>>Blue Dark</option>
				<option class="level-0" value="skin7" <?php if($unisphere_skin == 'skin7') { echo "selected=\"selected\""; } ?>>Pink/Green Light</option>
				<option class="level-0" value="skin8" <?php if($unisphere_skin == 'skin8') { echo "selected=\"selected\""; } ?>>Pink/Green Dark</option>
			</select>
			<div class="spacer10"></div>
    		
    		<label><?php _e("Logo") ?> <a id="add_media" class="thickbox" title="Add Media" target="_blank" href="media-upload.php?post_id=-1242489457&TB_iframe=true&width=640&height=359"><img alt="Add Media" src="images/media-button-other.gif"/></a>
			<span class="small"><?php _e("Upload your logo as a PNG file and paste the url here.") ?></span>
			</label>
			<input type="text" name="unisphere_logo" value="<?php echo $unisphere_logo; ?>"/>
			<div class="spacer10"></div>
			
			<label><?php _e("Top Nav Excluded Pages") ?>
			<span class="small"><?php _e("Comma-separated list of the Page ID's you want o exclude from the navigation. (e.g. 1,2,3,4)") ?></span>
			</label>
			<input type="text" name="unisphere_top_nav_excluded_pages" value="<?php echo $unisphere_top_nav_excluded_pages; ?>"/>
			<div class="spacer10"></div>
			
			<label><?php _e("Slider Category") ?>
			<span class="small"><?php _e("The category you want to use for displaying the posts in the Home page slider.") ?></span>
			</label>
			<?php wp_dropdown_categories('hide_empty=0&orderby=name&hierarchical=1&name=unisphere_slider_cat&selected=' . $unisphere_slider_cat); ?>
			<div class="spacer10"></div>
			
			<label><?php _e("Number of Posts in the Slider") ?>
			<span class="small"><?php _e("The number of posts you want to show in the Home page slider.") ?></span>
			</label>
			<input type="text" name="unisphere_slider_posts_number" value="<?php echo $unisphere_slider_posts_number; ?>"/>
			<div class="spacer10"></div>
			
			<label><?php _e("Slider speed between transitions") ?>
			<span class="small"><?php _e("The number of seconds between transitions in the Home page slider.") ?></span>
			</label>
			<input type="text" name="unisphere_slider_seconds" value="<?php echo $unisphere_slider_seconds; ?>"/>
			<div class="spacer"></div>
			
			<button type="submit">Save All</button>
			<div class="spacer"></div>
            
			<h4>Home Page Settings</h4>
			<p></p>
			
			<label><?php _e("Left Section Title") ?>
			<span class="small"><?php _e("(e.g. Welcome)") ?></span>
			</label>
			<input type="text" name="unisphere_left_section_title" value="<?php echo $unisphere_left_section_title; ?>"/>
			<div class="spacer10"></div>
			
			<label><?php _e("Left Section Text") ?>
			<span class="small"><?php _e("(HTML allowed)") ?></span>
			</label>
			<textarea rows="10" cols="40" name="unisphere_left_section_text"><?php echo $unisphere_left_section_text; ?></textarea>
			<div class="spacer10"></div>
			<div class="spacer10"></div>
			<div class="spacer10"></div>
			
			<label><?php _e("Middle Section Title") ?>
			<span class="small"><?php _e("(e.g. Who we are)") ?></span>
			</label>
			<input type="text" name="unisphere_middle_section_title" value="<?php echo $unisphere_middle_section_title; ?>"/>
			<div class="spacer10"></div>
			
			<label><?php _e("Middle Section Text") ?>
			<span class="small"><?php _e("(HTML allowed)") ?></span>
			</label>
			<textarea rows="10" cols="40" name="unisphere_middle_section_text"><?php echo $unisphere_middle_section_text; ?></textarea>
			<div class="spacer10"></div>
			<div class="spacer10"></div>
			<div class="spacer10"></div>
			
			<label><?php _e("Right Section Title") ?>
			<span class="small"><?php _e("(e.g. Testimonials)") ?></span>
			</label>
			<input type="text" name="unisphere_right_section_title" value="<?php echo $unisphere_right_section_title; ?>"/>
			<div class="spacer10"></div>
			
			<label><?php _e("Right Section Text") ?>
			<span class="small"><?php _e("(HTML allowed)") ?></span>
			</label>
			<textarea rows="10" cols="40" name="unisphere_right_section_text"><?php echo $unisphere_right_section_text; ?></textarea>
			<div class="spacer"></div>
			
			<button type="submit">Save All</button>
			<div class="spacer"></div>
			
			<h4>Portfolio Settings</h4>
    		<p></p>		
        
    		<label><?php _e("Enable Portfolio?") ?>
			<span class="small"></span>
			</label>
			<input type="radio" value="Y" name="unisphere_enable_portfolio" <?php if($unisphere_enable_portfolio == 'Y') { echo "checked=\"checked\""; } ?>/> Yes&nbsp;&nbsp;<input type="radio" value="N" name="unisphere_enable_portfolio" <?php if($unisphere_enable_portfolio == 'N') { echo "checked=\"checked\""; } ?>/> No
			<div class="spacer10"></div>
			
			<label><?php _e("Portfolio Category") ?>
			<span class="small"><?php _e("Your Portfolio Category.") ?></span>
			</label>
			<?php wp_dropdown_categories('hide_empty=0&orderby=name&hierarchical=1&name=unisphere_portfolio_cat&selected=' . $unisphere_portfolio_cat); ?>
			<div class="spacer10"></div>
			
			<label><?php _e("Portfolio Page Headline") ?>
			<span class="small"><?php _e("(e.g. Welcome to the Portfolio)") ?></span>
			</label>
			<input type="text" name="unisphere_portfolio_page_headline" value="<?php echo $unisphere_portfolio_page_headline; ?>" />
			<div class="spacer"></div>
			
			<button type="submit">Save All</button>
			<div class="spacer"></div>
        
			<h4>Blog Settings</h4>
    		<p></p>		
        
    		<label><?php _e("Enable Blog?") ?>
			<span class="small"></span>
			</label>
			<input type="radio" value="Y" name="unisphere_enable_blog" <?php if($unisphere_enable_blog == 'Y') { echo "checked=\"checked\""; } ?>/> Yes&nbsp;&nbsp;<input type="radio" value="N" name="unisphere_enable_blog" <?php if($unisphere_enable_blog == 'N') { echo "checked=\"checked\""; } ?>/> No
			<div class="spacer10"></div>
			
			<label><?php _e("Blog Category") ?>
			<span class="small"><?php _e("Your Blog Category.") ?></span>
			</label>
			<?php wp_dropdown_categories('hide_empty=0&orderby=name&hierarchical=1&name=unisphere_blog_cat&selected=' . $unisphere_blog_cat); ?>
			<div class="spacer10"></div>
			
			<label><?php _e("Blog Page Headline") ?>
			<span class="small"><?php _e("(e.g. Welcome to the Blog)") ?></span>
			</label>
			<input type="text" name="unisphere_blog_page_headline" value="<?php echo $unisphere_blog_page_headline; ?>" />
			<div class="spacer"></div>

			<button type="submit">Save All</button>
			<div class="spacer"></div>
			
			<h4>Contact Page Settings</h4>
    		<p></p>		
        
    		<label><?php _e("Destination E-mail") ?>
			<span class="small"><?php _e("This is the e-mail account you want your messages to be sent to") ?></span>
			</label>
			<input type="text" name="unisphere_destination_email" value="<?php echo $unisphere_destination_email; ?>" />
			<div class="spacer"></div>
			
			<button type="submit">Save All</button>
			<div class="spacer"></div>
    </form>  
</div>  