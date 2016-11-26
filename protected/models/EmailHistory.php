<?php

/**
 * This is the model class for table "email_history".
 *
 * The followings are the available columns in table 'email_history':
 * @property integer $id_email_his
 * @property string $u_name
 * @property string $u_email
 * @property string $u_message
 * @property string $date_create
 */
class EmailHistory extends CActiveRecord
{
    public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'email_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('u_name, u_email, u_message', 'required', 'message' => 'Поле <b>"{attribute}"</b> должно быть заполнено'),
			array('u_name, u_email', 'length', 'max'=>50, 'message' => 'Поле <b>"{attribute}"</b> превышает допустимое количество символов (50)'),
            array('u_email', 'email', 'message' => 'Поле <b>"{attribute}"</b> не является действительным адресом электронной почты'),
			array('u_message', 'safe'),
            array(
                  'verifyCode',
                  'captcha',
                  'allowEmpty' => !CCaptcha::checkRequirements(),
                  'message' => 'Не совпадает код подтверждения!',
             ),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('u_name, u_email, u_message, date_create', 'safe', 'on'=>'search'),
        );
	}



	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_email_his' => 'A I',
			'u_name' => 'ФИО пользователя',
			'u_email' => 'Email для связи',
			'u_message' => 'Сообщение от пользователя',
			'date_create' => 'Дата создания записи',
            'verifyCode' => 'Код проверки',
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

		$criteria->compare('id_email_his',$this->id_email_his);
		$criteria->compare('u_name',$this->u_name,true);
		$criteria->compare('u_email',$this->u_email,true);
		$criteria->compare('u_message',$this->u_message,true);
		$criteria->compare('date_create',$this->date_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmailHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
