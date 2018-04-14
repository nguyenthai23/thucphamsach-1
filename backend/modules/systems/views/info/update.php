<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\systems\models\Info */

$this->title = 'Cập nhật thông tin công ty';
$this->params['breadcrumbs'][] = ['label' => 'Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-updatecol-md-12 mar_top_20">

    <fieldset style="border: 1px solid #0093DD; border-radius: 10px; ">
        <legend style="text-align: center;  color: #0093DD; font-size: 15px;border-bottom: 0px; width: auto;"><h3 class="add-color-content-header"><?= Html::encode($this->title) ?></h3></legend>
        <div class="mapping-content-updateform">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </fieldset>

</div>
