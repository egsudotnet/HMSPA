<?php
	
?>

<style>
.picture-md{
    height: 200px;
    cursor: pointer;
}

</style>

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
    <div class="x_content" id="app">


        <form action="<?php echo base_url(); ?>pathologys/add" class="form-horizontal form-label-left" method="post"
            accept-charset="utf-8">
            <div class="row">
                <div class="col-md-6">
                    <div id="from_group_1" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="v-model">
                            Keterangan Klinis </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="keterangan" value="" class="form-control">
                        </div>
                    </div>
                    <div id="from_group_2" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosis">
                            Diagnosis Klinis </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" v-model="diagnosis" id="diagnosis" >
                            </select>
                        </div>
                    </div>
                    <div id="from_group_3" class="form-group media_upload">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture">
                            Photo Diagnosis Klinis </label>
                        <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="picture" value="" class="form-control" id="picture">
                            <span class="input-group-btn"> <button class="btn btn-default dialog_open"
                                    data-title="Media Library" data-url="<?php echo base_url(); ?>ajax_query/uploader/"
                                    type="button"><span class="glyphicon glyphicon-cloud-upload"></span>
                                    Select</button> </span>
                        </div> -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="">
                                <image class="picture-md" v-for="item in picture" src="{{item}}"/>
                            </div>
                            <!-- <span class="input-group-btn"> 
                                <button class="btn btn-default dialog_open"
                                    data-title="Media Library" data-url="<?php echo base_url(); ?>ajax_query/uploader/"
                                    type="button">
                                    <span class="glyphicon glyphicon-cloud-upload"></span>
                                    Select
                                </button> 
                            </span> -->
                        </div>

                    </div>
                    <div id="from_group_4" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="temuan">
                            Temuan laboratorium </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="temuan" value="" class="form-control" id="temuan">
                        </div>
                    </div>
                    <div id="from_group_5" class="form-group media_upload">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture_radiology">
                            Photo Radiology </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="picture_radiology" value="" class="form-control" id="picture_radiology">
                            <span class="input-group-btn"> <button class="btn btn-default dialog_open"
                                    data-title="Media Library" data-url="<?php echo base_url(); ?>ajax_query/uploader/"
                                    type="button"><span class="glyphicon glyphicon-cloud-upload"></span>
                                    Select</button> </span>
                        </div>
                    </div>                
                    <div id="from_group_6" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambaran_radiology">
                            Gambaran Radiology </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="gambaran_radiology" value="" class="form-control" id="gambaran_radiology">
                        </div>
                    </div>
                    <div id="from_group_7" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topography">
                            Topography Klinis </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" v-model="topography" id="topography" >
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                style="width: 687px;"><span class="selection">
                        </div>
                    </div>
                    <div id="from_group_8" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mormphlogy">
                            Mormphlogy Klinis </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" v-model="mormphlogy" id="mormphlogy" >
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                style="width: 687px;"><span class="selection">
                        </div>
                    </div>
                    <div id="from_group_9" class="form-group media_upload">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture_macroscopic">
                            Photo Macroscopic </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="picture_macroscopic" value="" class="form-control" id="picture_macroscopic">
                            <span class="input-group-btn"> <button class="btn btn-default dialog_open"
                                    data-title="Media Library" data-url="<?php echo base_url(); ?>ajax_query/uploader/"
                                    type="button"><span class="glyphicon glyphicon-cloud-upload"></span>
                                    Select</button> </span>
                        </div>
                    </div>
                    
                </div>
                    
                <div class="col-md-6">
                    
                    <div id="from_group_10" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan_macroscopic">
                            Keterangan Macroscopic </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="keterangan_macroscopic" value="" class="form-control"
                                id="keterangan_macroscopic">
                        </div>
                    </div>
                    <div id="from_group_11" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosis_banding">
                            Diagnosis Banding </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea v-model="diagnosis_banding" cols="40" rows="3" class="form-control"
                                id="diagnosis_banding"></textarea>
                        </div>
                    </div>
                    <div id="from_group_12" class="form-group media_upload">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="picture_tambahan">
                            Photo Pemeriksaan Tambahan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="picture_tambahan" value="" class="form-control" id="picture_tambahan">
                            <span class="input-group-btn"> <button class="btn btn-default dialog_open"
                                    data-title="Media Library" data-url="<?php echo base_url(); ?>ajax_query/uploader/"
                                    type="button"><span class="glyphicon glyphicon-cloud-upload"></span>
                                    Select</button> </span>
                        </div>
                    </div>
                    <div id="from_group_13" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan_tambahan">
                            Keterangan tambahan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="keterangan_tambahan" value="" class="form-control" id="keterangan_tambahan">
                        </div>
                    </div>
                    <div id="from_group_14" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosis_akhir">
                            Diagnosis Akhir </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea v-model="diagnosis_akhir" cols="40" rows="3" class="form-control"
                                id="diagnosis_akhir"></textarea>
                        </div>
                    </div>
                    <div id="from_group_15" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="terapi">
                            Terapy </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea v-model="terapi" cols="40" rows="3" class="form-control" id="terapi"></textarea>
                        </div>
                    </div>
                    <div id="from_group_16" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diskusi">
                            Diskusi </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea v-model="diskusi" cols="40" rows="3" class="form-control" id="diskusi"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ln_solid"></div>

            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                    <button type="reset" class="btn btn-primary reset_form">Reset Form</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>



        <!-- <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button type="reset" class="btn btn-primary reset_form">Reset Form</button>
          <button type="submit" class="btn btn-success"><?php echo (isset($submitTitle)?$submitTitle: "Submit"); ?></button>
        </div>
      </div> -->


    </div>
</div>


 
<script src="<?php echo base_url(); ?>vendors/vue/vue.2.6.0.js"></script>
<script>
	var App = new Vue({
		el: '#app',
		data :{
				keterangan:'',
				picture:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23],
				temuan:'',
				picture_radiology:'',
				gambaran_radiology:'',
				picture_macroscopic:'',
				keterangan_macroscopic:'',
				picture_tambahan:'',
				keterangan_tambahan:'',
				diagnosis:'',
				topography:'',
				mormphlogy:'',
				diagnosis_banding:'',
				diagnosis_akhir:'',
				terapi:'',
				diskusi:'',

				// shoppingList: [{
				//     v-model: 'Tomatoes',
				//     number: 5,
				//     important: false
				// }]
            
        },
        mounted:function(){

        },
		methods: {
            get: function(){
                $.ajax({
                    url: 'https://api.example.com/data', // Ganti dengan URL yang sesuai
                    type: 'GET',
                    success: function(response) {
                        $('#result').html(response.message);
                    },
                    error: function(xhr, status, error) {
                        $('#result').html('Error: ' + error);
                    }
                });
            },
            submit : function(){
                // App.$data

                $.ajax({
                    url: 'https://api.example.com/submit', // Ganti dengan URL yang sesuai
                    type: 'POST',
                    data: App.$data,
                    success: function(response) {
                        $('#result').html(response.message);
                    },
                    error: function(xhr, status, error) {
                        $('#result').html('Error: ' + error);
                    }
                });
            }
			// addItem() {
			//     let item = {
			//         v-model: this.itemv-model,
			//         number: this.itemNumber
			//         important: this.itemImportant
			//     }
			//     this.shoppingList.push(item)
			//     this.itemv-model = null
			//     this.itemNumber = null
			//     this.itemImportant = false
			// }
		}
	})
	// app.mount();
</script>
