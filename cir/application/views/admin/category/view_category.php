<div class="wrapper">
    <div class="col-lg-9" style="margin:70px 220px;">
        <div class="col-lg-12" style="padding:20px;">
            <a href="<?php echo base_url('admin/category/add_category_form') ?>" class="btn btn-success"> + Create
            </a>
        </div>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>S. No.</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            <?php $i=0;?>
            <?php foreach($category as $data){?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $data['name']; ?>
                <td><a class="btn btn-warning" href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-italic" aria-hidden="true"></span></a>
                     <a href="<?php echo base_url('admin/category/delete_category/'.$data['category_id']) ?>" class="btn btn-danger delete_category" href="#" data-toggle="tooltip" data-placement="bottom" title="Delete" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>
