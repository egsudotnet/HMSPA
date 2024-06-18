<?php
	
?>

<style>
.picture-md {
    height: 200px;
    cursor: pointer;
}

/* img.picture-md:hover{
        opacity: 0.5;
    } */

.tumbnail {
    display: inline-block;
    cursor: pointer;
}

.tumbnail.deleted {
    opacity: 0.1;
}


.tumbnail-sm:hover {
    border: 2pt solid red;
}

.tumbnail-md:hover {
    border: 2pt solid red;
}

.tumbnail-sm.selected {
    border: 2pt solid green;
}

.tumbnail-md.selected {
    border: 2pt solid green;
}

.tumbnail-sm {
    margin: 3px;
    width: 50px;
    height: 50px;
}

.tumbnail-md {
    margin: 3px;
    width: 100px;
    height: 100px;
}

.btn-add-img {
    position: absolute;
    top: 0;
    right: 0
}

textarea {
    resize: none !important;
}

#modalPicture img,
#modalPicture canvas {
    width: 100%;
    height: 380px;
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
                            <select class="form-control" v-model="diagnosis" id="diagnosis">
                                <!-- Neoplasma (Tumor) -->
                                <option value='C00'>Neoplasma ganas bibir (C00)</option>
                                <option value='C01'>Neoplasma ganas dasar mulut (C01)</option>
                                <option value='C02'>Neoplasma ganas bagian lainnya dan yang tidak spesifik dari lidah
                                    (C02)</option>
                                <option value='C03'>Neoplasma ganas gusi (C03)</option>
                                <option value='C04'>Neoplasma ganas dasar mulut (C04)</option>
                                <option value='C05'>Neoplasma ganas langit-langit mulut (C05)</option>
                                <option value='C06'>Neoplasma ganas bagian lain dan yang tidak spesifik dari mulut (C06)
                                </option>

                                <!-- Neoplasma jinak -->
                                <option value='D10'>Neoplasma jinak bibir, rongga mulut, dan faring (D10)</option>
                                <option value='D11'>Neoplasma jinak kelenjar liur mayor (D11)</option>
                                <option value='D12'>Neoplasma jinak anus dan kanal anal (D12)</option>
                                <option value='D13'>Neoplasma jinak bagian lain dari saluran pencernaan (D13)</option>

                                <!-- Neoplasma yang tidak pasti atau tidak diketahui sifatnya -->
                                <option value='D37'>Neoplasma dengan perilaku yang tidak pasti atau tidak diketahui dari
                                    organ pencernaan (D37)</option>
                                <option value='D38'>Neoplasma dengan perilaku yang tidak pasti atau tidak diketahui dari
                                    organ pernapasan dan intratoraks (D38)</option>
                                <option value='D39'>Neoplasma dengan perilaku yang tidak pasti atau tidak diketahui dari
                                    organ genital wanita (D39)</option>

                                <!-- Penyakit darah dan organ pembentuk darah serta gangguan tertentu yang melibatkan mekanisme imunitas -->
                                <option value='D50'>Anemia defisiensi besi (D50)</option>
                                <option value='D51'>Anemia defisiensi vitamin B12 (D51)</option>
                                <option value='D52'>Anemia defisiensi folat (D52)</option>
                                <option value='D53'>Anemia lain (D53)</option>
                                <option value='D55'>Anemia hemolitik yang disebabkan oleh gangguan enzim (D55)</option>
                                <option value='D56'>Thalassemia (D56)</option>

                                <!-- Gangguan sistem endokrin, gizi, dan metabolisme -->
                                <option value='E10'>Diabetes mellitus tipe 1 (E10)</option>
                                <option value='E11'>Diabetes mellitus tipe 2 (E11)</option>
                                <option value='E66'>Obesitas (E66)</option>
                                <option value='E70'>Gangguan metabolisme asam amino aromatik (E70)</option>


                            </select>
                        </div>
                    </div>
                    <div id="from_group_3" class="form-group media_upload">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pictureKlinis">
                            Photo Diagnosis Klinis </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="">
                                <div style="width:90%">
                                    <image v-for="(item, index) in pictureKlinis" :index="index" :src="item.image"
                                        :note="item.note" :typeForm="item.typeForm"
                                        :class="(item.isDeleted == true) ? 'tumbnail tumbnail-sm deleted' : 'tumbnail tumbnail-sm'" />
                                </div>
                                <span class="btn btn-primary btn-add-img"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>

                    </div>
                    <div id="from_group_4" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="temuan">
                            Temuan laboratorium </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="temuan" value="" class="form-control" id="temuan">
                        </div>
                    </div>
                    <div id="from_group_6" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pictureRadiology">
                            Photo Radiology </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div style="width:90%">
                                <image v-for="(item, index) in pictureRadiology" :index="index" :src="item.image"
                                    :note="item.note" :typeForm="item.typeForm"
                                    :class="(item.isDeleted == true) ? 'tumbnail tumbnail-sm deleted' : 'tumbnail tumbnail-sm'" />
                            </div>
                            <span class="btn btn-primary btn-add-img"><i class="fa fa-plus"></i></span>
                            <textarea style="width:100%" rows="3" class="form-control note" value=""></textarea>
                        </div>

                    </div>
                    <!-- <div id="from_group_6" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambaranRadiology">
                            Gambaran Radiology </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="gambaranRadiology" value="" class="form-control"
                                id="gambaranRadiology">
                        </div>
                    </div> -->
                    <div id="from_group_7" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topography">
                            Topography Klinis </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" v-model="topography" id="topography">

                                <!-- Neoplasma ganas (C00-C96) -->
                                <option value='C00'>Neoplasma ganas bibir (C00)</option>
                                <option value='C01'>Neoplasma ganas dasar mulut (C01)</option>
                                <option value='C02'>Neoplasma ganas bagian lain dan yang tidak spesifik dari lidah (C02)
                                </option>
                                <option value='C03'>Neoplasma ganas gusi (C03)</option>
                                <option value='C04'>Neoplasma ganas dasar mulut (C04)</option>
                                <option value='C05'>Neoplasma ganas langit-langit mulut (C05)</option>
                                <option value='C06'>Neoplasma ganas bagian lain dan yang tidak spesifik dari mulut (C06)
                                </option>
                                <option value='C07'>Neoplasma ganas kelenjar parotis (C07)</option>
                                <option value='C08'>Neoplasma ganas kelenjar liur besar lainnya dan yang tidak spesifik
                                    (C08)</option>
                                <option value='C09'>Neoplasma ganas amandel (C09)</option>
                                <option value='C10'>Neoplasma ganas orofaring (C10)</option>
                                <option value='C11'>Neoplasma ganas nasofaring (C11)</option>
                                <option value='C12'>Neoplasma ganas sinus piriformis (C12)</option>
                                <option value='C13'>Neoplasma ganas bagian hipofaring (C13)</option>
                                <option value='C14'>Neoplasma ganas bagian lainnya dan yang tidak spesifik dari bibir,
                                    rongga mulut, dan faring (C14)</option>
                                <option value='C15'>Neoplasma ganas esofagus (C15)</option>
                                <option value='C16'>Neoplasma ganas lambung (C16)</option>
                                <option value='C17'>Neoplasma ganas usus halus (C17)</option>
                                <option value='C18'>Neoplasma ganas kolon (C18)</option>
                                <option value='C19'>Neoplasma ganas rektosigmoid junction (C19)</option>
                                <option value='C20'>Neoplasma ganas rektum (C20)</option>
                                <option value='C21'>Neoplasma ganas anus dan kanal anal (C21)</option>
                                <option value='C22'>Neoplasma ganas hati dan saluran intrahepatik (C22)</option>
                                <option value='C23'>Neoplasma ganas kantong empedu (C23)</option>
                                <option value='C24'>Neoplasma ganas bagian lainnya dan yang tidak spesifik dari sistem
                                    empedu (C24)</option>
                                <option value='C25'>Neoplasma ganas pankreas (C25)</option>
                                <option value='C26'>Neoplasma ganas bagian lainnya dan yang tidak spesifik dari sistem
                                    pencernaan (C26)</option>
                                <option value='C30'>Neoplasma ganas hidung dan sinus nasal (C30)</option>
                                <option value='C31'>Neoplasma ganas sinus paranasal (C31)</option>
                                <option value='C32'>Neoplasma ganas laring (C32)</option>
                                <option value='C33'>Neoplasma ganas trakea (C33)</option>
                                <option value='C34'>Neoplasma ganas bronkus dan paru-paru (C34)</option>
                                <option value='C37'>Neoplasma ganas timus (C37)</option>
                                <option value='C38'>Neoplasma ganas jantung, mediastinum, dan pleura (C38)</option>
                                <option value='C39'>Neoplasma ganas bagian lain dan yang tidak spesifik dari sistem
                                    pernapasan dan intratoraks (C39)</option>
                                <option value='C40'>Neoplasma ganas tulang dan kartilago artikular dari tungkai (C40)
                                </option>
                                <option value='C41'>Neoplasma ganas tulang dan kartilago artikular dari bagian lain dan
                                    tidak spesifik (C41)</option>
                                <option value='C43'>Melanoma ganas dari kulit (C43)</option>
                                <option value='C44'>Neoplasma ganas kulit lainnya (C44)</option>
                                <option value='C45'>Mesotelioma (C45)</option>
                                <option value='C46'>Sarcoma Kaposi (C46)</option>
                                <option value='C47'>Neoplasma ganas saraf perifer dan sistem saraf otonom (C47)</option>
                                <option value='C48'>Neoplasma ganas jaringan ikat dan jaringan lunak retroperitoneum dan
                                    peritoneum (C48)</option>
                                <option value='C49'>Neoplasma ganas jaringan ikat dan jaringan lunak lain dan yang tidak
                                    spesifik (C49)</option>
                                <option value='C50'>Neoplasma ganas payudara (C50)</option>
                                <option value='C51'>Neoplasma ganas vulva (C51)</option>
                                <option value='C52'>Neoplasma ganas vagina (C52)</option>
                                <option value='C53'>Neoplasma ganas serviks uteri (C53)</option>
                                <option value='C54'>Neoplasma ganas korpus uteri (C54)</option>
                                <option value='C55'>Neoplasma ganas uterus, bagian yang tidak spesifik (C55)</option>
                                <option value='C56'>Neoplasma ganas ovarium (C56)</option>
                                <option value='C57'>Neoplasma ganas organ kelamin wanita lainnya dan yang tidak spesifik
                                    (C57)</option>
                                <option value='C58'>Neoplasma ganas plasenta (C58)</option>
                                <option value='C60'>Neoplasma ganas penis (C60)</option>
                                <option value='C61'>Neoplasma ganas prostat (C61)</option>
                                <option value='C62'>Neoplasma ganas testis (C62)</option>
                                <option value='C63'>Neoplasma ganas organ kelamin pria lainnya dan yang tidak spesifik
                                    (C63)</option>
                                <option value='C64'>Neoplasma ganas ginjal, kecuali pelvis renalis (C64)</option>
                                <option value='C65'>Neoplasma ganas pelvis renalis (C65)</option>
                                <option value='C66'>Neoplasma ganas ureter (C66)</option>
                                <option value='C67'>Neoplasma ganas kandung kemih (C67)</option>
                                <option value='C68'>Neoplasma ganas organ kemih lainnya dan yang tidak spesifik (C68)
                                </option>
                                <option value='C69'>Neoplasma ganas mata dan adnexa (C69)</option>
                                <option value='C70'>Neoplasma ganas meninges (C70)</option>
                                <option value='C71'>Neoplasma ganas otak (C71)</option>
                                <option value='C72'>Neoplasma ganas sumsum tulang belakang, saraf kranial dan bagian
                                    lain dari sistem saraf pusat (C72)</option>
                                <option value='C73'>Neoplasma ganas tiroid (C73)</option>
                                <option value='C74'>Neoplasma ganas kelenjar adrenal (C74)</option>
                                <option value='C75'>Neoplasma ganas kelenjar endokrin lainnya dan struktur terkait (C75)
                                </option>
                                <option value='C76'>Neoplasma ganas organ lain dan yang tidak spesifik (C76)</option>
                                <option value='C77'>Neoplasma ganas kelenjar getah bening (C77)</option>
                                <option value='C78'>Neoplasma ganas metastatik di organ pernapasan dan pencernaan (C78)
                                </option>
                                <option value='C79'>Neoplasma ganas metastatik di organ lain dan tidak spesifik (C79)
                                </option>
                                <option value='C80'>Neoplasma ganas, tidak spesifik (C80)</option>
                                <option value='C81'>Penyakit Hodgkin (C81)</option>
                                <option value='C82'>Limfoma folikular (C82)</option>
                                <option value='C83'>Limfoma non-Hodgkin (C83)</option>
                                <option value='C84'>Limfoma sel T kulit (C84)</option>
                                <option value='C85'>Limfoma non-Hodgkin lainnya (C85)</option>
                                <option value='C88'>Penyakit imunoproliferatif lainnya (C88)</option>
                                <option value='C90'>Multiple myeloma dan neoplasma sel plasma (C90)</option>
                                <option value='C91'>Leukemia limfoid (C91)</option>
                                <option value='C92'>Leukemia myeloid (C92)</option>
                                <option value='C93'>Leukemia monocytic (C93)</option>
                                <option value='C94'>Leukemia sel lain (C94)</option>
                                <option value='C95'>Leukemia tidak spesifik (C95)</option>
                                <option value='C96'>Neoplasma ganas sistem limfoid, hematopoietik dan jaringan terkait
                                    lainnya (C96)</option>


                            </select>
                        </div>
                    </div>
                    <div id="from_group_8" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mormphlogy">
                            Mormphlogy Klinis </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" v-model="mormphlogy" id="mormphlogy">
                                <!-- Morfologi Neoplasma (M8000/0-M9989/3) -->
                                <option value='M8000/3'>Neoplasma ganas, NOS (M8000/3)</option>
                                <option value='M8010/3'>Karsinoma, NOS (M8010/3)</option>
                                <option value='M8012/3'>Karsinoma besar sel (M8012/3)</option>
                                <option value='M8013/3'>Karsinoma kecil sel (M8013/3)</option>
                                <option value='M8020/3'>Karsinoma kribriform, NOS (M8020/3)</option>
                                <option value='M8031/3'>Karsinoma sel bersih (M8031/3)</option>
                                <option value='M8041/3'>Karsinoma sel basal (M8041/3)</option>
                                <option value='M8050/3'>Papilari karsinoma, NOS (M8050/3)</option>
                                <option value='M8070/3'>Karsinoma sel skuamosa, NOS (M8070/3)</option>
                                <option value='M8140/3'>Adenokarsinoma, NOS (M8140/3)</option>
                                <option value='M8211/3'>Karsinoma tubular (M8211/3)</option>
                                <option value='M8240/3'>Karsinoma karsinoid, NOS (M8240/3)</option>
                                <option value='M8246/3'>Adenokarsinoma usus besar (M8246/3)</option>
                                <option value='M8247/3'>Tumor karcinoid atipikal (M8247/3)</option>
                                <option value='M8250/3'>Adenokarsinoma bronkiolo-alveolar, NOS (M8250/3)</option>
                                <option value='M8260/3'>Adenokarsinoma papilar (M8260/3)</option>
                                <option value='M8310/3'>Adenokarsinoma sel jernih, NOS (M8310/3)</option>
                                <option value='M8440/3'>Cystadenokarsinoma serosa, NOS (M8440/3)</option>
                                <option value='M8480/3'>Adenokarsinoma mucinous (M8480/3)</option>
                                <option value='M8500/3'>Karsinoma duktal, NOS (M8500/3)</option>
                                <option value='M8520/3'>Karsinoma lobular, NOS (M8520/3)</option>
                                <option value='M8720/3'>Melanoma malignum, NOS (M8720/3)</option>
                                <option value='M8800/3'>Sarcoma, NOS (M8800/3)</option>
                                <option value='M8890/3'>Leiomyosarcoma, NOS (M8890/3)</option>
                                <option value='M8940/3'>Mesonephroma malignum (M8940/3)</option>
                                <option value='M8960/3'>Sarkoma sinovial (M8960/3)</option>
                                <option value='M8980/3'>Tumor rabdoid (M8980/3)</option>
                                <option value='M9064/3'>Tumor sel germinal, NOS (M9064/3)</option>
                                <option value='M9140/3'>Mesothelioma malignum (M9140/3)</option>
                                <option value='M9590/3'>Limfoma non-Hodgkin, NOS (M9590/3)</option>
                                <option value='M9680/3'>Limfoma sel B besar difus (M9680/3)</option>
                                <option value='M9690/3'>Limfoma folikular, NOS (M9690/3)</option>
                                <option value='M9732/3'>Multiple myeloma (M9732/3)</option>
                                <option value='M9801/3'>Leukemia limfoid kronik (M9801/3)</option>
                                <option value='M9823/3'>Leukemia promyelocytic akut (M9823/3)</option>
                                <option value='M9861/3'>Leukemia mieloid akut (M9861/3)</option>
                            </select>
                        </div>
                    </div>
                    <div id="from_group_9" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pictureMacroscopic">
                            Photo Macroscopic </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div style="width:90%">
                                <image v-for="(item, index) in pictureMacroscopic" :index="index" :src="item.image"
                                    :note="item.note" :typeForm="item.typeForm"
                                    :class="(item.isDeleted == true) ? 'tumbnail tumbnail-sm deleted' : 'tumbnail tumbnail-sm'" />
                            </div>
                            <span class="btn btn-primary btn-add-img"><i class="fa fa-plus"></i></span>
                            <textarea style="width:100%" rows="3" class="form-control note" value=""></textarea>
                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <!-- <div id="from_group_10" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keteranganMacroscopic">
                            Keterangan Macroscopic </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="keteranganMacroscopic" value="" class="form-control"
                                id="keteranganMacroscopic">
                        </div>
                    </div> -->
                    <div id="from_group_11" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosisBanding">
                            Diagnosis Banding </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea v-model="diagnosisBanding" cols="40" rows="3" class="form-control"
                                id="diagnosisBanding"></textarea>
                        </div>
                    </div>
                    <div id="from_group_12" class="form-group media_upload">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pictureTambahan">
                            Photo Pemeriksaan Tambahan </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div style="width:90%">
                                <image v-for="(item, index) in pictureTambahan" :index="index" :src="item.image"
                                    :note="item.note" :typeForm="item.typeForm"
                                    :class="(item.isDeleted == true) ? 'tumbnail tumbnail-sm deleted' : 'tumbnail tumbnail-sm'" />
                            </div>
                            <span class="btn btn-primary btn-add-img"><i class="fa fa-plus"></i></span>
                            <textarea style="width:100%" rows="3" class="form-control note" value=""></textarea>
                        </div>
                    </div>
                    <!-- <div id="from_group_13" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keteranganTambahan">
                            Keterangan tambahan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" v-model="keteranganTambahan" value="" class="form-control"
                                id="keteranganTambahan">
                        </div>
                    </div> -->
                    <div id="from_group_14" class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diagnosisAkhir">
                            Diagnosis Akhir </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea v-model="diagnosisAkhir" cols="40" rows="3" class="form-control"
                                id="diagnosisAkhir"></textarea>
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
                <div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-5">
                    <button type="reset" class="btn btn-primary reset_form">Reset Form</button>
                    <span v-on:click="submit()" class="btn btn-success">Submit</span>
                </div>
            </div>

        </form>



        <!-- Modal -->
        <div class="modal fade" id="modalPicture" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{typeForm}}</h4>
                    </div>
                    <div class="modal-body">

                        <div class="">
                            <ul class="nav nav-tabs tab-photo-source">
                                <li id="liPreview" class="active"><a data-toggle="tab" href="#tabPreview">Pereview</a>
                                </li>
                                <li id="liUpload" class=""><a data-toggle="tab" href="#tabUpload">Upload</a></li>
                                <li id="liCamera" class=""><a data-toggle="tab" href="#tabCamera">Camera</a></li>
                            </ul>

                            <div class="tab-content" style="height:400px">

                                <div id="tabPreview" class="tab-pane fade in active">
                                    <img :src="picturePreview">
                                </div>

                                <div id="tabUpload" class="tab-pane fade in">
                                    <input id="inputImage" type="file" accept="image/*" onchange="loadFile(event)">
                                    <img id="outputImage" v-bind:src="pictureUpload" />


                                    <!-- <div id="drop">
                                        Drop Here
                                        <a>Browse</a>
                                        <input type="file" name="upl" multiple />
                                    </div> -->
                                    <ul>
                                        <!-- The file uploads will be shown here -->
                                    </ul>
                                </div>


                                <div id="tabCamera" class="tab-pane fade">
                                    <h1 id="msg">Please allow this page to access your camera.</h1>
                                    <div id="wrapper">
                                        <!-- <button id="newPhoto" class="btn btn-primary"
                                            style="position:absolute;top:70;z-index:1000" title="Ambil Photo"><i
                                                class="fa fa-camera"></i></button>
                                        <button id="newMovie" class="btn btn-success"
                                            style="position:absolute;top:70;z-index:1000;display:none"
                                            title="Ambil Photo"><i class="fa fa-file-movie-o"></i></button>
                                        <button id="download" class="btn btn-success hide"
                                            style="position:absolute;top:50;right:0" disabled="disabled">Download
                                            Photo</button> -->

                                        <div class="row">
                                            <video id="videoTakePhoto" class="col-md-12"></video>
                                            <canvas id="canvasTakePhoto" class="col-md-12"
                                                style="display:none"></canvas>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <textarea v-model="pictureNote" v-show="isShowInputNote" style="width:100%;margin-top:10px"
                            rows="10" class="form-control"></textarea>

                    </div>
                    <div class="modal-footer">
                        <span class="btn btn-primary" id="btnSaveImage">Save</span>
                        <span class="btn btn-danger" id="btnDeleteImage">Delete</span>
                        <span class="btn btn-default" data-dismiss="modal">Close</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>



