<? if ($site_set['header']): ?>
	<div class="aheader <?=($site_set['mheader']?'':'mheader_none')?>" id="top">
		<div class="bl_c">
			<div class="aheader_c">
				<div class="ahead_l">
					<a class="alogo" href="#/">QR Admin</a>
					<div class="ahead_lm">
						<a href="/admin/company/">Серіктестер</a>
					</div>
				</div>
				<div class="ahead_r">
					<div class="ahead_rn">
						<!-- <div class="ahead_rni">
							<div class="ahead_rnicon"><i class="fal fa-bell"></i></div>
						</div> -->
						<!-- <div class="ahead_rni">
							<div class="ahead_rnicon"><i class="fal fa-tasks"></i></div>
						</div> -->
						<!-- <div class="ahead_rni">
							<div class="ahead_rnicon"><i class="fal fa-comment-alt-lines"></i></div>
						</div> -->
						<!-- <div class="ahead_rni">
							<div class="ahead_rnicon"><i class="fal fa-cog"></i></div>
						</div> -->
					</div>
					<div class="ub1_lx">
						<div class="ub1_lt" href="/user/">
							<div class="ub1_ltf">
								<div class=""><?=$user['name']?> <?=($user['surname']?substr($user['surname'],0,1).'.':'')?></div>
								<span>Админ</span>
							</div>
							<div class="ub1_lti lazy_img" data-src="/assets/uploads/users/<?=$user['img']?>"><? if (!$user['img']): ?><i class="fal fa-user"></i><? endif ?></div>
						</div>
						<div class="menu_c">
							<a class="menu_ci" href="/">
								<div class="menu_cin"><i class="fal fa-user"></i></div>
								<div class="menu_cih">Аккаунт</div>
							</a>
							<a class="menu_ci" href="/exit.php">
								<div class="menu_cin"><i class="fal fa-sign-out"></i></div>
								<div class="menu_cih">Выход</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<? endif ?>

<? if ($site_set['pmenu']): ?>
   <div class="pmenu">
      <div class="pmenu_c">
			<a class="pmenu_i <?=($menu_name=='cours'?'pmenu_i_act':'')?>" href="/cours/">
				<i class="fal fa-graduation-cap"></i>
				<span>Home</span>
			</a>
			<a class="pmenu_i <?=($menu_name=='cours'?'pmenu_i_act':'')?>" href="/cours/">
				<i class="fal fa-graduation-cap"></i>
				<span>Продукты</span>
			</a>
			<a class="pmenu_i <?=($menu_name=='cours'?'pmenu_i_act':'')?>" href="/cours/all.php">
				<i class="fal fa-graduation-cap"></i>
				<span>Курстар</span>
			</a>
			<a class="pmenu_i <?=($menu_name=='sub'?'pmenu_i_act':'')?>" href="/sub/">
				<i class="fal fa-users-class"></i>
				<span>Клуб</span>
			</a>
         <a class="pmenu_i <?=($menu_name=='user'?'pmenu_i_act':'')?>" href="/">
            <i class="fal fa-user"></i>
            <span>Аккаунтым</span>
         </a>
      </div>
   </div>
<? endif ?>