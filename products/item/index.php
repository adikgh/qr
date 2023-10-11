<? include "../../config/core.php";



	$item_id = $_GET['id'];

	// filter
	$item = db::query("select * from product_item where id = '$item_id'");
	$item_d = mysqli_fetch_assoc($item);

	$product = product::product($item_d['product_id']);
	$product_id = $product['id'];
	$cat_id = $product['catalog_id'];


	$san_img = 0;

	// site setting
	$menu_name = 'item';
	$site_set['swiper'] = true;

	$css = ['item'];
	$js = ['item'];
?>
<? include "../../block/header.php"; ?>

	<div class="">

      <div class="bl_c">
			<div class="multis">
				<a class="multis_i" href="/">Товары</a>
				<a class="multis_i" href="/">Категория</a>
				<span class="multis_i"><?=$product['name_ru']?></span>
			</div>
		</div>

		<div class="bl_c">
			<div class="itc">
				<div class="itc_l">
					<div class="it_cm">
						<? if ($item_d['img']): ?>
							<div class="it_cmi img_inc_pop" data-n="<?=$san_img?>"><div class="lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$item_d['img']?>"></div></div>
							<? $san_img++; ?>
						<? endif ?>
						<? if ($item_d['img_room']): ?>
							<div class="it_cmi img_inc_pop" data-n="<?=$san_img?>"><div class="lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$item_d['img_room']?>"></div></div>
							<? $san_img++; ?>
						<? endif ?>

						<? $img = db::query("select * from product_img where product_item_id = '$item_id' order by number asc limit 6"); ?>
						<? while ($img_d = mysqli_fetch_assoc($img)): ?>
							<div class="it_cmi img_inc_pop" data-n="<?=$san_img?>"><div class="lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$img_d['img']?>"></div></div>
							<? $san_img++; ?>
						<? endwhile ?>

						<!-- <div class="it_cmi"><div class="lazy_img" data-src=""></div></div> -->
					</div>

					<div class="itc_lg">
						<div class="itc_lgi">
							<h4>О продукте</h4>
							<i class="fal fa-arrow-right"></i>
						</div>
						<div class="itc_lgi">
							<h4>Размеры</h4>
							<i class="fal fa-arrow-right"></i>
						</div>
						<div class="itc_lgi">
							<h4>Отзывы</h4>
							<i class="fal fa-arrow-right"></i>
						</div>
					</div>

					<? $product_ltv = db::query("select * from product_wt_buy where product_id = '$product_id' order by id desc limit 10"); $i = 1; ?>
					<? if (mysqli_num_rows($product_ltv)): ?>
						<div class="itc_ltv ">
							<div class="head_c">
								<h4>С этим товаром покупают</h4>
							</div>
							<div class="itc_ltvc">
								<div class="swiper swiper1">
									<div class="swiper-wrapper">

										<? while ($product_ltvd = mysqli_fetch_array($product_ltv)): ?>
											<? $pr_item_d = product::product_item($product_ltvd['this_product_id']); ?>

											<div class="swiper-slide item">
												<div class="item_c">
													<a href="?id=<?=$pr_item_d['id']?>">
														<div class="item_img">
															<? if ($pr_item_d['img'] || $pr_item_d['img_room']): ?>
																<div class="item_img_c lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$pr_item_d['img']?>"></div>
																<? if ($pr_item_d['img_room']): ?> <div class="item_img_c item_img_abs lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$pr_item_d['img_room']?>"></div> <? endif ?>
															<? else: ?> <div class="item_img_c"><span>Фото скоро появится</span></div> <? endif ?>
														</div>
													</a>
													<a href="item/?id=<?=$pr_item_d['id']?>">
														<div class="item_con">
															<div class="item_cons">
																<div class="item_name"><?=$product_ltvd['name_ru']?></div>
															</div>
															<? if ($pr_item_d['price']): ?>
																<div class="item_price">
																	<span><?=$pr_item_d['price']?></span>
																	<i class="fas fa-tenge"></i>
																</div>
															<? endif ?>
														</div>
													</a>
													<div class="item_cart">
														<button class="btn btn_dd btn_dd_cl add_cart" data-id="<?=$pr_item_d['id']?>">
															<div class="item_cart_btn_add">
																<i class="fal fa-shopping-bag"></i>
																<i class="fal fa-plus item_cart_icon_plus"></i>
															</div>
														</button>
													</div>
												</div>
											</div>
										<? endwhile ?>

									</div>
									<div class="swiper-scrollbar swiper1_scrollbar"></div>
									<div class="swiper-button-prev swiper1_prev"><i class="fal fa-long-arrow-left"></i></div>
									<div class="swiper-button-next swiper1_next"><i class="fal fa-long-arrow-right"></i></div>
								</div>
							</div>
						</div>
					<? endif ?>

					<? $product_ltv = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 order by id desc limit 10"); $i = 1; ?>
					<? if (mysqli_num_rows($product_ltv)): ?>
						<div class="itc_ltv itc_ltv2">
							<div class="head_c">
								<h4>Похожи товары</h4>
							</div>
							<div class="itc_ltvc">
								<div class="swiper swiper12">
									<div class="swiper-wrapper">

										<? while ($product_ltvd = mysqli_fetch_array($product_ltv)): ?>
											<? $pr_item_d = product::product_item($product_ltvd['id']); ?>

											<div class="swiper-slide item">
												<div class="item_c">
													<a href="?id=<?=$pr_item_d['id']?>">
														<div class="item_img">
															<? if ($pr_item_d['img'] || $pr_item_d['img_room']): ?>
																<div class="item_img_c lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$pr_item_d['img']?>"></div>
																<? if ($pr_item_d['img_room']): ?> <div class="item_img_c item_img_abs lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$pr_item_d['img_room']?>"></div> <? endif ?>
															<? else: ?> <div class="item_img_c"><span>Фото скоро появится</span></div> <? endif ?>
														</div>
													</a>
													<a href="item/?id=<?=$pr_item_d['id']?>">
														<div class="item_con">
															<div class="item_cons">
																<div class="item_name"><?=$product_ltvd['name_ru']?></div>
															</div>
															<? if ($pr_item_d['price']): ?>
																<div class="item_price">
																	<span><?=$pr_item_d['price']?></span>
																	<i class="fas fa-tenge"></i>
																</div>
															<? endif ?>
														</div>
													</a>
													<div class="item_cart">
														<button class="btn btn_dd btn_dd_cl add_cart" data-id="<?=$pr_item_d['id']?>">
															<div class="item_cart_btn_add">
																<i class="fal fa-shopping-bag"></i>
																<i class="fal fa-plus item_cart_icon_plus"></i>
															</div>
														</button>
													</div>
												</div>
											</div>
										<? endwhile ?>

									</div>
									<div class="swiper-scrollbar swiper12_scrollbar"></div>
									<div class="swiper-button-prev swiper12_prev"><i class="fal fa-long-arrow-left"></i></div>
									<div class="swiper-button-next swiper12_next"><i class="fal fa-long-arrow-right"></i></div>
								</div>
							</div>
					</div>
					<? endif ?>

				</div>

				<div class="itc_r">
					<div class="itc_rt">
						<div class="btn btn_dd2 add_favorites" data-id="<?=$item_d['id']?>"><i class="fal fa-heart"></i></div>
						<div class="itc_rt_name"><?=$product['name_ru']?></div>
						<!-- <div class="itc_rt_cat"><?=product::pr_catalog_name($product['catalog_id'], $lang)?></div> -->
						<div class="">Артикул: <?=$item_d['article']?></div>
						<div class="itc_rt_price"><div class="fr_price"><?=$item_d['price']?></div></div>
						<!-- <div class="itc_rt_rec">
							<div class=""><i class="fal fa-info-circle"></i> Лампочка продается отдельно. Lighterior рекомендует светодиодную лампочку Е26 шарообразный опаловый белый.</div>
						</div> -->
					</div>

					<? $item_all = db::query("select * from product_item where product_id = '$product_id'"); ?>
					<? if (mysqli_num_rows($item_all) > 1): ?>
						<div class="itc_e">
							<div class="itc_eh">
								<div>Выберите цвет</div>
								<span><?=product::pr_color($item_d['color_id'])['name_ru']?></span>
							</div>
							<div class="itc_ec">
								<? while ($item_all_d = mysqli_fetch_assoc($item_all)): ?>
									<a class="itc_eci <?=($item_all_d['id']==$item_id?'itc_eci_act':'')?>" href="?id=<?=$item_all_d['id']?>">
										<div class="lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$item_all_d['img']?>"></div>
									</a>
								<? endwhile ?>
							</div>
						</div>
					<? endif ?>

					<br><br>

					<div class="itc_z">
						<div class="itc_zt">Как его получить</div>
						<div class="itc_zc">
							<div class="itc_zci">
								<div class="itc_zcil">
									<i class="fal fa-shipping-fast"></i>
								</div>
								<div class="itc_zcic">
									<p>Самовывоз</p>
									<span>Добавьте почтовый индекс для возможности доставки на дом</span>
								</div>
								<div class="itc_zcir">
									<i class="fal fa-arrow-right"></i>
								</div>
							</div>
							<div class="itc_zci">
								<div class="itc_zcil">
									<i class="fal fa-tools"></i>
								</div>
								<div class="itc_zcic">
									<p>Доставка</p>
									<!-- <span></span> -->
								</div>
								<div class="itc_zcir">
									<i class="fal fa-arrow-right"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="itc_o">
						<div class="btn add_cart" data-id="<?=$item_id?>">Добавить в корзину</div>
						<!-- <a href="https://api.paybox.money/payment.php?pg_merchant_id=549532&pg_amount=15000&pg_currency=KZT&pg_description=4567&pg_salt=5tLqjUnozyVl5ADC&pg_language=ru&pg_sig=308becc641ac0a2bf756aec2b150546e" class="btn add_cart" data-id="<?=$item_id?>">Добавить в корзину</a> -->
					</div>
				</div>

			</div>

			<div class="">

				<div class="">
					<div class="head_c">
						<h4>Может вам понравиться</h4>
					</div>
					<div class="swiper swiper2">
							<div class="swiper-wrapper">

								<? $product_ltv = db::query("select * from product where catalog_id = '$cat_id' and sale_online = 1 order by id desc limit 10"); $i = 1; ?>
								<? while ($product_ltvd = mysqli_fetch_array($product_ltv)): ?>
									<? $pr_item_d = product::product_item($product_ltvd['id']); ?>

									<div class="swiper-slide item">
										<div class="item_c">
											<a href="?id=<?=$pr_item_d['id']?>">
												<div class="item_img">
													<? if ($pr_item_d['img'] || $pr_item_d['img_room']): ?>
														<div class="item_img_c lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$pr_item_d['img']?>"></div>
														<? if ($pr_item_d['img_room']): ?> <div class="item_img_c item_img_abs lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$pr_item_d['img_room']?>"></div> <? endif ?>
													<? else: ?> <div class="item_img_c"><span>Фото скоро появится</span></div> <? endif ?>
												</div>
											</a>
											<a href="item/?id=<?=$pr_item_d['id']?>">
												<div class="item_con">
													<div class="item_cons">
														<div class="item_name"><?=$product_ltvd['name_ru']?></div>
													</div>
													<? if ($pr_item_d['price']): ?>
														<div class="item_price">
															<span><?=$pr_item_d['price']?></span>
															<i class="fas fa-tenge"></i>
														</div>
													<? endif ?>
												</div>
											</a>
											<div class="item_cart">
												<button class="btn btn_dd btn_dd_cl add_cart" data-id="<?=$pr_item_d['id']?>">
													<div class="item_cart_btn_add">
														<i class="fal fa-shopping-bag"></i>
														<i class="fal fa-plus item_cart_icon_plus"></i>
													</div>
												</button>
											</div>
										</div>
									</div>
								<? endwhile ?>

							</div>
							<div class="swiper-scrollbar swiper2_scrollbar"></div>
							<div class="swiper-button-prev swiper2_prev"><i class="fal fa-long-arrow-left"></i></div>
							<div class="swiper-button-next swiper2_next"><i class="fal fa-long-arrow-right"></i></div>
						</div>
					</div>
				</div>



			</div>
		</div>


	</div>


