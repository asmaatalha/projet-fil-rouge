<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div>
    <h1 class="titless">Recites</h1>

    <form action="" method="post">

        <label for="search">Search: </label>
        <input type="text" id="search" name="searchkey">
        <input type="submit" value="submit" name="search">
    </form>

</div>

<div class="card-columns">

    <?php $count = 0; ?>
    
    <?php foreach ($data['recites'] as $row ) : ?>
        
        <div class="card" id="<?php echo $row->reciteId;?>">
            <div class="card-body">
                
                <h4><?php echo $row->title; ?></h4>

                <a href="<?php echo URLROOT;?>/ReciteController/details/<?= $row->reciteId ?>">
                    <img src="<?= URLROOT."/img/".$row->imge_url; ?>" alt="recite_image" class="img">
                </a>

                <!-- <p><?php echo $row->description; ?></p> -->

                <!-- <p><?php echo $row->numbr_step; ?></p> -->

                <div>
                    <!-- <span><?php $time = strtotime($row->dateR); $day = date('D,d M Y', $time); echo $day; ?></span> -->
                </div>
            </div>
        </div>

    <?php $count ++ ; ?>
    <?php endforeach ; ?>

</div>




<?php require APPROOT . '/views/inc/footer.php'; ?>
