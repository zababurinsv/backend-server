<?php
/**
 * User: Sergey Zababurin
 * Date: 14.04.2019
 * Time: 15:00
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('Ваше имя') ?>

<?= $form->field($model, 'email')->label('Ваш Email') ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
