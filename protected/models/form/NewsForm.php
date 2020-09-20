<?php

/**
 * Created by PhpStorm.
 * User: purwaren
 * Date: 3/18/16
 * Time: 13:04
 */
class NewsForm extends CFormModel
{
    public $title;
    public $permalink;
    public $summary;
    public $content;
    public $banner;
    public $cat_id;
    public $flag_published;
    public $data;
    public $isNewRecord = true;
    public $tag;
    public $video_url;
    public $id;

    public function rules()
    {
        return array(
            array('title, permalink, summary, content, banner, cat_id, flag_published', 'required'),
            array('tag, video_url', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'title' => 'Judul Berita',
            'permalink' => 'Permalink (tautan rapih)',
            'summary' => 'Ringkasan Berita',
            'content' => 'Isi Berita',
            'banner' => 'Banner',
            'cat_id' => 'Kategori',
            'flag_published' => 'Status Publikasi',
            'tag' => 'Tag',
            'video_url' => 'Video'
        );
    }

    public static function getAllFlagPublishedOptions()
    {
        return array(
            NewsCustom::FLAG_PUBLISHED_ACTIVE => 'Ya',
            NewsCustom::FLAG_PUBLISHED_INACTIVE => 'Tidak'
        );
    }

    public function save()
    {
        if ($this->validate()) {
            $model = new NewsCustom();
            $model->attributes = $this->attributes;
            $model->created_at = new CDbExpression('NOW()');
            $model->created_by = Yii::app()->user->getName();
            if ($model->save()) {
                $this->data = $model;
                return true;
            } else {
                $this->addErrors($model->getErrors());
                return false;
            }
        }
    }

    public function update() 
    {
        if ($this->validate()) {
            $model = NewsCustom::model()->findByPk($this->id);
            $model->attributes = $this->attributes;
            $model->updated_by = Yii::app()->user->getName();
            $model->updated_at = new CDbExpression('NOW()');
            if ($model->save()) {
                return true;
            } else $this->addErrors($model->getErrors());
        }
    }
}