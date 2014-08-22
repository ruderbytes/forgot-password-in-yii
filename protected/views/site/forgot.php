<?php
$this->pageTitle=Yii::app()->name . ' - Lupa Password';
$this->breadcrumbs=array(
	'Lupa Password',
);
?>
<?php if(Yii::app()->user->hasFlash('forgot')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('forgot'); ?>
</div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'forgot-form',
        'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
            Email : <input name="Lupa[email]" id="ContactForm_email" type="email">
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>