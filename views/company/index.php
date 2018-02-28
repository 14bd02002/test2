<?php

use yii\widgets\LinkPager;
?>

<table class="table table-striped">
    <thead>




        <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Бин</th>
            <th scope="col">Дата Образования</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($companies)): ?> 
            <?php foreach ($companies as $company): ?>
                <tr>
                    <th scope="row"><?= $company->CompanyID ?></th>
                    <td><a href = "<?= yii\helpers\Url::to(['company/view', 'CompanyID' => $company->CompanyID]) ?>"><?= $company->CompanyName ?></a></td>
                    <td><?= $company->BIN ?></td>
                    <td><?= $company->DateOfCreation ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>


    </tbody>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
    