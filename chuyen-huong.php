<?php /*Template Name: Chuyển hướng*/ ?>
<!-- tắt index trang này -->
<meta name="robots" content="noindex, follow">
<?php
$redirect_to = !empty($_GET['url'])
? trim(strip_tags(stripslashes($_GET['url'])))
: '';
$wait_time = 30000; // thời gian tự động chuyển hướng (tính bằng millisecond - ở đây là 7000 ml = 7s).
$wait_seconds = $wait_time / 1000;
add_action('wp_head', 'redirect_to_no_index', 99);
function redirect_to_no_index()
{
?>
<?php
}
add_action('wp_head', 'redirect_to_external_link');
function redirect_to_external_link()
{
global $redirect_to, $wait_seconds, $wait_time;
if (empty($redirect_to) || empty($wait_time)) {
return;
}
?>
<script>var redirect = window.setTimeout(function(){window.location.href='<?php esc_html_e($redirect_to); ?>'},<?php echo $wait_time; ?>);</script>
<noscript><meta http-equiv="refresh" content="<?php echo $wait_seconds; ?>;url=<?php esc_attr_e($redirect_to); ?>"></noscript>
<?php } ?>
<?php get_header(); global $post, $gp_settings; ?>

<div id="content">
<!-- ADS -->	
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<div id="gpt-passback-040823A" style="text-align: center;">
  <script>
    window.googletag = window.googletag || {cmd: []};
    googletag.cmd.push(function() {
    googletag.defineSlot('/22486451388/ca-pub-9219954761243535-tag/Fxtub.com/mow_Fxtub.com_970x250', [[468, 60], [970, 90], [970, 250], [300, 250], [320, 50], [300, 50], [320, 100], [728, 90], [300, 100]], 'gpt-passback-040823A').addService(googletag.pubads());
    googletag.enableServices();
    googletag.pubads().set('page_url', 'https://fxtub.com/');
    googletag.display('gpt-passback-040823A');
    });
  </script>
</div>
<!-- ADS -->	
<div class="chuyen-huong">
<?php if (!empty($redirect_to)) {
echo '<p style="line-height: 35px;font-size: 25px;color: #333;margin-bottom: 30px;"> Đang Chuyển Đến Trang Download! </p>';	
printf(__('<div style="display: none; margin: 18px !important;word-wrap: break-word;">%s</div>'),esc_html($redirect_to));
?>
<p><span class="thoigian-chuyen" id="timer" ></span></p>
<div style="margin-top: 25px">
<button id="chuyenngay" onclick="myFunction()"><?php _e('GO NOW  '); ?><i class='fa fa-external-link'></i></button>
<button id="dongchuyen" onclick="self.close()"><?php _e('✘ Cancel'); ?></button> <br />	
<p style="margin-top:5px"> Click "GO NOW" sẽ chuyển hướng nhanh </p>
</div>
	
<script>
function myFunction() {
  window.location.href='<?php esc_html_e($redirect_to); ?>';
}
</script>
	
<?php
} else {
_e('Liên kết này bị lỗi hoặc không tồn tại / This link is broken!');
}
?>	
<br>		
</div>	
</div>

<!-- Java thời gian chờ -->
<script>
document.getElementById('timer').innerHTML = <?php echo $wait_seconds;?>;
var timer = <?php echo $wait_seconds;?>;
var interval = setInterval(function() {
var seconds = timer;
if (seconds > 0) {
--seconds;
document.getElementById('timer').innerHTML = seconds + "";
timer = seconds;
}
else {
 
}
 
}, 1000);
</script>
<!-- Java thời gian chờ -->

<!-- An Nut Go Sau 15s -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
  $('#chuyenngay').delay(15000).show(0);   
</script>
<!-- An Nut Go Sau 15s -->

<style>
.google-auto-placed {display: none;}
	
#content {text-align: center;}

#gp-header-area {
    display: none;
}	
.chuyen-huong {text-align: center;}
#chuyenngay {
		animation: blink 3s infinite;	
	}	
#chuyenngay,
#dongchuyen {

display: inline-block;
margin: 7px;
padding: 15px 15px;
font-size: 18px;
font-weight: bold;
text-transform: uppercase;
text-decoration: none;
color: #fff;
text-shadow: none;
cursor: pointer;
border: 1px solid;
}

#chuyenngay {
background-color: #00cc00;
border-color: #00cc00;
}

#dongchuyen {
background-color: #ff4444;
border-color: #ff4444;
margin-bottom: 10px;
}

#chuyenngay:hover,
#dongchuyen:hover {
background-color: #555;
border-color: #555;
}

.thoigian-chuyen {
color: #ff3333;
font-size: 50px;
margin-top: 30px;
}
/* Đoạn CSS ẩn GO sau 5 giây*/	
html body {background-color: #ffffff !important;}
.chuyen-huong{max-width:1400px; margin-top:25px !important; margin-left:auto; margin-right:auto;}
#chuyenngay{display:none; margin: 7px;background: #00cc00; border: 1px solid #00cc00; color: #fff; cursor: pointer; font-size: 13px ; font-weight: bold ; padding: 7px 15px;text-decoration: none;text-transform: uppercase;text-shadow: none;}
#dongchuyen{margin: 7px;background: #ff4444; border: 1px solid #ff4444; color: #fff; cursor: pointer; font-size: 13px ; font-weight: bold ; margin-bottom: 10px;padding: 7px 15px;text-decoration: none;text-transform: uppercase;text-shadow: none;}
#chuyenngay:hover, #dongchuyen:hover{background: #555; border: 1px solid #555}
.thoigian-chuyen{color:#ff3333;font-size:50px;margin-top: 30px;}

@media only screen and (min-width: 410px) and (max-width: 479px)
{
.entry {margin: 0 25px 40px 20px !important;}
}
/* Đoạn CSS ẩn GO sau 5 giây*/		
</style>
