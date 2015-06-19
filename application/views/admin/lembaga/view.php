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
            Find Your Lembaga Here
        </small>
    </h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<div class="space-6"></div>

<div class="row-fluid">


    <form method="post" action="<?php echo base_url();?>index.php/lembaga/importcsv" enctype="multipart/form-data">
        <input type="file" name="userfile" id="import_csv" />
<!--        <input type="file" name="userfile" ><br><br>-->
        <div class="form-actions">
            <input type="submit" name="submit" value="UPLOAD" class="btn btn-success">
        </div>
    </form>

<div class="table-header">
    Results for "Latest Registered Lembaga"
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
            <th class="center">Kode Lembaga</th>
            <th>Nama Lembaga</th>
            <th width="170">Aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $no =1;
        foreach ($all_lembaga as $r):

            ?>
            <tr>
                <td class="center">
                    <label>
                        <input type="checkbox" />
                        <span class="lbl"></span>
                    </label>
                </td>
                <td class="center">
                    <?php echo $r['lembaga_code']; ?>
                </td>
                <td><?php echo $r['lembaga_name']; ?></td>

                <td class="td-actions">
                    <div class="hidden-phone visible-desktop action-buttons">

                        <a class="green" href="<?php echo base_url();?>index.php/lembaga/edit/<?php echo $r['lembaga_code'];?>">
                            <i class="icon-pencil bigger-170"></i> Ubah
                        </a>
                        |
                        <a class="red" href="<?php echo base_url();?>index.php/lembaga/delete/<?php echo $r['lembaga_code'];?>"
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

</tbody>
</table>
    <!-- Button New -->
    <div class="form-actions">
        <a href="<?php echo base_url();?>index.php/lembaga/new_lembaga">
            <button class="btn btn-danger" type="button">
                <i class="icon-external-link bigger-110"></i>
                Add Lembaga
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

        /* --------- Browse File ---------------*/
        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });

        $('#import_csv').ace_file_input({
            style:'well',
            btn_choose:'Import From CSV File',
            btn_change:null,
            no_icon:'icon-cloud-upload',
            droppable:true,
            thumbnail:'small'
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
            /**,before_remove : function() {
						return true;
					}*/
            ,
            preview_error : function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function(){
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });

    });
</script>
