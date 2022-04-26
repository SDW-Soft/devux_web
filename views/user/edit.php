<h1>User: Edit</h1>

<?php
// print_r($this->user);


?>
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
                <form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user[0]['id']; ?>">
                    <label>email</label><input type="text" name="email" value="<?php echo $this->user[0]['email']; ?>" /><br />
                    <label>Password</label><input type="text" name="password" /><br />
                    <label>Role</label>
                        <select name="role">
                            <option value="admin" <?php if($this->user[0]['id'] == 'admin') echo 'selected'; ?>>Admin</option>
                            <option value="owner" <?php if($this->user[0]['id'] == 'owner') echo 'selected'; ?>>Owner</option>
                        </select><br />
                    <label>&nbsp;</label><input type="submit" />
                </form>
              </div></div></div></div></div></section></div>