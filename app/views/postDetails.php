<div class="container pt-3">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($data['post'] as $post) { ?>
                                <h1 class="text-info">Category: <samp class="text-primary"><?php echo $post['cat_name'] ?></samp></h1>
                                <h5 class="card-title"> <?php echo $post['name'] ?></h5>
                                <p class="card-text"><?php echo $post['description'] ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>