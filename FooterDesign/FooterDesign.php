<?php
/**
 * Plugin Name: Design Footer
 * Plugin URI:
 * Description: this plugin give you the capability to redisign and customize you footer
 * Author: ismail mnifil
 * Author URI: https://github.com/ismailmnifl
 * version: 0.1
 * License: MIT
 */
?>

<?php
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
	//parameters details
	//add_management_page( $page_title, $menu_title, $capability,$menu_slug, $function );
	//add a new setting page udner setting menu
    //add_management_page('Footer Text', 'Footer Text', 'manage_options',__FILE__,'footer_text_admin_page');
  //add new menu and its sub menu 
add_menu_page('Footer Text title', 'Footer Settings', 'manage_options','footer_setting_page', 'mt_settings_page');
add_submenu_page( 'footer_setting_page', 'Page title', 'Sub-menu title', 'manage_options', 'child-submenu-handle', 'my_magic_function');


function footer_text_admin_page () {
    echo 'this is where we will edit the variable';
  }

  // mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Footer Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('footer_settings_page.php');
}
}
?>




<?php
function your_function() {
   echo "<style>
   @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
   
.cpyright {
	margin-top: 40px;
}
.bottomFooter {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	width: 100%;
	font-size: 16px;
	text-transform: capitalize;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	transition: all 0.3s ease;
}
.bottomFooter p {
	color: ".get_option('headercolor').";
}
body {
	line-height: 1.5;
}
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
.container {
	max-width: 1170px;
	margin: auto;
}
.row {
	display: flex;
	flex-wrap: wrap;
}
ul {
	list-style: none;
}
.footer {
	background-color: ".get_option('backcolor').";
	padding: 70px 0;
}
.footer-col {
	width: 25%;
	padding: 0 15px;
}
.footer-col h4 {
	font-size: 18px;
	color: ".get_option('textcolor').";
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col ul{
position : relative;
right : 35px;
}
.footer-col p {
	font-size: 16px;
	text-transform: capitalize;
	color: ".get_option('headercolor').";
	text-decoration: none;
	font-weight: 300;
	color: ".get_option('headercolor').";
	display: block;
	transition: all 0.3s ease;
}

.footer-col ul li a {
	font-size: 16px;
	text-transform: capitalize;
	color: ".get_option('headercolor').";
	text-decoration: none;
	font-weight: 300;
	color: ".get_option('headercolor').";
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover {
	color: ".get_option('headercolor').";
	padding-left: 8px;
}
.footer-col .social-links a {
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255, 255, 255, 0.2);
	margin: 0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover {
	color: #24262b;
	background-color: ".get_option('headercolor').";
}

/*responsive*/
@media (max-width: 767px) {
	.footer-col {
		width: 50%;
		margin-bottom: 30px;
	}
}
@media (max-width: 574px) {
	.footer-col {
		width: 100%;
	}
}
		
   </style>
   <footer class='footer'>
  	 <div class='container'>
  	 	<div class='row'>
  	 		<div class='footer-col'>
			   <h4>" . get_option('Aboutheader') . "</h4>
			   <p>
				   " . get_option('aboutText') . "
			   </p>
  	 		</div>
  	 		<div class='footer-col'>
  	 			<h4>" . get_option('Flistheader') . "</h4>
  	 			<ul>
  	 				<li><a href='".get_option('item1url')."'>".get_option('item1')."</a></li>
  	 				<li><a href='".get_option('item2url')."'>".get_option('item2')."</a></li>
  	 				<li><a href='".get_option('item3url')."'>".get_option('item3')."</a></li>
  	 				<li><a href='".get_option('item4url')."'>".get_option('item4')."</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class='footer-col'>
  	 			<h4>" . get_option('secondheader') . "</h4>
  	 			<ul>
				   <li><a href='".get_option('sitem1url')."'>".get_option('sitem1')."</a></li>
				   <li><a href='".get_option('sitem2url')."'>".get_option('sitem2')."</a></li>
				   <li><a href='".get_option('sitem3url')."'>".get_option('sitem3')."</a></li>
				   <li><a href='".get_option('sitem4url')."'>".get_option('sitem4')."</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class='footer-col'>
  	 			<h4>follow us</h4>
  	 			<div class='social-links'>
  	 				<a style='".get_option('styleIcone1')."' href='".get_option('IconURL1')."'><i class='".get_option('Facebook')."'></i></a>
  	 				<a style='".get_option('styleIcone2')."' href='".get_option('IconURL2')."'><i class='".get_option('Twitter')."'></i></a>
  	 				<a style='".get_option('styleIcone3')."' href='".get_option('IconURL3')."'><i class='".get_option('Github')."'></i></a>
  	 				<a style='".get_option('styleIcone4')."' href='".get_option('IconURL4')."'><i class='".get_option('Linkedin')."'></i></a>
					<a style='".get_option('styleIcone5')."' href='".get_option('IconURL5')."'><i class='".get_option('instagram')."'></i></a>
					<a style='".get_option('styleIcone6')."' href='".get_option('IconURL6')."'><i class='".get_option('Gmail')."'></i></a>

  	 			</div>
  	 		</div>
  	 	</div>
		   <div class='row'>
		   <div class='bottomFooter'>
			   <p value='ismail' class='cpyright'>" . get_option('copyright'). "</p>
			   <p class='cpyright'>" . get_option('author') . "</p>
		   </div>
	   </div>
  	 </div>
  </footer>";
}
add_action( 'wp_footer', 'your_function' );
?>




<!-- <div style='color: red;
    font-size: 30px;
    margin: 20px;'>".get_option('footer_text')."</div> -->