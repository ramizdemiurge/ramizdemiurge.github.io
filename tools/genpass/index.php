<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Генератор паролей | ucoder.ru</title>
<script src="jquery.min.js"></script>
<script src="seedrandom.js"></script>
<script src="pwgen.js"></script>
<script src="genpas.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head><body>
<b><font size=14>Генератор паролей</font><br><a href='http://ucoder.ru/'>uCoder</a></b><br><br>
Режим работы:
<div class='divblock'>
<table><tr>
<td><input type='radio' id='fullrand' name='passmode' checked /><label for='fullrand'> Полный рандом<br><font size='2'>очень устойчив, очень сложно запомнить</font></label></div></td>
<td width='14'>&nbsp</td>
<td><input type='radio' id='pwgen' name='passmode' /><label for='pwgen'> Произносимый пароль по алгоритму pwgen<br><font size='2'>весьма устойчив, возможно запомнить</font></label></div></td>
</tr></table>
</div>
Использовать наборы символов:
<div class='divblock'>
<div class='inpblock'><input type='checkbox' id='az' checked /><label for='az'> a-z</label></div>
<div class='inpblock'><input type='checkbox' id='az2' checked /><label for='az2'> A-Z</label></div>
<div class='inpblock'><input type='checkbox' id='n09' checked /><label for='n09'> 0-9</label></div>
<div class='inpblock'><input type='checkbox' id='schr' checked /><label for='schr'> !&quot;#$%&amp;'()*+,-./:;&lt;=&gt;?@[\]^_`{|}~</label></div>
<div class='inpblock'><input type='checkbox' name='skipamb' id='skipamb' /><label for='skipamb'> исключать символы из набора B8G6I1l|0OQDS5Z2</label></div>
</div>
<div class='divblock'>Длина: <input type='text' id='pwlen' size='2' value='12' /> Количество: <input type='text' id='pwnum' size='2' value='12' /></div>
<div class='divblock'><input type='checkbox' id='use_entropy' /><label for='use_entropy'> Использовать энтропию для инициализации генератора случайных чисел.<br>
<font size='2'>Вам нужно будет подвигать и пощелкать мышкой и клавиатурой, чтобы получить максимально случайный пароль.</font></label></div>
<div class='divblock'><input id='genbutton' name='genbutton' type='button' value='Генерировать' /></div>
<div id='diventropy'><div id='text'></div><div id='counter'></div></div>
<div id='pass_cmnt'></div>
<div id='pass'></div>
<br><br>
<?
include('../footer.php');
?>
</body></html>
