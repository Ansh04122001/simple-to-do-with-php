<?php
include "backend/classes/db.php";
include "backend/includes/main.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>to-do</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" />

  </head>
  <body>


    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
      <span class="navbar-brand" >
        <img src="images\icons8_add.svg" width="40px"/>
      </span>

     <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">
             Dropdown
        </button>
       <div id="myDropdown" class="dropdown-content">
         <a href="#">Action</a>
         <a href="#">Disabled action</a>
       </div>
     </div>


    </nav>

    <div class="container">
      <?php foreach ($todo as $todoItem) { ?>
        <!-- # Container code goes here ... -->
        <div class="row">
          <label>
            <input type="checkbox"> <?=$todoItem['body'] ?>
          </label>
        </div>
        <?php }
      ?>
    </div>

<!-- input code block goes here-->
    <div class="mt-5 ml-4 mr-4">
      <form method="POST" action="">
        <div class="input-group">
            <input
              type="text"
              class="form-control"
              name="list"
              placeholder="Enter To do list"
              required
            />
          <div class="input-group-append">
              <button class="btn btn-outline-success" name="submit" type="submit"> add
              <!-- <i class="fa fa-search"></i> -->
              </button>
          </div>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
