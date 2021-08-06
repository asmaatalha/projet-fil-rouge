<?php require APPROOT . '/views/inc/header.php'; ?>
<div>
    
    <div class="">
                
        <h1><?php echo $data->title; ?></h1>

        <div>
            <img src="<?= URLROOT."/img/".$data->imge_url; ?>" alt="recite_image" class="imge">
            <span><?php $time = strtotime($data->dateR); $day = date('D,d M Y', $time); echo $day; ?></span>
        </div>
        
        <div>
            <h2>Description</h2>
            <p><?php echo $data->description; ?></p>
        </div>
            
        <div>
            <h2>préparation time:</h2>
            <p><?php echo $data->preparation_time; ?></p>
        </div>
            
        <div>
            <h2>Steps:</h2>
            <p><?php echo $data->numbr_step; ?></p>
        </div>

        <div>
            <p><?php echo $data->descS; ?></p>
        </div>
        
    </div>
   
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
