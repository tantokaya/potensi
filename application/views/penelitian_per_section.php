<h3><?php echo ucwords($section); ?></h3>

<?php 
	
	echo form_open_multipart('search/detail/section/'.$section.'/'.$kategori, array('class'=>'form-horizontal form-bordered','id'=>'form','name'=>'form','method'=>'post')); ?>	 
	 <label>Pilih Kategori</label></br>
	 <p><input type="radio" name="kategori" value="berita" <?php if($kategori=='berita'){echo " checked='checked'";}?> onchange="this.form.submit()">Berita</input>
		<input type="radio" name="kategori" value="hukum" <?php if($kategori=='hukum'){echo " checked='checked'";}?> onchange="this.form.submit()">Hukum</input>
		<input type="radio" name="kategori" value="lab" <?php if($kategori=='lab'){echo " checked='checked'";}?> onchange="this.form.submit()">Lab</input>
		<input type="radio" name="kategori" value="paten" <?php if($kategori=='paten'){echo " checked='checked'";}?> onchange="this.form.submit()">Paten</input>
		<input type="radio" name="kategori" value="penelitian" <?php if($kategori=='penelitian'){echo " checked='checked'";}?> onchange="this.form.submit()">Penelitian</input>
		<input type="radio" name="kategori" value="wiki" <?php if($kategori=='wiki'){echo " checked='checked'";}?> onchange="this.form.submit()">Wiki</input>
	</p>	
</form>	


<label>Lembaga Terkait</label></br>
<div class="lembaga">

<?php
	foreach ($lembaga_terkait as $lem):
?>
	<!--<li><p><a href="<?php echo base_url();?>index.php/search/detail/<?php echo $section;?>/<?php echo $lem['domain'];?>"><?php echo $lem['domain']." (".$lem['jml'].")";?></a></p></li>-->
	
	<input type="radio" name="lembaga" value="<?php echo $lem['domain'];?>" <?php if($lembaga=='$lem[domain]'){echo " checked='checked'";}?> onchange="this.form.submit()"><?php echo $lem['domain'];?></input></br>

<?php
	endforeach;
?>	

</div>
<!--</form>-->
<h3>Hasil Pencarian</h3>
<div class="info">
	 <b>Pencarian berdasarkan :</b></br>
	 Bidang Fokus : <span class="key"><?php echo ucwords($section);?></span></br>
	 Kategori : <span class="key"><?php echo ucwords($kategori);?></span></br>
</div>

</br>
<ul>
<?php
	foreach ($penelitian_per_section as $row):
?>
	<li><p><a href="<?php echo base_url();?>index.php/search/detail/<?php echo $row['id'];?>"><?php echo $row['judul'];?></a></p></li>	
	
<?php
	endforeach;
	
	echo "</br><i>Ditemukan : ".$jml." data</i></br>";
?>						
</ul>

<ul class="pagination clearfix">
<?php echo $links; ?>
</ul>
