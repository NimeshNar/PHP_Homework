<?php

session_start();
include "db.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $name = $_POST["name"];
    $position = $_POST["position"];
    $salary = $_POST["salary"];

    $sql = $conn->prepare("insert into employee(name,position,salary) values(?,?,?)");
    $sql -> bind_param("ssi",$name,$position,$salary);

    if($sql->execute()){
        echo "<script>alert('Data Inserted Successfully....')</script>";
        header("Location:index.php");
    }
}

?>





<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-dark bg-dark"
            >
                <div class="container">
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php" aria-current="page"
                                    >Hello, <?php echo $_SESSION["name"] ?>
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="insert.php">Insert</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete</a>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0" method="POST">
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <div class="container text-center py-4 my-4 col-6 shadow rounded">
                <h1>Insert Data Here!!</h1>
                <form method="POST">
                    <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="position"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Position</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="salary"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Salary</label>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>