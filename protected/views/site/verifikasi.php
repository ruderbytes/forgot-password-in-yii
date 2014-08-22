<?php
$this->pageTitle=Yii::app()->name . ' - Lupa Password';
$this->breadcrumbs=array(
	'Ganti Password',
);
?>
<h2>Hai! Hissasiburidana <?php echo $model->nama_asli;?> :v</h2>
<div class="form">
    <h2>Ganti Password</h2>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Ganti-form',
)); ?>

	<div class="row">
            New Password : <input name="Ganti[password]" id="ContactForm_email" type="password">
            <input name="Ganti[tokenhid]" id="ContactForm_email" type="hidden" value="<?php echo $model->token?>">
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->