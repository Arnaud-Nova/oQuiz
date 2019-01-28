
<?php
echo view('header');
?>

        

            <div class="row">
                <h2><?= $quiz->title ?>
                    <span class="badge badge-pill badge-secondary"><?= $quiz->questions->count() ?> questions</span>
                </h2>
            </div>

            <div class="row">
                <h4> 
                <?= $quiz->description ?>
                </h4>
            </div>

            <div class="row">
                <p>by <?= $quiz->author->firstname . ' ' . $quiz->author->lastname ?></p>
            </div>
    
            <div class="row">
                <?php
                    $i = 1;
                    foreach ($questionsQuiz as $index => $questionQuiz) : 
                    $level = $levels->firstWhere('id', $questionQuiz->levels_id);
                    ?>
                    <div class="col-sm-3 border p-0 <?php if($index % 3 !== 0): ?>offset-sm-1<?php endif ?>">

                        <span class="badge level-color-<?= $level->id ?> float-right mt-2 mr-2"><?= $level->name ?></span>

                        <div class="p-3 background-grey">
                            <?= $questionQuiz->question ?>
                        </div>
                        <div class="p-3 question-answer-block">
                            <ul>
                                <?php 
                                foreach ($answers[$questionQuiz->id] as $indexA => $answer) : 
                                ?>
                                <li><?= $indexA + 1 ?>. <?= $answer->description ?></li>
                                <?php endforeach; ?>
                            </ul> 
                        </div>
                    </div>
                    <?php if($index % 3 === 2): ?>
                    </div><div class="row mt-3">
                    <?php endif; ?>

                    <?php endforeach; ?>
                
            </div>

            
                
            
<?php
echo view('footer');
