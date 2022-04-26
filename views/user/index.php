<!-- <h1>User</h1>

<form method="post" action="<?php echo URL;?>user/create">
    <label>Login</label><input type="text" name="login" /><br />
    <label>Password</label><input type="text" name="password" /><br />
    <label>Role</label>
        <select name="role">
            <option value="default">Default</option>
            <option value="admin">Admin</option>
        </select><br />
    <label>&nbsp;</label><input type="submit" />
</form>

<hr />

<table>
<?php
    // foreach($this->userList as $key => $value) {
    //     echo '<tr>';
    //     echo '<td>' . $value['userid'] . '</td>';
    //     echo '<td>' . $value['login'] . '</td>';
    //     echo '<td>' . $value['role'] . '</td>';
    //     echo '<td>
    //             <a href="'.URL.'user/edit/'.$value['userid'].'">Edit</a> 
    //             <a href="'.URL.'user/delete/'.$value['userid'].'">Delete</a></td>';
    //     echo '</tr>';
    // }
?>
</table> -->


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of all users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Timing</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                        foreach($this->userList as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $key+1 . '</td>';
                            echo '<td>' . $value['email'] . '</td>';
                            echo '<td>' . $value['name'] . '</td>';
                            echo '<td>' . $value['timing'] . '</td>';
                            echo '<td>
                                    <a href="'.URL.'user/edit/'.$value['id'].'">Edit</a> 
                                    <a href="'.URL.'user/delete/'.$value['id'].'">Delete</a></td>';
                            echo '</tr>';
                        }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Timing</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>