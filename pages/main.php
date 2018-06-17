<div class="main_news_top"></div>

<div class="main_news_center">
<div class="main_news_title">Добро пожаловать!</div>
<font class="main_news_double">QIWI</font><font class="main_news_green" color="#4084CE">-EGGS</font>
<font class="main_news_text">- высокодоходный инвестиционный проект.

<br>

<br>Старт проекта <?php echo date('j '.$mdate[date('n',$start_time)-1].' в H:i',$start_time); ?> по Москве

<?php if($start_time-$time>2){ ?>

<br>
<br>

До старта осталось: <font id="s_t_dhm" style="color:#009000"></font> <font id="s_t_s" style="color:#009000"></font>
<br>

<script type="text/javascript">
s_t_cd=<?php echo $start_time-$time; ?>;
s_t_timer();
</script>

<?php } else { echo '<br>'; } ?>



<br>Вы получаете прибыль за счёт вклада следующих участников.
<br>Пополнение баланса и вывод средств занимает не более 24 часов.
<br>
<br>Вывод денежных средств без комиссии.
<br>Проекту идёт 10% от общего пополнения.
<br>Эта сумма отнимается из параметра "Баланс" в статистике.
<br><a href="http://allforhyips.ru" target="_BLANK">Все для вашего хайпа , создай свой хайп сам !</a>

</font>
</div>

<div class="main_news_bottom"></div>


<br>


<div class="main_news_top"></div>
<div class="main_news_center">
<div class="main_news_title">Пополнили:</div>
<font class="main_plus"><?php echo $d_plus_n; ?></font>&nbsp;
</div>
<div class="main_news_bottom"></div>

<br>


<div class="main_news_top"></div>
<div class="main_news_center">
<div class="main_news_title">Вывели:</div>
<font class="main_withs"><?php echo $d_with_n; ?></font>&nbsp;
</div>
<div class="main_news_bottom"></div>

<br>

<!-- -->
<div class="main_news_top"></div>
<div class="main_news_center">
<div class="main_news_title">Новые участники:</div>
<font class="main_new_users"><?php echo $d_new_u; ?></font>&nbsp;
</div>
<div class="main_news_bottom"></div>


<br>
