<div class="container pt-3">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <?php foreach ($data['posts'] as $post) { ?>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $post['name'] ?></h5>
                                <p class="card-text">
                                    <?php 
                                        if(strlen($post['description']) > 120){
                                            $description = substr($post['description'], 0, 50);
                                            echo $description;
                                        }
                                    ?>
                                </p>
                                <a href="<?php echo BASE_URL. "/index/postDetails/". $post['id']?>" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
            </div>
        </div>
    </div>
</div>