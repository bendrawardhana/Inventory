<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Barangmasuk */

$this->title = 'Update Barang ';
$this->params['breadcrumbs'][] = ['label' => 'Barangmasuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barangmasuk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
