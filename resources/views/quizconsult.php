
<?php
use App\Models\Answer;

echo view('header');

?>

        

            <div class="row">
                <h2><?= $quiz->title ?>
                    <span class="badge badge-pill badge-secondary">xx questions</span>
                </h2>
            </div>

            <div class="row">
                <h4> 
                <?= $quiz->description ?>
                </h4>
            </div>

            <div class="row">
                <p>by <?php 
                echo $author->firstname . ' ' . $author->lastname ?></p>
            </div>
    
            <div class="row">
                <?php
                    $i = 1;
                    foreach ($questionsQuiz as $questionQuiz) : 
                    $answersQuestionQuiz = Answer::where('questions_id', $questionQuiz->id)->get();
                    $level = $levels->firstWhere('id', $questionQuiz->levels_id);
                    if ($i < 2) { ?>
                    <div class="col-sm-3 border p-0">

                        <span class="badge level-color-<?= $level->id ?> float-right mt-2 mr-2"><?= $level->name ?></span>

                        <div class="p-3 background-grey">
                            <?= $questionQuiz->question ?>
                        </div>
                        <div class="p-3 question-answer-block">
                            <ul>
                                <?php 
                                foreach ($answersQuestionQuiz as $answerQuestion) : 
                                ?>
                                <li><?= $answerQuestion->description ?></li>
                                <?php endforeach; ?>
                            </ul> 
                        </div>
                    </div>
                <?php 
                    } else { ?>
                    <div class="col-sm-3 offset-sm-1 border p-0">

                        <span class="badge level-color-<?= $level->id ?> float-right mt-2 mr-2"><?= $level->name ?></span>

                        <div class="p-3 background-grey">
                            <?= $questionQuiz->question ?>
                        </div>
                        <div class="p-3 question-answer-block">
                            <ul>
                            <?php 
                                foreach ($answersQuestionQuiz as $answerQuestion) : ?>
                                <li><?= $answerQuestion->description ?></li>
                                <?php endforeach; ?>
                            </ul> 
                        </div>
                    </div>
                <?php
                    }
                    if ($i === 3) {
                        echo '</div>
                        <div class="row mt-3">';
                        $i = 1;
                    } else {
                        $i++;
                    }
                    
                    endforeach; ?>
                
            </div>

            
                
            
<?php
echo view('footer');
