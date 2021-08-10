<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbarP.php'; ?>

<div class="">
    <div class="user">
        <div class="">
            <img src="../icon/waving-hand.png" alt="hi" width="40">

            <p>Hello <?php echo $_SESSION['username']; ?></p>
        </div>
        <div class="btn btn-secondary add">
            <a href="<?php echo URLROOT;?>/ProfilController/insert">
                <img src="<?= URLROOT ?>/public/img/plus.png" alt="plus" width="30px">Add recite
            </a>
        </div>
    </div>
    
    <div class="card-columns">

        <?php $count = 0; ?>
        <?php foreach ($data['recites'] as $row ) :?>
            
            <div class="card" id="<?php echo $row -> reciteId;?>">
                <div class="card-body">
                    
                    <h4><?php echo $row->title; ?></h4>

                    <a href="<?php echo URLROOT;?>/ReciteController/details/<?= $row->reciteId ?>">
                        <img src="<?= URLROOT."/img/".$row->imge_url; ?>" alt="recite_image" class="img">
                    </a>

                    <a href="<?php echo URLROOT;?>/ProfilController/delete/<?php echo $row->reciteId; ?>">
                        <img src="../icon/delete.png" alt="delet" width="25">
                    </a>
                    <a href="<?php echo URLROOT;?>/ProfilController/update/<?php echo $row->reciteId; ?>">
                        <img src="../icon/updated.png" alt="update" width="25">
                    </a>

                </div>
            </div>
            

        <?php $count ++ ; ?>
        <?php endforeach ; ?>

    </div>
    
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>