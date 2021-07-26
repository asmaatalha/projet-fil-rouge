<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="formSignup ml-auto my-5">

    <H1>SignUp</H1>

    <form action="<?php echo URLROOT; ?>/UsersView/signUp" method="post">

        <div class="form-row">
            <div class="form-group col">
                <!-- <label for="fname">First Name :</label> -->
                <input type="text" class="form-control" name="fname" placeholder="First name">
            </div>

            <div class="form-group col">
                <!-- <label for="lname">Last Name :</label> -->
                <input type="text" class="form-control" name="lname" placeholder="Last name">
            </div>
        </div>

        <div class="form-group">
            <!-- <label for="username">UserName :</label> -->
            <input type="text" class="form-control" name="uname" placeholder="UserName">
        </div>
        
        <div class="form-group">
            <!-- <label for="email">Email :</label> -->
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="form-group">
            <!-- <label for="password">Password :</label> -->
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <input type="submit" class="form-control w-100" name="submit" value="Submit">

        <a href="<?php echo URLROOT;?>/UserController/Login">LogIn</a>
        
    </form>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>