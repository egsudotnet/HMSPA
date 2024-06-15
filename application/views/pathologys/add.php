<?php
	
?>

<div class="x_panel">
  <div class="x_title">
    <h2><?php echo (isset($title)? $title: '&nbsp;'); ?></h2>
    <ul class="nav navbar-right panel_toolbox">
    	<?php if(isset($back_url)){
    		?>
      		<li><a href="<?php echo $back_url; ?>"><i class="fa fa-chevron-left"></i> Back</a></li>
    		<?php 
    	}
    	?>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">

 
  <form action="http://localhost:8030/hmspa/pathologys/add" class="form-horizontal form-label-left" method="post" accept-charset="utf-8">
				<div id="from_group_1" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
				Keterangan Klinis							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="keterangan" value="" class="form-control" id="keterangan" fdprocessedid="hmht2">
			</div>
		</div>
				<div id="from_group_2" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosis">
				Diagnosis Klinis							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<select class="form-control select2-hidden-accessible" name="diagnosis" id="diagnosis" value="" tabindex="-1" aria-hidden="true">
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 687px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-diagnosis-container"><span class="select2-selection__rendered" id="select2-diagnosis-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
			</div>
		</div>
				<div id="from_group_3" class="form-group media_upload">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture">
				Photo Diagnosis Klinis							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="picture" value="" class="form-control" id="picture" fdprocessedid="zio3a">
						<span class="input-group-btn"> <button class="btn btn-default dialog_open" data-title="Media Library" data-url="http://localhost:8030/hmspa/ajax_query/uploader/" type="button" fdprocessedid="tkg8a"><span class="glyphicon glyphicon-cloud-upload"></span> Select</button> </span>
								</div>
		</div>
				<div id="from_group_4" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="temuan">
				Temuan laboratorium							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="temuan" value="" class="form-control" id="temuan" fdprocessedid="sl2zed">
			</div>
		</div>
				<div id="from_group_5" class="form-group media_upload">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture_radiology">
				Photo Radiology							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="picture_radiology" value="" class="form-control" id="picture_radiology" fdprocessedid="jku5o5">
						<span class="input-group-btn"> <button class="btn btn-default dialog_open" data-title="Media Library" data-url="http://localhost:8030/hmspa/ajax_query/uploader/" type="button" fdprocessedid="13pua"><span class="glyphicon glyphicon-cloud-upload"></span> Select</button> </span>
								</div>
		</div>
				<div id="from_group_6" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambaran_radiology">
				Gambaran Radiology							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="gambaran_radiology" value="" class="form-control" id="gambaran_radiology" fdprocessedid="9odhf">
			</div>
		</div>
				<div id="from_group_7" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="topography">
				Topography Klinis							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<select class="form-control select2-hidden-accessible" name="topography" id="topography" value="" tabindex="-1" aria-hidden="true">
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 687px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-topography-container"><span class="select2-selection__rendered" id="select2-topography-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
			</div>
		</div>
				<div id="from_group_8" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="mormphlogy">
				Mormphlogy Klinis							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<select class="form-control select2-hidden-accessible" name="mormphlogy" id="mormphlogy" value="" tabindex="-1" aria-hidden="true">
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 687px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-mormphlogy-container"><span class="select2-selection__rendered" id="select2-mormphlogy-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
			</div>
		</div>
				<div id="from_group_9" class="form-group media_upload">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture_macroscopic">
				Photo Macroscopic							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="picture_macroscopic" value="" class="form-control" id="picture_macroscopic" fdprocessedid="qtw9mh">
						<span class="input-group-btn"> <button class="btn btn-default dialog_open" data-title="Media Library" data-url="http://localhost:8030/hmspa/ajax_query/uploader/" type="button" fdprocessedid="7qlbk"><span class="glyphicon glyphicon-cloud-upload"></span> Select</button> </span>
								</div>
		</div>
				<div id="from_group_10" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan_macroscopic">
				Keterangan Macroscopic							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="keterangan_macroscopic" value="" class="form-control" id="keterangan_macroscopic" fdprocessedid="2kysc">
			</div>
		</div>
				<div id="from_group_11" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosis_banding">
				Diagnosis Banding							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<textarea name="diagnosis_banding" cols="40" rows="10" class="form-control" id="diagnosis_banding"></textarea>
			</div>
		</div>
				<div id="from_group_12" class="form-group media_upload">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture_tambahan">
				Photo Pemeriksaan Tambahan							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="picture_tambahan" value="" class="form-control" id="picture_tambahan" fdprocessedid="ita16">
						<span class="input-group-btn"> <button class="btn btn-default dialog_open" data-title="Media Library" data-url="http://localhost:8030/hmspa/ajax_query/uploader/" type="button" fdprocessedid="06o6j"><span class="glyphicon glyphicon-cloud-upload"></span> Select</button> </span>
								</div>
		</div>
				<div id="from_group_13" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan_tambahan">
				Keterangan tambahan							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" name="keterangan_tambahan" value="" class="form-control" id="keterangan_tambahan" fdprocessedid="akyln">
			</div>
		</div>
				<div id="from_group_14" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosis_akhir">
				Diagnosis Akhir							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<textarea name="diagnosis_akhir" cols="40" rows="10" class="form-control" id="diagnosis_akhir"></textarea>
			</div>
		</div>
				<div id="from_group_15" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="terapi">
				Terapy							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<textarea name="terapi" cols="40" rows="10" class="form-control" id="terapi"></textarea>
			</div>
		</div>
				<div id="from_group_16" class="form-group ">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="diskusi">
				Diskusi							</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<textarea name="diskusi" cols="40" rows="10" class="form-control" id="diskusi"></textarea>
			</div>
		</div>
		      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button type="reset" class="btn btn-primary reset_form" fdprocessedid="vuj6an">Reset Form</button>
          <button type="submit" class="btn btn-success" fdprocessedid="pqq2qj">Submit</button>
        </div>
      </div>

    </form>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
  const app = Vue.createApp({
    data() {
      return {
        inpText: 'Initial text'
      }
    }
  })
  app.mount('#app')
</script>
 
      <!-- <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button type="reset" class="btn btn-primary reset_form">Reset Form</button>
          <button type="submit" class="btn btn-success"><?php echo (isset($submitTitle)?$submitTitle: "Submit"); ?></button>
        </div>
      </div> -->

  
  </div>
</div>
