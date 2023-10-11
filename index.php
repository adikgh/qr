<? include "config/core.php";

	// site setting
	$menu_name = 'home';

	$site_set['header'] = false;
	$site_set['menu'] = false;
	$site_set['footer'] = false;
	$site_set['app_none'] = false;
	$site_set['swiper'] = true;

	// header('location: /plug/');

	// $css = ['product', ''];
	$js = ['index'];


?>
<? include "block/header.php"; ?>

	<style>
		.app_body{
			padding: 0 !important;
		}
	</style>

	<div class="pp_cn">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0001.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0002.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0003.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0004.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0005.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0006.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0007.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0008.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0009.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0010.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0011.jpg" alt="">
		<img class="lazy_img" data-src="/assets/img/pp/презентация_page-0012.jpg" alt="">
	</div>

<? include "block/footer.php"; ?>