<? include "../../block/footer.php"; ?>

	<div class="pop_bl img_inc_block">
		<div class="pop_bl_a img_inc_back"></div>
		<div class="pop_bl_c">
			<div class="btn btn_dd2 img_inc_back"><i class="fal fa-times"></i></div>
			<div class="">

				<div class="swiper swiper87">
					<div class="swiper-wrapper">

						<? if ($item_d['img']): ?>
							<div class="swiper-slide it_cmir"><div class="lazy_zoom" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$item_d['img']?>"></div></div>
						<? endif ?>
						<? if ($item_d['img_room']): ?>
							<div class="swiper-slide it_cmir"><div class="lazy_zoom" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$item_d['img_room']?>"></div></div>
						<? endif ?>

						<? $img = db::query("select * from product_img where product_item_id = '$item_id' order by number asc limit 6"); ?>
						<? while ($img_d = mysqli_fetch_assoc($img)): ?>
							<div class="swiper-slide it_cmir"><div class="lazy_zoom" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$img_d['img']?>"></div></div>
						<? endwhile ?>

					</div>
					<div class="swiper-scrollbar swiper87_scrollbar"></div>
					<div class="swiper-button-prev swiper87_prev"><i class="fal fa-long-arrow-left"></i></div>
					<div class="swiper-button-next swiper87_next"><i class="fal fa-long-arrow-right"></i></div>
				</div>
				
			</div>
		</div>
	</div>