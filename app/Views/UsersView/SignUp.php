<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="ml-auto my-5 signup">

    <div class="an_introduction1">
        <h1>welcome</h1>

        <h5>To Keep Connected With Us
        Please Login With Your 
        Personal Informations</h5>

        <div class="link1">
            <a href="<?php echo URLROOT;?>/UsersView/Login">SignIn</a>
        </div>

    </div>

    <div class="forms">
        <H1>Create Account</H1>
            
        <form action="<?php echo URLROOT; ?>/UsersView/signUp" method="post">

            <div class="form-row">
                <div class=" form-group col">
                    <!-- <label for="fname">First Name :</label> -->
                    <input type="text" class="form-control" name="fname" placeholder="First name">
                </div>

                <div class="  form-group col">
                    <!-- <label for="lname">Last Name :</label> -->
                    <input type="text" class="form-control" name="lname" placeholder="Last name">
                </div>
            </div>

            <div class=" form-group">
                <!-- <label for="username">UserName :</label> -->
                <input type="text" class="form-control" name="uname" placeholder="UserName">
            </div>

            <div class=" form-group">
                <!-- <label for="email">Email :</label> -->
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class=" form-group">
                <!-- <label for="password">Password :</label> -->
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="">
                <input type="submit" class="button" name="submit" value="SignUp">
            </div>

        </form>

    </div>
    
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>