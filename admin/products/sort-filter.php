   <!--  -->
   <div class="ucours_t">
      <div class="ucours_tl">
         <div class="ucours_tm">
            <div class="btn btn_cl product_add_pop">
               <i class="fal fa-plus"></i>
               <span>Тағамды қосу</span>
            </div>
         </div>
         <div class="ucours_tm">
            <div class="ucours_tmas"></div>
            <div class="ucours_tmi <?=($filter==0?'ucours_tm_act':'')?>">
               <i class="fal fa-sort ucours_tmic"></i>
               <span>Сортировка</span>
               <i class="fal fa-angle-down ucours_tmis"></i>
            </div>
            <div class="menu_c ucours_tma">
               <a class="menu_ci" href="?sort=1">
                  <div class="menu_cin"><i class="fal fa-circle"></i></div>
                  <div class="menu_cih">по дата создание</div>
               </a>
               <a class="menu_ci" href="?sort=1">
                  <div class="menu_cin"><i class="fal fa-circle"></i></div>
                  <div class="menu_cih">по названием</div>
               </a>
               <a class="menu_ci" href="?sort=1">
                  <div class="menu_cin"><i class="fal fa-circle"></i></div>
                  <div class="menu_cih">по ценам</div>
               </a>
            </div>
         </div>
      </div>
      <? if ($page_all > 1): ?>
         <div class="ucours_tr">
            <div class="ucours_trn">Страница: <?=$page?>/<?=$page_all?></div>
            <div class="ucours_trnc">
               <a class="ucours_trnci <?=($page>1?'':'ucours_trnci_ds')?>" href="<?=$url_page?>?&page=<?=$page-1?>"><i class="fal fa-angle-left"></i></a>
               <a class="ucours_trnci <?=($page<$page_all?'':'ucours_trnci_ds')?>" href="<?=$url_page?>?&page=<?=$page+1?>"><i class="fal fa-angle-right"></i></a>
            </div>
         </div>
      <? endif ?>
   </div>