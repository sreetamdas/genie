  <div class ="row-xs-12">
    <h3> Add Moderator</h3>
  </div>
  <div class="row">
    <div class="col-xs-10-offset-2">
    <div class="box">
    <div class="box-body-with-border">
    <form  role="form" action="<?php echo base_url('/admin/addmoderator');?>" method="post">
      <div class="row">
        <div class="form-element">
          <input placeholder="Moderator Name" id="mod" name="mod" type="text" class="form-control">
          <label for="country">Moderator ID</label>
        </div>
  </div>
  <div class="row">
        <div class="form-element">
          <input placeholder="Tags" id="tag" name="tag" type="text" class="form-control" value="0">
          <label for="tag">Tags(Default Zero) : </label>
        </div>
  </div>
  <div class = "row center">
  <button class ="btn teal lighten-2" type="submit"> Add Moderator </button>
</div>
    </form>
  </div>
</div>
</div>
</div>        