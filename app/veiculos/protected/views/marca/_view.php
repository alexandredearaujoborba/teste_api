<?php
/* @var $this MarcaController */
/* @var $data Marca */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('marcaId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->marcaId), array('view', 'id'=>$data->marcaId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marcaNm')); ?>:</b>
	<?php echo CHtml::encode($data->marcaNm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marcaDtHr')); ?>:</b>
	<?php echo CHtml::encode($data->marcaDtHr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userIdCad')); ?>:</b>
	<?php echo CHtml::encode($data->userIdCad); ?>
	<br />


</div>