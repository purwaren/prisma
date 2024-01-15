<?php
/**
 * @var $model LoginForm
 * @var $this SiteController
 * @var $form CActiveForm
 */
?>

<div class="login-logo">
    <a href="<?php echo Yii::app()->request->baseUrl?>">
        <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/assets2/images/logo-cermat.png', 'logo', array('class' => 'img-responsive')) ?>
    </a>
</div><!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg">Silakan login terlebih dahulu</p>
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    )); ?>
    <div class="form-group has-feedback">
        <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo $form->error($model, 'username'); ?>
    </div>
    <div class="form-group has-feedback">
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo $form->error($model, 'password'); ?>
    </div>
    <?php if (CCaptcha::checkRequirements()): ?>
        <div class="form-group has-feedback">
            <?php echo $form->labelEx($model, 'verifyCode'); ?>
            <div>
                <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control', 'placeholder' => 'Huruf besar & kecil sama saja')); ?>
            </div>
            <?php echo $form->error($model, 'verifyCode'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
            </div>
        </div><!-- /.col -->
        <div class="col-xs-4">
            <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-success btn-block btn-flat')); ?>
        </div><!-- /.col -->
    </div>  
    <?php $this->endWidget(); ?>

    <a href="<?php echo Yii::app()->createUrl('site/forgot') ?>">Lupa password ?</a><br>

</div><!-- /.login-box-body -->