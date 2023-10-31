<? include "../../config/core.php";

	// site setting
	$menu_name = 'Zheti Tandyr';

	// $site_set['pmenu'] = true;
	$site_set['swiper'] = true;

	// header('location: /plug/');

	$css = ['company'];
	$js = ['index'];







	// $cat_id = $_GET['id'];

	// filter
	// if ($_GET['on'] == 1) $product_all = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0");
	// elseif ($_GET['off'] == 1) $product_all = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0");
	// else $product_all = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0");
	$product_all = db::query("select * from product where sale = 1 and arh = 0 and company_id = 2");
	$page_result = mysqli_num_rows($product_all);

	if (!isset($_GET['page'])) $_GET['page'] = 0;

	// page number
	$page = 1; if ($_GET['page'] && is_int(intval($_GET['page']))) $page = $_GET['page'];
	$page_age = 24;
	$page_all = ceil($page_result / $page_age);
	if ($page > $page_all) $page = $page_all;
	$page_start = ($page - 1) * $page_age;
	$number = $page_start;

	// filter
	// if ($_GET['on'] == 1) $product = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0 order by ins_dt desc limit $page_start, $page_age");
	// elseif ($_GET['off'] == 1) $product = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0 order by ins_dt desc limit $page_start, $page_age");
	// else $product = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0 order by ins_dt desc limit $page_start, $page_age");

	$product = db::query("select * from product where sale = 1 and arh = 0 and company_id = 2 order by id desc limit $page_start, $page_age");



