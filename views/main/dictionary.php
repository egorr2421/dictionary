<?php

/* @var $this yii\web\View */
    $this->title = 'Dictionary';
    if (\Yii::$app->session->get ('user')['login'] == 'admin') {
        $this->registerJsFile('js/admin/adminScript.js?v=0.03',['depends' => 'app\assets\AppAsset']);

    }else{
        $this->registerJsFile('js/dictionary.js?v=0.010', ['depends' => 'app\assets\AppAsset']);
    }

?>
<div class="container-fluid about text-center">
    <div class="row" style="margin-top: 30px;">
        <div class="col">
            <h2 class="word1" >Main Dictionary</h2>
            <p class="my-dict">Сlick on the words to add it to the dictionary</p>
        </div>
    </div>

    <?php if (\Yii::$app->session->get ('user')['login'] == 'admin'){ ?>

    <div class="container">
            <div class="row justify-content-center input-register">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">Infinitive</span>
                        </div>
                        <input id="infinitive" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>


            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="input-group input-group-lg input-register">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">Past Sim.</span>
                        </div>
                        <input id="simple" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>



            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="input-group input-group-lg input-register">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">Past Part.</span>
                        </div>
                        <input id="part" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>


            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="input-group input-group-lg input-register">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">Trans.</span>
                        </div>
                        <input id="translation" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center input-register">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="row justify-content-end" style="margin-bottom: 30px;">
                        <div class="col-4">
                            <div class="input-group-lg">

                                <button id="admin_btn" class="btn btn-dark input-register-but " style="background-color: #212529;color: white;padding-left: 20px;padding-right: 20px; ">Add a word</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <?php } ?>
    <div class="dict">
        <div class="container">
            <table id="irregular" class="table table-hover ">
                <thead class="thead-dark">
                <tr>
                    <th>№</th>
                    <th>Infinitive</th>
                    <th>Past Simple</th>
                    <th>Past Participle</th>
                    <th>Translation</th>
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
    <button offset="10" type="button " id="add" class="btn btn-dark" style="margin-bottom: 30px;">Add more words</button>