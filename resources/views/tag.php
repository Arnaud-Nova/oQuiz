<?php
echo view('header');
?>
            
                <?php foreach ($tags as $tag) : ?>
                    <a class="d-block" href="/quiz/tag/<?= $tag->id ?>"><button type="button" class="btn btn-info btn-lg btn-block"><?= $tag->name ?></button></a>
                    </br>
                <?php endforeach; ?>
    
            </div>
        </main>
<?php
echo view('footer');
