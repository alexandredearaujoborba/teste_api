<?php
/* @var $this CarroController */
/* @var $model Carro */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jui/js/jquery-ui.min.js" ></script>
<script type="text/javascript" src="js/jquery.mask.js" ></script>
<script type="text/javascript" src="js/jquery.price_format.1.7.min.js" ></script>
<script>
    $(function(){
        //alert('Jquery');
        
        $("input[id=Carro_carroVlr]").priceFormat({
            prefix: '',
            centsSeparator: ',',
            thousandsSeparator: '.'
        });
        
        $("input[id=Carro_carroVlrTotal]").priceFormat({
            prefix: '',
            centsSeparator: ',',
            thousandsSeparator: '.'
        });
        
        $("input[id*='Carro_carroParcelas_']").click (function() {
           if( $("input[id=Carro_carroVlr]").val()!=""){

                //Calcula Juros Simples
                var principal = parseFloat($("input[id=Carro_carroVlr]").val());
                var taxa = parseFloat(0.007);
                var meses =  parseInt($(this).val());

                var juros = principal * taxa * meses;
                var montante = principal + juros;

               alert(montante);
               
               $("input[id=Carro_carroVlrTotal]").val(montante);
           }
            // alert($(this).val());
            /*
            var current_value = $('.toggle input:checked').val();
            if (current_value == "Yes"){
                $('.toggle-form-wrapper').show();
            } else {
                $('.toggle-form-wrapper').hide();
            }
            */
        });
        
    });
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carro-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marcaId'); ?>
		<?php # echo $form->textField($model,'marcaId'); ?>
		<?php # echo $form->dropDownList($model, 'marcaId', array(1=>'test1', 2=>'test2')); ?>
		<?php
                $records = Marca::model()->findAll();
                
                $aListMarca = CHtml::listData($records, 'marcaId', 'marcaNm');//lista as marcas 
                array_unshift($aListMarca, "Selecione uma Marca."); //inclui na primeira posicao array
                echo $form->dropDownList($model, 'marcaId', $aListMarca);  //gera dropDown dinamico

                ?>
		<?php echo $form->error($model,'marcaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroModelo'); ?>
		<?php echo $form->textField($model,'carroModelo',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'carroModelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroAno'); ?>
		<?php echo $form->textField($model,'carroAno',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'carroAno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroFoto'); ?>
		<?php echo $form->fileField($model,'carroFoto'); ?>
		<?php echo $form->error($model,'carroFoto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroVlr'); ?>
		<?php echo $form->textField($model,'carroVlr'); ?>
		<?php echo $form->error($model,'carroVlr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroParcelas'); ?>
		<?php #echo $form->textField($model,'carroParcelas'); ?>
                <?php echo $form->radioButtonList($model,'carroParcelas',Carro::model()->aCarroParc, array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;')); ?>
		<?php echo $form->error($model,'carroParcelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carroVlrTotal'); ?>
		<?php echo $form->textField($model,'carroVlrTotal'); ?>
		<?php echo $form->error($model,'carroVlrTotal'); ?>
	</div>

	<div class="row">
		<?php #echo $form->labelEx($model,'carroDtHr'); ?>
		<?php echo $form->hiddenField($model,'carroDtHr'); ?>
		<?php #echo $form->error($model,'carroDtHr'); ?>
	</div>

	<div class="row">
		<?php #echo $form->labelEx($model,'userIdCad'); ?>
		<?php echo $form->hiddenField($model,'userIdCad'); ?>
		<?php #echo $form->error($model,'userIdCad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->