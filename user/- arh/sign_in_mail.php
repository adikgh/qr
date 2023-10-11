<?php include "../config/core.php";

	// 
	if ($user_id) header('location: /user/cours/');
	
	// site setting
	$menu_name = 'sign_in_mail';
	$site_set = [
		'cl_wh' => '1',
		'footer' => 'false',
		'menu' => 2,
	];
	$css = ['user'];
	$js = ['user'];
	
?>
<?php include "../block/header.php"; ?>

	<div class="u_sign">
		<div class="bl_c">
			<div class="usign_c">

				<div class="usign_img">
					<div class="lazy_img" data-src="/assets/img/icons/smiling-face-with-halo_1f607.png"></div>
				</div>

				<div class="usign_head"><h3 class="usign_h">Көргеніме қуаныштымын</h3></div>

				<div class="usign_cn">
					<div class="form_im form_im_ph">
						<i class="far fa-envelope form_icon"></i>
						<input type="text" class="form_im_txt smail" placeholder="Почтаңыз" data-lenght="6" data-sel="0" maxlength="50" />
					</div>
					<div class="form_im form_im_ps">
						<i class="far fa-lock form_icon"></i>
						<input type="password" class="form_im_txt password" placeholder="Құпия сөзіңіз" data-lenght="6" data-sel="0" data-eye="0" />
						<i class="far fa-eye-slash form_icon_pass"></i>
					</div>
					<div class="form_im si_blc_bn dsp_n">
						<a class="btn btn_back3 txt_c" href="sign_reset_mail.php">Құпия сөзімді ұмыттым?</a>
					</div>
					<div class="form_im">
						<button class="btn btn_sign_in_mail">
							<span>Кіру</span>
							<i class="far fa-long-arrow-right"></i>
						</button>
					</div>
					<div class="form_im txt_c">
						<a class="btn btn_back3" href="sign_in.php">Нөмір арқылы кіру</a>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php include "../block/footer.php"; ?>