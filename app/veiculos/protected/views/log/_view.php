<?php
/* @var $this LogController */
/* @var $data Log */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('logId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->logId), array('view', 'id'=>$data->logId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logDtHr')); ?>:</b>
	<?php echo CHtml::encode($data->logDtHr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userIdCad')); ?>:</b>
	<?php echo CHtml::encode($data->userIdCad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userTipo')); ?>:</b>
	<?php echo CHtml::encode($data->userTipo); ?>
	<br />


</div>