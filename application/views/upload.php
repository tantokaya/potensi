<div class="col-md-9 col-sm-9 pull-right">
	<!--Event Detail  -->
	<section class="event-detail newsection">	   
		
		<div class="clearfix">

			<div class="event-container clearfix">
				<div class="event clearfix">
					<!-- Trend -->
					<div class="event-content">
						<h3>Upload Penelitian</h3>
						 <?php echo form_open_multipart('upload/simpan', array('class'=>'form-horizontal form-bordered','id'=>'form','name'=>'form')); ?>
							<div class="response">&nbsp;</div>
								<p><h4>Pihak yang mempublikasi : </h4></p>
								<p><label>Email<span>*</span></label>
									<input id="email" type="text" value="" name="email" placeholder="Email" class="textflied">
								</p>

								<p><label>Lembaga<span>*</span></label>
									<input id="lembaga_kontributor" type="text" value="" name="lembaga_kontributor" placeholder="Lembaga" class="textflied">
								</p>
								
								<p><h4>Penelitian : </h4></p>
								<p><label>Judul<span>*</span></label>
									<input id="judul"  type="text" value="" name="judul" placeholder="Judul Penelitian" class="textflied">
								</p>

								 <p><label>Abstrak<span>*</span></label>
									<textarea id="abstrak" type="text" name="abstrak" value="" placeholder="Abstrak" rows="3" class="texttextarea"></textarea>
								 </p>
									
								 <p><label>Isi/ Ringkasan<span>*</span></label>
									<textarea id="isi" type="text" name="isi" value="" placeholder="Isi" rows="3" class="texttextarea"></textarea>
								 </p>
									
								 <p><label>Bidang Fokus<span>*</span></label></br>
									<select name="section" id="section">
                                    <?php
                                    if(empty($section)){
                                        ?>
                                        <option value="">-Pilih Bidang Fokus-</option>
                                    <?php
                                    }
                                    foreach($dropdown_bidang_fokus as $bidang) :
                                        if($section == $bidang['nama_bidang_fokus']){
                                            ?>
                                            <option value="<?php echo $bidang['nama_bidang_fokus'];?>" selected="selected"><?php echo $bidang['nama_bidang_fokus'];?></option>
                                        <?php }else{ ?>
                                            <option value="<?php echo $bidang['nama_bidang_fokus'];?>"><?php echo $bidang['nama_bidang_fokus'];?></option>
                                        <?php }
                                   endforeach; ?>
									</select>
								</p>
								
								<p><label>Kategori<span>*</span></label></br>
									<select name="kategori" id="kategori">
                                    <?php
                                    if(empty($kategori)){
                                        ?>
                                        <option value="">-Pilih Kategori-</option>
                                    <?php
                                    } ?>
									<option value="berita" <?php if($kategori == 'berita'){echo "selected='selected'";} ?> >Berita</option>
									<option value="hukum" <?php if($kategori == 'hukum'){echo "selected='selected'";} ?> >Hukum</option>
									<option value="lab" <?php if($kategori == 'lab'){echo "selected='selected'";} ?> >Lab</option>
									<option value="paten" <?php if($kategori == 'paten'){echo "selected='selected'";} ?> >Paten</option>
									<option value="penelitian" <?php if($kategori == 'penelitian'){echo "selected='selected'";} ?> >Penelitian</option>
									<option value="wiki" <?php if($kategori == 'wiki'){echo "selected='selected'";} ?> >Wiki</option>
									</select>
								</p>
								
								<p><label>Pengarang<span>*</span></label>
									<input id="pengarang"  type="text" value="" name="pengarang" placeholder="Pengarang" class="textflied">
								</p>

								<p><label>Lembaga<span>*</span></label>
									<select name="lembaga" id="lembaga">
                                    <?php
                                    if(empty($lembaga)){
                                        ?>
                                        <option value="">-Pilih Lembaga-</option>
                                    <?php
                                    }
                                    foreach($dropdown_lembaga as $lem) :
                                        if($lembaga == $lem['lembaga_name']){
                                            ?>
                                            <option value="<?php echo $lem['lembaga_name'];?>" selected="selected"><?php echo $lem['lembaga_name'];?></option>
                                        <?php }else{ ?>
                                            <option value="<?php echo $lem['lembaga_name'];?>"><?php echo $lem['lembaga_name'];?></option>
                                        <?php }
                                   endforeach; ?>
									</select>
								</p>
								
								<p><label>Tahun<span>*</span></label></br>
									<select name="tahun" id="tahun">
                                    <?php
                                    if(empty($tahun)){
                                        ?>
                                        <option value="">-Pilih Tahun-</option>
                                    <?php
                                    }
									$thn_awal = 1991;
									$thn_akhir = date("Y");
                                    for($thn = $thn_awal; $thn <= $thn_akhir; $thn++) {
                                        if($tahun == $thn){
                                            ?>
                                            <option value="<?php echo $thn;?>" selected="selected"><?php echo $thn;?></option>
                                        <?php }else{ ?>
                                            <option value="<?php echo $thn;?>"><?php echo $thn;?></option>
                                        <?php }
										
                                   } ?>
									</select>
								</p>
								
								 <p><button type="submit" name="submit" id="submitButton">UPLOAD</button></p>
                                
                            </div>
						</form>	
					</div>
				</div>
			</div>

		</div>
	</section>
 </div>