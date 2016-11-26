<?php
/* @var $this EmailHistoryController */
/* @var $data EmailHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_email_his')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_email_his), array('view', 'id'=>$data->id_email_his)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_name')); ?>:</b>
	<?php echo CHtml::encode($data->u_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_email')); ?>:</b>
	<?php echo CHtml::encode($data->u_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_message')); ?>:</b>
	<?php echo CHtml::encode($data->u_message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_create')); ?>:</b>
	<?php echo CHtml::encode($data->date_create); ?>
	<br />


</div>