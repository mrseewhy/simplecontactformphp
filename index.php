<?php  require('header.php') ?>
<?php
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email =  $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   if(strlen($name ) < 1){
       echo "No name found";
   }
   if(strlen($email ) < 1){
        echo "No email found";
    }
    if(strlen($subject ) < 1){
        echo "No subject found";
    }
    if(strlen($message ) < 1){
        echo "No message found";
    }

    //file pointers

    $fp = fopen("tmp//".$name.".php", "w");

    //write into this file
    fwrite($fp, 
    "<?php  require('../header.php') ?>
    <h3 class=\"text-center\">My Page</h3>
<div class=\"mx-auto\">

    <ul class=\"list-group mt-3\">
        <li class=\"list-group-item\">My name is: <?php echo \"$name\"?></li>
        <li class=\"list-group-item \">Here is My: <?php echo \"$email\"?></li>
        <li class=\"list-group-item \">Here is the subject of my message: <u><?php echo \"$subject\"?></u></li>
        <li class=\"list-group-item \">Here is my message body: <u><?php echo \"$message\"?></u></li>
    </ul>
</div>
<?php  require('../footer.php') ?>");

    echo "<p>File created in tmp folder - " . $name .".php</p>" ;
}
?>
<h3 class="text-center">Contact Form</h3>
<div class="col-4 mx-auto">
    <form action="" method="post">
        <div class="form-group">
        <label for="forNameInput">Name:</label>
        <input type="text"
            class="form-control" name="name" id="forNameInput">
        </div>
        <div class="form-group">
        <label for="forEmailInput">Email:</label>
        <input type="email" class="form-control" name="email" id="forEmailInput">
        </div>
        <div class="form-group">
          <label for="forSubject">Subject</label>
          <input type="text"
            class="form-control" name="subject" id="forSubject">
        </div>
        <div class="form-group">
          <label for="forMessageInput">Message</label>
          <textarea class="form-control" name="message" id="forMessageInput" rows="3"></textarea>
        </div>
        <button name="submit" type="submit" class="btn btn-secondary btn-block">Submit</button>
    </form>
</div>
<?php  require('footer.php') ?>
      
    