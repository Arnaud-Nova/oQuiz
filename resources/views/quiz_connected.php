<?php
echo view('header');
?>

            <div class="row">
                <h2><?= $quiz->title ?> 
                    <span class="badge badge-pill badge-secondary"><?= $quiz->questions->count() ?> questions</span>
                    <?php if (isset($result)) : ?><span class="badge badge-pill badge-success">Résultat : <?= $result ?> bonne(s) réponse(s)</span><?php endif; ?>
                </h2>
            </div>

            <div class="row">
                <h4> 
                <?= $quiz->description ?>
                </h4>
            </div>

            <div class="row">
                <p>by  <?= $quiz->author->firstname . ' ' . $quiz->author->lastname ?></p>
            </div>
            
            <form action="<?= route('quiz', ['id' => $quiz->id]) ?>" method="POST">
                <div class="row">

                    <?php
                    foreach ($questionsQuiz as $index => $questionQuiz) : 
                    $level = $levels->firstWhere('id', $questionQuiz->levels_id);
                    ?>
                    <div class="col-sm-3 border p-0 <?php if($index % 3 !== 0): ?>offset-sm-1<?php endif ?>">

                        <span class="badge badge-success level-color-<?= $level->id ?> float-right mt-2 mr-2"><?= $level->name ?></span>

                        <div class="p-3 background-grey">
                        <?= $questionQuiz->question ?>
                        </div>

                        <div class="p-3 question-answer-block">
                            
                            <?php 
                                foreach ($answers[$questionQuiz->id] as $indexA => $answer) : 
                                ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="<?= $questionQuiz->id ?>" id="answer<?= $answer->id ?>" value="<?= $answer->id ?>">
                                    <label class="form-check-label" for="question<?= $questionQuiz->id ?>">
                                    <?= $answer->description ?> 
                                    </label> 
                                </div>

                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                    <?php if($index % 3 === 2): ?>
                    </div><div class="row mt-3">
                    <?php endif; ?>

                    <?php endforeach; ?>


                    
                </div> 
                <div class="row mt-3">
                    <input type="submit" class="btn btn-primary background-blue btn-lg btn-block" value="OK"/>
                </div>
            </form>
        </main>
    </body>
</html>
<?php
echo view('footer');
