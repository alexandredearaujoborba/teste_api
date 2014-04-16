<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userId), array('view', 'id'=>$data->userId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userNm')); ?>:</b>
	<?php echo CHtml::encode($data->userNm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userPass')); ?>:</b>
	<?php echo CHtml::encode($data->userPass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userEmail')); ?>:</b>
	<?php echo CHtml::encode($data->userEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userTipo')); ?>:</b>
	<?php echo CHtml::encode($data->userTipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userDtHr')); ?>:</b>
	<?php echo CHtml::encode($data->userDtHr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userIdCad')); ?>:</b>
	<?php echo CHtml::encode($data->userIdCad); ?>
	<br />


</div>