<script src="<?php echo base_url(); ?>vendors/vue/vue.2.6.0.js"></script>
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>

<script>
var basedUrl = '<?php echo base_url(); ?>';
var basedUrlUpluads = basedUrl + 'uploads';

var pictureKlinis = [{
        id: 1,
        image: `<?php echo base_url(); ?>uploads/klin-1.png`,
        note: 'AAAA',
        typeForm: 'Klinis'
    },
    {
        id: 2,
        image: `<?php echo base_url(); ?>uploads/klin-2.png`,
        note: 'BBBB',
        typeForm: 'Klinis'
    },
    {
        id: 3,
        image: `<?php echo base_url(); ?>uploads/klin-3.png`,
        note: 'AAAA',
        typeForm: 'Klinis'
    },
    {
        id: 4,
        image: `<?php echo base_url(); ?>uploads/klin-4.png`,
        note: 'BBBB',
        typeForm: 'Klinis'
    },
];

var pictureRadiology = [{
        id: 1,
        image: `<?php echo base_url(); ?>uploads/radi-1.png`,
        note: 'AAAA',
        typeForm: 'Radiology'
    },
    {
        id: 2,
        image: `<?php echo base_url(); ?>uploads/radi-2.png`,
        note: 'BBBB',
        typeForm: 'Radiology'
    },
    {
        id: 3,
        image: `<?php echo base_url(); ?>uploads/radi-3.png`,
        note: 'AAAA',
        typeForm: 'Radiology'
    },
    {
        id: 4,
        image: `<?php echo base_url(); ?>uploads/radi-4.png`,
        note: 'BBBB',
        typeForm: 'Radiology'
    },
];


