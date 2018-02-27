<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
foreach ($countries2 AS $country):
    echo $country->name;
    echo "<br>";
endforeach;
?>