<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1><?php echo  Yii::t('app',' My Space ');?></h1>



<div class="form formlogin">
    <div class="rows">
         
       
        
       
        <div class="span-6">
              <h3><?php echo  Yii::t('app','As Client  ');?></h3> 
<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
     //   'id' => 'verticalForm',
    	'type' => 'horizontal',
        'htmlOptions' => array('class' => 'well'), // for inset effect

	'id'=>'login1-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
<!--		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>-->
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
            <?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget(    'booster.widgets.TbButton',
                        array('buttonType' => 'submit', 'label' => 'Log in')
                ); ?>
	</div>

<?php $this->endWidget(); ?>
        </div>
        
        <div class="span-5" ><p style="visibility: hidden"><?php echo  Yii::t('app',' as journaists ');?></p></div>
        
        <div class="span-6 journalist">
            
             <h3 style="margin-left:20px"><?php echo  Yii::t('app',' As Journalist ');?></h3>  
<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
     //   'id' => 'verticalForm',
    	'type' => 'horizontal',
        'htmlOptions' => array('class' => 'well'), // for inset effect

	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
<!--		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>-->
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
            <?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget(    'booster.widgets.TbButton',
                        array('buttonType' => 'submit', 'label' => 'Log in')
                ); ?>
	</div>

<?php $this->endWidget(); ?>
        </div>
        
         <div class="span-6">
             <div style="margin-top: 90px;">
            
    <?php $this->widget('ext.hoauth.widgets.HOAuth'); ?>    
    </div>
             </div>
        
        
        </div>
    </div>
<!-- form -->