var pictureMacroscopic = [{
        id: 1,
        image: `<?php echo base_url(); ?>uploads/macro-1.png`,
        note: 'AAAA',
        typeForm: 'Macroscopic'
    },
    {
        id: 2,
        image: `<?php echo base_url(); ?>uploads/macro-2.png`,
        note: 'BBBB',
        typeForm: 'Macroscopic'
    },
    {
        id: 3,
        image: `<?php echo base_url(); ?>uploads/macro-3.png`,
        note: 'AAAA',
        typeForm: 'Macroscopic'
    },
    {
        id: 4,
        image: `<?php echo base_url(); ?>uploads/macro-4.png`,
        note: 'BBBB',
        typeForm: 'Macroscopic'
    },
];

var pictureTambahan = [{
        id: 1,
        image: `<?php echo base_url(); ?>uploads/tam-1.png`,
        note: 'AAAA',
        typeForm: 'Tambahan'
    },
    {
        id: 2,
        image: `<?php echo base_url(); ?>uploads/tam-2.png`,
        note: 'BBBB',
        typeForm: 'Tambahan'
    },
    {
        id: 3,
        image: `<?php echo base_url(); ?>uploads/tam-2.png`,
        note: 'AAAA',
        typeForm: 'Tambahan'
    },
    {
        id: 4,
        image: `<?php echo base_url(); ?>uploads/tam-3.png`,
        note: 'BBBB',
        typeForm: 'Tambahan'
    },
];

