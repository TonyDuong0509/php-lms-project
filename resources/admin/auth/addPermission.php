<?php require ABSPATH . 'resources/admin/layout/sidebar.php'; ?>

<?php require ABSPATH . 'resources/admin/layout/header.php'; ?>

<div class="page-wrapper">
  <div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Permission</li>
          </ol>
        </nav>
      </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
      <div class="card-body p-4">
        <h5 class="mb-4">Add Permission</h5>
        <form action="<?php echo $router->generate('store.permission'); ?>" method="POST" class="row g-3" enctype="multipart/form-data">
          <div class="form-group col-md-6">
            <label for="input1" class="form-label">Permission Name</label>
            <input type="text" name="name" class="form-control" id="input1">
          </div>

          <div class="form-group col-md-6">
            <label for="input1" class="form-label"> Group Name</label>
            <select name="group_name" class="form-select mb-3" aria-label="Default select example">
              <option selected="" disabled>Open this select menu</option>
              <option value="Dashboard">Dashboard</option>
              <option value="User">User</option>
              <option value="Instructor">Instructor</option>
              <option value="Category">Category</option>
              <option value="Course">Course</option>
              <option value="Coupon">Coupon</option>
              <option value="Orders">Orders</option>
              <option value="Report">Report</option>
              <option value="Blog">Blog</option>
              <option value="Role and Permission">Role and Permission</option>
            </select>
          </div>
          <div class="col-md-12">
            <div class="d-md-flex d-grid align-items-center gap-3">
              <button type="submit" class="btn btn-primary px-4">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="overlay toggle-icon"></div>
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<?php require ABSPATH . 'resources/admin/layout/footer.php'; ?>
</div>

<?php require ABSPATH . 'resources/admin/layout/footerScript.php'; ?>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
<script>
  $(document).ready(function() {
    var table = $('#example2').DataTable({
      lengthChange: false,
      buttons: ['copy', 'excel', 'pdf', 'print']
    });

    table.buttons().container()
      .appendTo('#example2_wrapper .col-md-6:eq(0)');
  });
</script>
<script src="public/js/app.js"></script>

</body>

</html>