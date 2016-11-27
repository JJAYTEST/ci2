<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เพิ่มหมวดหมู่</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <form action="<?php echo base_url('admin/create_category') ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="โปรดกรอกชื่อหมวดหมู่" required>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> บันทึก
                </button>
            </form>
        </div>
    </div>
</div>