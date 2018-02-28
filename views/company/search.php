<?php

use yii\widgets\LinkPager;

$this->title = "Поиск $q"
?>
<table class="table table-striped">
    <thead>




        <tr>
            <th scope="col">Наименование</th>
            <th scope="col">Бин</th>
            <th scope="col">Дата Образования</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($q == "") { ?>
        <?php } else { ?>
            <?php if (!$companies) { ?>               
            <?php } else { ?>
                <?php foreach ($companies as $company) ?>
                <tr>
                    <td><a href = "<?= yii\helpers\Url::to(['company/view', 'CompanyID' => $company->CompanyID]) ?>"><?= $company->CompanyName ?></a></td>
                    <td><?= $company->BIN ?></td>
                    <td><?= $company->DateOfCreation ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
    






