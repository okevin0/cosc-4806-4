<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
                <?php  
                        print_r($data['reminders']);
                       // print_r($_SESSION['user_id']);
                ?>
            </div>
        </div>
    </div>

</div>
    <?php require_once 'app/views/templates/footer.php' ?>
