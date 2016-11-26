<?php
/* @var $this EmailHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'История сообщений',
);

?>

<h1>Email Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
