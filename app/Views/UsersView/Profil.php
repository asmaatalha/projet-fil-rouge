<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbarP.php'; ?>

<div class="">
    <div class="btn btn-secondary add">
        <a href="<?php echo URLROOT;?>/ProfilController/insert">
            <img src="<?= URLROOT ?>/public/img/plus.png" alt="plus" width="30px">Add recite
        </a>
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

                </div>
            </div>
            

        <?php $count ++ ; ?>
        <?php endforeach ; ?>

    </div>
    
</div>