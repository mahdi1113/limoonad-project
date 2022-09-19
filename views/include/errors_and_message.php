<?php  if(isset($_SESSION['message'])){ ?>
        <p class="alert alert-success">
    <?php 
        echo $_SESSION['message'] ;
        unset($_SESSION['message']) ;
        }
    ?>

<?php if(isset($_SESSION['errors'])): ?>
    <div class="alert alert-danger">
    <ul>
    <?php
        foreach($_SESSION['errors'] as $error):
    ?>
        <li>
        <?php
             echo $error;
             unset($_SESSION['errors']);
        ?>
         </li>
        <?php endforeach; ?>
        <ul>
        </div>
        <?php endif; ?>