<div class="user_pl user_ph_none">
   <? if ($user_right): ?>
      <div class="user_plс">
         <span>Основной</span>
         <!-- <a class="user_pli <?=($menu_name=='user'?'user_pli_act':'')?>" href="/user/">Общее</a> -->
         <!-- <a class="user_pli" href="/shoppingcart/">Корзина</a> -->
         <a class="user_pli <?=($menu_name=='orders'?'user_pli_act':'')?>" href="/user/orders/">Мои заказы</a>
         <a class="user_pli" href="/favorites/">Любимые товары</a>
         <!-- <a class="user_pli <?=($menu_name==''?'user_pli_act':'')?>" href="/user/">Скидка покупателя</a> -->
         <a class="user_pli <?=($menu_name=='ques'?'user_pli_act':'')?>" href="/user/ques/">Отзывы и вопросы</a>
         <a class="user_pli <?=($menu_name=='address'?'user_pli_act':'')?>" href="/user/address/">Адрес доставки</a>
         <a class="user_pli <?=($menu_name=='acc'?'user_pli_act':'')?>" href="/user/acc/">Личные данные</a>
      </div>
      <div class="user_plс">
         <span>Контрагент</span>
         <a class="user_pli <?=($menu_name=='counterparties'?'user_pli_act':'')?>" href="/user/counterparties/">Финансы и бонусы</a>
         <!-- <a class="user_pli" href="/user/">Баланс и история операций</a> -->
         <a class="user_pli <?=($menu_name=='count_friends'?'user_pli_act':'')?>" href="/user/counterparties/friends/">Друзья и их заказ</a>
         <a class="user_pli" href="/user/counterparties/invite_friends.php">Пригласить друзей</a>
      </div>
      <div class="user_plс">
         <span>Другие</span>
         <a class="user_pli" href="/user/">Обратный связь</a>
         <a class="user_pli" href="/user/">Обращения</a>
         <!-- <a class="user_pli" href="/user/">Проверка товара</a> -->
      </div>
   <? else: ?>
      <div class="user_plс">
         <!-- <a class="user_pli <?=($menu_name=='user'?'user_pli_act':'')?>" href="/user/">Общее</a> -->
         <a class="user_pli" href="/shoppingcart/">Корзина</a>
         <a class="user_pli <?=($menu_name=='orders'?'user_pli_act':'')?>" href="/user/orders/">Мои заказы</a>
         <a class="user_pli" href="/favorites/">Любимые товары</a>
         <a class="user_pli <?=($menu_name=='ques'?'user_pli_act':'')?>" href="/user/ques/">Отзывы и вопросы</a>
         <a class="user_pli <?=($menu_name=='address'?'user_pli_act':'')?>" href="/user/address/">Адрес доставки</a>
         <a class="user_pli <?=($menu_name=='acc'?'user_pli_act':'')?>" href="/user/acc/">Личные данные</a>
      </div>
      <div class="user_plс">
         <a class="user_pli" href="/user/">Обратный связь</a>
         <a class="user_pli" href="/user/">Обращения</a>
      </div>
   <? endif ?>
</div>