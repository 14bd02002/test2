<?php

use yii\widgets\LinkPager;

$this->title = "Поиск $q"
?>
<?php if ($q == "") { ?>
    <h2> Пустой запрос! </h2>
<?php } else { ?>
    <h2> Результаты поиска: <?= $q ?> </h2>

    <?php if (!$companies) { ?>
        <p> Не найдено</p>
    <?php } else { ?>
        <?php foreach ($companies as $company) ?>
        <tr>
            <th scope="row"><?= $company->CompanyID ?></th>
            <td><a href = "<?= yii\helpers\Url::to(['company/view', 'CompanyID' => $company->CompanyID]) ?>"><?= $company->CompanyName ?></a></td>
            <td><?= $company->BIN ?></td>
            <td><?= $company->DateOfCreation ?></td>
        </tr>
    <?php } ?>

<?php } ?>





