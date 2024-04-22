
<?php
if(isset($_POST['submitFacility'])){
    $name= $_POST['name'];
    $icon = $_POST['icon'];
    $id = $_POST['id']; // Retrieve the request ID from the form
    // show($rating);

    // Instantiate the controller
    $controller = new adminFacilities();

    // Call the controller method and pass the $_POST array
    $controller->updateFacilities($_POST);

    // Redirect or perform any other actions as needed
    redirect('adminFacilities');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/adminFacilities.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/reservaRating.css">

    <title>Admin Employee</title>
</head>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body class="drama">
    <div class="container">
        <div class="content">
            <div class="cards">
                <a href="<?= ROOT ?>/addFacility">
                    <div class="card">
                        <div class="box">
                            <h1>Add Facility</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="content-2">
                <div class="employees">
                    <div class="title">
                        <h2>Facilities</h2>
                        <!-- <a href="<?= ROOT ?>/adminFacilities" class="btn">View All</a> -->
                    </div>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Icon</th>
                            <th>Name</th>
                            <th>Options</th>
                        </tr>

                        <?php
                        foreach ($data['facility'] as $row) {
                            echo '<tr>
                                    <td>' . $row->id . '</td>
                                    <td><img src="' . $row->icon . '" alt="Facility Icon"></td>
                                    <td>' . $row->name . '</td>
                                    <td>
                                        <span class="button">

                                            <a class="btn" href="#" class="view-btn">View</a>
                                            <a class="btn" href="#" class="view-btn">Edit</a>

                                            <form action="adminFacilities" method="post" style="display:inline;">
                                                <input type="hidden" name="id" value="' . htmlspecialchars($row->id) . '">
                                                <input type="hidden" name="hall" value="' . htmlspecialchars($row->icon) . '">
                                                <input type="hidden" name="hall" value="' . htmlspecialchars($row->name) . '">
                                                <button class="btn-edit"> Edit </button>
                                            </form>
                                            
                                            <a class="btn" href="#">Delete</a>
                                        </span>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="myModal1" class="modal1" style="display: none;">
        <div class="cont">
            <div class="containerM">
                <button id="closeModalBtn">Close</button>
                <h1>Update Facilities</h1>


                <form action="adminFacilities" method="post" id="facilityUpdateForm">
                    <!-- echo '<form action="ReservaPayment"  style="display:inline;"> -->
                    <input type="hidden" name="id" id="id">

                    <label for="name">Facility Name</label>
                    <input type="text" name="name" id="name">

                    <label for="icon">Icon</label>
                    <input type="file" id="icon" name="icon" accept="image/*">

                    <button type="submit" name="submitFacility" id="submitFacility">Submit</button>
                </form>

            </div>
        </div>
    </div>
</body>

<script>
    var closeModalBtn = document.getElementById('closeModalBtn');

    var modal1 = document.getElementById("myModal1");
    // Get the close button
    var facility = document.getElementsByClassName("btn-edit");
    for (var i = 0; i < facility.length; i++) {
        facility[i].onclick = function() {
            event.preventDefault();
            modal1.style.display = "block";
            // You can fetch data and populate the modal content here based on the data-id attribute of the clicked button
            console.log("edit button clicked");
            var row = this.closest("tr");
            var rowData = {
                id: row.cells[0].innerText,
                icon: row.cells[1].innerText,
                name: row.cells[2].innerText
            };
            console.log(rowData);
            console.log(rowData.rating);
            populateModal1(rowData);
        }
    }


    function populateModal1(data) {
        console.log("data.naem = " ,data.name);
        console.log(document.getElementById('name').innerHTML);
        document.getElementById('id').value = data.id;
        document.getElementById('name').value = data.name;
        document.getElementById('icon').value = data.icon;
    }
    closeModalBtn.onclick = function() {
        console.log("close button clicked for mymodal");
        modal1.style.display = "none";
    }

    
</script>