<?php
use yii\widgets\LinkPager;

?>
<table class="table table-striped">
  <thead>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
    </form>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Наименование</th>
      <th scope="col">Бин</th>
      <th scope="col">Дата Образования</th>
    </tr>
  </thead>
  <tbody>
    <?php if(!empty($companies)): ?> 
        <?php foreach($companies as $company): ?>
          <tr>
            <th scope="row"><?=$company->CompanyID?></th>
            <td><a href = "#"><?=$company->CompanyName?></a></td>
            <td><?=$company->BIN?></td>
            <td><?=$company->DateOfCreation?></td>
          </tr>
         <?php endforeach; ?>
    <?php endif; ?>
      
    
  </tbody>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
    