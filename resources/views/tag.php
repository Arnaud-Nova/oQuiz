<?php
echo view('header');
?>
            
                <?php foreach ($tags as $tag) : 
                     $tag->quizzes->count();?>
                    <a class="d-block" href="<?= route('quiz-by-tag', ['id' => $tag->id]) ?>"><button type="button" class="btn btn-info btn-lg btn-block"><?= $tag->name . ' (' . $tag->quizzes->count() .')' ?></button></a>
                    </br>
                <?php endforeach; ?>
    
            </div>
        </main>
<?php
echo view('footer');
