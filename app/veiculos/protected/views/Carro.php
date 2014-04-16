<?php
/* @var $this CarroController */
/* @var $model Carro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carro-Carro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marcaId'); ?>
		<?php echo $form->textField($model,'marcaId'); ?>
		<?php echo $form->error($model,'marcaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroModelo'); ?>
		<?php echo $form->textField($model,'carroModelo'); ?>
		<?php echo $form->error($model,'carroModelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroAno'); ?>
		<?php echo $form->textField($model,'carroAno'); ?>
		<?php echo $form->error($model,'carroAno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroFoto'); ?>
		<?php echo $form->textField($model,'carroFoto'); ?>
		<?php echo $form->error($model,'carroFoto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroVlr'); ?>
		<?php echo $form->textField($model,'carroVlr'); ?>
		<?php echo $form->error($model,'carroVlr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroParcelas'); ?>
		<?php echo $form->textField($model,'carroParcelas'); ?>
		<?php echo $form->error($model,'carroParcelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroDtHr'); ?>
		<?php echo $form->textField($model,'carroDtHr'); ?>
		<?php echo $form->error($model,'carroDtHr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userIdCad'); ?>
		<?php echo $form->textField($model,'userIdCad'); ?>
		<?php echo $form->error($model,'userIdCad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroVlrTotal'); ?>
		<?php echo $form->textField($model,'carroVlrTotal'); ?>
		<?php echo $form->error($model,'carroVlrTotal'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->