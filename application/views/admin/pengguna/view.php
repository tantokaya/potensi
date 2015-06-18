<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
        </li>
        <li class="active"><?php echo $judul_halaman; ?></li>
    </ul><!--.breadcrumb-->

    <div class="nav-search" id="nav-search">
        <form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
        </form>
    </div><!--#nav-search-->
</div>

<div class="page-content">
<div class="page-header position-relative">
    <h1>
        <?php echo $judul_halaman; ?>
        <small>
            <i class="icon-double-angle-right"></i>
            Find Your <?php $judul_halaman; ?> Here
        </small>
    </h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<div class="space-6"></div>

<div class="row-fluid">

<div class="table-header">
    Results for "Latest Registered <?php echo $judul_halaman; ?>"
</div>

    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th class="center" width="50">
                <label>
                    <input type="checkbox" />
                    <span class="lbl"></span>
                </label>
            </th>
            <th class="center" width="50">No</th>
            <th>Username</th>
            <th>Nama Pengguna</th>
            <th>Level</th>
            <th width="170">Aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $no =1;

        foreach ($all_pengguna as $r):
            $level = $this->app_model->CariLevel($r['id_level']);

            ?>
            <tr>
                <td class="center">
                    <label>
                        <input type="checkbox" />
                        <span class="lbl"></span>
                    </label>
                </td>
                <td class="center">
                    <?php echo $no; ?>
                </td>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo $r['nama_lengkap']; ?></td>
                <td><?php echo $r['id_level'].' - '.$level; ?></td>

                <td class="td-actions">
                    <div class="hidden-phone visible-desktop action-buttons">

                        <a class="green" href="<?php echo base_url();?>index.php/pengguna/edit/<?php echo $r['username'];?>">
                            <i class="icon-pencil bigger-170"></i> Ubah
                        </a>
                        |
                        <a class="red" href="<?php echo base_url();?>index.php/pengguna/delete/<?php echo $r['username'];?>"
                           onClick="return confirm('Anda yakin ingin menghapus data ini?')">
                            <i class="icon-trash bigger-170"></i> Hapus
                        </a>

                    </div>
                </td>
            </tr>
        <?php
            $no++;
        endforeach;
        ?>
        </tbody>
    </table>

    <!-- Button New -->
    <div class="form-actions">
        <a href="<?php echo base_url();?>index.php/pengguna/new_pengguna">
            <button class="btn btn-danger" type="button">
                <i class="icon-external-link bigger-110"></i>
                Add Pengguna
            </button>
        </a>
    </div>
</div>
<!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->
</div><!--/.main-content-->


<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>


<!--inline scripts related to this page-->
<script>
    $(function() {

        /* ------ Data Tables Script ---------*/
        var oTable1 = $('#sample-table-2').dataTable( {
            "aoColumns": [
                { "bSortable": false },
                null, null,
                { "bSortable": false }
            ] } );


        $('table th input:checkbox').on('click' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function(){
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });

        });


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }

    });
</script>
