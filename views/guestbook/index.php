<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Guestbook</h1>

<div class="guestbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->input('email') ?>
    <?= $form->field($model, 'message')->textarea(['rows' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึกข้อความ', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<hr>

<div class="guestbook-entries">
    <h2>ข้อความทั้งหมด</h2>

    <?php if (!empty($entries)): ?>
        <?php foreach ($entries as $entry): ?>
            <div class="card" style="margin-bottom: 10px; padding: 10px; border: 1px solid #ccc;">
                <strong><?= Html::encode($entry->name) ?></strong>
                <p><?= nl2br(Html::encode($entry->message)) ?></p>
                <span style="color: gray;"><?= Html::encode($entry->created_at) ?></span>

            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>ยังไม่มีข้อความ</p>
    <?php endif; ?>
</div>