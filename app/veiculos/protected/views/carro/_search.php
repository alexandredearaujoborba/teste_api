<?php
/* @var $this CarroController */
/* @var $model Carro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'carroId'); ?>
		<?php echo $form->textField($model,'carroId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marcaId'); ?>
		<?php echo $form->textField($model,'marcaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carroModelo'); ?>
		<?php echo $form->textField($model,'carroModelo',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carroAno'); ?>
		<?php echo $form->textField($model,'carroAno',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carroFoto'); ?>
		<?php echo $form->textField($model,'carroFoto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carroVlr'); ?>
		<?php echo $form->textField($model,'carroVlr',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carroParcelas'); ?>
		<?php echo $form->textField($model,'carroParcelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carroVlrTotal'); ?>
		<?php echo $form->textField($model,'carroVlrTotal',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carroDtHr'); ?>
		<?php echo $form->textField($model,'carroDtHr'); ?>
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