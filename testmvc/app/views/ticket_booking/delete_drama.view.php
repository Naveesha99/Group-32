<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/ticket_booking/delete_drama.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:400,700">
    <title>Drama Image Gallery</title>
</head>

            <!-- <div class="box">
                <label for="title">Update Drama Name</label>
                <input type="text" name="title" value="<?= $data['no_time']->title ?>">

                <label for="title">Update Drama Description</label>
                <textarea name="" id="" cols="20" rows="7"></textarea>
                <input type="text" name="description" value="<?= $data['no_time']->description ?>">

                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*">
                <?php if(isset($data['no_image'])){?>  <div class="errors"><?= $data['no_time'] ?></div> <?php } ?>
            </div> -->
            

<body>
<div class="container">

    <!-- <div class="container1"> -->
        <!-- <h4>Drama Image Gallery</h4> -->
        <?php if(isset($data['no_time'])  && isset($data['details']))
                { if($data['details']!=null)
                {
                ?><div id="overlay"></div>
                <div id="popupForm" class="popup" style="display: none;">
                    <div class="box">
                        <!-- <label for="title">Drama ID</label> -->
                        <p class="drama-title">Drama ID :<?= $data['details']->id ?></p>

                        <!-- <label for="title">Drama Name</label> -->
                        <p class="drama-title"><?= $data['details']->title ?></p>

                        <!-- <label for="image">Image</label> -->
                    <img src="<?= ROOT ?>/assets/images/drama_img/<?= $data['details']->image ?>" alt="" class="image2">

                        <p class="drama-title"><?= $data['no_time'] ?></p>
                    </div>
                        <div class="btns">
                            <form method="post" id="del_confirm">
                                <input type="hidden" name="del_id" value="<?= $data['details']->id ?>">
                                <button class="btns5">DELETE</button>
                            </form>

                            <form id="del_cancel">
                                <button class="btns2" id="close" type="button" onclick="closePopup()">Close</button>
                            </form>
                        </div>
                    </div>
        <?php } 
            }?>


     <?php   if(isset($data['has_time']) && isset($data['details']))
            { ?>
            <div id="overlay"></div>
            <div id="popupForm" class="popup" style="display: none;">
                <div class="box">
                    <p class="drama-title1">Drama ID</p>
                    <p class="drama-title1" class="drama-title1"><?= $data['details']->id ?></p>

                    <p class="drama-title1">Drama Name</p>
                    <p class="drama-title1"><?= $data['details']->title ?></p>

                    <p class="drama-title1">Image</p>
                    <img src="<?= ROOT ?>/assets/images/drama_img/<?= $data['details']->image ?>" alt="Image" class="image2">

                    <p class="drama-title1"><?= $data['has_time'] ?></p> 
                    <div class="right">
                        <button class="btns3" id="close" type="button" onclick="closePopup()">Close</button>
                    </div>
                </div>
            </div>
        <?php } ?>


        <?php   if(isset($data['upd_home']) && isset($data['details']))
                { ?>
                <div id="overlay"></div>
                <div id="popupForm" class="popup" style="display: none;">
                    <div class="box">
                        <form id="update_form" method="post" enctype="multipart/form-data">
                            <p class="drama-title1">Update Drama Name</p>
                            <input type="text" class="inpt" name="title" value="<?= $data['details']->title ?>">

                            <br><p class="drama-title1">Update Drama Description</p>
                            <textarea name="description" class="inpt" id="description" cols="20" rows="7"><?= $data['details']->description ?></textarea>

                            <br><p class="drama-title1">Image</label>
                            <input type="file" id="image" class="inpt" name="image" accept="image/*">

                            <div class="left">
                                <input type="hidden" name="id" value="<?= $data['details']->id ?>">
                                <button class="btns9" id="close" type="button" onclick="closePopup()">Close</button>
                                <button class="btns2">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } 
                    if(isset($data['no_image_v']))
                    {?>
                        <div class="errors"><?=  $data['no_image_v'] ?></div>
              <?php }
                    if(isset($data['extns_invalid']))
                    {?>
                        <div class="errors"><?=  $data['extns_invalid'] ?></div>
              <?php }
                    if(isset($data['not_all']))
                    {?>
                        <div class="errors"><?=  $data['not_all'] ?></div>
              <?php }
                    if(isset($data['ok']))
                    {?>
                        <div class="errors"><?=  $data['ok'] ?></div>
              <?php }
              if(isset($data['sucess_delete']))
              {?>
                  <div class="errors"><?=  $data['sucess_delete'] ?></div>
        <?php }
            ?>
    <!-- </div> -->


    <div class="container2">
        <table>
            <thead>
                <tr>
                    <th>Drama ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($data['drama']))
                {
                    foreach($data['drama'] as $x) 
                    {?>
                
                        <tr>
                            <td><?= $x->id ?></td>
                            <td><img src="<?= ROOT ?>/assets/images/drama_img/<?= $x->image ?>" alt="Image" class="image"></td>
                            <td><?= $x->title ?></td>
                            <td><?= $x->description ?></td>
                            <td>
                                <div class="btns">
                                    <form method="post" id="delete">
                                        <input type="hidden" name="id" value="<?= $x->id ?>">
                                        <input type="hidden" name="delete" value="delete">
                                        <button class="btn btn-delete" id="del" type="submit">Delete</button>
                                    </form>

                                    <form method="post" id="update">
                                        <input type="hidden" name="id" value="<?= $x->id ?>">
                                        <input type="hidden" name="update" value="update">
                                        <button class="btn btn-update" id="upd" type="submit">Update</button>
                                    </form> 
                                </div>
                            </td>
                        </tr>
                
                        <?php
                    }
                } 
                else 
                {
                    echo "<tr><td colspan='5'>No dramas found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

<script>
    // function deleteDrama(id) {
    //     if (confirm("Are you sure you want to delete this drama?")) {
    //         // Code to delete drama from database
    //         console.log("Deleting drama with ID: " + id);
    //     }
    // }

    function updateDrama(id) {
        // Code to update drama in the database or redirect to update page
        console.log("Updating drama with ID: " + id);
    }
</script>


<script>
    // Function to open the popup form
    function openPopup() {
        document.getElementById("popupForm").style.display = "block";
        document.getElementById("overlay").style.display = "block";
    }

    // Function to close the popup form
    function closePopup() {
        document.getElementById("popupForm").style.display = "none";
        document.getElementById("overlay").style.display = "none";
    }

    // Check if data is received, then show popup after 1 second
    setTimeout(function() {
        <?php if(isset($data)): ?>
            openPopup();
        <?php endif; ?>
    }, 500);

    // Function to submit the form when clicking the YES button
    // document.getElementById("del").addEventListener("click", function() {
    //     document.getElementById("del_delete").submit();
    // });

    // Function to close the popup form when clicking the NO button
    // document.getElementById("upd").addEventListener("click", function() {
    //     closePopup();
    // });

    // function deleteDrama() {
    //     // Trigger the form submission
    //     document.getElementById("del_confirm").submit();
    // }
</script>

