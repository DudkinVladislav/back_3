<html lang="ru">
  <head>
    <meta charset="utf-8">
<style>body { margin:0;
	display:flex;
	flex-direction:column;
text-align:center;
background-color:#ff9911;}
header {display:flex;
flex-direction: column;
text-align: center;
background-color:#dc3545}</style>
    <title>Задание 3</title>
  </head>
  <body>
<header>
<p>Здравствуйте, заполните анкету, чтобы мы могли сохранить ваши данные.</p>
<p>Пожалуйста, указывайте только достоверную информацию.</p>
</header>
	<form action="" method="POST">
      <label>
        Имя:
	<br>
        <input name="fio" value="Введите имя">
	</label>
	<br>
      	<label>
         email:<br>
        <input name="email" value="Введите свой email" type="email">
     	</label>
	<br>
      	<label>
        Дата рождения:<br>
        <input name="date" value="2022-01-31" type="date">
      	</label>
	<br>
	Пол:
	<br> 
      	<label>
	  <input type="radio" checked="checked" name="pol" value="woman">
        Женский
	</label>
	<br>
        <label>
	  <input type="radio" name="pol" value="man">
        Мужской
	</label>
	<br>
	Количество конечностей:
	<br>
	<label>
	  <input type="radio" checked="checked" name="parts" value="1">
        1 конечность
	</label>
	<label>
	  <input type="radio" checked="checked" name="parts" value="2">
        2 конечности
	</label>
	<label>
	  <input type="radio" checked="checked" name="parts" value="3">
        3 конечности
	</label>
	<label>
	  <input type="radio" name="parts" value="4">
        4 конечности
	</label>
	<br>
     	<label>
	Сверхспособности:
	<br>
        <select name="abilities[]" multiple="true">
          <option value="immortality">Бессмертие</option>
          <option value="intangibility">Прохождение сквозь стены</option>
          <option value="levitation">Левитация</option>
        </select>
      	</label>
	<br>
	<label>
	Биография:
	<br>
        <textarea name="biography" style="margin: 0px; height: 69px; width: 180px;">Расскажите о своей жизни</textarea>
      	</label>
	<br>
      	<label>
	<input type="checkbox" checked="checked" name="check">
       С контрактом ознакомлен(а)
	</label>
	<br>
      	<input type="submit" value=Отправить>
    </form>
<img src="./img/create.png" alt="creation">
<img src="./img/rows.png" alt="rows">
</body></html>