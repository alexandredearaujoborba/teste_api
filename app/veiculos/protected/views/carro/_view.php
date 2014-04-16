<?php
/* @var $this CarroController */
/* @var $data Carro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('carroId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->carroId), array('view', 'id'=>$data->carroId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marcaId')); ?>:</b>
	<?php echo CHtml::encode($data->marcaId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carroModelo')); ?>:</b>
	<?php echo CHtml::encode($data->carroModelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carroAno')); ?>:</b>
	<?php echo CHtml::encode($data->carroAno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carroFoto')); ?>:</b>
	<?php echo CHtml::encode($data->carroFoto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carroVlr')); ?>:</b>
	<?php echo CHtml::encode($data->carroVlr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carroParcelas')); ?>:</b>
	<?php echo CHtml::encode($data->carroParcelas); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('carroVlrTotal')); ?>:</b>
	<?php echo CHtml::encode($data->carroVlrTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carroDtHr')); ?>:</b>
	<?php echo CHtml::encode($data->carroDtHr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userIdCad')); ?>:</b>
	<?php echo CHtml::encode($data->userIdCad); ?>
	<br />

	*/ ?>

</div>