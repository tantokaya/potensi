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
            Add New Lembaga
        </small>
    </h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<div class="space-6"></div>

    <form class="form-horizontal" id="form" />
    <div class="control-group">
        <label class="control-label">Kode Lembaga</label>
        <div class="controls">
            <input type="text" id="code" name="code" class="input-small" value="<?php echo $code; ?>" placeholder="code..."  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Nama Lembaga</label>
        <div class="controls">
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" class="input-large" placeholder="name..." required="true" />
        </div>
    </div>

    <!-- Button Save -->
    <div class="form-actions">
        <button class="btn btn-info" id="simpan" type="button">
            <i class="icon-ok bigger-110"></i>
            Submit
        </button>

        &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            Reset
        </button>

        &nbsp; &nbsp; &nbsp;
        <a href="<?php echo base_url();?>index.php/lembaga">
            <button class="btn btn-medium btn-warning" type="button">
                <i class="icon-desktop bigger-110"></i>
                Find
            </button>
        </a>
    </div>
    </form>
    <div class="span6">
        <label class="pull-right inline">
            <input id="gritter-light" checked="" type="checkbox" class="ace-switch ace-switch-5" />
        </label>
    </div><!--/span-->

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

    $("#name").focus();

    $("#simpan").click(function(){
        var kode    = $("#code").val();
        var nama	= $("#name").val();


        var string = $("#form").serialize();

        if(kode.length==0){
            $.gritter.add({
                title: 'Warning !',
                text: 'Kode Lembaga Kosong',
                class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            $("#code").focus();
            return false();
        }
        if(nama.length==0){
            $.gritter.add({
                title: 'Warning !',
                text: 'Nama Lembaga Kosong',
                class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            $("#name").focus();
            return false();
        }

        $.ajax({
            type	: 'POST',
            url		: "<?php echo site_url(); ?>/lembaga/simpan",
            data	: string,
            cache	: false,
            success	: function(data){
                window.location.href = "<?php echo site_url(); ?>/lembaga";
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Informasi :',
                    // (string | mandatory) the text inside the notification
                    text: 'Data telah berhasil di Simpan / Update',
                    class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                $("#name").focus();
            }
        });
        return false();
    });


});
</script>
