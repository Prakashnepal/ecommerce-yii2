<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/** @var yii\web\View $this */
/** @var common\models\Products $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'description')->widget(CKEditor::class, [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ])
    ?>

    <?=
    $form->field($model, 'image', [
        'template' => '
          <div class="custom-file">
          {input}
          {label}
          {error}
          </div>  
      ',
        'labelOptions' => ['class' => 'custom-file-label'],
        'inputOptions' => ['class' => 'custom-file-input'],
    ])->fileInput(['type' => 'file'])
    ?>

    <?=
    $form->field($model, 'price')->textInput([
        'maxlength' => true,
        'type' => 'number'
    ])
    ?>

    <?= $form->field($model, 'status')->checkbox() ?>


  

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
