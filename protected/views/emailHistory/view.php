<?php
/* @var $this EmailHistoryController */
/* @var $model EmailHistory */

$this->breadcrumbs=array(
	'Email Histories'=>array('index'),
	$model->id_email_his,
);

?>

<h1>View EmailHistory #<?php echo $model->id_email_his; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_email_his',
		'u_name',
		'u_email',
		'u_message',
		'date_create',
	),
)); ?>
