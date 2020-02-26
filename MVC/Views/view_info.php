<?php require "view_begin.php"; ?>
<ul>
  <?php foreach($infoNobel as $k => $v): ?>
    <li> <?= $k ?> : <?= $v ?> </li>
  <?php endforeach ?>
</ul>
<a href=http://localhost/~11807951/MVC/?controller=set&action=form_update&id=<?php echo $infoNobel['id']?>> Modifier </a>
<?php require "view_end.php"?>
