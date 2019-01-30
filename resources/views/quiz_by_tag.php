<?php
echo view('header');
?>

            
            <div class="row">
                <a href="<?= route('tag') ?>">Revenir aux différents sujets de quiz</a>
            </div>

            <h3 class="btn-info text-center"><?= $tag->name ?></h3>
            <div class="row">
                <?php foreach ($quizzes as $quiz) : ?>
                    <div class="col-sm-4">
                        <h3 class="text-blue"><a href="<?= route('quiz', ['id' => $quiz->id]) ?>"><?= $quiz->title ?></a></h3>
                        <h5><?= $quiz->description ?></h5>
                        <p>by <?= $quiz->author->firstname . ' ' . $quiz->author->lastname?></p>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </main>
<?php
echo view('footer');
