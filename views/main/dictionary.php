<?php

/* @var $this yii\web\View */

$this->title = 'Dictionary';
$this->registerJsFile('js/dictionary.js');
?>
<div class="container-fluid about text-center">
    <div class="row" style="margin-top: 30px;">
        <div class="col">
            <h2 class="word1" >Main Dictionary</h2>
            <p class="my-dict">Сlick on the words to add it to the dictionary</p>
        </div>
    </div>

    <div class="dict">
        <div class="container">
            <table class="table table-hover ">
                <thead class="thead-dark">
                <tr>
                    <th>№</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Last Name</th>
                    <th>Last Name</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($words as $key => $word):?>
                <tr class="word" nameWord=<?= $word->id?>>
                    <th scope="row"><?=($key+1) ?></th>
                    <td><?= $word->infinitive?></td>
                    <td><?=$word->past_simple ?></td>
                    <td><?=$word->past_participle?></td>
                    <td><?=$word->translation?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>