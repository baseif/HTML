<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Registration");
$this->breadcrumbs = array(
    UserModule::t("Registration"),
);
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/glyphicon.js"></script>
<h1><?php echo UserModule::t("Registration"); ?></h1>

<?php if (Yii::app()->user->hasFlash('registration')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('registration'); ?>
    </div>
<?php else: ?>
    <span class="col-sm-10">
 <?php
        $this->widget(
                'booster.widgets.TbPanel', array(
            'title' => 'Add Yourself As A Journalist',
            'context' => 'primary',
            'headerIcon' => 'user',
            'content' => 'You, being a journalist, freelancer, '
            . 'blogger or employed by a publisher, '
            . 'can register yourself with the Africa Press List.'
            . ' We will check your data and add you to the list.'
            . ' If you are included in our list, '
            . 'you will receive automatically targeted press releases from companies and organizations with a special interest in Africa.'
            . ' Furthermore, we will add you to the database through which interested companies can search for your services.'
            . ' It is nice if we can do some promotion for you in return.',
            'htmlOptions' => array('class' => 'col-sm-15'),
                )
        )
        ?>  </span>
    <div class="form col-sm-10">
        <?php
        $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'registration-form',
            'enableAjaxValidation' => true,
            'type' => 'horizontal',
            //  'disableAjaxValidationAttributes' => array('RegistrationForm_verifyCode'),
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'htmlOptions' => array('class' => 'col-sm-6', 'class' => 'well'),
        ));
        ?>

        <p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

        <?php  echo $form->errorSummary(array($model, $contact));  ?>

        <div class="panel panel-footer">
            <div class="panel-heading">
                <!--<h4 class="panel-title">-->
                <div id="Heading-Advert" data-toggle="collapse" class="btn btn-primary accordion-heading"data-parent="#accordion" href="#Advert">

                    <div class="pull-left"><div id="Glyp-Advert" class="glyphicon glyphicon-chevron-up"></div></div>&nbsp; Login information  &nbsp;  <i class="fa fa-key fa-lg"></i>
                </div>
                <!--</h4>-->
            </div>
            <div id="Advert" class="panel-collapse collapse in">
                <div class="panel-body">
                            <div class="row">
                                <?php // echo $form->labelEx($model, 'username');  ?>
                                <?php
                                echo $form->textFieldGroup($model, 'username', array('size' => 60, 'maxlength' => 255,
                                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                                ));
                                ?>
                                <?php
                                echo $form->passwordFieldgROUP($model, 'password', array('size' => 60, 'maxlength' => 255,
                                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                                    'hint' => '<strong>Note:</strong> Minimum is 6 characters and Must contain at least one special character.'
                                ));
                                ?>

                            </div>

                            <div class="row">
                                <?php //echo $form->labelEx($model, 'verifyPassword'); ?>
                                <?php
                                echo $form->passwordFieldGroup($model, 'verifyPassword', array('size' => 60, 'maxlength' => 255,
                                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                                ));
                                ?>
    <?php // echo $form->error($model, 'verifyPassword'); ?>
                            </div>


                            <div class="row">
                                <?php //echo $form->labelEx($model, 'email'); ?>
                                <?php
                                echo $form->textFieldGroup($model, 'email', array('size' => 60, 'maxlength' => 255,
                                    'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
                                ));
                                ?>
  </div> 

            </div>
        </div>
    </div>

            <?php $this->renderPartial('/../../../views/contact/_form', array('model' => $contact, 'form' => $form,'categories' => $categories, 'iso_language'=>$iso_language, 'company'=>$company)); ?>
            <!--//('/../../../views/contact/_form'-->


    <div class="panel panel-footer">
<!--<fieldset>-->
                <?php if (UserModule::doCaptcha('registration')): ?>
                <div class="row">
        <?php // echo $form->labelEx($model, 'verifyCode'); ?>

        <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model, 'verifyCode'); ?>
                <?php // echo $form->error($model, 'verifyCode'); ?>

                    <p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
                        <br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>
                </div>
    </div>
            <?php endif; ?>

             <div class="row">
	<div class="buttons pull-right" >
		<?php $this->widget('booster.widgets.TbButton', array('buttonType' => 'submit',
                    'size' => 'large',
                    'context' => 'success', 
                    'label' =>  (UserModule::t('Register')),
//                );
                        
                      )) ;?>
            
          
	</div>  
	</div>
    <?php $this->endWidget(); ?>
        </div><!-- form -->
<?php endif; ?>