<br/>
<div class="row center">
<?php echo form_open_multipart('admin/do_upload/1/'.$value);?>

<input class="model" type="file" name="userfile" size="20" />

<br /><br />

<input class ="btn teal lighten-2" type="submit" value="upload" />
<div class="divider"></div>
<!-- My Images -->
<br/>
<div class="row center">
  <h4>Header Images  </h4>
  <?php if($value==0){echo "No header Images , please Upload";} else{ ?>
  <?php for($i=1;$i<=$value;$i++){ ?>
<img src="<?php echo base_url('/assets/images/header/img_'.$i.'.jpg');?>" class="img-responsive" alt="Responsive image">
<?php }} ?>
