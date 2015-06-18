<h3>Penelitian Teratas</h3>
<ul>
<?php
foreach ($top_penelitian as $row):
?>
<li>
	<p>
	<b><a href="<?php echo base_url();?>index.php/search/detail/<?php echo $row['id'];?>"><?php echo $row['judul']." <sup>(".$row['hits']." hits)</sup>"; ?></a></b></br>
	<?php echo substr($row['isiteks'],0,255); ?>
	</p>
</li>
<?php
endforeach;
?>						
</ul>