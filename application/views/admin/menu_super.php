<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-small btn-success">
            <i class="icon-signal"></i>
        </button>

        <button class="btn btn-small btn-info">
            <i class="icon-pencil"></i>
        </button>

        <button class="btn btn-small btn-warning">
            <i class="icon-group"></i>
        </button>

        <button class="btn btn-small btn-danger">
            <i class="icon-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div><!--#sidebar-shortcuts-->
<ul class="nav nav-list">
    <li class="<?php if($judul == 'dashboard')echo 'active';?>">
        <a href="<?php echo base_url();?>index.php/main">
            <i class="icon-dashboard"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
    </li>
    <li class="<?php if($judul == 'fokus'||$judul == 'list_fokus'||$judul == 'lembaga'||$judul == 'list_lembaga'||$judul == 'list_pengguna')echo 'active open';?>">
        <a href="#" class="dropdown-toggle">
            <i class="icon-desktop"></i>
            <span class="menu-text"> Master </span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li class="<?php if($judul == 'list_fokus')echo 'active';?>">
                <a href="<?php echo base_url();?>index.php/fokus">
                    <i class="icon-double-angle-right"></i>
                    Bidang Fokus
                </a>
            </li>
            <li class="<?php if($judul == 'list_lembaga')echo 'active';?>">
                <a href="<?php echo base_url();?>index.php/lembaga">
                    <i class="icon-double-angle-right"></i>
                    Lembaga
                </a>
            </li>
            <li class="<?php if($judul == 'list_pengguna')echo 'active';?>">
                <a href="<?php echo base_url();?>index.php/pengguna">
                    <i class="icon-double-angle-right"></i>
                    Pengguna
                </a>
            </li>
        </ul>
    </li>
    <li class="<?php if($judul == 'site'||$judul == 'list_site')echo 'active open';?>">
        <a href="#" class="dropdown-toggle">
            <i class="icon-cloud"></i>
            <span class="menu-text"> Sites </span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li class="<?php if($judul == 'list_site')echo 'active';?>">
                <a href="<?php echo base_url();?>index.php/sites">
                    <i class="icon-double-angle-right"></i>
                    Sites
                </a>
            </li>
        </ul>
    </li>
    <li class="<?php if($judul == 'indeks') echo 'active open';?>">
        <a href="#" class="dropdown-toggle">
            <i class="icon-barcode"></i>
            <span class="menu-text"> App Center </span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li class="<?php if($judul == 'indeks')echo 'active';?>">
                <a href="<?php echo base_url();?>index.php/indeks/new_indeks">
                    <i class="icon-double-angle-right"></i>
                    Indeks
                </a>
            </li>
            <li>
                <a href="">
                    <i class="icon-double-angle-right"></i>
                    Clean Tables
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="icon-double-angle-right"></i>
                    Setting
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/ref_json/get_all_lembaga">
                    <i class="icon-double-angle-right"></i>
                    Database
                </a>
            </li>
        </ul>
    </li>
    <li>

    </li>
    <li>
        <a href="#" class="dropdown-toggle">
            <i class="icon-bar-chart"></i>
            <span class="menu-text"> Statistics </span>

            <b class="arrow icon-angle-down"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="#">
                    <i class="icon-double-angle-right"></i>
                    View
                </a>
            </li>
        </ul>
    </li>

</ul><!--/.nav-list-->
<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left"></i>
</div>
