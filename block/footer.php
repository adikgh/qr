		<!-- body end -->
		</div>

		<? if ($site_set['footer']): ?>
			<footer class="footer">
				<div class="bl_c">
					<div class="footer_b">
						<!-- <div class="footer_bl">© <?=$site['name']?>, 2022</div> -->
						<div class="footer_br">
							<a href="https://unemde-qr.kz" target="_blank" class="gprog_bl">
								<span>#unemdeqr-да жасалған</span>
								<div class="gprog_ab">
									<div class="gprog_lg"><div class="lazy_img" data-src="https://gprog.kz/assets/img/logo/logo_tr_1200.png"></div></div>
									<div class="gprog_h">G prog</div>
									<div class="gprog_p">Интернет магазин для бизнеса</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</footer>
		<? endif ?>

		<!-- app end -->
	</div>
	
	<!-- main js -->
	<? foreach ($sjs as $i): ?><script src="/assets/js/<?=$i?>.js?v=<?=$ver?>"></script><? endforeach ?>
	<? foreach ($js as $i): ?><script src="/assets/js/<?=$i?>.js?v=<?=$ver?>"></script><? endforeach ?>
		
</body>
</html>

	<? include "modal.php"; ?>