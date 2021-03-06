<?php include_once PATH_VIEWS . 'includes/head.php'; ?>
        <?php include_once PATH_VIEWS . 'includes/header.php'; ?>  
        
        <!--Begin content-->   
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <a href="/contact/add" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                    </p>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Mobile No.</th>
                                <th>Address</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($contacts):
                            foreach ($contacts as $contact) :
                            ?><tr>
                                <td><?=$contact['id'];?></td>
                                <td><?=$contact['name'];?></td>
                                <td><?=$contact['mobile_no'];?></td>
                                <td><?=$contact['address'];?></td>
                                <td><?=$contact['email_address'];?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="...">
                                        <a href="/contact/view/<?=$contact['id'];?>" class="btn btn-default"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                        <a href="/contact/edit/<?=$contact['id'];?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a href="/contact/delete/<?=$contact['id'];?>" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; 
                        else: ?>
                        <tr>
                            <td colspan="6">
                                <h4><span class="label label-info">No records!</span></h4>
                            </td>
                        </tr>
                        <?php endif;?></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End content-->
        <?php include_once PATH_VIEWS . 'includes/footer.php'; ?>  