
<?php
if(isset($_POST['submitHall'])){
    // $name= $_POST['name'];
    // $icon = $_POST['icon'];
    $id = $_POST['id']; // Retrieve the request ID from the form
    // show($rating);

    // Instantiate the controller
    $controller = new adminHalls();

    // Call the controller method and pass the $_POST array
    $controller->updateHalls($_POST);

    // Redirect or perform any other actions as needed
    // redirect('adminFacilities');
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
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/ModalClose.css">


    <title>Admin Employee</title>
</head>

<style>
    img {
        width: 50px;
        height: 50px;
    }

    .inmodal{
        display: flex;
        flex-direction: row;
        margin: 10px;
    }

    .inmodal label{
        width: 150px;
        text-align: left;
    }
    .checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Add some gap between checkboxes */
    width: 80%;
}

.checkbox-group .checkbox {
    flex: 0 0 auto;
    display: flex; /* Align checkbox and label horizontally */
    align-items: center; /* Vertically center checkbox and label */
}

.checkbox-group .checkbox input[type="checkbox"] {
    margin-right: 5px; /* Add some space between checkbox and label */
}
.checkbox-group label {
    width: auto; /* Adjust label width to fit content */
    margin-right: 15px; /* Add some spacing between labels */
}
.inmodal textarea{
    width: 70%;
}

.inmodal input{
    /* width: 70%; */
    border: none;
    border-radius: 8px;
    height: 30px;
    padding-left: 5px;
}

</style>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body class="drama">
    <div class="container">
        <div class="content">
            <div class="cards">
                <a href="<?= ROOT ?>/addHall">
                    <div class="card">
                        <div class="box">
                            <h1>Add Hall</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="content-2">
                <div class="employees">

<?php 
// show($data);
?>

                    <div class="title">
                        <h2>Halls</h2>
                        <!-- <a href="<?= ROOT ?>/adminFacilities" class="btn">View All</a> -->
                    </div>
                    <div class="table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Hallno</th>
                            <th>Amount <br> /1hr</th>
                            <th>Amount <br>Sounds</th>
                            <th>Amount <br>Standings</th>
                            <th>HCount</th>
                            <th>image</th>
                            <th>content</th>
                            <th>status</th>
                            <th>Options</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        // show($data);

                        if (is_array($data['hall'])) {
                            foreach ($data['hall'] as $row) {
                                echo '<tr>
                                    <td>' . $row->id . '</td>
                                    <td>' . $row->hallno . '</td>
                                    <td>' . $row->amountOneHour . '</td>
                                    <td>' . $row->amountSounds   . '</td>
                                    <td>' . $row->amountStandings	 . '</td>
                                    <td>' . $row->headCount . '</td>
                                    <td><img src="' . ROOT . '/assets/images/upload/halls/' . $row->image . '" alt="Hall Image"></td>
                                    <td>' . $row->content . '</td>
                                    <td>' . $row->status . '</td>
                                    <td>
                                    <span class="button">

                                    

                                    <form action="adminFacilities" method="post" style="display:inline;">
                                        <input type="hidden" name="id" value="' . htmlspecialchars($row->id) . '">
                                        <input type="hidden" name="hallno" value="' . htmlspecialchars($row->hallno) . '">
                                        <input type="hidden" name="amountOneHour" value="' . htmlspecialchars($row->amountOneHour) . '">
                                        <input type="hidden" name="amountSounds" value="' . htmlspecialchars($row->amountSounds) . '">
                                        <input type="hidden" name="amountOneHour" value="' . htmlspecialchars($row->amountStandings) . '">
                                        <input type="hidden" name="headCount" value="' . htmlspecialchars($row->headCount) . '">
                                        <input type="hidden" name="content" value="' . htmlspecialchars($row->content) . '">
                                        <input type="hidden" name="status" value="' . htmlspecialchars($row->status) . '">

                                        <button class="btn-edit"> Edit/View </button>
                                    </form>
                                    
                                    <a class="btn" href="#">Delete</a>
                                </span>
                                    </td>
                                </tr>';
                            }
                        }
                                    
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="myModal1" class="modal1" style="display: none;">
        <div class="cont">
            <div class="containerM">
                <!-- <button id="closeModalBtn">Close</button> -->



                <button class="buttonClose" id="closeModalBtn">
                    <span class="X"></span>
                    <span class="Y"></span>
                    <div class="close">Close</div>
                </button>




                
                <!-- <h1>Update Hall</h1> -->


                <form action="adminHalls" method="post" id="hallUpdateForm" enctype="multipart/form-data">
                    <?php 
                    // show($data)
                    ?>
                    
                    <input type="hidden" name="id" id="id">
                    <div class="inmodal">
                    <label for="name">Hall Name :</label>
                    <input type="text" name="hallno" id="hallno">
                    </div>

                    <div class="inmodal">
                    <label for="amountOneHour">Amount :</label>
                    <input type="number" name="amountOneHour" id="amountOneHour">
                    </div>
                    <div class="inmodal">
                    <label for="amountSounds">AmountSounds :</label>
                    <input type="number" name="amountSounds" id="amountSounds">
                    </div>
                    <div class="inmodal">
                    <label for="amountStandings">AmountStandings :</label>
                    <input type="number" name="amountStandings" id="amountStandings">
                    </div>
                    <div class="inmodal">
                    <label for="headCount">Head Count :</label>
                    <input type="number" name="headCount" id="headCount">
                    </div>
                    <div class="inmodal">
                    <label for="image">Image :</label>
                    <input type="file" id="image" name="image" accept="image/*">
                    </div>
                    <div class="inmodal">
                    <label for="content" >Content :</label>
                    <textarea id="content" name="content"></textarea> 
                    </div>
                    <div class="inmodal">
                    <label for="status">Status :</label>
                    <select name="status" id="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    </div>
                    
                    <div class="inmodal">
                    <label for="facilities">Facilities :</label>

                    <div class="checkbox-group" id="days">
                            <?php if (is_array($data['facility'])): 
                                // show($data['facility']); ?>
                                <?php foreach ($data['facility'] as $facility): ?>
                                    <label class="checkbox">
                                        <input type="checkbox" name="facility[]" value="<?= $facility->name ?>">
                                        <?= $facility->name ?>
                                    </label>
                                <?php endforeach; ?>
                            <?php endif; ?>
                     </div>
                    </div>
                    <button type="submit" name="submitHall" id="submitHall">Submit</button>
                </form>

            </div>
        </div>
    </div>
