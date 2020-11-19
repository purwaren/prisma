<?php
/* @var $content string */
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/print.css" />
    <title><?php echo $this->pageTitle ?></title>
</head>
<body>
<div class="page-header">
    <div class="left">
        <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/img/logo.png" style="height: 75px">
    </div>
    <div class="right">
        <p style="font-weight: bold; text-align: center;">
            <span style="font-size: 20px"><?php echo $this->pageTitle ?></span> <br />
        </p>
    </div>
</div>

<div class="page-footer">
    <?php echo 'Dicetak : '.date('d F Y, H:i:s'); ?>
</div>

<table>
    <thead>
    <tr>
        <td>
            <!--place holder for the fixed-position header-->
            <div class="page-header-space"></div>
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <?php echo $content; ?>
        </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td>
            <!--place holder for the fixed-position footer-->
            <div class="page-footer-space"></div>
        </td>
    </tr>
    </tfoot>

</table>
<script type="text/javascript">
    window.onload = function() { window.print(); }
    window.onafterprint = function() { window.close(); }
</script>
</body>
</html>