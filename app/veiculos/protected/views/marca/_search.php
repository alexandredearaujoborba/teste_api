<?php
/* @var $this MarcaController */
/* @var $model Marca */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'marcaId'); ?>
		<?php echo $form->textField($model,'marcaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marcaNm'); ?>
		<?php echo $form->textField($model,'marcaNm',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marcaDtHr'); ?>
		<?php echo $form->textField($model,'marcaDtHr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userIdCad'); ?>
		<?php echo $form->textField($model,'userIdCad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->