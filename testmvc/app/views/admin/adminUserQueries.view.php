
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


<style>
.pt2{
    min-height: 50vh;
    flex: 5;
    background: white;
    /* margin: 0 25px 25px 25px; */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
    border-radius: 15px;
    margin-top: 5%;
}
</style>

<?php include 'adminSidebar.php' ?>
<?php include 'navBar.php' ?>

<body class="drama">
    <div class="container">
        <div class="content">
            <!-- <div class="cards">
                <a href="<?= ROOT ?>/addFacility">
                    <div class="card">
                        <div class="box">
                            <h1>Add Facility</h1>
                        </div>
                    </div>
                </a>
            </div> -->
            <div class="content-2">
                <div class="employees">
                    <div class="title">
                        <h2>User Queries</h2>
                        <!-- <a href="<?= ROOT ?>/adminFacilities" class="btn">View All</a> -->
                    </div>
                    <div class="table-responsive">

                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Options</th>

                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        foreach ($data['userqueries'] as $row) {
                            echo '<tr>
                                    <td>' . $row->id . '</td>
                                    <td>' . $row->name . '</td>
                                    <td>' . $row->email . '</td>
                                    <td>' . $row->subject . '</td>
                                    <td>' . $row->message . '</td>
                                    <td>' . $row->date . '</td>

                                    <td>
                                        <span class="button">
                                                                                        <a class="btn" href="#">Delete</a>
                                        </span>
                                    </td>

                                </tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>
