<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="formLogin ml-auto my-5">

                <!-- <img src="../user.png" alt="log" class="login"> -->

        <h1>LogIn</h1>

        <form action="<?php echo URLROOT; ?>/UserController/Login" method="post">

            <div class="form-group">
                <!-- <label for="email">Email :</label> -->
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>

            <div class="form-group">
                <!-- <label for="password">Password :</label> -->
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <input type="submit" name="submit" value="Submit" class="form-control w-100">
    
            <a href="<?php echo URLROOT;?>/UserController/SignUp">SignUp</a>
    
        </form>

    </div>
    
<?php require APPROOT . '/views/inc/footer.php'; ?>