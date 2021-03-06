<?php

/**
 * This is the model class for table "iso_language".
 *
 * The followings are the available columns in table 'iso_language':
 * @property string $lang_iso
 * @property string $language
 * @property string $Native_language
 *
 * The followings are the available model relations:
 * @property ChannelTranslation[] $channelTranslations
 * @property ContactLanguage[] $contactLanguages
 * @property Function[] $functions
 */
class IsoLanguage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'iso_language';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang_iso', 'length', 'max'=>3),
			array('language, Native_language', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('lang_iso, language, Native_language', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'channelTranslations' => array(self::HAS_MANY, 'ChannelTranslation', 'lang_iso'),
			'contactLanguages' => array(self::HAS_MANY, 'ContactLanguage', 'lang_iso'),
			'functions' => array(self::MANY_MANY, 'Function', 'function_translation(lang_iso, function_id)'),
                        'contacts' => array(self::MANY_MANY, 'Contact', 'contact_category(cat_id, contact_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'lang_iso' => 'Language',
			'language' => 'Language',
			'Native_language' => 'Native Language',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('lang_iso',$this->lang_iso,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('Native_language',$this->Native_language,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IsoLanguage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function behaviors() {
        return array(
            'activerecord-relation' => array(
                'class' => 'ext.yiiext.behaviors.activerecord-relation.EActiveRecordRelationBehavior',
            ),
        );
    }
}
