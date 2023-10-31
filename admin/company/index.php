<? include "../../config/core.php";

	// 
	if (!$user_id) header('location: /');


	// filter
	// if ($_GET['on'] == 1) $product_all = db::query("select * from product_item where arh = 0");
	// elseif ($_GET['off'] == 1) $product_all = db::query("select * from product_item where arh = 0");
	// elseif ($_GET['catalog']) {
	// 	$catalog_id = $_GET['catalog'];
	// 	$product_all = db::query("select * from product_item where catalog_id = '$catalog_id' and arh = 0");
	// } elseif ($_GET['brand']) {
	// 	$brand_id = $_GET['brand'];
	// 	$product_all = db::query("select * from product_item where brand_id = '$brand_id' and arh = 0");
	// }
	// else 
	
	$product_all = db::query("select * from company");
	$page_result = mysqli_num_rows($product_all);

	// page number
	$page = 1; if (isset($_GET['page']) && $_GET['page'] && is_int(intval($_GET['page']))) $page = $_GET['page'];
	$page_age = 50;
	$page_all = ceil($page_result / $page_age);
	if ($page > $page_all) $page = $page_all;
	$page_start = ($page - 1) * $page_age;
	$number = $page_start;

	// filter
	// if ($_GET['on'] == 1) $product = db::query("select * from product_item where arh = 0 order by ins_dt desc limit $page_start, $page_age");
	// elseif ($_GET['off'] == 1) $product = db::query("select * from product_item where arh = 0 order by ins_dt desc limit $page_start, $page_age");
	// elseif ($_GET['catalog']) $product = db::query("select * from product_item where catalog_id = '$catalog_id' and arh = 0 order by ins_dt desc limit $page_start, $page_age");
	// elseif ($_GET['brand']) $product = db::query("select * from product_item where brand_id = '$brand_id' and arh = 0 order by ins_dt desc limit $page_start, $page_age");
	// else 
	
	$product = db::query("select * from company order by ins_dt desc limit $page_start, $page_age");


	// site setting
	$menu_name = 'company';
	$site_set['footer'] = false;
	$css = ['products/main'];
	$js = ['products/main', 'products/item'];
?>
<? include "../block/header.php"; ?>

	<div class="sss">

		<? if ($page_result): ?>
			
			<div class="uc_u">
				<div class="uc_us">
					<div class="form_im uc_usn">
						<input type="text" class="" placeholder="Поиск" />
						<i class="fal fa-search form_icon"></i>
					</div>
				</div>
				<div class="tscroll">
					<table class="uc_u2q uc_uc">
						<thead class="">
							<tr class="thead">
								<td class="td_number">#</td>
								<td class="td_img">Логотип</td>
								<td class="td_br"></td>
								<td class="td_name">Атауы</td>
								<td class="uc_uh_cn"></td>
							</tr>
						</thead>
						<tbody class="tbody">
							<? while ($pr_d = mysqli_fetch_assoc($product)): ?>
								<? $number++; ?>
		
								<tr class="uc_ui uc_ui2">
									<td class="td_number"><div class="uc_ui_number"><?=$number?></div></td>
									<td class="td_img">
										<div class="uc_ui_img lazy_img" data-src="/assets/uploads/logo/<?=$pr_d['img']?>"><?=($pr_d['img']!=null?'':'<i class="fal fa-box"></i>')?></div>
									</td>
									<td class="td_br"></td>
									<td class="td_name">
										<a class="" href="/admin/products/?id=<?=$pr_d['id']?>">
											<div class="uc_ui_name"><?=$pr_d['name']?></div>
										</a>
									</td>
								</tr>
							<? endwhile ?>
						</tbody>
					</table>
				</div>
			</div>

		<? else: ?>
			<div class="ds_nr">
				<i class="fal fa-ghost"></i>
				<p>НЕТ</p>
			</div>
		<? endif ?>

	</div>

<? include "../block/footer.php"; ?>
	<? include "pop_add.php"; ?>