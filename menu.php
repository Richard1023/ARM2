<style type="text/css">
#menu { /*элемент с идентификатором menu - наш div*/
   width: 200px; /*ширина*/
   margin: 10px; /*внешние отступы*/
   margin-top: -20px;
   border-radius: 15px 15px 15px 15px;
}
#menu ul { /*список элемента с идентификатором menu*/
   font-family:Verdana, Arial, Helvetica, sans-serif; /*шрифт*/
   font-size:12px; /*размер шрифта*/
   font-weight:bold; /*насыщенность шрифта - стандартный полужирный шрифт (значение = 700)*/
   list-style: none; /*задаем стиль отображения маркеров или нумерации для элементов списка - отобразить без маркера*/
   margin: 0; /*внешние отступы все 0*/
   padding: 0; /*внутренние отступы все 0*/
}
#menu li a { /*ссылка элемента li элемента с идентификатором menu*/
   display: block; /*блочный элемент - элементы начинаются с новой строки, после элемента также добавляется перенос строки*/
   height: 24px; /*высота*/
   text-decoration: none; /*подчеркивание отсутствует*/
   color: #e6e6fa; /*цвет*/
   background: url(menu.gif); /*фоновое изображение и путь к нему*/
   padding: 8px 0 0 30px; /*внутренние отступы сверху, справа, снизу, слева*/
   border-radius: 15px 15px 15px 15px;
   margin: 2px;
}
#menu li a:hover, #menu #current a{ /*ссылка элемента li элемента с идентификатором menu при наведении курсора, ссылка элемента с идентификатором current - текущая*/
   color: #FFFFFF; /*цвет*/
   background: url(menu.gif) 0 -32px; /*фоновое изображение и путь к нему, отобразить слева с 0 сверху с -32px*/
   padding: 8px 0 0 30px; /*внутренние отступы сверху, справа, снизу, слева*/
   border-radius: 15px 15px 15px 15px;
}
#menu li a:active { /*ссылка элемента li элемента с идентификатором menu при нажатии курсором*/
   color: #fff; /*цвет*/
   background: url(menu.gif) 0 -64px; /*фоновое изображение и путь к нему, отобразить слева с 0 сверху с -64px*/
   padding: 8px 0 0 30px; /*внутренние отступы сверху, справа, снизу, слева*/
   border-radius: 15px 15px 15px 15px;
}
</style>

<?php
session_start();
if($_SESSION['login'] == 'dekanat'){
?>

<div id="menu">
 <ul>
                <li><a href="?stor=index"><span>Головна</span></a></li>
                <li><a href="?stor=groups"><span>Групи</span></a></li>
                <li><a href="?stor=lectors"><span>Викладачі</span></a></li>
                <li><a href="?stor=journals"><span>Журнали</span></a></li>
                <li><a href="exit.php"><span>Вийти</span></a></li>
 </ul>
</div>
<?php
}else{
?>

<div id="menu">
 <ul>
                <li><a href="?stor=index"><span>Головна</span></a></li>
                <li><a href="?stor=groups"><span>Групи</span></a></li>
                <li><a href="?stor=my_rozklad"><span>Мій розклад</span></a></li>
                <li><a href="?stor=journals"><span>Журнал</span></a></li>
                <li><a href="exit.php"><span>Вийти</span></a></li>
 </ul>
</div>
<?php
}
?>