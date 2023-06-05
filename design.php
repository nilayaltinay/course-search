<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Torrens</title>
  <style>
    .orange-text {
      color: #ff5000;
    }

    .orange-bg {
      background-color: #ff5000;
    }
  </style>

</head>

<body>



  <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/mac/degiskenler/torrens-project/img/2.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>



  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-4">
          <div class="card-header">
            <h4>Search Your Interest</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-7">

                <form action="" method="POST">
                  <div class="input-group mb-3">
                    <input type="text" name="search" value="<?php if (isset($_POST['search'])) {
                                                              echo $_POST['search'];
                                                            } ?>" class="form-control" placeholder="search Interest...">
                    <button type="submit" class="btn orange-bg text-white">Search</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-12">
        <div class="card mt-4">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Faculty</th>
                  <th>Type</th>
                  <th>Area of Interest</th>
                  <th>Course Name</th>
                </tr>
              </thead>
              <tbody>

                <?php

                $con = mysqli_connect("localhost", "root", "", "torrens");
                $query = "SELECT `courses`.*, `aoi_list`.`title` as `aoiTitle`, `faculties`.`name` as `facultyTitle` FROM `courses`
                LEFT JOIN `aoi_list` ON `courses`.`aoi` = `aoi_list`.`id`
                LEFT JOIN `faculties` ON `courses`.`faculty` = `faculties`.`id`";


                if (!isset($_POST['search']) || $_POST['search'] == "") {




                  $query = $query . ";";
                } else {
                  // $query = "SELECT * FROM courses WHERE `name` like '%".$_POST['search']."%'";

                  $query = $query . " WHERE `courses`.`name` like '%" . $_POST['search'] . "%';";
                }
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
                ?>
                    <tr>
                      <td><?php echo $row["id"]; ?></td>
                      <td><?php echo $row['facultyTitle']; ?></td>
                      <td><?php echo ($row['type'] == 0) ? "Undergraduate" : "Postgraduate"; ?></td>
                      <td><?php echo $row['aoiTitle'];
                          if ($row['cricos'] != "") {

                            echo "(" . $row['cricos'] . ")";
                          } ?></td>
                      <td><?php echo $row['name']; ?></td>
                    </tr>

                <?php

                  }
                } else {
                  echo "No record Found";
                }

                mysqli_close($con);
                ?>

                

              </tbody>
            </table>
          </div>
        </div>
      </div> -->
      <?php foreach ($query_run as $row) {
      ?>
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
          <div class="card h-100 shadow">
            <img class="card-img-top" src="<?php echo ($row['img'] != "") ? $row['img'] : "default.png" ?>" alt="Card image">
            <div class="card-header"><?php echo $row['name']; ?></div>
            <div class="card-body">
              Type:<?php echo ($row['type'] == 0) ? "Undergraduate" : "Postgraduate"; ?><br>
              Faculty:<?php echo $row['facultyTitle']; ?><br>
              Area of Interest:<?php echo $row['aoiTitle']; ?><br>
              Cricos:<?php echo $row["cricos"]; ?>
            </div>
            <div class="card-footer text-end">
              <button class="btn btn-light btn-sm orange-text">See more</button>
            </div>
          </div>
          <!-- <td><?php echo $row["id"]; ?></td>
                      <td><?php echo $row['facultyTitle']; ?></td>
                      <td><?php echo ($row['type'] == 0) ? "Undergraduate" : "Postgraduate"; ?></td>
                      <td><?php echo $row['aoiTitle'];
                          if ($row['cricos'] != "") {

                            echo "(" . $row['cricos'] . ")";
                          } ?></td>
                      <td><?php echo $row['name']; ?></td> -->
        </div>


      <?php

      }
      ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>