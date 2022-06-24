<!DOCTYPE html>
<html>
    <head>
       <?php
         include_once('admin_header.php');
         include_once('connection.php');
       ?>
    </head>
<body>
    <div class="container">
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>DATE</th>
                  <th>ACTION</th>
              </tr>
          </thead>
          <tbody>
              <?php
                $query="select * from events";
                $result=(mysqli_query($conn,$query));
                while($row=mysqli_fetch_array($result))
                {
                    $date=date_create($row['event_date']);
              ?>
              <tr>
                  <td><?= $row['id'];?></td>
                  <td><?= $row['event_name'];?></td>
                  <td><?= date_format($date,'d-m-Y');?></td>
                  <td>
                      <a href="edit_event.php?id=<?= $row['id'];?>"><span class="fa fa-pencil"></span></a> &nbsp;&nbsp;
                      <a href="db_delete.php?id=<?= $row['id'];?>"><span class="fa fa-trash" style="color:red;"></span></a>
                  </td>
              </tr>
                <?php }
                ?>
          </tbody>
      </table>
    </div>
</body>
</html>