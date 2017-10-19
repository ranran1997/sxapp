<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf8" />
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="webkit" name="renderer">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta content="portrait" name="screen-orientation">
		<!-- uc强制竖屏 -->
		<meta content="portrait" name="x5-orientation">
		<!-- QQ强制竖屏 -->
		<title><?php echo $GLOBALS['system_seotitle'];?></title>
		<meta name="keywords" content="<?php echo $GLOBALS['system_keywords'];?>">
		<meta name="description" content="<?php echo $GLOBALS['system_description'];?>">
		<link rel="stylesheet" href="/style/css/style.css" />
		<script type="text/javascript" src="/style/js/rem.js"></script>
		<link rel="stylesheet" href="/style/css/swiper.min.css" />
		<link rel="stylesheet" href="/style/css/mheader.css" />
		<script type="text/javascript" src="/style/js/swiper.min.js"></script>
		<script type="text/javascript" src="/style/js/jquery.js" ></script>
		<script type="text/javascript" src="/style/js/js.js" ></script>
		<style>
			.yk-nav .yk-nav-list {
				height: 57px;
			}

			.yk-nav .yk-nav-pills li a {
				line-height: 49px;
				height: 49px;
			}


		</style>
	</head>

	<body style="background: #f1f2f7;overflow-x:hidden">
		<!--搜索导航-->
		<div class="top_menu">
			<div class="home">
				<a href="<?php echo U('usr');?>" class="fl">
					<img src="/style/img/menu_03.png" />
				</a>
				<form action="<?php echo U('goods/items');?>" style="background-image: url(/style/img/ss_06.png);background-repeat: no-repeat;background-size: 100%;">
					<input name="q" type="submit" value="" style="width: 38%;"></input><input class="fr" type="text" placeholder="生鲜配送产品" />
				</form>
				<a href="<?php echo U('usr/mbox');?>" class="fr">
					<img src="/style/img/menu_05.png" />
				</a>
			</div>
		</div>

		<!--benner-->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php echo vv(3, 7, '<div title="@$title@" class="swiper-slide"> <img src="__IMG__" /> </div>');?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>

			<script>
				var swiper = new Swiper('.swiper-container', {
					pagination: '.swiper-pagination',
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					paginationClickable: true,
					spaceBetween: 30,
					centeredSlides: true,
					autoplay: 3500,
					autoplayDisableOnInteraction: false
				});
			</script>
		</div>

		<!--页面导航-->
		<link id="headercss" href="css/mheader.css" type="text/css" rel="stylesheet">
		<div style="position: relative;">
			<div style="position: absolute;left: 0;top: 0;z-index: 99;">
				<img src="/style/img/content_13.jpg" height="57" width="60" />
			</div>
			<nav class="yk-nav yk-pro" id="mheader_nav" style="position: relative;left: 58px;padding: 0;margin: 0;">

				<div class="yk-nav-box">
					<div class="yk-nav-list" id="mheader_navbox" style="overflow: hidden;">
						<ul class="yk-nav-pills" style="width: 878px; transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, 0px) translateZ(0px);">
							<li class="current">
								<a href=""><i class="i0"></i>首页</a>
							</li>
							<!-- 导航入口 -->
							<?php foreach ($this->_vars['nav'] as $id=>$catname) {@extract($catname);?>
							<li>
								<a href="<?php echo U('goods/submenu', ['category_id_1'=>$id]);?>"><?php echo $catname;?></a>
							</li>
							<?php }?>
							<li>
								<a href=""><i class="i6"></i></a>
							</li>

						</ul>
					</div>
				</div>
			</nav>
			<script type="text/javascript" src="/style/js/iscroll.js"></script>
			<script type="text/javascript" src="/style/js/mheader.js"></script>
		</div>

		<!--内容-->
		<div class="content clr distance" style="border-bottom: none;">
			<div class="fl">
				<a href="#" style="border-bottom: 1px solid #dee7ec;height: 4.44rem;"><img src="/style/img/content_16.jpg" /></a>
			</div>
			<!-- <?php foreach ($this->_vars['index_tui'] as $key=>$row) {@extract($row);?> -->
			<!-- <?php }?> -->
			<div class="fl">
				<a href="#">
					<p>淡水虾</p>
					<span>500g</span>
					<img src="/style/img/content03.jpg" />
				</a>
				<a href="#">
					<p>猪肉水饺</p>
					<span>营养美味</span>
					<img src="/style/img/content09.jpg" />
				</a>
			</div>
			<div class="fl">
				<a href="#">
					<p>精品五花肉</p>
					<span>营养品质肉</span>
					<img src="/style/img/content05.jpg" />
				</a>
				<a href="#">
					<p>嫩豆腐</p>
					<span>健康绿色</span>
					<img src="/style/img/content08.jpg" />
				</a>
			</div>
		</div>

		<!--购物区-->
		<div class="shop distance">
			<img src="/style/img/menu_31.png" />
		</div>
		<div style="height: 75px;background: #f1f2f7;"></div>
		<!--底部导航-->
		<div class="foot">
			<a href="<?php echo U('index');?>"><img src="/style/img/nav_03.png" /></a>
			<a href="<?php echo U('goods/index');?>"><img src="/style/img/nav_05.png" /></a>
			<a href="<?php echo U('cart');?>"><img src="/style/img/nav_07.png" /></a>
			<a href="<?php echo U('usr');?>"><img src="/style/img/nav_09.png" /></a>
		</div>
	</body>

</html>