<div class="col-md-9 col-sm-9 pull-right">
	<!--Event Detail  -->
	<section class="event-detail newsection">	
		<?php if($cari == 0){ ?>
		
		<br>
		<?php } ?>
		<div class="clearfix">

			<div class="event-container clearfix">
				<div class="event clearfix">
					<!-- Penelitian Teratas -->
					<div class="event-content">
						<?php 
							if($cari == 0){ include "top_penelitian.php";} 
							if($cari == 1){ include "detail_penelitian.php";} 
							if($cari == 2){ include "penelitian_per_section.php";} 
							if($cari == 3){ include "hasil_pencarian.php";} 
						?>	
					</div>
				</div>
			</div>

		</div>
	</section>
 </div>
 <!-- col-md-3 -->
<div class="col-md-3 col-sm-3 ">
	<aside id="aside" class="clearfix">

		<div class="header">
			<small>Bidang Fokus</small>
			<span class="arrow-down"></span>
		</div>
		
		<div class="widget categories">
			<ul>
				<?php
					foreach ($jml_penelitian_per_section as $pen):
				?>
				<li><a href="<?php echo base_url();?>index.php/search/detail/section/<?php echo $pen['section'];?>/penelitian"><?php echo ucwords($pen['section']); ?>&nbsp;<span class="numbers"><?php echo $pen['jml']; ?></span></a></li>
				<?php
					endforeach;
				?>	
			</ul>
		</div>
		
	</aside>
	<aside id="aside" class="clearfix">

		<div class="header">
			<small>Berita Terkini</small>
			<span class="arrow-down"></span>
		</div>
		
		<div class="widget categories">
			<ul>
			<?php
				foreach ($berita_terkini as $ber):
			?>
				<li><a href="<?php echo $ber['url'];?>"><?php echo ucwords($ber['judul']); ?></a></li>
			<?php
				endforeach;
			?>
			</ul>
		</div>
		
	</aside>
</div> 