<?php
/*
	Plugin Name:RusSocialKnopki 23
	Plugin URI: http://vsyoprosto.ru/plagin-russocialknopki-23-versiya-2-20032011.html
	Description: Плагин вывода кнопок русских социальных сетей после постов. Всего 23 кнопки кнопки закладок и социальных сервисов. А также кнопка вывода на печать. 
	Author: Sergey Dolshenko
	Version: 2.20032011
	Author URI: http://vsyoprosto.ru
*/
function scz_knopki_23($content){
if( !is_home()) {
  $content.=  "<link rel=\"stylesheet\" type=\"text/css\" href=\"/wp-content/plugins/rus_socialknopki_23/stules/stules.css\">
<div class=\"buttons\">
Если статья Вам понравилась и оказалась для вас полезной, то поделитесь ей с другими:<br /><br />
<script type=\"text/javascript\" src=\"/wp-content/plugins/rus_socialknopki_23/js/buttons.js\"></script>
<script type=\"text/javascript\">buttons('/wp-content/plugins/rus_socialknopki_23/js/')</script>
<p style=\"text-align: right;\"><a rel=\"nofollow\" href=\"http://vsyoprosto.ru/plagin-russocialknopki-23-versiya-2-20032011.html\" target=\"_blank\" title=\"Как поставить себе такие кнопки социальных сетей и закладок\">Хочу себе плагин с такими кнопками</a></p>
</div>";
}
return $content;
}
add_filter ('the_content', 'scz_knopki_23');
?>