<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="">

    <H1>SignUp</H1>

    <form action="<?php echo URLROOT; ?>/UsersView/signUp" method="post">
        <div class="form-group">
            <label for="">First Name :</label>
            <input type="text" name="fname" placeholder="First name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Last Name :</label>
            <input type="text" name="lname" placeholder="Last name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">UserName :</label>
            <input type="text" name="uname" placeholder="UserName" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Email :</label>
            <input type="email" name="email" placeholder="Email" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Password :</label>
            <input type="password" name="password" placeholder="Password" class="form-control">
        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        <a href="<?php echo URLROOT;?>/UserController/Login">LogIn</a>
        
    </form>

</div>    

<?php require APPROOT . '/views/inc/footer.php'; ?>