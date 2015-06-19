<div class="col-md-9 col-sm-9 pull-right">
	<!--Event Detail  -->
	<section class="event-detail newsection">	   
		
		<div class="clearfix">

			<div class="event-container clearfix">
				<div class="event clearfix">
					<!-- Trend -->
					<div class="event-content">
						<h3>Trend Penelitian</h3>
						
						<?php
						foreach ($all_tahun as $t):
							echo "<b>Tahun : ".$t['tahun']."</b>"; 
						?>	
							<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
							<tr>
								<th>Topik</th>
								<th width="170">Jumlah</th>
							</tr>
							</thead>

							<tbody>
							<?php
							foreach ($data_trend as $row):
							?>
								<tr>									
									<td><?php echo $row['sub']; ?></td>
									<td><?php echo $row['y']; ?></td>
								</tr>
							<?php
								endforeach;
							?>
							</tbody>
						</table>
						<?php	
						endforeach;
						?>
						
					</div>
				</div>
			</div>

		</div>
		
	</section>
 </div>
 
<!-- Pilihan Bidang Fokus -->
<div class="col-md-3 col-sm-3 ">
	<aside id="aside" class="clearfix">

		<div class="header">
			<small>Potensi Trend Topik</small>
			<span class="arrow-down"></span>
		</div>
		
		<div class="widget categories">
			<?php foreach ($all_kategori as $kat):  	?>
				<b><?php echo $kat['kategori'];?></b>
			<?php endforeach; ?>
		</div>
		
	</aside>
</div> 