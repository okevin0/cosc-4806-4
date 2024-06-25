<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
                <table class="table table-warning table-striped" >
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Reminder</th>
                          <th scope="col">Create At</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                    <tbody>
                        <?php  
                            // print reaminders, update and delete a reminder
                            $num = 1;
                            foreach ($data['reminders'] as $reminder) {
                                echo "<tr>
                                            <td>".$num."</td>
                                            <td>".$reminder['subject']."</td>
                                            <td>".$reminder['created_at']."</td>
                                            <td>Update</td>";?>
                                <td><a href="/reminders/delete/<?php echo $reminder['id']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr> 
                        <?php
                                $num++;
                            }
                               // print_r($_SESSION['user_id']);
                        ?>
                      </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    <?php require_once 'app/views/templates/footer.php' ?>
