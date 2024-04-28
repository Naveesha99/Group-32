<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee Requests</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/employeeReqView.css">
</head>
<body>
    <div class="container">
        <?php if ($data!==null):
            // show($data)
        ?>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h3>Leave Request Form</h3>
                    <div class="paragraph">
                        <p>Employee Name : <?=$data['emp_req'][0]->employee_name?></p>
                        <p>Leave type : <?=$data['emp_req'][0]->leave_type?></p>
                        <p>Start Date : <?=$data['emp_req'][0]->start_date?></p>
                        <p>End Date : <?=$data['emp_req'][0]->end_date?></p>
                        <p>Reason : <?=$data['emp_req'][0]->reason?></p>
                        <p>Status : <?=$data['emp_req'][0]->state?></p>

                    </div>
                    
                </div>
            </div>
        </div>
        <?php else : ?>
            <p>Request not found!</p>
        <?php endif; ?>
    </div>
    
</body>
</html>