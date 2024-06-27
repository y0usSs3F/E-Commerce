<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Home</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.4/font/bootstrap-icons.min.css" />
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="admin.php">Cava Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear"></i> Settings
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
		<div class="container-fluid mt-3">
			<div class="row">
				<div class="col">
					<h2 id="full_name" style="text-align: center;">Welcome Yousseff Mohamed</h2>
				</div>
			</div>
		</div>
	</body>
</html>



<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('../config/db.php');

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: signin.html"); // Redirect to admin login page
    exit();
}


// Function to retrieve and display seller requests
function displaySellerRequests() {

    global $conn;
    $sql = "SELECT * FROM seller_requests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {


        echo '<div class="container-fluid mt-5">';
        echo '<div class="row">';
        echo '<div class="col-md-12">';
        echo '<table class="table table-striped align-middle">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Image</th>';
        echo '<th>Name</th>';
        echo '<th>Price</th>';
        echo '<th>Description</th>';
        echo '<th>Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {

            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo "<td><img src='{$row['image_path']}' alt='{$row['id']}' width='150' height='150'></td>";
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '<td>';
            echo '<form method="post" action="handle_status_request.php">';
            echo "<button class='btn btn-success' type='submit' name='approve' value='" . $row['id'] . "'>Approve</button>";
            echo "<button class='btn btn-danger' type='submit' name='delete' value='" . $row['id'] . "'>Delete</button>";
            echo '</form>';
            echo '</td>';
            echo '</tr>';

        }


            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
            echo '</div>';


    } else {

        echo '<br>';
        echo '<h3 style="text-align: center;">No seller\'s requests :)</h3>';

    }
}


displaySellerRequests();


?>









