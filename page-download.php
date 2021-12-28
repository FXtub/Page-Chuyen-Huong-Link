<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@800&display=swap" rel="stylesheet">
<!-- QUẢNG CÁO POPUP (EDIT)//-->
ADS POPUP
<!-- QUẢNG CÁO POPUP (EDIT)//-->

<!--PHẦN DÀNH CHO CODE THOI GIAN (NO EDIT) //-->
<?php
// get the redirection url from GET variable
$redirect_to = !empty($_GET['url'])
 ? trim(strip_tags(stripslashes($_GET['url'])))
 : '';
 
$wait_time    = 11000; // thời gian tự động chuyển hướng (tính bằng millisecond - ở đây là 30000 ml = 30s).
$wait_seconds = $wait_time / 1000;
 
add_action('wp_head', 'redirect_to_no_index', 99);
function redirect_to_no_index()
{
?>
   <!-- Tắt Index Trang Này (NO EDIT)-->
  <meta name="robots" content="noindex, follow">

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
    <noscript><meta http-equiv="refresh" content="<?php echo $wait_seconds; ?>;url=<?php esc_attr_e($redirect_to); ?>">></noscript>
  
 <?php
}
get_header(); //hiện thị header 
?>

<!--PHẦN NỘI DUNG//-->
<div class="main">
<div class="column">
	
<!--QUẢNG CÁO Baner TOP (EDIT)//-->
ADS 728x90
<!--QUẢNG CÁO Baner TOP (EDIT)//-->
	
<!--PHẦN NOI DUNG GIUA TIME THỜI GIAN//--> 
 <p style="line-height: 1.3;font-weight: 500; font-family: 'Oswald', sans-serif; font-size: 28px; padding-top: 25px;"> Đến trang download sau <span style="font-size: 35px; color: red; font-family: 'Big Shoulders Stencil Display', cursive; font-weight: 800" id="timer"></span> (seconds) </p> 
<?php if (!empty($redirect_to)) {
echo '<p> <img src="https://fxtub.com/files/loadgif.gif"/></p>';
echo '<p style="font-size: 130%;margin: 8px !important; color: #191919;"> Automatically redirect to download page </p>';
echo '<a href="#" rel="noopener"><img class="aligncenter wp-image-6768 size-full" src="https://fxtub.com/files/download-F.png" width="242" height="40"></a>';?>
         <?php
        } else {
             echo '<h1 style="color: #f00; padding-top: 30px;"> LỖI LINK|LINK ERROR!</h1>';
        }
        ?>
</div><!--đóng thẻ column//-->
	
<!--PHẦN NOI QUANG CAO//-->
  <div class="column">
<!--QUẢNG CÁO Baner TOP (EDIT)//-->
ADS 728x90
<br><br>
<!--QUẢNG CÁO Baner TOP (EDIT)//-->
ADS 728x90
<!--QUẢNG CÁO 2 Ô VUÔNG (EDIT)//-->	  
<div class="haiquangcao">
<div class="ovuong">
 <!--QUẢNG CÁO Ô VUÔNG 1//-->
ADS 300x300
</div>
<div class="ovuong">
<!--QUẢNG CÁO Ô VUÔNG 2//-->
ADS 300x300
</div></div></div>


<!--PHẦN DÀNH CHO QUẢNG BÊN TRÁI//-->
<div class="Trai">
ADS 160x600
  </div>

	
<!--PHẦN DÀNH CHO QUẢNG BÊN PHẢI//-->
<div class="Phai">
ADS 160x600
</div>
</div> <!--đóng thẻ main//-->

<!--PHẦN DÀNH CHO QUẢNG FOOTER//-->
<div class="Duoi">
 ADS HERE   
</div>

<!--PHẦN SCRIPT THOI GIAN//-->
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

<!--PHẦN DÀNH CSS //-->
<style>
.main-menu, .stickytop {
    position: absolute;
    top: 0px;
}
 @media screen and (max-width:960px) {
    .Phai {
    display: none;
  }
 .Trai {
    display: none;
  }
}

.main {
display: contents;
margin-left: auto;
margin-right: auto;
}

.Trai {
float: left;
width: 160px;
height: 300px;
top: 70px;
z-index: 1111;
position: fixed;
margin-left: 2px;
}
.ovuong {
width: 50%;
height: 250px;
float: left;}
@media screen and (max-width:600px) {
.ovuong {width: 100%;margin: auto;text-align: center;margin-top: 5px;}
iframe {margin-top: 15px;}
}
iframe {max-width: -webkit-fill-available;}
.haiquangcao{
width: 75%;
height: 250px;
margin: auto;
text-align: center;
margin-top: 10px;}
	
.haiquangcao:after {
  content: "";
  display: table;
  clear: both;
}
	
.Phai {
float: right;
right: 0px;
width: 160px;
height: 300px;
top: 70px;
z-index: 1111;
position: fixed;
margin-right: 2px;
}

.Duoi {
width: 100%;
clear: both;
height: 20px;
margin: auto;
text-align: center;
}	
	
/* Tạo ba cột bằng nhau, float cạnh nhau */
.column {
margin: 0;
width: 70%;
display: block;
margin-left: auto;
margin-right: auto;
text-align: center;
margin: auto;
}

.column {
padding: 2px;
}

/* Clear float khác sau các cột */
.main:after {
  content: "";
  display: table;
  clear: both;
}

/* Bố cục linh hoạt: ba cột xếp chồng lên nhau thay vì cạnh nhau khi màn hình 
có chiều rộng dưới 600px */
  @media screen and (max-width:960px) {
    .column {
    width: 100%;
  }
}
</style>
