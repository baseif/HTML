<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1 class="title"><?php echo  Yii::t('app',' How to use the Africa Press List');?> </h1>

<div class="row">
    <div class="span-16" >   
        <div class="homeparagraph">
            <h3><?php echo  Yii::t('app','My dashboard ');?></h3>
    <p><?php echo  Yii::t('app',' 
The My Dashboard page is your default landing page after you login to the Africa Press List.');?><br>
<br><?php echo  Yii::t('app',' 
The dashboard page is divided into 4 blocks, from here you can start a search for contacts right away, or edit your personal or company information.<br>
The account statistics page will give you an overview of all your credits options.<br>
');?>&nbsp;</p>
   </div>
    </div>
<div class="span-12" ><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/my_dashboard_small.jpg', ''); ?></div>
</div>
<hr />


<div class="row">
    <div class="span-16" >   
        <div class="homeparagraph">
            <h3><?php echo  Yii::t('app',' Buy credits');?></h3>
    <p><?php echo  Yii::t('app',' 
Upgrade your account via PayPal, this will upgrade to a full Pan African Account <br>
( 1 year extension )</p>');?>
<p><?php echo  Yii::t('app','
Get credits, select the package you would like to buy, after clicking the buy credits button you will be redirected to PayPal.');?></p>
<p> <?php echo  Yii::t('app','
My financials will give you an overview of the credits used per mailing, as well as a total amount of credits spent. ');?><br>
&nbsp;</p>
   </div>
    </div>
<div class="span-12" ><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/1_1_buy_credits_small.jpg', ''); ?></div>
</div>
<hr />


<div class="row">
    <div class="span-16" >   
        <div class="homeparagraph">
            <h3><?php echo  Yii::t('app',' Search');?></h3>
    <p><?php echo  Yii::t('app','
The search function gives you the option to search by country, field of interest, language, region, position of journalists and mediatypes.<br>
 ');?><br>
<?php echo  Yii::t('app',' After you click the search button you will be presented with the results of your search.<br>
');?><br>
<?php echo  Yii::t('app','The contacts in the search results are grouped under their respective companies or job types, this makes it easier to select, de-select, or later on edit groups of contacts. ');?></p>
 ');?><p>
<?php echo  Yii::t('app','Now you have found your contacts, it\'s time to organise them and group them into contact lists in the next step.');?><br>
&nbsp;</p>
   </div>
    </div>
<div class="span-12" ><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/step1.jpg', ''); ?></div>
</div>
<hr />

<div class="row">
    <div class="span-16" >   
        <div class="homeparagraph">
            <h3><?php echo  Yii::t('app','Create contact list(s)');?></h3>
    <p>
<?php echo  Yii::t('app','Contact lists help you to organise contacts by grouping them together. Making a specific contact list for your mailing, helps you in better targeting your audience.');?><br>
<br>
<?php echo  Yii::t('app','Creating contact lists is organising mail addresses for your convenience, it will not cost you credits and the system will not send them out unless you use these contact lists in a press release.');?><br>
<br>
<em>
<?php echo  Yii::t('app','Example: You want to send out a mailing to all people working in sports who speak or publish in french.');?></em><br>
<br>

<?php echo  Yii::t('app','First you complete the search with those specific filters.<br>
category : Sports | language : French and leave the other filters as they are.');?></p>
    
    <p>

<?php echo  Yii::t('app','When the search results show up you can select the people you would like to include in your list and then add them to a new contact list named “Sports people French” or something similar.<br>
<br>
The newly created contact list can be found by clicking on the my contact list button above the search options. You can later edit this contact list by adding or deleting people.');?><br>
<br>

<?php echo  Yii::t('app','Let"s examine the tools for creating a contact list.&nbsp;This screen shows the search result after a search, besides the search results a new toolbar shows up, this is where you create the contactlist(s)');?><br>
<br>

<?php echo  Yii::t('app','To free up some screen space, and make more room for the search results and contactlist creation you can hide the search options if you like.');?><br>
<br>

<?php echo  Yii::t('app','Now for the rest of the tools.&nbsp;This screen shows the various ways of selecting and filtering the search results.');?><br>
<br>

<?php echo  Yii::t('app','The checkboxes to the left of the category and names let you select an entire category of people or select individual contacts.');?></p>
    
   </div>
    </div>
<div class="span-12" ><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/step1.jpg', ''); ?>
    <br /><br /><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/step2.jpg', ''); ?>
    <br /><br /><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/step3.jpg', ''); ?>
    <br /><br /><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/step4.jpg', ''); ?>
</div>
</div>
<hr />
<div class="row">
    <div class="span-16" >   
        <div class="homeparagraph">
            <h3>
<?php echo  Yii::t('app','New press release');?></h3>
    <p>

<?php echo  Yii::t('app','Sender and reply account settings<br>
Tips on how to write a successful press-release,click here.');?><br>
&nbsp;</p>
   </div>
    </div>

</div>
<hr />

<div class="row">
    <div class="span-16" >   
        <div class="homeparagraph">
            <h3>
<?php echo  Yii::t('app','My press release');?></h3>
    
            
            <p>

<?php echo  Yii::t('app','The "My Press Release" page gives you an overview of all your press releases, they are seperated into several statuses.');?><br>
<strong><br>
<u>
<?php echo  Yii::t('app','New');?></u></strong><br>
<?php echo  Yii::t('app','Create a new press release');?><br>
<br>
<strong><u><?php echo  Yii::t('app','Scheduled');?></u></strong><br>
<?php echo  Yii::t('app','All press releases waiting in queue that will be sent out on a specific date');?>.<br>
<br>
<strong><u><?php echo  Yii::t('app','Draft');?></u></strong><br>
<?php echo  Yii::t('app','All press releases that are not scheduled, waiting for further adjustments.&nbsp;You can edit a draft release by clicking on its name, you can then make edits and save it as a draft again, or change the publication type and send out the press release.');?><br>
<br>
<strong><u>
<?php echo  Yii::t('app','Sent releases');?></u></strong><br>

<?php echo  Yii::t('app','Sent releases shows you a list of all sent releases with a status. ');?><br>
<strong><u><br>

<?php echo  Yii::t('app','Status completed ');?></u></strong><br>

<?php echo  Yii::t('app',' The press release was sent out successfully, you can see the statistics of this release by clicking on the name.&nbsp;The newly opened page will show you when it was sent out, how many contacts where mailed and shows you a map of Africa with views per country.&nbsp;Here you can also download the press release as en .eml file.');?><br>
<strong><u><br>
<?php echo  Yii::t('app',' Status failed');?></u></strong><br>
<?php echo  Yii::t('app','Something obviously went wrong sending this press release.&nbsp;Click on the name of the press release that failed to see more details about the error.&nbsp;Some errors are self explanatory for example: ');?></p>
 <ul>
<li>
<?php echo  Yii::t('app','failed (global_error: Zero contacts were mailed.)');?></li>
</ul>
            
 <p>
This one can simply be solved by editing this release, including a contactlist with your press release, and then re-sending it.<br>
<br>
&nbsp;</p>           
   </div>
    </div>
<div class="span-12" ><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/3_1_my_pressrelease-small.jpg', ''); ?></div>
</div>
<hr />
<div class="row">
    <div class="span-16" >   
        <div class="homeparagraph">
            <p>For more complicated errors, further guidance or assistance</p> 
   </div>
    </div>

</div>
