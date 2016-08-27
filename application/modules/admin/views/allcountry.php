<div class="row-xs-12">
        <h3> Countries of Operation </h3>
</div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Countries

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url('/admin/allcountry');?>">Country</a></li>
      </ol>
    </section>
    <section class="content">
<?php if($data){ ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Featured Boats</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="allcountry" class="table table-bordered table-hover">
        <thead>
          <tr>
              <th data-field="id">Sno</th>
              <th data-field="name">Country</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          
          <?php foreach($data as $row){?>
          <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><a class="btn teal lighten-2" href="<?php echo base_url('/admin/delcountry/'.$row['id']);?>">Delete</a>
          </tr>
         <?php }}?>
        </tbody>
      </table>
          </div>
          </div>
        </div>
      </div>

    </section>
  </div>

