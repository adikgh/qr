				<div class="">
					<div class="head_c">
						<h4>Недавно просмотренные товары</h4>
					</div>
					<div class="itc_ltvc ">
						<div class="swiper mySwiper_5">
							<div class="swiper-wrapper">

								<? $product_ltv = db::query("select * from product where catalog_id = 4 and sale_online = 1 order by id desc limit 30"); $i = 1; ?>
								<? while ($product_ltvd = mysqli_fetch_array($product_ltv)): ?>
									<? $pr_item_d = product::product_item($product_ltvd['id']); ?>

									<div class="swiper-slide item">
										<div class="item_c">
											<a href="?id=<?=$pr_item_d['id']?>">
												<div class="item_img">
													<? if ($pr_item_d['img'] || $pr_item_d['img_room']): ?>
														<div class="item_img_c lazy_img" data-src="https://admin.lighterior.kz/assets/uploads/products/<?=$pr_item_d['img']?>"></div>
													<? else: ?> <div class="item_img_c"><span>Фото скоро появится</span></div> <? endif ?>
												</div>
											</a>
										</div>
									</div>
								<? endwhile ?>

							</div>
							<div class="swiper-scrollbar swiper_scrollbar5"></div>
							<!-- <div class="swiper-button-prev swiper_prev_1"><i class="fal fa-long-arrow-left"></i></div> -->
							<!-- <div class="swiper-button-next swiper_next_1"><i class="fal fa-long-arrow-right"></i></div> -->
						</div>
					</div>
				</div>