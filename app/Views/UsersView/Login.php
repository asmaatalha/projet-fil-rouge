<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="formLogin ml-auto my-5">

        <div class="forms">
            <h1>sign in</h1>

            <form action="<?php echo URLROOT; ?>/UserController/Login" method="post">

                <div class="form-group">
                    <!-- <label for="email">Email :</label> -->
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>

                <div class="form-group">
                    <!-- <label for="password">Password :</label> -->
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>

                <input type="submit" name="submit" value="SignIn" class="button">

            </form>
        </div>

        <div class="an_introduction2">
            <h1>hello friends</h1>

            <h5>Enter Your Personal Details And Start Journey With Us</h5>

            <div class="hii1">
                <a href="<?php echo URLROOT;?>/UserController/SignUp">SignUp</a> 
            </div>

        </div>

    </div>
    
<?php require APPROOT . '/views/inc/footer.php'; ?>