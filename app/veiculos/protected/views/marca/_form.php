<?php
/* @var $this MarcaController */
/* @var $model Marca */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jui/js/jquery-ui.min.js" ></script>
<script type="text/javascript" src="js/jquery.mask.js" ></script>
<script type="text/javascript" src="js/jquery.price_format.1.7.min.js" ></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'marca-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marcaNm'); ?>
		<?php echo $form->textField($model,'marcaNm',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'marcaNm'); ?>
	</div>

	<div class="row">
		<?php #echo $form->labelEx($model,'marcaDtHr'); ?>
		<?php #echo $form->textField($model,'marcaDtHr'); ?>
                <?php echo $form->hiddenField($model,'marcaDtHr'); ?>
		<?php #echo $form->error($model,'marcaDtHr'); ?>
	</div>

	<div class="row">
		<?php #echo $form->labelEx($model,'userIdCad'); ?>
		<?php #echo $form->textField($model,'userIdCad'); ?>
                <?php echo $form->hiddenField($model,'userIdCad'); ?>
		<?php #echo $form->error($model,'userIdCad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->