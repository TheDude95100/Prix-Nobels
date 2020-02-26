
    <?php require("view_begin.php"); ?>
    <h1> List of the last 25 Nobel prizes </h1>
    <table><tr> <th>Name</th> <th>Category</th> <th>Year</th> <th class="sansBordure"></th> <th class="sansBordure"></th><th class="sansBordure"> </th> <th class="sansBordure"> </th></tr>
    <?php foreach($res as $v): ?>
      <tr>
        <td> <a href=http://localhost/~11807951/MVC/?controller=list&action=info&id=<?php echo $v['id'] ?>>  <?=$v['name'] ?> </a></td>
        <td> <?=$v['category'] ?></td>
        <td> <?=$v['year'] ?></td>
        <td> <a href=http://localhost/~11807951/MVC/?controller=set&action=remove&id=<?php echo $v['id'] ?>> <img class="icone" src="Content/img/remove-icon.png" alt="Remove button"></td>
        <td> <a href=http://localhost/~11807951/MVC/?controller=set&action=form_update&id=<?php echo $v['id'] ?>> <img class="icone" src="Content/img/edit-icon.png" alt="Remove button"></td>
      </tr>
    <?php endforeach ?>
    </table>
   <?php require("view_end.php"); ?>
