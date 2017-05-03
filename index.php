<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=4, minimum-scale=1, user-scalable=yes" />  -->
	<title>Project</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/0830/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/0830/css/index.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/0830/css/reset.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/0830/css/public.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/0830/css/header.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/0830/css/font-awesome.min.css" type="text/css">
	
	<!-- include jQuery -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/0830/src/js//jquery.min.js"></script>
	
	<!-- for dragging/swiping/pinching, include Hammer.js -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/0830/src/js//hammer.min.js"></script>
	<!-- for scaling UI buttons (for wide websites on small screens), include FlameViewportScale -->
	<script type="text/javascript" language="javascript" src="<?php echo get_stylesheet_directory_uri() ?>/0830/lib/FlameViewportScale.js"></script>
	<!-- include Tos "R"Us -->
	<script type="text/javascript" language="javascript" src="<?php echo get_stylesheet_directory_uri() ?>/0830/src/js/jquery.tosrus.min.all.js"></script>
	<link type="text/css" media="all" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/0830/src/css/jquery.tosrus.all.css" />
	<!-- fire the plugin onDocumentReady -->
	<script type="text/javascript" language="javascript">
	jQuery(function($) {
	    //	Add a custom filter to recognize images from lorempixel (that don't end with ".jpg" or something similar)
	    $.tosrus.defaults.media.image = {
	        filterAnchors: function($anchor) {
	            return $anchor.attr('href').indexOf('lorempixel.com') > -1;
	        }
	    };

	    $('#example-1 a').tosrus({
	        buttons: 'inline',
	        pagination: {
	            add: true,
	            type: 'thumbnails'
	        }
	    });

	    $('#example-2 a').tosrus({
	        pagination: {
	            add: true
	        },
	        caption: {
	            add: true
	        },
	        slides: {
	            scale: 'fill'
	        }
	    });

	    $('#example-3 a').tosrus();

	    $('#example-4').tosrus({
	        infinite: true,
	        slides: {
	            visible: 3
	        }
	    });

	    $('#example-5').tosrus({
	        buttons: false,
	        pagination: {
	            add: true
	        },
	        slides: {
	            scale: 'fill'
	        }
	    });

	});
	</script>
	<!-- CSS for this demo page -->
	<style type="text/css" media="all">
	html, body{padding: 0;margin: 0;height: 100%;}
	body{font-family: "Calibri", Helvetica, Verdana;color: #666;}
	h1, h2, h3, h4, h5, h6{color: #333;}
	a, a:link, a:active, a:visited{color: #666;}
	a:hover{color: #000;}
	hr{margin: 75px -20px;height: 0;padding: 0;border: 0;border-top: 1px solid #ccc;}
	pre{border-left: 5px solid #ccc;width: 100%;padding: 10px 0 10px 20px;overflow: auto;}
	#wrapper{background-color: #fff;width: 70%;min-width: 675px;padding: 0px 50px 0px 50px;margin: 0 auto;border: 1px solid #ccc;box-shadow: 0 0 5px #ccc;}
	#intro p{font-size: 18px;line-height: 24px;}
	.thumbs, .gallery, .links, .slider{border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;background: #eee;margin: 20px -50px;}
	.thumbs{padding: 10px 30px 30px 50px;text-align: center;}
	.thumbs:after{content: " ";display: block;clear: both;}
	.thumbs a{display: inline-block;margin: 20px 20px 0 0;}
	thumbs img{width: 130px;height: 130px;}
	.thumbs img, .gallery img{border: 1px solid #ccc;background: #fff;padding: 9px;}
	.thumbs a:hover img{border-color: #999;}
	.gallery{height: 300px;padding: 30px 0;}
	.slider{height: 475px;}
	.links{padding: 30px 50px;}
	.links a{line-height: 30px;}
	.hidden{display: none;}
	
	
		.demo{height:23px;}
.demo p{line-height:32px}
.btn{position: relative;overflow: hidden;margin-right: 4px;display:inline-block;*display:inline;padding:4px 10px 4px;font-size:14px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.btn input {position: absolute;top: 0; right: 0;margin: 0;border: solid transparent;opacity: 0;filter:alpha(opacity=0); cursor: pointer;}
.progress { position:relative; margin-left:100px; margin-top:-24px; width:100px;padding: 1px; border-radius:3px; display:none}
.bar {background-color: green; display:block; width:0%; height:20px; border-radius: 3px; }
.percent { position:absolute; height:20px; display:inline-block; top:3px; left:2%; color:#fff }
.files{height:22px; line-height:22px; margin:-40px 0 0 240px;}
.delimg{margin-left:20px; color:#090; cursor:pointer}
	</style>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/0830/js/jquery-1.12.1.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-migrate-1.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/0830/js/jquery.form.js"></script>
</head>
<body>
<?php      
//echo __FILE__; 
?>
<a href="#top-row" class="page-scroll">
	<i class="fa fa-arrow-circle-up scroll-icon"></i>
</a>
<!-- header start-->
	<!-- 头部开始 -->
	<div class="clearfix top-row" id="top-row">
		<!-- logo  -->
		<div class="logo-wrap pull-left">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/header/xinchang.png" alt="新昌logo" width="200">
		</div>
		<!-- nav start -->
		<div class="nav pull-right">
			<ul class="nav-list clearfix">
				<li class="nav-list-li">
					<a href="http://qn.quabuy.com">Home</a>
				</li>
				<li class="nav-list-li">
					<a>About</a>
					<ul class="nav-list-sub">
						<li><a href="http://qn.quabuy.com/index.php/about/who-we-are">who we are</a></li>
						<li><a href="http://qn.quabuy.com/index.php/about/history">history</a></li>
						<li><a href="http://qn.quabuy.com/index.php/about/team">team</a></li>
						<li><a href="http://qn.quabuy.com/index.php/about/testimonials">testimonials</a></li>
						<li><a href="http://qn.quabuy.com/index.php/about/contacts">contacts</a></li>
					</ul>
					</li>
				<li class="nav-list-li">
					<a>Corporate</a>
					<ul class="nav-list-sub nav-list-sub-bigW">
						<li><a href="http://qn.quabuy.com/index.php/corporate/industries">industries</a></li>
						<li><a href="http://qn.quabuy.com/index.php/corporate/corporate-package-pricing">corporate package pricing</a></li>
					</ul>
				</li>
				<li class="nav-list-li">
					<a href="###">Private</a>
					<ul class="nav-list-sub nav-list-sub-bigW">
						<li><a href="http://qn.quabuy.com/index.php/private/industries-household-residential">industries - household</a></li>
						<li><a href="http://qn.quabuy.com/index.php/private/package-pricing">private package pricing</a></li>
					</ul>
				</li>
				<li class="nav-list-li">
					<a>Excellence</a>
					<ul class="nav-list-sub">
						<li><a href="http://qn.quabuy.com/index.php/excellence/best-practice">best practice</a></li>
						<li><a href="http://qn.quabuy.com/index.php/excellence/procedure">procedure</a></li>
						<li><a href="http://qn.quabuy.com/index.php/excellence/reference">reference</a></li>
						<li><a href="http://qn.quabuy.com/index.php/excellence/certification">certification</a></li>
					</ul>
				</li>
				<li class="nav-list-li">
					<a href="http://qn.quabuy.com/" target="_blank">Shop</a>
				</li>
				<li class="nav-list-li">
					<a href="###">MyWorld</a>
					<ul class="nav-list-sub">
						<li><a href="http://qn.quabuy.com/price/" target="_blank">mycalculator</a></li>
						<li><a href="http://qn.quabuy.com/blog/">myproject</a></li>
						<li><a href="http://qn.quabuy.com/price/quotation.php">myquotation</a></li>
						<li><a href="http://qn.quabuy.com/price/wish.php">mywish</a></li>
					</ul>
				</li>
				<li class="nav-list-last nav-list-li positionNone">
					<a href="###">Login</a>
					<ul class="nav-list-sub" id="write">
						<li class="lastItem">
							<div class="iceCols icemega_modulewrap ">
								<span class="iceModuleTile">Log in or Register</span>
								<div class="mod-login">
									<form action="" method="post" id="login-form" class="form-inline">
										<!--
										<div class="mod-login_userdata">
											<div class="control-group" id="form-login-username">
												<div class="controls">
													<input type="text" name="uesrname" placeholder="User name" class="inputbox mod-login_username" required="required" />
												</div>
											</div>
											<div class="control-group" id="form-login-password">
												<div class="controls">
													<input type="password" name="password" placeholder="Password:" class="inputbox mod-login_passwd" size="18" required="required" />
												</div>
											</div>
											<div class="control-group">
												<label for="mod-login_remember101" class="checkbox">
													<input type="checkbox" id="mod-login_remember101" />				Remember me			
												</label>
											</div>
											<div class="mod-login_submit clearfix">
												<button type="submit" class="btn btn-primary pull-left">Log in</button>
												<a href="" class="btn register pull-right">Register</a>
											</div>
										</div>-->
										
										
										
	<?php
									
									if(isset($_COOKIE['jusernameid'])){
									   echo '<div class="login-greeting">
										<p style="text-align:left;">Hi	'.$_COOKIE['jfullname'].', </p>
										</div>
										<div class="control-group">
										<button class="btn btn-primary wishlogout" onclick="return false;" type="submit" name="Submit">Log out</button>
										</div>';
									}else{
									   echo '<div class="mod-login_userdata">
											<div class="control-group" id="form-login-username">
												<div class="controls">
													<input type="text" name="uesrname" placeholder="User name" class="inputbox mod-login_username" required="required" />
												</div>
											</div>
											<div class="control-group" id="form-login-password">
												<div class="controls">
													<input type="password" name="password" placeholder="Password:" class="inputbox mod-login_passwd" size="18" required="required" />
												</div>
											</div>
											<div class="control-group">
												<label for="mod-login_remember101" class="checkbox">
													<input type="checkbox" id="mod-login_remember101" />				Remember me			
												</label>
											</div>
											<div class="mod-login_submit clearfix">
												<button type="submit" onclick="return false;" class="wishlogin btn btn-primary pull-left">Log in</button>
												<a href="http://qn.quabuy.com/index.php/user-registration" class="btn register pull-right">Register</a>
											</div>
										</div>';
									}
									?>									
										
										
										
										
										
	
									</form>
									
<script type="text/javascript">
	
jQuery(function($) {
    //登陆
$(function(){
	$('.wishlogin').click(function () {
		var name=$('.mod-login_username').val();
		var pwd=$('.mod-login_passwd').val();
		var url='http://qn.quabuy.com/index.php/component/users/?task=user.loginall';
		var data;		
			    //data='name='+name+'&pwd='+pwd;
				data='username='+name+'&password='+pwd;
		$.ajax({
			   type: "POST",
			   dataType: 'json',
			   url: url,
			   data: data,
			   success: function(msg){
				  if(msg.bb==222){
					  alert('<?php if($_COOKIE['think_language']=='zh-cn'){echo '登陆成功';}else{echo 'Log in successfully';}  ?>');
					  location.reload();
				  }
                  if(msg.bb==111){
					 alert('<?php if($_COOKIE['think_language']=='zh-cn'){echo '用户名或密码错误';}else{echo 'The user name or password error';}  ?>');
				  }				  
			   }
		});			   
		//alert(333);
		
	});
});
//退出wishlogout
$(function(){
	$('.wishlogout').click(function () {
        var url='http://qn.quabuy.com/index.php/component/users/?task=user.logoutall';
		window.location.href=url;
    });
});







//
});
	
</script>										
									
									
								</div>
							</div>
							<div class="iceCols icemega_modulewrap ">
								<div class="row-fluid1">
									<div class="item_content">
										<h4 class="item_title item_title__ visible-first visible">
											<span class="item_title_part0 item_title_part_odd item_title_part_first_half item_title_part_first">Services</span>
										</h4>
										<div class="item_introtext">
											<ul class="menu_list">
												<li class="firstItem">
													<a href="#">Building & Related Modification</a>
												</li>
												<li>
													<a href="#">Interiors Decoration & Design</a>
												</li>
												<li>
													<a href="#">Curtain Wall & Cladding</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row-fluid1">
									<div class="item_content">
										<h4 class="item_title item_title__ visible-first visible">
											<span class="item_title_part0 item_title_part_odd item_title_part_first_half item_title_part_first">New Services</span>
										</h4>
										<div class="item_introtext">
											<ul class="menu_list">
												<li class="firstItem">
													<a href="#">Online Procurement</a>
												</li>
												<li>
													<a href="#">Project Management and Consultancy</a>
												</li>
												<li>
													<a href="#">Site Formation</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="iceCols icemega_modulewrap last-iceCols">
								<div class="float-right-wrap">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/header/DCC_4771.jpg" alt="" width="100%" height="192" />
									<div>
										<p>Contact us:</p>
										<p>+852 2579 8238</p>
										<p>ISPenquiry@synergis.com.hk</p>
									</div>
								</div>
							</div>
						</li>
					</ul>	
				</li>
			</ul>
		</div>
	</div>

<!-- header end -->
	<div class="wrap">
		<!-- sub-nav start -->
		<div class="page_header-wrap">
			<h1>
				<span>project</span>
			</h1>
		</div>
		<!-- sub-nav end -->
		<!-- main start -->
		<div class="main clearfix">
			<div class="main-project fl">
				<p class="main-project-title">
					<span>ACTIVE PROJECTS</span>
					<i class="fa fa-arrow-circle-down"></i>
				</p>
				<div class="main-project-list-wrap">
					<p class="list center">
						<span class="fontWeight">Project Name</span>
						<span class="fontWeight">Order Number</span>
						<span class="fontWeight">Date</span>
					</p>


					
<?php
//var_dump($_SESSION["jname"]);
//var_dump($_COOKIE);
$dbhostip=DB_HOST;
$username=DB_USER;
$userpassword=DB_PASSWORD;
$dbdatabasename=DB_NAME;
//var_dump(DB_PASSWORD);
 
/*
$conn=mysql_connect($dbhostip,$username,$userpassword) or die("error connecting") ; //连接数据库
 
mysql_query("set names 'utf8'"); //数据库输出编码 
mysql_select_db($dbdatabasename); //打开数据库
$sqls='SELECT * FROM `wp_terms` as `t` left join `wp_term_taxonomy` as `tt` on `tt`.`term_id`=`t`.`term_id` where `tt`.`taxonomy`="post_set"';
$sets=mysql_query($sqls,$conn);
while($row = mysql_fetch_array($sets,MYSQL_ASSOC)){
	var_dump($row);
}	
*/	
	
	

$con=mysql_connect($dbhostip,$username,$userpassword) or die("Unable to connect to the MySQL!");
$db = mysql_select_db($dbdatabasename,$con);
mysql_set_charset("utf8", $con);

//
//var_dump($_COOKIE["jusernameid"]);
//var_dump(isset($_COOKIE["jusernameid"]));
if(isset($_COOKIE["jusernameid"])){
	$setusersql='select * from `wp_set_user` as `su`';
	$setuserresult=mysql_query($setusersql);
	while($srow = mysql_fetch_array($setuserresult,MYSQL_ASSOC)){
		//var_dump($srow);
		$str=$srow["user_id_set"];
		$newstr = substr($str,0,strlen($str)-1); 
		$array = explode(",",$newstr);
		if(in_array($_COOKIE["jusernameid"],$array)){
			//var_dump();
			$sqlin.=$srow["set_id"].',';
		}
		
	}
	$sqlin = substr($sqlin,0,strlen($sqlin)-1); 
	if(!$sqlin){
		$sqlin=99999991;
	}	
}else{
	$sqlin=9999999;
}


//var_dump($sqlin);

//执行语句
$result=mysql_query('SELECT * FROM `wp_terms` as `t` left join `wp_term_taxonomy` as `tt` on `tt`.`term_id`=`t`.`term_id`  where `tt`.`taxonomy`="post_set" and `tt`.`term_taxonomy_id` in ('.$sqlin.')');
//提取一条数据
//$row=mysql_fetch_row($result);//mysql_fetch_row只能提取出查询结果的第一条记录
//提取多条记录
$reslist = array();
$i=0;
/*
while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
   $reslist[$i] = $row;
    var_dump($row);
  // var_dump(urldecode($row["slug"]));
  
   $i++;
  }
  //var_dump($reslist);
mysql_close($con);
*/

?>					
<?php
$title = get_post(164)->post_title;
$c = get_post(164)->post_content;
//$c=wpautop($c);

//$c = '<p>'.str_replace("","</p><p>",$c).'</p>';
//$arr=explode("\r",$c);
//$htm='';
//foreach($arr as $v){
//	$htm.='<p>'.$v.'</p>';
//}
//print_r($arr);

//echo '<div class="" style="height:800px;">'.$c.'</div>';

//var_dump($title);
//var_dump($c);
while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	$datas=mysql_query('SELECT * FROM `wp_options`  where option_name="cat-endtime-'.$row["term_id"].'" or option_name="cat-starttime-'.$row["term_id"].'"');
	$starttime=$endtime='';
	while($r = mysql_fetch_array($datas,MYSQL_ASSOC)){
		$starb='cat-starttime-'.$row["term_id"];
		$endb='cat-endtime-'.$row["term_id"];
		
		if($r["option_name"]==$starb){
			$starttime=str_replace(".", "/", $r['option_value']);
		}
		if($r["option_name"]==$endb){
			$endtime=str_replace(".", "/", $r['option_value']);
		}
		//var_dump($r);
	}
	
?>						
					<p class="list center">
						<span class="listProjectName"><?php echo $row["name"] ?></span>
						<span class="listOrderNumber"><?php echo urldecode($row["slug"]) ?></span>
						<span><?php echo $starttime ?></span>
						<span class="txtRight more" starttime="<?php echo $starttime ?>" endtime="<?php echo $endtime ?>" url="<?php echo get_stylesheet_directory_uri() ?>/indexdo.php" touimg="<?php echo z_taxonomy_image_url($row["term_id"], 'medium', TRUE ) ?>" setid="<?php echo $row["term_id"] ?>" id="more1" >more</span>
					</p>					
					

<?php

}

if($sqlin==9999999){
	

?>						
					<p class="list center" style="text-align:center;">
						No Project<a style="padding:0 10px 0 20px;" target="_blank" class="gotologin" onclick="return false;" href="#" bb="http://qn.quabuy.com/index.php/login-form">Member Registration</a>
					</p>
<?php
}
?>						
<?php



if($sqlin==99999991){
	

?>						
					<p class="list center" style="text-align:center;">
						No Project
					</p>
<?php
}
?>						
					
					
 
				</div>
				<p class="main-project-comeleted">
					<span>COMPLETED PROJECTS</span>
					<i class="fa fa-arrow-circle-down"></i>
				</p>
			</div>


			<!-- management start -->
		
			
			<div class="management fl">
				<i class="back fa fa-arrow-circle-left"></i>
				<div class="management-l">
					<div class="management-l-t">
						<p class="list">
							<span>Project Name:<i class="ProjectName">XXXXX</i></span><span>Order Number:<i class="OrderNumber">XXXXX</i></span>
						</p>
						<p class="list">
							<span>Building Address:<i class="Customeraddress">XXXXX</span></i>
						</p>
						<p class="list">
							<span>Project Duration:<i class="projectDuration">XXXXX</i></span>
							
						</p>
					</div>
					<div class="management-l-m">
						<div class="con-wrap">
							<div class="startTime">
								<span class="timeName">Start Date</span>
								<span class="time starttime">01/01/16</span>
							</div>
							
							
							
							<!--
							<div class="Task" >
								<div class="Task-wrap">
									<span>Task Name2&nbsp;:&nbsp;起楼</span>
									<i></i>
								</div>
								<div class="Task-hide" style="display: block">
									<div class="img-wrap">
										<div class="img-list" style="margin-top:0;">
											<a href="###">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/1.jpg" alt="" width="600" height="355">
											</a>
										</div>
										<div class="img-list">
											<a href="###">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/1.jpg" alt="" width="600" height="355">
											</a>
										</div>
										<div class="img-list-title">
											<span class="img-bottom"></span>
											<span class="number">20</span>
											<i class="bingo"></i>
											<span style="position: absolute;top:7px;left:50%;width:1px;height:24px;background: #A9B7B7;"></span>
											<i class="comment"></i>
											<div class="comment-hide">
												<input type="text"/>
												<span>评论</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="Task" >
								<div class="Task-wrap">
									<span>Task Name2&nbsp;:&nbsp;起楼</span>
									<i></i>
								</div>
								<div class="Task-hide" style="display: none">
									<div class="img-wrap">
										<div class="img-list">
											<a href="###">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/1.jpg" alt="" width="600" height="355">
											</a>
										</div>
										<div class="img-list-title">
											<span class="img-bottom"></span>
											<span class="number">20</span>
											<i class="bingo"></i>
											<span style="position: absolute;top:7px;left:50%;width:1px;height:24px;background: #A9B7B7;"></span>
											<i class="comment"></i>
											<div class="comment-hide">
												<input type="text" />
												<span>评论</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="Task" >
								<div class="Task-wrap">
									<span>Task Name2&nbsp;:&nbsp;起楼</span>
									<i></i>
								</div>
								<div class="Task-hide" style="display: none">
									<div class="img-wrap">
										<div class="img-list">
											<a href="###">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/1.jpg" alt="" width="600" height="355">
											</a>
										</div>
										<div class="img-list-title">
											<span class="img-bottom"></span>
											<span class="number">20</span>
											<i class="bingo"></i>
											<span style="position: absolute;top:7px;left:50%;width:1px;height:24px;background: #A9B7B7;"></span>
											<i class="comment"></i>
											<div class="comment-hide">
												<input type="text" />
												<span>评论</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							
							---->
							
							
							<div class="endTime">
								<span class="timeName">End Date</span>
								<span class="time endtime">01/02/16</span>
							</div>
						</div>
					</div>
					<div class="management-l-b"></div>
				</div>
				<div class="management-r">
					<div class="management-r-t clearfix">
						<img class="jltouimg" src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/ts.jpg" alt="头像" width="120" height="184" class="fr"/>
						<div class="img-title">
							<p>Project Manager<br/><span class="managername">Mr.ABC</span></p>
						</div>
					</div>
					<div class="management-r-m"><!-- 
						<div class="management-r-m-box"></div> -->
						<div class="main-right-bottom">
							<div class="m-r-b-top">
								<span class="name">AA</span>
								<i class="close"></i>
							</div>
							<div class="m-r-b-content"></div>
							<div class="m-r-b-bottom">
								<input type="text" class="txt">
								<span class="send">发送</span>
							</div>
						</div><!-- 
						<span class="send">send</span>
						<span class="cancel">cancel</span> -->
					</div>
					<div class="management-r-m1">
						<!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/11.png" alt="" width="250" height="400"> -->
					</div>
				</div>
				<p style="background:#f0c52a;width:100%;margin:10px 0;text-indent:15px;height:40px;line-height:40px;"><span style="">Contract Sum:<i class="ContractSun">XXXXX</i></span></p>
				
				<div class="management-f fone">
					<div class="management-f-t">Project Schedule</div>
					<div class="table-wrap entry-content">
					    <!--
						<table border="1">
							<thead>
								<tr>
								    <th>UpDate1:DD/MM/YY</th>
									<td>UpDate1:DD/MM/YY</td>
								</tr>
							</thead>
							<tbody>
								<tr>
								    <th>UpDate1:DD/MM/YY</th>
									<td>UpDate1:DD/MM/YY</td>
								</tr>
								<tr>
								    <th>UpDate1:DD/MM/YY</th>
									<td>UpDate1:DD/MM/YY</td>
								</tr>
								<tr>
								    <th>UpDate1:DD/MM/YY</th>
									<td>UpDate1:DD/MM/YY</td>
								</tr>
							</tbody>
						</table>
						-->
					</div>
				</div>
				<!--
				<div class="baojia entry-content" style="margin: 0 auto;text-align: center;width: 100%;">
				-->
				<div class="management-f1 ftwo">
					<div class="management-f-t top">Project Cost Update</div>
					<div class="management-f-m baojia">
					<!--
						<img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/img1.jpg" alt="" width="500" height="260"/>
						<p><span class="m-txt">挑战最满意装修设计,完整报价，省钱才是王道挑战最满意装修设计,完整报价，省钱才是王道挑战最满意装修设计,完整报价，省钱才是王道挑战最满意装修设计,完整报价，省钱才是王道挑战最满意装修设计,完整报价，省钱才是王道</span><span class="m-time">8月22日  10：20</span></p>
						-->
					</div>
				</div>
				<!--
				<div class="management-f1">
					<div class="management-f-m">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/0830/images/img2.jpg" alt="" width="500" height="260"/>
						<p><span class="m-txt">挑战最满意装修设计,完整报价</span><span class="m-time">8月22日  10：28</span></p>
					</div>
				</div>
				-->
				<!--
				</div>
				-->
			</div>
			<!-- management end -->
		</div>
		<!-- main end -->
	</div>
	<div id="mainbottom-row">
		<div class="row-container clearfix">
			<header>
				<h6>
					<span>Popular</span>
					<span>links</span>
				</h6>
			</header>
			<article class="row-fluid">
				<ul class="item_list">
					<li class="firstItem">
						<span><a href="http://qn.quabuy.com/index.php/about/who-we-are">Who we are</a></span>
					</li>
					<li class="">
						<span><a href="http://qn.quabuy.com/index.php/about/history">History</a></span>
					</li>
					<li class="">
						<span><a href="http://qn.quabuy.com/index.php/about/team">Team Works</a></span>
					</li>
					<li class="lastItem">
						<span><a href="http://qn.quabuy.com/index.php/about/testimonials">Testimonial</a></span>
					</li>
				</ul>
			</article>
			<article class="row-fluid">
				<ul class="item_list">
					<li><span><!-- <a href="http://qn.quabuy.com/index.php/excellence/procedure">Regulatory</a> --></span></li>
				</ul>
			</article>
			<article class="row-fluid">
				<ul class="item_list">
					<!-- <li><span><a href="http://qn.quabuy.com/index.php/index.php/404">HSIN CHONG Group & Allificates</a></span></li> -->
					<li><span><a href="http://qn.quabuy.com/index.php/about/contacts">Contacts</a></span></li>
				</ul>
			</article>
			<article class="row-fluid" style="text-indent: 30px;">
				<ul class="item_list">
					<li><!-- <span><a href="http://qn.quabuy.com/index.php/excellence/best-practice">FAQ</a></span> --></li>
					<li><!-- <span><a href="http://qn.quabuy.com/index.php/about/contacts">Contacts</a></span> --></li>
				</ul>
			</article>
		</div>
	</div>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/0830/js/index.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/0830/js/header.js"></script>
</body>
</html>