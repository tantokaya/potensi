<h3>Detail Penelitian</h3>
<ul>
<?php
	foreach ($detail_penelitian as $det):
?>
	<h4 class="title"><?php echo $det['judul']; ?></h4>
	<hr>
	<p>
		<b>Abstrak</b></br>
		<?php if($det['abstrak']){echo $det['abstrak'];}else{echo "-";} ?>
	</p>	
	<p>
		<b>Isi/ Ringkasan</b></br>
		<?php if($det['isiteks']){echo $det['isiteks'];}else{echo "-";} ?>
	</p>
	<p>
		<b>Bidang Fokus</b></br>
		<?php if($det['section']){echo $det['section'];}else{echo "-";} ?>
	</p>
	<p>
		<b>Pengarang</b></br>
		<?php if($det['pengarang']){echo $det['pengarang'];}else{echo "-";} ?>
	</p>
	<p>
		<b>Lembaga Penelitian</b></br>
		<?php if($det['domain']){echo $det['domain'];}else{echo "-";} ?>
	</p>
	<p>
		<b>Tahun Penelitian</b></br>
		<?php if($det['tahun']){echo $det['tahun'];}else{echo "-";} ?>
	</p>
	<p>
		<b>Lokasi Penelitian</b></br>
		<?php if($det['kota']){echo $det['kota'];}else{echo "-";} ?>
	</p>
<?php
	endforeach;
?>						
</ul>