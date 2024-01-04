<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/reservaSentReq.css" rel="stylesheet">

    <title>Admin Panel</title>

</head>
<?php require_once 'reservaSideBar.php' ?>


<body class="dashboard">
    <div class="container">
        <div class="header">


            <?php require_once 'navBar.php' ?>
        </div>



        <div class="content">
            <section>
                <!--for demo wrap-->
                <h1>Sent Request</h1>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Request Sent Date</th>
                                <th>Initial Payment</th>
                                <th>Remaining Hours for Initial Payment</th>
                                <th>Full Payment</th>
                                <th>Remaining Days for Full Payment</th>
                                <th>Status</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Payment</th>


                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td>R1703141338522</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="Notallowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='pymnt.html'">PayNow</button>
                                </td>


                            </tr>
                            <tr>
                                <td>R1703141338522</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="Notallowed" type="button" onclick="window.location.href='pymnt.html'">PayNow</button></td>

                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="Notallowed" type="button" onclick="window.location.href='pymnt.html'">PayNow</button></td>

                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='pymnt.html'">PayNow</button>
                                </td>

                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='pymnt.html'">PayNow</button>
                                </td>

                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='pymnt.html'">PayNow</button>
                                </td>
                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed">PayNow</button></td>

                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed">PayNow</button></td>
                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed">PayNow</button></td>

                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed">PayNow</button></td>

                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed">PayNow</button></td>
                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td><button type="button" onclick="window.location.href='reservaViewReq.html'">View</button></td>
                                <td> <button class="allowed" type="button" onclick="window.location.href='reservaViewReq.html'">Edit</button></td>
                                <td> <button class="allowed">PayNow</button></td>


                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td> <button>View</button></td>
                                <td> <button>Edit</button></td>
                                <td> <button>PayNow</button></td>

                            </tr>
                            <tr>
                                <td>AAC</td>
                                <td>2021/02/23 </td>
                                <td>Rs.12000</td>
                                <td>7d</td>
                                <td>Rs.24000</td>
                                <td>124m</td>
                                <td>Pending</td>
                                <td> <button>View</button></td>
                                <td> <button>Edit</button></td>
                                <td> <button>PayNow</button></td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>
</body>

</html>