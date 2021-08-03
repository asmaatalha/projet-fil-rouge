<?php echo "hello"; ?>
<div>
    <?php $count = 0;?>
    <?php foreach ($data['recites'] as $row ) :?>
    <div class="card" id="<?php echo $row->reciteId;?>">
        <div class="card-body">
                
            <h4><?php echo $row->title; ?></h4>

            <a href="<?php echo URLROOT;?>/ReciteController/details/<?= $row->reciteId ?>">
                <img src="<?= URLROOT."/img/".$row->imge_url; ?>" alt="recite_image" class="img">
            </a>

            <p><?php echo $row->description; ?></p>

            <p><?php echo $row->numbr_step; ?></p>

            <div>
                <span><?php $time = strtotime($row->dateR); $day = date('D,d M Y', $time); echo $day; ?></span>
            </div>
        </div>
    </div>
    <?php $count ++ ; ?>
    <?php endforeach ; ?>
</div>