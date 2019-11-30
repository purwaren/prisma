<?php
/* @var $this CityController */
/* @var $model CityCustom */


$this->pageTitle = 'Ubah Kabupaten / Kota';
$this->breadcrumbs = array(
    'Kab/Kota'=>array('city/admin'),
    'Ubah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form',array('model'=>$model))?>
</section><!-- /.content -->