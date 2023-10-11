<? include "../../config/core.php";



	$cat_id = $_GET['id'];

	// filter
	if ($_GET['on'] == 1) $product_all = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0");
	elseif ($_GET['off'] == 1) $product_all = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0");
	else $product_all = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0");
	$page_result = mysqli_num_rows($product_all);

	// page number
	$page = 1; if ($_GET['page'] && is_int(intval($_GET['page']))) $page = $_GET['page'];
	$page_age = 24;
	$page_all = ceil($page_result / $page_age);
	if ($page > $page_all) $page = $page_all;
	$page_start = ($page - 1) * $page_age;
	$number = $page_start;

	// filter
	if ($_GET['on'] == 1) $product = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0 order by ins_dt desc limit $page_start, $page_age");
	elseif ($_GET['off'] == 1) $product = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0 order by ins_dt desc limit $page_start, $page_age");
	else $product = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 and arh = 0 order by ins_dt desc limit $page_start, $page_age");



	// site setting
	$menu_name = 'cat';

	$site_set['nav_header'] = true;
	$site_set['nav_header_back'] = '/';
	$site_set['nav_header_tr'] = 'item';
	$site_set['nav_header_name'] = 'Name 1';

	$css = ['product'];
	$js = [];
?>
<? include "../../block/header.php"; ?>

	<div class="">
		<div class="bl_c">
			<div class="head_c head_c1">
				<h3>Товары</h3>
			</div>
			<div class="">
				<div class="products_s">
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
								<a class="menu_ci" href="/admin/products/all/warehouses.php?id=2">
									<div class="menu_cin"><i class="fal fa-square"></i></div>
									<div class="menu_cih">2-ЭТАЖ</div>
								</a>
								<a class="menu_ci" href="/admin/products/all/warehouses.php?id=3">
									<div class="menu_cin"><i class="fal fa-square"></i></div>
									<div class="menu_cih">МАЛЕНЬКИЙ</div>
								</a>
								<a class="menu_ci" href="/admin/products/all/warehouses.php?id=4">
									<div class="menu_cin"><i class="fal fa-square"></i></div>
									<div class="menu_cih">АРАФАТ</div>
								</a>
								<a class="menu_ci" href="/admin/products/all/warehouses.php?id=5">
									<div class="menu_cin"><i class="fal fa-square"></i></div>
									<div class="menu_cih">Точка продажа</div>
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
						<? $item_d = product::product_item($pr_id); ?>
						<? if ($user_id): $favorites = product::favorites($item_d['id'], $user_id); ?>
						<? elseif (isset($_SESSION['favorites']) && in_array($item_d['id'], $_SESSION['favorites'])): $favorites = true; else: $favorites = false; endif; ?>

						<div class="item">
							<div class="item_c">
								<button class="btn btn_dd item_favorites <?=($favorites?'item_favorites_act':'')?> add_favorites" data-id="<?=$item_d['id']?>"><i class="fal fa-heart"></i></button>
								<a href="../item/?id=<?=$item_d['id']?>">
									<div class="item_img">
										<? if ($item_d['img'] || $item_d['img_room']): ?>
											<div class="item_img_c lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$item_d['img']?>"></div>
											<? if ($item_d['img_room']): ?> <div class="item_img_c item_img_abs lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$item_d['img_room']?>"></div> <? endif ?>
										<? else: ?> <div class="item_img_c"><span>Фото скоро появится</span></div> <? endif ?>
									</div>
								</a>
								<div class="item_cn">
									<a href="../item/?id=<?=$item_d['id']?>">
										<div class="item_con">
											<div class="item_cons">
												<div class="item_name"><?=$pr_d['name_ru']?></div>
												<? if ($pr_d['brand_id']): ?> <div class="item_desc"><?=(product::pr_brand($pr_d['brand_id']))['name']?></div> <? endif ?>
											</div>
											<? if ($item_d['price']): ?>
												<div class="item_price">
													<? if ($designer): ?><span><?=($item_d['price'] - ($item_d['price'] / 10))?></span>
													<? else: ?><span><?=$item_d['price']?></span><? endif ?>
													<i class="fas fa-tenge"></i>
												</div>
											<? endif ?>
											<div class=""></div>
										</div>
									</a>
									<div class="item_cart">
										<button class="btn btn_dd btn_dd_cl add_cart" data-id="<?=$item_d['id']?>">
											<div class="item_cart_btn_add">
												<i class="fal fa-shopping-bag"></i>
												<i class="fal fa-plus item_cart_icon_plus"></i>
											</div>
										</button>
									</div>
								</div>
							</div>

							<? $pr_item_sum = product::pr_item_sum($pr_id); ?>
							<? if ($pr_item_sum >= 2): ?>
								<? $pr_item = db::query("select * from product_item where product_id = '$pr_id'"); $i = 1; ?>
								<div class="item_others">
									<span>Другие виды</span>
									<div class="item_others_c">
										<? while ($pr_item_d = mysqli_fetch_array($pr_item)): ?>
											<? if ($i <= 6): ?>
												<a class="item_others_i <?=($i==1?'item_others_act':'')?>" href="../item/?id=<?=$pr_item_d['id']?>">
													<? if ($pr_item_d['img']): ?> <div class="lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$pr_item_d['img']?>"></div>
													<? else: ?> <i class="fal fa-box"></i> <? endif ?>
												</a>
											<? endif; $i++; ?>
										<? endwhile ?>
										<? if ($pr_item_sum > 6): ?><a class="item_others_i item_others_all" href="item/?id=<?=$item_d['id']?>">+<?=$pr_item_sum - 6?></a><? endif ?>
									</div>
								</div>
							<? endif ?>
							
						</div>
					<? endwhile ?>
					
				</div>

				<div class="bl23_csb">
					<div class="btn btn_show_prd" data-id="<?=$cat_id?>" data-start="<?=$page_age+1?>" data-clc="1">Загрузить еще</div>
				</div>

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

<? include "../../block/footer.php"; ?>