const Klinis = 'Klinis';
const Radiology = 'Radiology';
const Macroscopic = 'Macroscopic';
const Tambahan = 'Tambahan';

var App = new Vue({
    el: '#app',
    data: {
        keterangan: '',
        pictureKlinis: pictureKlinis,
        temuan: '',
        pictureRadiology: pictureRadiology,
        gambaranRadiology: '',
        pictureMacroscopic: pictureMacroscopic,
        keteranganMacroscopic: '',
        pictureTambahan: pictureTambahan,
        keteranganTambahan: '',
        diagnosis: '',
        topography: '',
        mormphlogy: '',
        diagnosisBanding: '',
        diagnosisAkhir: '',
        terapi: '',
        diskusi: '',
        picturePreview: '',
        pictureNote: '',
        isShowInputNote: true,

        tumbnailSelected: null,
        typeForm: '',
        indexSelected: -1,

        pictureUpload: null,
        pictureCamera: null,

        // shoppingList: [{
        //     v-model: 'Tomatoes',
        //     number: 5,
        //     important: false
        // }]

    },
    mounted: function() {
        this.init();
    },
    methods: {
        init: function() {

            $(document).on('click', '.tumbnail', function() {
                var parent = $(this).parent();
                parent.find('.tumbnail').removeClass('selected')
                $(this).addClass('selected')

                var note = $(this).attr('note');
                parent.siblings('.note').val(note);
            });

            $(document).on('dblclick', '.tumbnail', function() {
                $(".tab-photo-source li,.tab-content .tab-pane").removeClass("in active");
                $("#liPreview,#tabPreview").addClass("in active").click();

                App.indexSelected = $(this).attr('index');
                App.picturePreview = $(this).attr('src');
                App.pictureNote = $(this).attr('note');
                App.tumbnailSelected = $(this);
                App.pictureUpload = null;
                App.pictureCamera = null;
                App.typeForm = $(this).attr('typeForm');

                App.isShowInputNote = App.typeForm != Klinis;

                $("#modalPicture").modal('show');
            });

            $(document).on('click', '.btn-add-img', function() {
                $(".tab-photo-source li,.tab-content .tab-pane").removeClass("in active");
                $("#liPreview,#tabPreview").addClass("in active").click();

                var parent = $(this).siblings("div");
                parent.find('.tumbnail').removeClass('selected')
                App.pictureUpload = null;
                App.pictureCamera = null;
                App.picturePreview = '';
                App.pictureNote = '';
                App.indexSelected = null;
                App.typeForm = $(this).siblings('div').find('img:first').attr('typeForm');
                App.isShowInputNote = App.typeForm != Klinis;
                $("#modalPicture").modal('show');
            });

            $(document).on('click', '#btnSaveImage', function() {


                var isUpdatePicture = false;
                var target = [];
                var picture = App.picturePreview;
                App.pictureCamera = getCanvasBase64();

                var idPhotoSource = $(".tab-photo-source li.active").attr("id");

                if (idPhotoSource == "liUpload") {
                    picture = App.pictureUpload;
                    isUpdatePicture = true;
                } else if (idPhotoSource == "liCamera") {
                    onTakePhoto();
                    picture = `data:image/png;base64, ${getCanvasBase64()}`
                    isUpdatePicture = true;
                }

                var target = App.getTarget();
                var targetItem;

                if (App.indexSelected == null) {
                    isUpdatePicture = false;
                    isNew = false;
                    target.push({
                        id: target.length,
                        image: picture,
                        note: App.pictureNote,
                        typeForm: App.typeForm,
                        isUpdatePicture: false,
                        isNew: true,
                        isUpdateNote: false,
                    });

                    App.indexSelected = target.length - 1;
                    targetItem = target[App.indexSelected];

                    App.$forceUpdate();
                    App.tumbnailSelected = $(`img[typeForm=${App.typeForm}]:first`).closest("div")
                        .find(`.tumbnail:eq(${App.indexSelected})`);

                } else {
                    targetItem = target[App.indexSelected];
                    targetItem.image = picture;
                    targetItem.note = App.pictureNote;
                    targetItem.isUpdatePicture = isUpdatePicture;
                    targetItem.isNew = false;
                    targetItem.isUpdateNote = targetItem.note == App.pictureNote;

                    App.isDeleted = false;
                    // // // App.tumbnailSelected.removeClass('isDeleted');
                }

                if (App.tumbnailSelected) {
                    setTimeout(() => {
                        targetItem.isDeleted = false;
                        App.$forceUpdate();
                        App.tumbnailSelected.click();
                    }, 1000);
                }


                $("#modalPicture").modal('hide');
            });


            $(document).on('click', '#btnDeleteImage', function() {
                var target = App.getTarget();
                var targetItem = target[App.indexSelected];

                if (targetItem.isNew == true) {
                    target.splice(App.indexSelected, 1);
                } else {
                    targetItem.isDeleted = true;
                    // // // App.tumbnailSelected.addClass('isDeleted');
                    // // // App.tumbnailSelected.attr('note', App.pictureNote);
                    App.tumbnailSelected.click();
                    App.$forceUpdate();
                }

                $("#modalPicture").modal('hide');
            });

            // // // $(document).on('click','#newPhoto',function() {
            // // //     onTakePhoto();
            // // // });

        },
        getTarget: function() {
            var target;
            if (App.typeForm == Klinis) {
                target = App.pictureKlinis;
            } else if (App.typeForm == Radiology) {
                target = App.pictureRadiology;
            } else if (App.typeForm == Macroscopic) {
                target = App.pictureMacroscopic;
            } else if (App.typeForm == Tambahan) {
                target = App.pictureTambahan;
            }
            return target;
        },
        get: function() {
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
        submit: function() {
            // App.$data

            // // // $.ajax({
            // // //     url: 'https://api.example.com/submit', // Ganti dengan URL yang sesuai
            // // //     type: 'POST',
            // // //     data: App.$data,
            // // //     success: function(response) {
            // // //         $('#result').html(response.message);
            // // //     },
            // // //     error: function(xhr, status, error) {
            // // //         $('#result').html('Error: ' + error);
            // // //     }
            // // // });

            alert("Ini Masih Prototype");
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

// $(document).ready(function(){
//     $(document).on('click','.tumbnail',function(){
//         $(this).closest("div").find('.tumbnail').removeClass('selected')
//         $(this).addClass('selected')
//     })
// });

// app.mount();

var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function() {
        // var output = document.getElementById('outputImage');
        // output.src = reader.result;

        App.pictureUpload = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
</script>


<script>
// 'use strict';

var message = {},
    wrapper = {},
    // buttonNewPhoto = {},
    // buttonDownload = {},
    video = {},
    canvas = {};

function initElement() {
    message = document.getElementById('msg');
    wrapper = document.getElementById('wrapper');
    // buttonNewPhoto = document.getElementById('newPhoto');
    // buttonNewMovie = document.getElementById('newMovie');
    // buttonDownload = document.getElementById('download');
    video = document.querySelector('video');
    canvas = document.querySelector('canvas');

    if (navigator.mediaDevices === undefined) {
        navigator.mediaDevices = {};
    }

    if (navigator.mediaDevices.getUserMedia === undefined) {
        navigator.mediaDevices.getUserMedia = function(constraints) {

            var getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator
                .mozGetUserMedia || navigator.msGetUserMedia;

            if (!getUserMedia) {
                return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
            }

            return new Promise(function(resolve, reject) {
                getUserMedia.call(navigator, constraints, resolve, reject);
            })
        }
    }
}

function onTakePhoto() {
    canvas.getContext('2d').drawImage(video, 0, 0, video.width, video.height + 100);
    // // buttonDownload.removeAttribute('disabled');
    // $("#videoTakePhoto").css("display", "none");
    // $("#canvasTakePhoto").css("display", "block");

    // $("#newMovie").css("display", "block");
    // $("#newPhoto").css("display", "none");
}

function onTakeMovie() {
    canvas.getContext('2d').drawImage(video, 0, 0, video.width, video.height);
    // // buttonDownload.removeAttribute('disabled');
    // $("#videoTakePhoto").css("display", "block");
    // $("#canvasTakePhoto").css("display", "none");

    // $("#newMovie").css("display", "none");
    // $("#newPhoto").css("display", "block");
}

function onDownloadPhoto() {
    canvas.toBlob(function(blob) {
        var link = document.createElement('a');
        link.download = 'photo.jpg';
        link.setAttribute('href', URL.createObjectURL(blob));
        link.dispatchEvent(new MouseEvent('click'));

    }, 'image/jpeg', 1);
}

function getCanvasBase64() {
    const base64Canvas = canvas.toDataURL("image/jpeg").split(';base64,')[1];
    return base64Canvas;
}

function onLoadVideo() {

    video.setAttribute('width', this.videoWidth);
    video.setAttribute('height', this.videoHeight - 70);
    canvas.setAttribute('width', this.videoWidth);
    canvas.setAttribute('height', this.videoHeight);

    // video.setAttribute('width', '100%');
    // video.setAttribute('height', '100%');
    // canvas.setAttribute('width', $("#videoTakePhoto").width());
    // canvas.setAttribute('height', $("#videoTakePhoto").height());

    video.play();
}

function onMediaStream(stream) {
    if ('srcObject' in video) {
        video.srcObject = stream;
    } else {
        video.src = window.URL.createObjectURL(stream);
    }

    message.style.display = 'none';
    wrapper.style.display = 'block';
    // buttonNewPhoto.addEventListener('click', onTakePhoto);
    // buttonNewMovie.addEventListener('click', onTakeMovie);


    // $(document).on('click','#newPhoto',function() {
    //     onTakePhoto();
    // });
    // buttonDownload.addEventListener('click', onDownloadPhoto);
    video.addEventListener('loadedmetadata', onLoadVideo);
}

function onMediaError(err) {
    // message.innerHTML = err.name + ': ' + err.message;
}

function initEvent() {
    navigator.mediaDevices
        .getUserMedia({
            video: true
        })
        .then(onMediaStream)
        .catch(onMediaError);
}

function init() {
    initElement();
    initEvent();
}

// if (window.location.protocol != 'https:' && window.location.protocol != 'file:') {
//     window.location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
// }

window.addEventListener('DOMContentLoaded', init);
</script>