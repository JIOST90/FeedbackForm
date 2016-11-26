<?php
/* @var $this SiteController */

$this->pageTitle = 'Страница обратной связи';

?>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm',array(
              'id' => 'check-order-form',
              'stateful' => true,
              'enableClientValidation' => TRUE,
              'clientOptions' => array(
                   'hideErrorMessage'  => true,
              ),
         )); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->label($model,'u_name'); ?>
        <?php echo $form->textField($model,'u_name') ?>
        <?php echo $form->error($model,'u_name') ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'u_email'); ?>
        <?php echo $form->textField($model,'u_email') ?>
        <?php echo $form->error($model,'u_email') ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'u_message'); ?>
        <?php echo $form->textArea($model,'u_message'); ?>
        <?php echo $form->error($model,'u_message') ?>
    </div>

    <?php if(CCaptcha::checkRequirements()){ ?>
        <?= CHtml::activeLabelEx($model, 'verifyCode') ?>
        <?php $this->widget('CCaptcha') ?>
        <?= CHtml::activeTextField($model, 'verifyCode') ?>
    <?php } ?>

    <div class="row submit">
        <?php echo CHtml::submitButton('Отправить'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>

