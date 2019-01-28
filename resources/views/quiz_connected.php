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
                <p>by  <?= $quiz->author->firstname . ' ' . $quiz->author->lastname ?></p>
            </div>
            
            <form action="" method="POST">
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
                                    <input class="form-check-input" type="radio" name="question<?= $questionQuiz->levels_id ?>" id="answer<?= $answer->id ?>" value="option1">
                                    <label class="form-check-label" for="answer<?= $answer->id ?>">
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


                    <div class="col-sm-3 offset-sm-1 border p-0">
                        <span class="badge badge-warning float-right mt-2 mr-2">Confirmé</span>
                        <div class="p-3 background-grey"> 
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                        </div>
                        <div class="p-3 question-answer-block">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                        Lorem ipsum 
                                </label> 
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                        Lorem ipsum 
                                </label> 
                                </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                <label class="form-check-label" for="exampleRadios3">
                                        Lorem ipsum 
                                </label> 
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 offset-sm-1 border p-0">
                        <span class="badge badge-danger float-right mt-2 mr-2">Expert</span>
                        <div class="p-3 background-grey">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                        </div>
                        <div class="p-3 question-answer-block">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                        Lorem ipsum 
                                </label> 
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                        Lorem ipsum 
                                </label> 
                                </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                <label class="form-check-label" for="exampleRadios3">
                                        Lorem ipsum 
                                </label> 
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row mt-3">

                    <div class="col-sm-3 border p-0">

                        <span class="badge badge-success float-right mt-2 mr-2">Débutant</span>

                        <div class="p-3 alert-success">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                        </div>
                        <div class="p-3 question-answer-block">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                        Lorem ipsum 
                                </label> 
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                        Lorem ipsum 
                                </label> 
                                </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                <label class="form-check-label" for="exampleRadios3">
                                        Lorem ipsum 
                                </label> 
                            </div>
                        </div>
                        <div class="p-3 background-grey question-answer-block"> 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                                <a href="#">Wikipedia</a>
                        </div>
                    </div>

                    <div class="col-sm-3 offset-sm-1 border p-0">

                            <span class="badge badge-success float-right mt-2 mr-2">Débutant</span>
    
                            <div class="p-3 alert-warning">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                            </div>
                            <div class="p-3 question-answer-block">
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                            Lorem ipsum 
                                    </label> 
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                            Lorem ipsum 
                                    </label> 
                                </div>
    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                    <label class="form-check-label" for="exampleRadios3">
                                            Lorem ipsum 
                                    </label> 
                                </div>
                            </div>

                            <div class="p-3 background-grey question-answer-block"> 
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                                    <a href="#">Wikipedia</a>
                            </div>
                        </div>
                    
                </div>
                <div class="row mt-3">
                    <input type="submit" class="btn btn-primary background-blue btn-lg btn-block" value="OK"/>
                </div>
            </form>
        </main>
    </body>
</html>