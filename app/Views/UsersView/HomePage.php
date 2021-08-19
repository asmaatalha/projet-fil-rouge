<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="home pading-p">
    <div class="d-flex justify-content-center">
        <form action="" method="post">
            <input type="text" id="search" name="searchkey" placeholder="Search Recite">
            <input type="submit" value="search" name="search">
        </form>

    </div>

    <div class="card-columns">

        <?php $count = 0; ?>
        <?php foreach ($data['recites'] as $row ) : ?>
            
            <div class="card recit" id="<?php echo $row->reciteId;?>">
                <div class="card-body d-flex flex-column align-items-center">
                    <h4><?php echo $row->title; ?></h4>

                    <a href="<?php echo URLROOT;?>/ReciteController/details/<?= $row->reciteId ?>">
                        <img src="<?= URLROOT."/img/".$row->imge_url; ?>" alt="recite_image" class="card-img img-home">
                    </a>
                </div>
            </div>


        <?php $count ++ ; ?>
        <?php endforeach ; ?>

    </div>
    
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>
