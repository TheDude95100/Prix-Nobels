<?php require "view_begin.php"; ?>
<h1> Modifier un prix Nobel </h1>
<form action = "?controller=set&action=update" method="post">
  <p> <label> Id: <input type="text" name="id" <? echo 'value=\'' . $_GET['id'] . "'" ?>/></label></p>
  <p> <label> Name: <input type="text" name="name"/><? echo $infoNobel['name']?> </label> </p>
  <p> <label> Year: <input type="text" name="year"/> <? echo $infoNobel['year']?> </label></p>
  <p> <label> Birth Date: <input type="text" name="birthdate"/><? echo $infoNobel['birthdate']?> </label> </p>
  <p> <label> Birth Place: <input type="text" name="birthplace"/> <? echo $infoNobel['birthplace']?> </label></p>
  <p> <label> Country: <input type="text" name="county"/></label> <? echo $infoNobel['county']?> </p>
  <p>
    <p>
      <label> <input type="radio" name="category" value="chemistry" <?php if ($infoNobel['category'] == 'chemistry'){ echo 'checked';}?> /> Chemistry </label>
      <label> <input type="radio" name="category" value="economics" <?php if ($infoNobel['category'] == 'economics'){ echo 'checked';}?> /> Economics </label>
      <label> <input type="radio" name="category" value="literature" <?php if ($infoNobel['category'] == 'literature'){ echo 'checked';}?>/> Literature </label>
      <label> <input type="radio" name="category" value="medicine" <?php if ($infoNobel['category'] == 'medicine'){ echo 'checked';}?>/> Medicine </label>
      <label> <input type="radio" name="category" value="peace" <?php if ($infoNobel['category'] == 'peace'){ echo 'checked';}?>/> Peace </label>
      <label> <input type="radio" name="category" value="physics" <?php if ($infoNobel['category'] == 'physics'){ echo 'checked';}?>/> Physics </label>

  </p>
</p>
  <textarea name="motivation" cols="70" rows="10"><?php echo $infoNobel['motivation']?></textarea>
  <p>  <input type="submit" value="Update database"/> </p>
</form>
<?php require "view_end.php"; ?>
