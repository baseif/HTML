<div class="last">
    <div id="col-xs-12 col-md-8">    
     <?php
        $this->widget('booster.widgets.TbTabs', array(
            'type' => 'tabs',
            'placement' => 'right',
            'tabs' => array(
                array('label' =>  Yii::t('app','Extend Membership'), 'url' => array('/Client/extendmembership'), 'icon' => 'edit'),
                array('label' =>  Yii::t('app','Buy Credits'), 'url' => array('#'), 'icon' => 'pencil'),
                array('label' =>  Yii::t('app','Upgrade Membership'), 'url' => array('#'), 'icon' => 'lock')),
            'htmlOptions' => array('class' => 'operations'),
        ));?></div>
</div>

<h1> <?php echo  Yii::t('app','Account Overview') ?> </h1> 





<br><br><br>
 
    
    
    <div class="span-9">
        <div class="udetail-box">
            <h3 class="udash-header"> <?php echo  Yii::t('app','Personal Information') ?></h3>
            <img width="92" height="83" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dash-info.png">
            <table cellspacing="0" cellpadding="2" style="margin-top: 15px;">
                <tbody><tr><td><?php echo  Yii::t('app','Full name:') ?></td>
                        <td><?php echo $model->porfile_name_first.' '.$model->porfile_name_last; ?></td></tr><tr>
                    </tr><tr><td><?php echo  Yii::t('app','Email') ?>:</td>
                        <td><a href="mailto:<?php echo $model->user_email; ?>"><?php echo $model->user_email; ?></a></td></tr><tr>
                    </tr><tr><td><?php echo  Yii::t('app','Phone') ?>:</td>

                        <td><?php echo $model->porfile_phone; ?></td></tr><tr>
                    </tr><tr><td><?php echo  Yii::t('app','Address') ?></td>
                        <td><?php echo $model->porfile_address; ?></td></tr><tr>

                    </tr><tr><td style="color:red;" colspan="2"></td></tr>
                </tbody></table>

            <a title="Modify your account details" href="">
                <div style="margin-top: 45px;" class="us-button-edit-porfile"></div>
            </a>

        </div>
       </div>
<div class="span-9">
        <div class="udetail-box">
            <h3 class="udash-header"><?php echo  Yii::t('app','Company') ?></h3>
            <img width="92" height="83" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dash-company.png">
            <table cellspacing="0" cellpadding="2" style="margin-top: 15px;">
                <tbody>
                    <tr><td><?php echo  Yii::t('app','Company') ?></td>
                        <td><?php echo $model->porfile_camp_name; ?></td></tr>
                    <tr><td><?php echo  Yii::t('app','Function') ?>:</td>
                        <td><?php echo $model->porfile_camp_function; ?></td></tr>
                    <tr><td><?php echo  Yii::t('app','Country') ?>:</td>
                        <td><?php if ($model->porfile_camp_country){
                         echo IsoCountry::model()->GetCountryName($model->porfile_camp_country);
                        } 
                        ?></td></tr>
                    <tr><td><?php echo  Yii::t('app','Email') ?>:</td>
                        <td><?php echo $model->porfile_camp_email; ?></td></tr>
                    <tr><td><?php echo  Yii::t('app','Website') ?>:</td>
                        <td><?php echo $model->porfile_camp_website; ?></td></tr>
                    <tr><td><?php echo  Yii::t('app','COC') ?>:</td>
                        <td><?php echo $model->porfile_coc; ?></td></tr>
                    
                    </tbody></table>



        </div>
</div>
    <div class="span-9">

        <div class="udetail-box">
            <h3 class="udash-header"><?php echo  Yii::t('app','Account Statistics') ?></h3>
            <img width="92" height="83" src="<?php echo Yii::app()->request->baseUrl; ?>/images/dash-stats.png">
            <table cellspacing="0" cellpadding="2" style="margin-top: 15px;">
                <tbody>
                    <tr><td><?php echo  Yii::t('app','Type of Account') ?>:</td>
                        <td></td></tr>
                    <tr><td><?php echo  Yii::t('app','Days left') ?>:</td>
                        <td></td></tr>
                    <tr><td><?php echo  Yii::t('app','Press Releases Sent') ?>:</td>
                        <td></td></tr>
                    
                    </tbody></table>

            <div>

                <!-- <a href="/en/porfile/add-credits.html" title="Buy more credits">
                <div class="us-button-buy" style="margin-bottom: 6px; margin-top: 2px;"></div>
                </a> -->



            </div>

        </div>
    </div>
    </div>
