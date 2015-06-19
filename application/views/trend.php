<!-- Tabs-1 -->
<div id="tabs-1">
	<div class="event-container">
		<div class="row">
			<div class="col-md-6">
				<div class="event">
					<div class="event-content">
						<h3 class="title"><?php echo $caption_berita;?></h3>						
						<p><?php echo $graph_berita; ?></p>
					</div>					
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="event">
					<div class="event-content">
						<h3 class="title">Top Keyword</h3>
						<p>
							<table id="sample-table-2" class="table table-striped table-bordered table-hover">
								
								<tbody>
								<?php
								foreach ($top_keyword as $tk):
								?>
									<tr>									
										<td><?php echo "<b>".ucwords($tk['keyword'])."</b>"; ?></td>
										<td><?php echo $tk['jumlah']." pencarian"; ?></td>
									</tr>
								<?php
								endforeach;
								?>
								</tbody>
							</table>
						</p>
					</div>					
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="event">
					<div class="event-content">
						<h3 class="title">Top Keyword</h3>
						<p>
							<table id="sample-table-2" class="table table-striped table-bordered table-hover">
								
								<tbody>
								<?php
								foreach ($top_keyword as $tk):
								?>
									<tr>									
										<td><?php echo "<b>".ucwords($tk['keyword'])."</b>"; ?></td>
										<td><?php echo $tk['jumlah']." pencarian"; ?></td>
									</tr>
								<?php
								endforeach;
								?>
								</tbody>
							</table>
						</p>
					</div>					
				</div>
			</div>
	   </div>
	</div>
</div>