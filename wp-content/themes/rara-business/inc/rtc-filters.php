<?php
/**
 * Filter to modify functionality of RTC plugin.
 *
 * @package Rara_Business
 */

if( ! function_exists( 'rara_business_cta_section_bgcolor_filter' ) ){
	/**
	 * Filter to add bg color of cta section widget
	 */    
	function rara_business_cta_section_bgcolor_filter(){
		return '#0aa3f3';
	}
}
add_filter( 'rrtc_cta_bg_color', 'rara_business_cta_section_bgcolor_filter' );

if( ! function_exists( 'rara_business_cta_btn_alignment_filter' ) ){
	/**
	 * Filter to add btn alignment of cta section widget
	 */    
	function rara_business_cta_btn_alignment_filter(){
		return 'centered';
	}
}
add_filter( 'rrtc_cta_btn_alignment', 'rara_business_cta_btn_alignment_filter' );

if( ! function_exists( 'rara_business_team_member_image_size' ) ){
	/**
	 * Filter to define image size in team member section widget
	 */    
	function rara_business_team_member_image_size(){
		return 'rara-business-team';
	}
}
add_filter( 'tmw_icon_img_size', 'rara_business_team_member_image_size' );
