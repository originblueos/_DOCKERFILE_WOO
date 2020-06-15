<?php
/* ---------------------------------------------------------------------------
 * Custom Color Styles
 * --------------------------------------------------------------------------- */
if ( ! defined( 'ABSPATH' ) ) exit; ?>
	
	
	/*--------------------------------------------------------------
		Base
	--------------------------------------------------------------*/
	a:hover, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	th,
	.loader,
	.dt-sc-small-separator, .dt-sc-diamond-separator,
	input[type="submit"], button, input[type="reset"], 
	.page-link > span, .page-link a:hover, .post-edit-link:hover, 
	.vc_inline-link:hover { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.page-link > span, .page-link a:hover { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/*----*****---- << Dark Color >> --****--*/
	input[type="submit"]:hover, button:hover, input[type="reset"]:hover { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	
	
	/*--------------------------------------------------------------
		Layout
	--------------------------------------------------------------*/
	
	/*----*****---- << Top Bar >> ----*****----*/
	.top-bar a:hover, .dt-sc-dark-bg .top-bar a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/*----*****---- << Menu icons wrapper >> ----*****----*/
	.menu-icons-wrapper .search a:hover, .menu-icons-wrapper .cart a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.menu-icons-wrapper.rounded-icons .search a span:hover, .menu-icons-wrapper.rounded-icons .cart a span:hover, .menu-icons-wrapper .cart sup, .cart-icon span { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/*----*****---- << Breadcrumb >> ----*****----*/
	.breadcrumb a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/*----*****---- << Footer >> ----*****----*/
	#footer a:hover, #footer .footer-copyright .menu-links li a:hover, #footer .footer-copyright .copyright-left a:hover, #footer .dt-sc-dark-bg .entry-title h4 a:hover, #footer .dt-sc-dark-bg a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/*----*****---- << Header >> ----*****----*/
	.left-header-footer .dt-sc-sociable.filled li a  { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.left-header #toggle-sidebar, .left-header-footer, 
	.overlay-header #trigger-overlay, .overlay .overlay-close { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.overlay-header .dt-sc-dark-bg .overlay { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.9); }
	
	
	/*----*****---- << Menu >> ----*****----*/
	#main-menu ul.menu li a:hover, #main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu ul.menu > li.current-menu-ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-ancestor > a, 
	.header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu li a:hover, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu > ul.menu > li.current_page_item > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu > ul.menu > li.current_page_ancestor > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu > ul.menu > li.current-menu-item > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu > li.current-menu-ancestor > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_item > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_ancestor > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-item > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-ancestor > a, 
	.left-header .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item > a, .left-header .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor > a, .left-header .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item > a, .left-header .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor > a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	#main-menu ul.menu li.menu-item-simple-parent ul li a:hover, #main-menu ul.menu li.menu-item-megamenu-parent:hover > a, #main-menu ul.menu > li.menu-item-simple-parent:hover > a, #main-menu ul.menu li.menu-item-simple-parent ul li:hover > a, 
	.header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu li.menu-item-simple-parent ul li a:hover, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu li.menu-item-megamenu-parent:hover > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu > li.menu-item-simple-parent:hover > a, .header-align-left.fullwidth-menu-header.extended-menu-header #main-menu ul.menu li.menu-item-simple-parent ul li:hover > a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	#main-menu .megamenu-child-container ul.sub-menu > li > ul li a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	#main-menu .megamenu-child-container ul.sub-menu > li.current_page_item > a, #main-menu .megamenu-child-container ul.sub-menu > li.current_page_ancestor > a, #main-menu .megamenu-child-container ul.sub-menu > li.current-menu-item > a, #main-menu .megamenu-child-container ul.sub-menu > li.current-menu-ancestor > a, #main-menu .megamenu-child-container ul.sub-menu > li.current_page_item > span, #main-menu .megamenu-child-container ul.sub-menu > li.current_page_ancestor > span, #main-menu .megamenu-child-container ul.sub-menu > li.current-menu-item > span, #main-menu .megamenu-child-container ul.sub-menu > li.current-menu-ancestor > span { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor > a:before { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.menu-active-with-double-border #main-menu > ul.menu > li.current_page_item > a, .menu-active-with-double-border #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-with-double-border #main-menu > ul.menu > li.current-menu-item > a, .menu-active-with-double-border #main-menu > ul.menu > li.current-menu-ancestor > a { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container { border-bottom-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor > a:before, .left-header .menu-active-highlight #main-menu > ul.menu > li.current_page_item > a, .left-header .menu-active-highlight #main-menu > ul.menu > li.current_page_ancestor > a, .left-header .menu-active-highlight #main-menu > ul.menu > li.current-menu-item > a, .left-header .menu-active-highlight #main-menu > ul.menu > li.current-menu-ancestor > a { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.menu-active-highlight #main-menu > ul.menu > li.current_page_item, .menu-active-highlight #main-menu > ul.menu > li.current_page_ancestor, .menu-active-highlight #main-menu > ul.menu > li.current-menu-item, .menu-active-highlight #main-menu > ul.menu > li.current-menu-ancestor, .menu-active-with-icon #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-with-icon #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-with-icon #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-with-icon #main-menu > ul.menu > li.current-menu-ancestor > a:before, .menu-active-with-icon #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-with-icon #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-with-icon #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-with-icon #main-menu > ul.menu > li.current-menu-ancestor > a:after, .menu-active-border-with-arrow  #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-border-with-arrow  #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-border-with-arrow  #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-border-with-arrow  #main-menu > ul.menu > li.current-menu-ancestor > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-ancestor > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-ancestor > a:after, /* New */ .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.two-color-header .main-header-wrapper:before { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.two-color-header.semi-transparent-header .main-header-wrapper:before, .two-color-header.transparent-header .is-sticky .main-header-wrapper:before { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.7); }
	
	.menu-active-border-with-arrow  #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-border-with-arrow  #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-border-with-arrow  #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-border-with-arrow  #main-menu > ul.menu > li.current-menu-ancestor > a:before { border-bottom-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before { border-top-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	#main-menu .menu-item-widget-area-container .widget ul li > a:hover, #main-menu .megamenu-child-container.dt-sc-dark-bg > ul.sub-menu > li > a:hover, #main-menu .megamenu-child-container.dt-sc-dark-bg ul.sub-menu > li > ul li a:hover, #main-menu .megamenu-child-container.dt-sc-dark-bg ul.sub-menu > li > ul li a:hover .fa, #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget ul li > a:hover, #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget_recent_posts .entry-title h4 a:hover, #main-menu ul li.menu-item-simple-parent.dt-sc-dark-bg ul li a:hover, #main-menu .menu-item-widget-area-container .widget li:hover:before { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/*----*****---- << Mobile Menu >> ----*****----*/
	.dt-menu-toggle { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	
	/*----*****---- << Side Navigation >> ----*****----*/
	ul.side-nav li a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	ul.side-nav li a:hover:before, ul.side-nav > li.current_page_item > a:before, ul.side-nav > li > ul > li.current_page_item > a:before, ul.side-nav > li > ul > li > ul > li.current_page_item > a:before { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	
	/*--------------------------------------------------------------
		Blog
	--------------------------------------------------------------*/
	
	.dt-sc-up-arrow:before { border-bottom-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.entry-meta-data p a:hover, .blog-entry.entry-date-left .entry-date a:hover, .blog-entry .entry-meta a:hover, .blog-entry.entry-date-author-left .entry-date-author .comments:hover, .blog-entry.entry-date-author-left .entry-date-author .comments:hover i, .blog-entry.entry-date-author-left .entry-date-author .entry-author a:hover, .blog-entry.entry-date-author-left .entry-date-author .comments a:hover, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.entry-format a, .blog-entry.blog-medium-style:hover .entry-format a,  .blog-entry.blog-medium-style.dt-blog-medium-highlight.dt-sc-skin-highlight, .blog-entry.blog-medium-style.dt-blog-medium-highlight.dt-sc-skin-highlight .entry-format a, ul.commentlist li .reply a:hover, .post-nav-container .post-next-link a:hover, .post-nav-container .post-prev-link a:hover, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border:hover, .pagination ul li a:hover, .pagination ul li span { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.blog-entry.entry-date-left .entry-date span, .blog-entry.blog-medium-style:hover .entry-format a, ul.commentlist li .reply a:hover, .post-nav-container .post-next-link a:hover, .post-nav-container .post-prev-link a:hover, .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border, .pagination ul li a:hover, .pagination ul li span { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	/*--------------------------------------------------------------
		Portfolio
	--------------------------------------------------------------*/
	
	.portfolio .image-overlay .links a:hover, .portfolio.type7 .image-overlay .links a, .portfolio-categories a:hover, .dt-portfolio-single-slider-wrapper #bx-pager a.active:hover:before, .dt-portfolio-single-slider-wrapper #bx-pager a, .project-details li a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-portfolio-sorting a.active-sort, .dt-sc-portfolio-sorting a:hover, .dt-sc-portfolio-sorting a:hover:before, .dt-sc-portfolio-sorting a:hover:after, .dt-sc-portfolio-sorting a.active-sort:before, .dt-sc-portfolio-sorting a.active-sort:after, .portfolio.type2 .image-overlay-details, .portfolio.type2 .image-overlay .links a:hover, .dt-sc-portfolio-sorting.type2, .dt-sc-portfolio-sorting.type2:before, .portfolio.type6 .image-overlay .links a:hover, .portfolio.type7 .image-overlay-details .categories a:before, .portfolio.type7 .image-overlay .links a:hover:before, .dt-sc-infinite-portfolio-load-more { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-portfolio-sorting a.active-sort, .dt-sc-portfolio-sorting a:hover, .portfolio.type7 .image-overlay .links a:before { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.portfolio .image-overlay { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.9); }
	.portfolio.type4 .image-overlay { background:rgba(255, 228, 1, 0.8); }
	
	.dt-sc-infinite-portfolio-load-more:hover { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }	


	/*--------------------------------------------------------------
		Shortcodes
	--------------------------------------------------------------*/

	/******** ====== Quotes ========********/

	blockquote.type4 > cite { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

		
	/******** ====== Buttons ========********/
	
	.dt-sc-button.filled { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-button.bordered.black:hover, .dt-sc-button.rounded-border.black:hover { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-dark-bg.skin-color .dt-sc-button.fully-rounded-border:hover, 
	.dt-sc-skin-highlight .dt-sc-button.bordered:hover, .dt-sc-skin-highlight .dt-sc-button.rounded-border:hover { color: <?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	/* Dark Color */
	.dt-sc-button.with-icon.icon-right.type1:hover, .dt-sc-button.filled:hover { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	.dt-sc-button.with-shadow.white { box-shadow:3px 3px 0px 0px <?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	
	
	/******** ====== Contact Info ========********/
	
	.dt-sc-contact-info.type3 span  { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-contact-info.type2:hover span, .dt-sc-contact-info.type3, .dt-sc-contact-info.type4 span:after, .dt-sc-contact-info.type4:before, .dt-sc-contact-info.type5 .dt-sc-contact-icon, .dt-sc-contact-info.type7 span:after { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-contact-info.type5:hover, .dt-sc-contact-info.type6 { background-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-contact-info.type2:hover, .dt-sc-contact-info.type4, .last .dt-sc-contact-info.type4 { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	/* Dark Color */
	.dt-sc-contact-info.type5 .dt-sc-contact-icon:before, .dt-sc-contact-info.type5 .dt-sc-contact-icon span.icon-wrapper:before, 
	.dt-sc-contact-info.type5 .dt-sc-contact-icon:after, .dt-sc-contact-info.type5 .dt-sc-contact-icon span.icon-wrapper:after,
	.dt-sc-contact-info.type5 .dt-sc-contact-icon span.icon-wrapper span { border-color:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	
	.dt-sc-contact-info.type4 span:after { box-shadow:5px 0px 0px 0px <?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	

	/* Responsive Skin */
	@media only screen and (max-width: 767px) {
      .dt-sc-contact-info.type4:after { background-color: <?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	  
	}


	/******** ====== Counters ========********/
	
	.dt-sc-counter.type3:hover .icon-wrapper, .dt-sc-counter.type1 .icon-wrapper:before, .dt-sc-counter.type2 .dt-sc-couter-icon-holder, .dt-sc-counter.type5:hover:after, .dt-sc-counter.type6 h4:before, .dt-sc-counter.type6:hover .dt-sc-couter-icon-holder:before, .dt-sc-counter.type3.diamond-square .dt-sc-couter-icon-holder .icon-wrapper:before, .dt-sc-counter.type4:hover .dt-sc-couter-icon-holder { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; } 
	
	.dt-sc-counter.type3.diamond-square h4, .dt-sc-counter.type6:hover h4 { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-counter.type3.diamond-square, .dt-sc-counter.type5:hover:before, .dt-sc-counter.type5:hover:after, .dt-sc-counter.type6, .dt-sc-counter.type6 .dt-sc-couter-icon-holder:before, .dt-sc-counter.type3 .icon-wrapper:before { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark Color */
	.dt-sc-counter.type2:hover .dt-sc-couter-icon-holder { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	.dt-sc-counter.type6 .dt-sc-couter-icon-holder:before { box-shadow:5px 1px 0px 0px <?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	
	/* Responsive Skin */
	@media only screen and (max-width: 767px) {
		.dt-sc-counter.type6.last h4::before, .dt-sc-counter.type6 h4::after { background-color: <?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	}

	
	/******** ====== Icon Boxes ========********/
	
	.dt-sc-icon-box.type6 .icon-wrapper, .dt-sc-icon-box.type1 .icon-content h4:before, .dt-sc-icon-box.type3 .icon-wrapper span, .dt-sc-icon-box.type5:hover .icon-wrapper:before, .dt-sc-icon-box.type7 .icon-wrapper span, .dt-sc-icon-box.type5.rounded:hover .icon-wrapper, .dt-sc-icon-box.type10:hover .icon-wrapper:before, .dt-sc-icon-box.type10 .icon-content h4:before, .dt-sc-icon-box.type11:before, .dt-sc-icon-box.type5.alter .icon-wrapper:before, .dt-sc-icon-box.type3.dt-sc-diamond:hover .icon-wrapper:after, .dt-sc-icon-box.type5.rounded-skin .icon-wrapper, .dt-sc-icon-box.type13:hover, .dt-sc-icon-box.type12, .dt-sc-icon-box.type14:hover { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-icon-box.type1 .icon-wrapper .icon, .dt-sc-icon-box.type2 .icon-wrapper .icon, .dt-sc-icon-box.type4 .icon-wrapper span, .dt-sc-icon-box.type5:hover .icon-content h4 a, .dt-sc-icon-box.type5.no-icon-bg .icon-wrapper span, .dt-sc-icon-box.type5.no-icon-bg:hover .icon-wrapper span, .dt-sc-icon-box.type10:hover .icon-content h4, .dt-sc-icon-box.type10 .icon-wrapper span, .dt-sc-icon-box.type13 .icon-content h4, .dt-sc-icon-box.type14 .icon-content h4 { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-icon-box.type5.no-icon .icon-content h4, .dt-sc-icon-box.type5.no-icon, .dt-sc-icon-box.type10 .icon-wrapper:before, .dt-sc-icon-box.type10, .dt-sc-icon-box.type3.dt-sc-diamond:hover .icon-wrapper:after { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark Color */
	.dt-sc-icon-box.type3:hover .icon-wrapper span { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	.dt-sc-icon-box.type10 .icon-wrapper:before { box-shadow:5px 0px 0px 0px <?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	.dt-sc-icon-box.type10:hover .icon-wrapper:before { box-shadow:7px 0px 0px 0px <?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	
	/* Light Color */
	.dt-sc-icon-box.type10 .icon-wrapper:after { background:<?php classymissy_opts_show('custom-light', '#2fd9c8');?>; }
	
	/* Responsive Skin */
	@media only screen and (max-width: 767px) {		
      /* Default */
      .dt-sc-icon-box.type10 .icon-content h4:after { background-color: <?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	}

	/******** ====== Image Caption ========********/
	
	.dt-sc-image-caption.type2:hover .dt-sc-image-content { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.9); }	
	.dt-sc-image-caption .dt-sc-image-wrapper .icon-wrapper:before { border-bottom-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	
	.dt-sc-image-caption.type3 .dt-sc-image-content h3, .dt-sc-image-caption.type8:hover .dt-sc-image-content h3 a:hover, .dt-sc-image-with-caption h3 a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	
	.dt-sc-image-caption.type4:hover .dt-sc-button, .dt-sc-image-caption.type8 .dt-sc-image-content:before { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	 
	.dt-sc-image-caption.type2 .dt-sc-image-content, .dt-sc-image-caption.type4, .dt-sc-image-caption.type4:hover .dt-sc-button { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	 /* Dark Color */
	 .dt-sc-image-caption.type2:hover .dt-sc-image-content { border-color:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }	

	
	/******** ====== Event Caption ========********/
		
	.dt-sc-event-image-caption .dt-sc-image-content h3 { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	
	.dt-sc-event-image-caption:hover { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	
	.dt-sc-event-image-caption:hover .dt-sc-image-content:before { border-left-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	
	/******** ====== Newsletter ========********/
	
	.dt-sc-newsletter-section.type1 h2:before, .dt-sc-newsletter-section.type1 h2:after { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="text"] { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark Color */
	.dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="submit"]:hover { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	.dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="email"] { border-color:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }


	/******** ====== Pricing Tables ========********/
	
	.dt-sc-pr-tb-col.type2 .dt-sc-buy-now a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-pr-tb-col.minimal:hover .dt-sc-price, .dt-sc-pr-tb-col.minimal.selected .dt-sc-price, .dt-sc-pr-tb-col:hover .dt-sc-buy-now a, .dt-sc-pr-tb-col.selected .dt-sc-buy-now a, .dt-sc-pr-tb-col.minimal:hover .icon-wrapper:before, .dt-sc-pr-tb-col.minimal.selected .icon-wrapper:before, .dt-sc-pr-tb-col.type1:hover .dt-sc-tb-header, .dt-sc-pr-tb-col.type1.selected .dt-sc-tb-header, .dt-sc-pr-tb-col.type2 .dt-sc-tb-header .dt-sc-tb-title:before, .dt-sc-pr-tb-col.type2 .dt-sc-tb-content:before, .dt-sc-pr-tb-col.type2 .dt-sc-tb-content li .highlight, .dt-sc-pr-tb-col.type2:hover .dt-sc-price:before, .dt-sc-pr-tb-col.type2.selected .dt-sc-price:before, .dt-sc-pr-tb-col.type2:hover .dt-sc-buy-now a { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-pr-tb-col.type2 .dt-sc-tb-header:before { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-pr-tb-col.type2 .dt-sc-tb-content:after { border-top-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark Color */
	.dt-sc-pr-tb-col.type2 .dt-sc-tb-header:before { box-shadow:5px 0px 0px 0px <?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	.dt-sc-pr-tb-col.type2 .dt-sc-buy-now a { box-shadow:3px 3px 0px 0px <?php classymissy_opts_show('custom-dark', '#19897e');?>; }

	
	/******** ====== Social Icons ========********/
		
	.dt-sc-sociable.diamond-square-border li:hover a, .dt-sc-sociable.hexagon-border li:hover a, .dt-sc-sociable.hexagon-with-border li:hover a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
		
	.dt-sc-sociable.rounded-border li a:hover, .dt-sc-dark-bg .dt-sc-sociable.rounded-border li a:hover, .dt-sc-dark-bg .dt-sc-sociable.square-border li a:hover, .dt-sc-sociable.diamond-square-border li:hover  { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-sociable.hexagon-with-border li { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark Color */
	.dt-sc-sociable.hexagon-with-border li, .dt-sc-sociable.hexagon-with-border li:before, .dt-sc-sociable.hexagon-with-border li:after { border-color:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }


	/******** ====== Tabs ========********/
	
	ul.dt-sc-tabs-horizontal > li > a:hover, ul.dt-sc-tabs-horizontal > li > a.current, ul.dt-sc-tabs-horizontal-frame > li > a:hover, ul.dt-sc-tabs-horizontal-frame > li > a.current, 
	ul.dt-sc-tabs-vertical > li > a:hover, ul.dt-sc-tabs-vertical > li > a.current, ul.dt-sc-tabs-vertical-frame > li > a:hover, ul.dt-sc-tabs-vertical-frame > li.current a, .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	 .type8 ul.dt-sc-tabs-horizontal-frame > li > a.current, .type8 ul.dt-sc-tabs-horizontal-frame > li > a:hover, .dt-sc-tabs-horizontal-frame-container.type4 ul.dt-sc-tabs-horizontal-frame > li > a.current > span:after, .dt-sc-tabs-horizontal-frame-container.type5 ul.dt-sc-tabs-horizontal-frame > li > a.current, .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame > li > a, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a:before, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a:after { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	 ul.dt-sc-tabs-horizontal > li > a.current, ul.dt-sc-tabs-vertical > li > a.current { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	 .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current:before, .type7 ul.dt-sc-tabs-horizontal-frame > li > a.current:after { border-top-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	.dt-sc-tabs-vertical-frame-container.type2 ul.dt-sc-tabs-vertical-frame > li > a.current:before, .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame > li > a.current { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.type3 .dt-sc-toggle-frame .active ~ .dt-sc-toggle-content, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current:before { border-left-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-tabs-horizontal-frame-container.type3 ul.dt-sc-tabs-horizontal-frame > li > a.current, .dt-sc-tabs-horizontal-frame-container.type4 ul.dt-sc-tabs-horizontal-frame > li > a.current { border-bottom-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	
	.dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a:hover, .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame > li > a.current { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-skin-highlight .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame > li > a:before { border-top-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/******** ====== Team ========********/
	
	.dt-sc-team.type2 .dt-sc-team-social.rounded-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.rounded-square li a:hover, .dt-sc-team.type2 .dt-sc-team-social.square-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.hexagon-border li a:hover, .dt-sc-team.type2 .dt-sc-team-social.diamond-square-border li a:hover, .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social.rounded-square li a, .dt-sc-team.rounded .dt-sc-team-details .dt-sc-team-social li a:hover, .dt-sc-team.rounded.team_rounded_border:hover .dt-sc-team-details h4 { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-team .dt-sc-team-social.diamond-square-border li:hover, .dt-sc-team-social.hexagon-border li:hover, .dt-sc-team-social.hexagon-border li:hover:before, .dt-sc-team-social.hexagon-border li:hover:after { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-team-social.hexagon-border li:hover, .dt-sc-team .dt-sc-team-social.diamond-square-border li:hover, .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social.rounded-square li:hover a, .dt-sc-team-social.rounded-border li a:hover, .dt-sc-team-social.rounded-square li a, .dt-sc-team.hide-social-show-on-hover:hover .dt-sc-team-details, .dt-sc-team-social.square-border li a:hover, .dt-sc-team.rounded:hover .dt-sc-team-thumb:after, .dt-sc-team.hide-social-role-show-on-hover:hover .dt-sc-team-details, .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social li:hover, .dt-sc-team.simple:hover .dt-sc-team-details { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-team.type2 .dt-sc-team-thumb .dt-sc-team-thumb-overlay { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.9); }
	
	.dt-sc-team-social.rounded-border li a:hover, .dt-sc-team-social.square-border li a:hover, .dt-sc-team.team_rounded_border.rounded:hover .dt-sc-team-thumb:before { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark Color */
	.dt-sc-team-social.rounded-square li a:hover { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }


	/******** ====== Testimonials ========********/
	
	.dt-sc-testimonial-special-wrapper:after, .dt-sc-testimonial.type4 .dt-sc-testimonial-author cite, .dt-sc-testimonial.type5 .dt-sc-testimonial-author cite, .dt-sc-testimonial.type8 .dt-sc-testimonial-quote blockquote q:before, .dt-sc-testimonial.type8 .dt-sc-testimonial-quote blockquote q:after, .dt-sc-testimonial.type7 .dt-sc-testimonial-quote blockquote cite { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-testimonial-images li.selected div, .dt-sc-testimonial.type5 .dt-sc-testimonial-quote { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark Color */
	.dt-sc-skin-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:before, .dt-sc-skin-highlight .dt-sc-testimonial.type6:after { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	
	
	
	/******** ====== Timeline ========********/
		
	 .dt-sc-timeline .dt-sc-timeline-content h2 span, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline-content:hover h3, .dt-sc-timeline-section.type4 .dt-sc-timeline:hover .dt-sc-timeline-content h2 { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	 
	 .dt-sc-hr-timeline-section.type1:before, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline .dt-sc-hr-timeline-content:after, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline-wrapper:before, .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline-wrapper:after, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline-content h3:before, .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline:hover .dt-sc-hr-timeline-thumb:before, .dt-sc-timeline-section.type2:before, .dt-sc-timeline-section.type3 .dt-sc-timeline .dt-sc-timeline-content h2:before, .dt-sc-timeline-section.type4 .dt-sc-timeline .dt-sc-timeline-content h2:before, .dt-sc-timeline-section.type4 .dt-sc-timeline:hover .dt-sc-timeline-thumb:before { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	 .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline .dt-sc-hr-timeline-content:before, .dt-sc-timeline-section.type2 .dt-sc-timeline-image-wrapper, .dt-sc-timeline-section.type2 .dt-sc-timeline .dt-sc-timeline-content:after, .dt-sc-timeline-section.type2:after { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	 .dt-sc-timeline-section.type4 .dt-sc-timeline-thumb-overlay { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.7); }
	 
	 @media only screen and (max-width: 767px) {                  
      .dt-sc-timeline-section.type2, .dt-sc-timeline-section.type2::before { border-color: <?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	}


	/******** ====== Toggles & Accordions ========********/
		
	.dt-sc-toggle-frame-set > .dt-sc-toggle-accordion.active > a, .dt-sc-toggle-group-set .dt-sc-toggle.active > a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-toggle-frame-set.type2 > h5.dt-sc-toggle-accordion.active:after { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active a, .dt-sc-toggle-frame h5.dt-sc-toggle.active a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active a:before, h5.dt-sc-toggle-accordion.active a:before, .dt-sc-toggle-frame h5.dt-sc-toggle.active a:before, h5.dt-sc-toggle.active a:before, .type2 .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active, .type2 .dt-sc-toggle-frame h5.dt-sc-toggle.active { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.type2 .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active, .type2 .dt-sc-toggle-frame h5.dt-sc-toggle.active { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; } 


	/******** ====== Headings / Title Styles  ========********/
		
	.dt-sc-title.with-sub-title h3, .dt-sc-title.script-with-sub-title h2, .dt-sc-title.with-two-color-stripe h2 { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-title.with-two-color-bg:after, .dt-sc-triangle-title:after, .dt-sc-title.with-right-border-decor:after, .dt-sc-title.with-right-border-decor:before, .dt-sc-title.with-boxed, .dt-sc-titled-box h6.dt-sc-titled-box-title, .dt-sc-title.split-title .split-title-content:before, .dt-sc-title.split-title .split-title-content * { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-title.with-right-border-decor h2:before { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Light Color */
	.dt-sc-triangle-title:before { background:<?php classymissy_opts_show('custom-light', '#2fd9c8');?>; }


	/******** ====== Hexagon Image Content ========********/

	.dt-sc-hexagon-title h2 span { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	
	.dt-sc-hexagon-image span:before { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.9); }	
	.dt-sc-hexagons li .dt-sc-hexagon-overlay, .dt-sc-content-with-hexagon-shape, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-hexagons li:hover, .dt-sc-hexagons li:hover:before, .dt-sc-hexagons li:hover:after, .dt-sc-hexagons li, .dt-sc-hexagons li:before, .dt-sc-hexagons li .dt-sc-hexagon-overlay:before, .dt-sc-hexagons li:after, .dt-sc-hexagons li .dt-sc-hexagon-overlay:after, .dt-sc-single-hexagon:hover, .dt-sc-single-hexagon:hover:before, .dt-sc-single-hexagon:hover:after, .dt-sc-single-hexagon, .dt-sc-single-hexagon:before, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay:before, .dt-sc-single-hexagon:after, .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay:after { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-content-with-hexagon-shape:after { border-top-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-content-with-hexagon-shape:before { border-bottom-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/******** ====== Triangle Content Wrapper ========********/

	.dt-sc-triangle-wrapper.alter:hover .dt-sc-triangle-content:before { border-bottom-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-triangle-wrapper:hover .dt-sc-triangle-content:before { border-top-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/******** ====== Available Domains & Search ========********/
	
	.available-domains li span { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.available-domains li .tdl:before, .available-domains li:hover .dt-sc-button { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	.domain-search-container .domain-search-form { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/******** ====== Popular Procedures ========********/
	
	.dt-sc-popular-procedures .details .duration, .dt-sc-popular-procedures .details .price { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	
	/******** ====== Keynote Speakers ========********/
	
	.dt-sc-keynote-speakers .dt-sc-speakers-thumb .dt-sc-speakers-thumb-overlay { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.9); }

	
	/******** ====== Training ========********/
	
	.dt-sc-training-details h6, .dt-sc-training-details h6, .dt-sc-trainers .dt-sc-trainers-title h6 { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-training-details-overlay, .dt-sc-trainers .dt-sc-sociable { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.dt-sc-trainers:hover, .dt-sc-trainers:hover .dt-sc-trainers-title { border-color: <?php classymissy_opts_show('custom-default', '#1d9f92');?>; }  

	/* Light */
	.dt-sc-training-details-overlay h6, .dt-sc-training-details-overlay .price, .dt-sc-training-details .dt-sc-training-details-overlay h6 { color: <?php classymissy_opts_show('custom-light', '#2fd9c8');?>; }   

	/* Dark */
	.dt-sc-training-details { background: <?php classymissy_opts_show('custom-dark', '#19897e');?>; }   
	.dt-sc-training-thumb-overlay { background: rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-dark', '#19897e'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.8); } 


	/******** ====== Video Manager ========********/
	
	.dt-sc-video-wrapper .video-overlay-inner a, .dt-sc-video-item:hover .dt-sc-vitem-detail, .dt-sc-video-item.active .dt-sc-vitem-detail, .type2 .dt-sc-video-item:hover, .type2 .dt-sc-video-item.active, .nicescroll-rails.dt-sc-skin { background-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark Color */
	.dt-sc-video-wrapper .video-overlay-inner a:hover { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }


	/******** ====== Carousel ========********/

	.carousel-arrows a:hover, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a:hover, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active:before, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active:hover:before, .vc_custom_carousel .slick-slider .slick-dots, .vc_custom_carousel .slick-slider:before { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	.carousel-arrows a:hover, .dt-sc-images-wrapper .carousel-arrows a:hover, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a:hover, .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/*--------------------------------------------------------------
		Coming Soon
	--------------------------------------------------------------*/

	/*----*****---- << Default >> ----*****----*/
	.under-construction.type4 .wpb_wrapper > h2 span, .under-construction.type4 .read-more i, .under-construction.type4 .wpb_wrapper >  h4:after, .under-construction.type4 .wpb_wrapper > h4:before, .under-construction.type1 .read-more span.fa, .under-construction.type1 .read-more a:hover, .under-construction.type2 .counter-icon-wrapper .dt-sc-counter-number, .under-construction.type2 h2, .under-construction.type2 .dt-sc-counter-wrapper h3, .under-construction.type2 .mailchimp-newsletter h3,  .under-construction.type7 h2, .under-construction.type7 .mailchimp-newsletter h3, .under-construction.type3 p, .under-construction.type5 h2 span, .under-construction.type5 .dt-sc-counter-number, .under-construction.type5 footer .dt-sc-team-social li:hover a, .under-construction.type5 input[type="email"], .under-construction.type7 .aligncenter .wpb_text_column h2 { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.under-construction.type4 .dt-sc-counter-wrapper, .under-construction.type1 .dt-sc-newsletter-section form input[type="submit"], .under-construction.type1 .dt-sc-counter-wrapper .counter-icon-wrapper:before, .under-construction.type2 .dt-sc-sociable > li:hover a, .under-construction.type7 .dt-sc-sociable > li:hover a, .under-construction.type3 .dt-sc-newsletter-section form input[type="submit"], .under-construction.type3 .dt-sc-sociable > li:hover a, .under-construction.type7 .dt-sc-counter-wrapper, .under-construction.type7 .dt-sc-newsletter-section form input[type="submit"] { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.under-construction.type3 .dt-sc-sociable > li:hover a { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	
	
	
	/*--------------------------------------------------------------
		404 - Not-Found
	--------------------------------------------------------------*/

	/* Default */
	.error404 .type2 h2, .error404 .type8 h2, .error404 .type8 .dt-go-back:hover i { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.error404 .type2 a.dt-sc-back, .error404 .type4 .error-box, .error404 .type4 .dt-sc-newsletter-section input[type="submit"], .error404 .type8 .dt-go-back { background: <?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	/* Dark */
	.error404 .type2 a.dt-sc-back:hover, .error404 .type4 .dt-sc-newsletter-section input[type="submit"]:hover { background:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }

	
	/*--------------------------------------------------------------
		Custom Class
	--------------------------------------------------------------*/
	.business-contact-social li a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	.dt-sc-text-with-icon span, .dt-flip-hover-promo-box .ifb-back .flip_link a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-skin-highlight, .dt-sc-skin-highlight.extend-bg-fullwidth-left:after, .dt-sc-skin-highlight.extend-bg-fullwidth-right:after,
	.diamond-narrow-square-border li:hover:before, 
	.dt-sc-readmore-plus-icon:hover:before, .dt-sc-readmore-plus-icon:hover:after, 
	.dt-sc-contact-details-on-map .map-switch-icon { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-text-with-icon.border-bottom, .dt-sc-text-with-icon.border-right, 
	.diamond-narrow-square-border li:before { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/*--------------------------------------------------------------
		WooCommerce
	--------------------------------------------------------------*/

	/* Default */
	.woocommerce .shop_table th, .woocommerce-page .shop_table th { background-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	.woocommerce ul.products li.product .featured-tag, .woocommerce ul.products li.product:hover .featured-tag, .woocommerce.single-product .featured-tag { background-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	.woocommerce ul.products li.product .featured-tag:after, .woocommerce ul.products li.product:hover .featured-tag:after, .woocommerce.single-product .featured-tag:after, .woocommerce .color-swatch-holder.selected { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }

	.woocommerce ul.products li.product:hover .product-details > a, .woocommerce ul.products li.product .price, .woocommerce p.price, .woocommerce span.price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce .product-price, .woocommerce .single-product-price, .woocommerce ul.products li.product .price ins, .woocommerce p.price ins, .woocommerce span.price ins, .woocommerce div.product p.price ins, .woocommerce div.product span.price ins, .woocommerce .product-price ins, .woocommerce .single-product-price ins, .woocommerce ul.products li.product .price ins .amount, .woocommerce p.price ins .amount, .woocommerce span.price ins .amount, .woocommerce div.product p.price ins .amount, .woocommerce div.product span.price ins .amount, .woocommerce .product-price ins .amount, .woocommerce .single-product-price ins .amount, .woocommerce-MyAccount-navigation ul > li.is-active > a, .woocommerce-checkout #payment ul.payment_methods li a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/*--------------------------------------------------------------
		BbPress
	--------------------------------------------------------------*/

	.bbp-pagination-links a:hover, .bbp-pagination-links span.current { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	#bbpress-forums li.bbp-header, .bbp-submit-wrapper #bbp_topic_submit, .bbp-reply-form #bbp_reply_submit, .bbp-pagination-links a:hover, .bbp-pagination-links span.current, #bbpress-forums #subscription-toggle a.subscription-toggle { background-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	#bbpress-forums #subscription-toggle a.subscription-toggle:hover, .bbp-submit-wrapper #bbp_topic_submit:hover { background-color:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	
	.bbp-forums .bbp-body .bbp-forum-info::before { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/*--------------------------------------------------------------
		BuddyPress
	--------------------------------------------------------------*/
	
	#buddypress div.pagination .pagination-links span, #buddypress div.pagination .pagination-links a:hover, #buddypress #members-dir-list ul li:hover { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	#buddypress div.pagination .pagination-links span, #buddypress div.pagination .pagination-links a:hover, #buddypress #group-create-body #group-creation-previous, #item-header-content #item-meta > #item-buttons .group-button, #buddypress div#subnav.item-list-tabs ul li.feed a:hover, #buddypress div.activity-meta a:hover, #buddypress div.item-list-tabs ul li.selected a span, #buddypress .activity-list li.load-more a, #buddypress .activity-list li.load-newest a { background-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	#item-header-content #item-meta > #item-buttons .group-button:hover, #buddypress .activity-list li.load-more a:hover, #buddypress .activity-list li.load-newest a:hover { background-color:<?php classymissy_opts_show('custom-dark', '#19897e');?>; }
	
	#members-list.item-list.single-line li h5 span.small a.button, #buddypress div.item-list-tabs ul li.current a, #buddypress #group-create-tabs ul li.current a, #buddypress a.bp-primary-action:hover span, #buddypress div.item-list-tabs ul li.selected a { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }


	/*--------------------------------------------------------------
		Widgets
	--------------------------------------------------------------*/
	#footer .dt-sc-dark-bg .recent-posts-widget li .entry-meta a:hover, .widget #wp-calendar td a:hover, .dt-sc-dark-bg .widget #wp-calendar td a:hover, .secondary-sidebar .widget ul li > a:hover,  .secondary-sidebar .type15 .widget.widget_recent_reviews ul li .reviewer, .secondary-sidebar .type15 .widget.widget_top_rated_products ul li .amount.amount,#footer .widget #bp-login-widget-form span.bp-login-widget-register-link > a, #footer .dt-sc-dark-bg .widget #bp-login-widget-form span.bp-login-widget-register-link > a,
	/** Woo Widget */ .woo-type17 .widget.woocommerce ul li:hover:before { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	.tagcloud a:hover, .dt-sc-dark-bg .tagcloud a:hover, .widgettitle:before, .widget.widget_categories ul li > a:hover span, .widget.widget_archive ul li > a:hover span, #footer .dt-sc-dark-bg .widget.widget_categories ul li > a:hover span, #footer .dt-sc-dark-bg .widget.widget_archive ul li > a:hover span, .dt-sc-dark-bg .widget.widget_categories ul li > a:hover span, .secondary-sidebar .type17 .widget-title-wrapper .widget-title-content h2, .widget-title-content h3.widgettitle, .secondary-sidebar .type17 .widget-title-wrapper .widget-title-content:before { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	.tagcloud a:hover, .dt-sc-dark-bg .tagcloud a:hover { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	 
	.recent-portfolio-widget ul li a:before { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.9); }
	 
	/* Sidebar Types */
	.secondary-sidebar .type5 .widgettitle { border-color:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.5); }
	.secondary-sidebar .type3 .widgettitle, .secondary-sidebar .type6 .widgettitle, .secondary-sidebar .type13 .widgettitle:before, .secondary-sidebar .type16 .widgettitle { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.secondary-sidebar .type12 .widgettitle { background:rgba(<?php 
	$rgbcolor = classymissy_hex2rgb(classymissy_opts_get('custom-default', '#1d9f92'));
	$rgbcolor = implode(',', $rgbcolor);
	echo esc_attr($rgbcolor); ?>, 0.2); }

	.secondary-sidebar .type14 .widgettitle { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
		
	/* Additional Plugin Widgets */
	.widget.buddypress div.item-options a:hover, .widget.buddypress div.item-options a.selected, #footer .footer-widgets.dt-sc-dark-bg .widget.buddypress div.item-options a.selected, .widget.widget_bp_core_members_widget div.item .item-title a:hover, .widget.buddypress .bp-login-widget-user-links > div.bp-login-widget-user-link a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.widget.tribe-events-countdown-widget .tribe-countdown-text a:hover { color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td { border-color:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present, .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today, .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover, .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }
	
	.dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today, .dt-sc-dark-bg .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover, .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover { background:<?php classymissy_opts_show('custom-default', '#1d9f92');?>; }	