<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/img/avatar04.png" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::app()->user->fullname ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php $this->widget('zii.widgets.CMenu', array(
            'items' => array(
                array('label' => 'MAIN NAVIGATION', 'itemOptions' => array('class' => 'header')),
                array(
                    'label' => '<i class="fa fa-dashboard"></i> <span>Dashboard</span></i>',
                    'url' => array('/site/dashboard'),
                    'itemOptions' => array('class' => 'treeview')
                ),
                /**
                array(
                    'label' => '<i class="fa fa-files-o"></i><span>Konten</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions' => array('class' => 'treeview'),
                    'url' => '#',
                    'items' => array(
                        array('label' => '<i class="fa fa-newspaper-o"></i> Artikel', 'url' => array('/news/admin')),
                        array('label' => '<i class="fa fa-folder-o"></i> Kategori', 'url' => array('/category/admin'), 'visible' => !Yii::app()->user->checkAccess('unit')),
                    ),
                    'encodeLabel' => false,
                ),
                */
                array(
                    'label' => '<i class="fa fa-shopping-cart"></i><span>Transaksi</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions' => array('class' => 'treeview'),
                    'url' => '#',
                    'encodeLabel' => false,
                    'visible'=>!Yii::app()->user->checkAccess('unit'),
                    'items' => array(
                        array('label'=>'<i class="fa fa-plus-square"></i> Order Baru', 'url'=>array('order/create')),
                        array('label'=>'<i class="fa fa-archive"></i>Daftar Order','url'=>array('order/admin')),
                        array('label'=>'<i class="fa fa-file-pdf-o"></i>Laporan', 'url'=>array('order/report'))
                    ),
                ),
                array(
                    'label' => '<i class="fa fa-file-text"></i><span>Data Unit</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions' => array('class' => 'treeview'),
                    'url' => '#',
                    'items' => array(
                        array('label' => '<i class="fa fa-plus-square"></i> Tambah Unit', 'url' => array('/unit/create')),
                        array('label' => '<i class="fa fa-plus-square"></i> Tambah Guru', 'url' => array('/teacher/create')),
                        array('label' => '<i class="fa fa-archive"></i> Kelola Unit', 'url' => array('/unit/admin')),
                        array('label' => '<i class="fa fa-archive"></i> Daftar Guru', 'url' => array('/teacher/admin')),
                    ),
                    'encodeLabel' => false,
                    'visible' => !Yii::app()->user->checkAccess('unit')
                ),
                array(
                    'label' => '<i class="fa fa-file-text"></i><span>Artikel</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions' => array('class' => 'treeview'),
                    'url' => '#',
                    'items' => array(
                        array('label' => '<i class="fa fa-plus-square"></i> Tambah Artikel', 'url' => array('/news/create')),
                        array('label' => '<i class="fa fa-plus-square"></i> Tambah Kategori', 'url' => array('/category/create')),
                        array('label' => '<i class="fa fa-archive"></i> Kelola Artikel', 'url' => array('/news/admin')),
                        array('label' => '<i class="fa fa-archive"></i> Kelola Kategori', 'url' => array('/category/admin')),
                    ),
                    'encodeLabel' => false,
                    'visible' => !Yii::app()->user->checkAccess('unit')
                ),
                array(
                    'label' => '<i class="fa fa-calendar"></i><span>Event</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions' => array('class' => 'treeview'),
                    'url' => '#',
                    'items' => array(
                        array('label' => '<i class="fa fa-plus-square"></i> Tambah Event', 'url' => array('/event/create')),
                        array('label' => '<i class="fa fa-archive"></i> Kelola Event', 'url' => array('/event/admin')),
                    ),
                    'encodeLabel' => false,
                    'visible' => !Yii::app()->user->checkAccess('unit')
                ),
                array(
                    'label' => '<i class="fa fa-archive"></i><span>Wilayah</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions' => array('class' => 'treeview'),
                    'url' => '#',
                    'items' => array(
                        array('label' => '<i class="fa fa-map"></i> Provinsi', 'url' => array('/state/admin')),
                        array('label' => '<i class="fa fa-map"></i> Kabupaten / Kota', 'url' => array('/city/admin')),
                        array('label' => '<i class="fa fa-map"></i> Kecamatan', 'url' => array('/district/admin')),
                    ),
                    'encodeLabel' => false,
                ),
                array(
                    'label' => '<i class="fa fa-folder-o"></i><span>Master</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions' => array('class' => 'treeview'),
                    'url' => '#',
                    'items' => array(
                        array('label' => '<i class="fa fa-file-text"></i> Kategori Barang ', 'url' => array('/itemCategory/admin')),
                        array('label' => '<i class="fa fa-file-text"></i> Barang', 'url' => array('/item/admin')),
                    ),
                    'encodeLabel' => false,
                    'visible'=>!Yii::app()->user->checkAccess('unit')
                ),
                array(
                    'label' => '<i class="fa fa-wrench"></i><span>Konfigurasi Sistem</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions' => array('class' => 'treeview'),
                    'url' => '#',
                    'items' => array(
                        array('label' => '<i class="fa fa-user"></i> Manajemen Pengguna', 'url' => array('/users/admin')),
                        array('label' => '<i class="fa fa-lock"></i> Manajemen Akses', 'url' => array('/users/adminAssignment')),
                    ),
                    'encodeLabel' => false,
                    'visible' => Yii::app()->user->checkAccess('admin'),
                ),
                array(
                    'label' => '<i class="fa fa-key"></i> <span>Change Password</span>',
                    'url' => array('/users/password'),
                ),
            ),
            'encodeLabel' => false,
            'htmlOptions' => array('class' => 'sidebar-menu'),
            'submenuHtmlOptions' => array('class' => 'treeview-menu'),
            'linkLabelWrapper' => null,
        )); ?>

    </section>
    <!-- /.sidebar -->
</aside>