?>
<? include "../../block/header.php"; ?>


	<div class="top">
		<div class="topw">
			<div class="top_a">
				<div class="lazy_img" data-src="/assets/uploads/bag/725e852c3e140441b211c055d0c5523f_1400x790-q-85.jpg"></div>
			</div>
			<div class="bl_c">
				<div class="top_c">
					<div class="top_cl">
						<div class="top_clogo lazy_img" data-src="/assets/uploads/logo/5d37f7992ace6.jpg"></div>
					</div>
					<div class="top_cr">
						<div class="top_cra">KZ</div>
						<div class="">RU</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bl_c">
			<div class="topb">
				<div class=""><?=$menu_name?></div>
				<div class=""></div>
			</div>
		</div>
	</div>


	<div class="products">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h4>Тағамдар</h4>
			</div>
			<div class="">
				<div class="products_s dsp_n">
					<div class="products_sl">
						<div class="ucours_tm">
							<div class="ucours_tmi ucours_tm_act">
								<i class="fal fa-sort ucours_tmic"></i>
								<span>Сортировка</span>
								<i class="fal fa-angle-down ucours_tmis"></i>
							</div>
							<div class="menu_c ucours_tma">
								<a class="menu_ci" href="/admin/products/all/?sort=1">
									<div class="menu_cin"><i class="fal fa-circle"></i></div>
									<div class="menu_cih">по дата создание</div>
								</a>
								<a class="menu_ci" href="/admin/products/all/?sort=1">
									<div class="menu_cin"><i class="fal fa-circle"></i></div>
									<div class="menu_cih">по названием</div>
								</a>
								<a class="menu_ci" href="/admin/products/all/?sort=1">
									<div class="menu_cin"><i class="fal fa-circle"></i></div>
									<div class="menu_cih">по ценам</div>
								</a>
							</div>
						</div>
						<div class="ucours_tm">
							<div class="ucours_tmi ucours_tm_act">
								<!-- <i class="fal fa-warehouse-alt ucours_tmic"></i> -->
								<span>Цвет</span>
								<i class="fal fa-angle-down ucours_tmis"></i>
							</div>
							<div class="menu_c ucours_tma">
								<a class="menu_ci" href="/admin/products/all/warehouses.php?id=1">
									<div class="menu_cin"><i class="fal fa-square"></i></div>
									<div class="menu_cih">ДРТ</div>
								</a>
								
							</div>
						</div>
						<div class="ucours_tm">
							<div class="ucours_tmi ucours_tm_act">
								<!-- <i class="fal fa-copyright ucours_tmic"></i> -->
								<span>Бренд</span>
								<i class="fal fa-angle-down ucours_tmis"></i>
							</div>
						</div>
						<div class="ucours_tm">
							<div class="ucours_tmi ucours_tm_act">
								<i class="fal fa-filter ucours_tmic"></i>
								<span>Все фильтры</span>
							</div>
						</div>
					</div>
					<div class="products_sr">
						<div class="products_sr_it"><?=$page_result?> позиции</div>
						<div class="products_sr_sel">
							<div class="products_sr_seli products_sr_sel_act">Товар</div>
							<div class="products_sr_seli">Комната</div>
						</div>
					</div>
				</div>
				<div class="products_c">

					<? while ($pr_d = mysqli_fetch_assoc($product)): ?>
						<? $number++; $pr_id = $pr_d['id']; ?>
						<? // $item_d = product::product_item($pr_id); ?>
						<? // if ($user_id): $favorites = product::favorites($item_d['id'], $user_id); ?>
						<? // elseif (isset($_SESSION['favorites']) && in_array($item_d['id'], $_SESSION['favorites'])): $favorites = true; else: $favorites = false; endif; ?>

						<div class="item">
							<div class="item_c">
								<!-- <button class="btn btn_dd item_favorites <?=($favorites?'item_favorites_act':'')?> add_favorites" data-id="<?=$pr_d['id']?>"><i class="fal fa-heart"></i></button> -->
								<a href="#../item/?id=<?=$pr_d['id']?>">
									<div class="item_img">
										<? if ($pr_d['img']): ?>
											<div class="item_img_c lazy_img" data-src="/assets/uploads/products/<?=$pr_d['img']?>"></div>
										<? else: ?> <div class="item_img_c"><span>Фото жақында шығады</span></div> <? endif ?>
									</div>
								</a>
								<div class="item_cn">
									<a href="../item/?id=<?=$pr_d['id']?>">
										<div class="item_con">
											<div class="item_cons">
												<div class="item_name"><?=$pr_d['name_'.$lang]?></div>
											</div>
											<? if ($pr_d['price']): ?>
												<div class="item_price">
													<span><?=$pr_d['price']?></span>
													<i class="fas fa-tenge"></i>
												</div>
											<? endif ?>
											<div class=""></div>
										</div>
									</a>
									<div class="item_cart">
										<button class="btn btn_dd btn_dd_cl add_cart" data-id="<?=$pr_d['id']?>">
											<div class="item_cart_btn_add">
												<i class="fal fa-plus"></i>
											</div>
										</button>
									</div>
								</div>
							</div>
							
						</div>
					<? endwhile ?>
					
				</div>

				<!-- <div class="bl23_csb">
					<div class="btn btn_show_prd" data-id="<?=$cat_id?>" data-start="<?=$page_age+1?>" data-clc="1">Тағыда жүктеу</div>
				</div> -->

				<!-- <? if ($page_all > 1): ?>
					<div class="uc_p">
						<? if ($page > 1): ?> <a class="uc_pi" href="<?=$url.'?id='.$cat_id?>&page=<?=$page-1?>"><i class="fal fa-angle-left"></i></a> <? endif ?>
						<a class="uc_pi <?=($page==1?'uc_pi_act':'')?>" href="<?=$url.'?id='.$cat_id?>&page=1">1</a>
						<? for ($pg = 2; $pg < $page_all; $pg++): ?>
							<? if ($pg == $page - 1): ?>
								<? if ($page - 1 != 2): ?> <div class="uc_pi uc_pi_disp">...</div> <? endif ?>
								<a class="uc_pi <?=($page==$pg?'uc_pi_act':'')?>" href="<?=$url.'?id='.$cat_id?>&page=<?=$pg?>"><?=$pg?></a>
							<? endif ?>
							<? if ($pg == $page): ?> <a class="uc_pi <?=($page==$pg?'uc_pi_act':'')?>" href="<?=$url.'?id='.$cat_id?>&page=<?=$pg?>"><?=$pg?></a> <? endif ?>
							<? if ($pg == $page + 1): ?>
								<a class="uc_pi <?=($page==$pg?'uc_pi_act':'')?>" href="<?=$url.'?id='.$cat_id?>&page=<?=$pg?>"><?=$pg?></a>
								<? if ($page + 1 != $page_all - 1): ?> <div class="uc_pi uc_pi_disp">...</div> <? endif ?>
							<? endif ?>
						<? endfor ?>
						<a class="uc_pi <?=($page==$page_all?'uc_pi_act':'')?>" href="<?=$url.'?id='.$cat_id?>&page=<?=$page_all?>"><?=$page_all?></a>
						<? if ($page < $page_all): ?> <a class="uc_pi" href="<?=$url.'?id='.$cat_id?>&page=<?=$page+1?>"><i class="fal fa-angle-right"></i></a> <? endif ?>
					</div>
				<? endif ?> -->

			</div>
		</div>
	</div>


	<div class="products">
		<div class="bl_c">
			<div class="head_c">
				<h4>Отзывы</h4>
			</div>
			<div class=""></div>
		</div>
	</div>


	<div class="products">
		<div class="bl_c">
			<div class="head_c">
				<h4>Соц сеть</h4>
			</div>
			<div class=""></div>
		</div>
	</div>


<? include "../../block/footer.php"; ?>