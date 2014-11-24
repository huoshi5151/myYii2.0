<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 ?>
<?php $form=ActiveForm::begin();?>
	<?php echo $form->field($model,'name'); ?>
	<?php echo $form->field($model,'email'); ?>
	<div class="form-group">
		<?php echo Html::submitButton('submit',['class'=>'btn btn-primary']); ?>
	</div>

<?php ActiveForm::end(); ?>