</body>

<script>
    var closeModalBtn = document.getElementById('closeModalBtn');
    var modal1 = document.getElementById("myModal1");
    // Get the close button
    var hall = document.getElementsByClassName("btn-edit");
    for (var i = 0; i < hall.length; i++) {
        hall[i].onclick = function() {
            event.preventDefault();
            modal1.style.display = "block";
            // You can fetch data and populate the modal content here based on the data-id attribute of the clicked button
            console.log("edit button clicked");
            var row = this.closest("tr");
            var rowData = {
                id: row.cells[0].innerText,
                // icon: row.cells[1].innerText,
                name: row.cells[1].innerText,
                amountOneHour: row.cells[2].innerText,
                amountSounds: row.cells[3].innerText,
                amountStandings: row.cells[4].innerText,
                headCount: row.cells[5].innerText,
                content: row.cells[7].innerText,
                status: row.cells[8].innerText,
            };
            console.log(rowData);
            // console.log(rowData.rating);
            populateModal1(rowData);
        }
    }


    function populateModal1(data) {
        console.log("in function");
        // console.log(data);
        // console.log("data.naem = " ,data.name);
        // console.log(document.getElementById('name').innerHTML);
        document.getElementById('id').value = data.id;
        document.getElementById('hallno').value = data.name;
        document.getElementById('amountOneHour').value = data.amountOneHour;
        document.getElementById('amountSounds').value = data.amountSounds;
        document.getElementById('amountStandings').value = data.amountStandings;
        document.getElementById('headCount').value = data.headCount;
        document.getElementById('content').value = data.content;
        document.getElementById('status').value = data.status;
        // document.getElementById('icon').value = data.icon;

        var hallFacilities = <?php echo json_encode($data['hallfacilities']); ?>;
        console.log(hallFacilities);
        var checkboxes = document.querySelectorAll('input[type="checkbox"][name="facility[]"]');
        checkboxes.forEach(function(checkbox) {
            // Check if the facility name is in the hallFacilities array
            var facilityName = checkbox.value;
            var isChecked = hallFacilities.some(function(hallFacility) {
                // console.log(hallFacility);

                console.log(hallFacility.facility);
                return hallFacility.facility === facilityName && hallFacility.hallno === data.name;
            });
            // Set the checkbox status accordingly
            checkbox.checked = isChecked;
        });
    }
    closeModalBtn.onclick = function() {
        console.log("close button clicked for mymodal");
        modal1.style.display = "none";
    }

    
</script>
