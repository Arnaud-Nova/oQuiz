<?php
echo view('header');
?>

            <div class="row">
                <h2> Bienvenue sur O'Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                
                </p>
            </div>
            <div class="row">
                <a href="<?= route('tag') ?>">Consulter les différents sujets de quiz</a>
            </div>
            <div class="row">
                <?php foreach ($quizzes as $quiz) : ?>
                    <div class="col-sm-4">
                        <h3 class="text-blue"><a href="./quiz/<?= $quiz->id ?>"><?= $quiz->title ?></a></h3>
                        <h5><?= $quiz->description ?></h5>
                        <p>by <?= $quiz->author->firstname . ' ' . $quiz->author->lastname?></p>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </main>
<?php
echo view('footer');
