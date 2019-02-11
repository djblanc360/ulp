<?php
/**
 * @package Quick Response code
 * @version 1.0
 */
/*
Plugin Name: ScriptHere's Quick Response Code generator for WordPress Posts.
Plugin URI: https://github.com/blogscripthere/script_quick_response_codes
Description: Simple Quick Response Code generator for WordPress content posts and pages.
Author: Narendra Padala
Author URI: https://in.linkedin.com/in/narendrapadala
Text Domain: shqrc
Version: 1.0
Last Updated: 30/12/2017
*/
class QRScript {
    /**
     * QR code min size 100 and Max size 800
     */
    var $size = 250; //default 250
    /**
     * API supports different encodings like Shift_JIS,'ISO-8859-1 and 'UTF-8'
     */
    var $output_encoding = 'UTF-8'; //default UTF-8
    /**
     * API supports different levels of debug like L,M,Q and H
     */
    var $debug_level = 'L'; //default L
    /**
     * The width of the white border around the data portion of the code.
     * The default value is 4.
     */
    var $margin = '4'; //default 4
    /**
     * By default use google chart api, it was deprecated so alternatively we can use goqr.me api
     * GoQR url : http://goqr.me/api/
     * GoogleChart url : https://developers.google.com/chart/infographics/docs/qr_codes
     * API Options - google or goqr
     */
    var $choose_api = 'google';
    /**
     * GoQR api url
     */
    var $goqr_url = 'https://api.qrserver.com/v1/create-qr-code/';
    /**
     * GoogleChart api url
     */
    var $google_api = 'https://chart.googleapis.com/chart';
    /**
     * Constructor.
     */
    public function __construct() {
        /**
         * Adding QR Code Permalink Meta Box at post or page
         */
        add_action('add_meta_boxes',array($this, 'sh_qr_register_meta_boxes'));
        /**
         * Adding QR Code Website Link Widget at dashboard
         */
        add_action( 'wp_dashboard_setup',array($this, 'sh_add_dashboard_qrcode_widget') );
        /**
         * Adding QR Code Post Link short code with arguments size and link
         */
        add_shortcode( 'qrlink', array( $this, 'sh_get_qrcode_postlink' ) );
        /**
         * Adding QR Code for Post Content enclosed short code with arguments size
         */
        add_shortcode( 'qrcontent', array( $this, 'sh_get_qrcode_content' ) );
        /**
         * Adding QR Code for contact via email short code with arguments size,to,sub and body
         */
        add_shortcode( 'qrcontact', array( $this, 'sh_get_qrcode_email' ) );
        /**
         * Adding QR Code for contact via sms short code with arguments size,to and msg
         */
        add_shortcode( 'qrmessage', array( $this, 'sh_get_qrcode_sms' ) );
    }
    /**
     * Register meta box(es).
     */
    function sh_qr_register_meta_boxes() {
        //set QR code Permalink
        add_meta_box('qrcode-meta-box-id', __('QR Code Permalink', 'shqrc'), array( $this, 'sh_qr_display_callback'  ) , array('post', 'page'), 'side', 'high');
    }
    /**
     * Add a Website Link QR Code widget to the dashboard.
     *
     * This function is hooked into the 'wp_dashboard_setup' action below.
     */
    function sh_add_dashboard_qrcode_widget() {
        wp_add_dashboard_widget(
            'qrcode_dashboard_widget',
            'Website Link QR Code',
            array( $this, 'sh_qr_display_dashboard_qrcode_widget_callback'  )
        );
    }
    /**
     * Create the function to output the contents of our Dashboard Widget.
     */
    function sh_qr_display_dashboard_qrcode_widget_callback() {
        // Display QR code for website link
        echo "<img src='".$this->sh_get_qrcode(0,site_url())."' />";
    }
    /**
     * Meta box display callback.
     *
     * @param WP_Post $post Current post object - QR Code Permalink .
     */
    function sh_qr_display_callback($post) {
        //get permalink
        $permalink = get_permalink($post->ID);
        //check
        if ($permalink != " ") {
            // Display QR code for post permalink
            echo "<img src='".$this->sh_get_qrcode(0,$permalink)."' />";
        } else {
            echo "Please save and refresh the post to get QR code.";
        }
    }
    /**
     * get api endpoint
     */
    function sh_get_api_endpoint($api=" "){
        //check
        if($api !=" "){
            $this->choose_api = $api;
        }
        //check
        if ($this->choose_api == 'google') {
            //return
            return $this->google_api;
        } else {
            //return
            return $this->goqr_url;
        }
    }
    /**
     * get qr code image endpoint
     */
    function sh_get_qr_image_size($size = 0){
        //check
        if(!$size) {
            $size = $this->size;
        }
        //check
        if ($this->choose_api == 'google') {
            //return
            return "chs={$size}x{$size}";
        } else {
            //return
            return "size={$size}x{$size}";
        }
    }
    /**
     * get qr code data
     */
    function sh_get_qr_code_data($data){
        //check
        if ($this->choose_api == 'google') {
            //return
            return "chl=".urlencode($data);
        } else {
            //return
            return "data=".urlencode($data);
        }
    }
    /**
     * get qr code data
     */
    function sh_get_qrcode($size,$data){
        //get end point
        $qr_src = add_query_arg(
            array(  "cht"=>"qr",
                "choe"=>$this->output_encoding,
                "chld"=>$this->debug_level."|".$this->margin),$this->sh_get_api_endpoint());
        //set
        $qr_src .="&".$this->sh_get_qr_image_size($size)."&".$this->sh_get_qr_code_data($data);
        //return url
        return $qr_src;
    }
    /**
     * get qr code postlink shortcode data
     */
    function sh_get_qrcode_postlink($atts) {
            global $post;
            //get size from short code argument size
            $size = (isset($atts['size'])) ? $atts['size'] : 0;
            //get postlink from short code argument postlink
            $postlink = (isset($atts['postlink'])) ? $atts['postlink'] : get_permalink($post->ID);
            // Display QR code for post permalink
            return "<img src='".$this->sh_get_qrcode($size,$postlink)."' />";
    }
    /**
     * get qr code content enclosed shortcode data
     */
    function sh_get_qrcode_content($atts = [], $content = null){
        //get size from short code argument size
        $size = (isset($atts['size'])) ? $atts['size'] : 0;
        // Display QR code for post permalink
        return "<img src='".$this->sh_get_qrcode($size,$content)."' />";
    }
    /**
     * get qr code content email shortcode data
     */
    function sh_get_qrcode_email($atts){
        //get size from short code argument size
        $size = (isset($atts['size'])) ? $atts['size'] : 0;
        //to email address
        $to = (isset($atts['to'])) ? $atts['to'] : get_option( 'admin_email' );
        //email subject
        $sub = (isset($atts['sub'])) ? $atts['sub'] : "Enquiry";
        //email body
        $body = (isset($atts['body'])) ? $atts['body'] : "Type your message here.";
        //set email content
        $content = "MATMSG:TO:{$to};SUB:{$sub};BODY:{$body};";
        // Display QR code for contact email shortcode data
        return "<img src='".$this->sh_get_qrcode($size,$content)."' />";
    }
    /**
    * get qr code content sms shortcode data
    */
    function sh_get_qrcode_sms($atts){
        //get size from short code argument size
        $size = (isset($atts['size'])) ? $atts['size'] : 0;
        //to mobile number default i set dummy admin phone number modify based on your need here
        $mobile = (isset($atts['to'])) ? $atts['to'] : "+91959012345";
        //email body
        $msg = (isset($atts['msg'])) ? $atts['msg'] : "Type your txt message here.";
        //set sms content
        $content = "SMSTO:{$mobile}:{$msg}";
        // Display QR code for sms shortcode data
        return "<img src='".$this->sh_get_qrcode($size,$content)."' />";
    }
}
//init
$obj = new QRScript ();
