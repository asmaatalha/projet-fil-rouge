<?php require APPROOT . '/views/inc/header.php'; ?>

<div>
    <h1>Page Admin</h1>

    <table>
        <thead>
            <tr>
                <th>UserId</th>
                <th>First_name</th>
                <th>Last_name</th>
                <th>username</th>
                <th>Email</th>
                <th>Password</th>
                <th>U/D</th>
                
            </tr>
        </thead>

        <?php $count = 0; ?>
        <?php foreach ($data['users'] as $row ) : ?>
            
        <tbody>
            <tr>
                <td><?php echo $row -> userId ; ?></td>

                <td><?php echo $row -> First_name ; ?></td>

                <td><?php echo $row -> Last_name ; ?></td>

                <td><?php echo $row -> username ; ?></td>
                
                <td><?php echo $row -> email ; ?></td>
                
                <td><?php echo $row -> password ; ?></td>

                <td><button type="button">Update</button> <button type="button">Delete</button></td>

                <td></td>
            </tr>
        </tbody>
        <?php $count ++ ; ?>
        <?php endforeach ; ?>
    </table>
</div>






<?php require APPROOT . '/views/inc/footer.php'; ?>
