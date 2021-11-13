< ?php
include 'book.php';
foreach($gb as $text) {?>
  < ?=($text)?><br /><br />
< ?}?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST" id="form">
  <input type="text" name="name" placeholder="Имя" id="name"/>
  <textarea name="text" placeholder="Текст"></textarea><br />
  <input type="submit" name="add" value="Добавить запись"/>
</form>
