
<?php
include "../model/conn.php";

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../view/css/login.css">
</head>

<body class="overflow-x-hidden">
<nav class="border p-3">
<ul class="nav justify-content-center">

  <li class="nav-item">
    <a class="nav-link" href="./index.php">Tasks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./register.php">Register</a>
  </li>
</ul>
</nav>
    <div class="row d-flex justify-content-center m-5">
        <h1 class="text-center">Welcome Guest</h1>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="card w-75">
            <div class="card-header fw-bolder fs-2">
                Your Tasks
            </div>
            <ol class="list-group list-group-numbered pt-3 pb-3">
                <li class="list-group-item d-flex justify-content-between align-items-start ">
                    <div class="ms-2 me-auto pt-2">
                        <div class="fw-bold w-100 ">Lorem, ipsum dolor sit amet consecquia iste velit cupiditate libero accusantium, porro repellat obcaecati?</div>
                    </div>
                    <form action="" method="post"><span class="badge"><button type="button"
                        class="btn btn-outline-danger fw-bold p-2 pt-1 pb-1">X</button>
                </span></form>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start ">
                    <div class="ms-2 me-auto pt-2">
                        <div class="fw-bold w-100 ">Lorem, ipsum dolor sit amet consecquia iste velit cupiditate libero accusantium, porro repellat obcaecati?</div>
                    </div>
                    <form action="" method="post"><span class="badge"><button type="button"
                        class="btn btn-outline-danger fw-bold p-2 pt-1 pb-1">X</button>
                </span></form>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam non placeat quod asperiores ipsa eaque facilis, quia iste velit cupiditate libero accusantium, porro repellat obcaecati?</div>
                    </div>
                    <form action="" method="post"><span class="badge"><button type="button"
                        class="btn btn-outline-danger fw-bold p-2 pt-1 pb-1">X</button>
                </span></form>
                </li>
            </ol>

        </div>
    </div>
    <form action="" method="post" class="row d-flex justify-content-center"><!-- add new task -->
        <div class="input-group w-75 mt-5 pt-5">
            <span class="input-group-text">New Task</span>
            <textarea class="form-control " aria-label="With textarea" maxlength="125" required></textarea>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-primary submit-color text-nowrap fs-5 fw-medium mb-5" type="submit"
                value="submit">Submit Task</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
</body>

</html>