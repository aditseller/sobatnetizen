<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hit".
 *
 * @property int $id_hit
 * @property string $user_ip
 * @property string $link
 * @property string $combine
 */
class Hit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_ip', 'link', 'combine','urlpost'], 'required'],
            [['user_ip'], 'string', 'max' => 20],
            [['link', 'combine'], 'string', 'max' => 500],
            [['combine'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hit' => 'Id Hit',
            'user_ip' => 'User Ip',
            'link' => 'Link',
            'combine' => 'Combine',
        ];
    }
}
