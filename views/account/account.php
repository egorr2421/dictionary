<?php

$this->title="account";
$this->registerJsFile('js/scriptAccount.js');
//$this->registerJsFile('js/dictionary.js');
?>
<div id="title" class="title shadow-lg ">
			<div class="container ">
				<div class="row no-gutters  acount"  >
					<div class="col-12 order-2 order-md-1 col-md div-img " style="position: relative;">
						<div class="row no-gutters h-100 align-items-center">
							<div class="col align-self-center">
						<img  class="w-100 align-self-center" src="web\image\sl\5138.jpg"alt="">
						</div>
						</div>
					</div>
					<div class="col-12 order-1 order-md-2 col-md" style="background-color: rgba(0,0,0,0.2);">
						<div class="row h-100"  >
						<div class="col-12 align-self-center text-center main-title">
                            <h2>You is  <span style="color: yellow"><?=$model->login?></span></h2>
							<p class="h3">This is your Email <span style="color: yellow"><?=$model->email?></span><br>
								I started study bootstrap yesterday. <br>
								This one what i did </p>

						</div>
						<div class="col-12 ">
								
								  <div class=" row justify-content-end align-items-end h-100 btn-group btn-group-toggle" data-toggle="buttons" style="width: 100%;padding-bottom: 10px;padding-top: 20px;">

									  <label class="chek-color btn btn-secondary active">
									    <input class="chek-color1" type="radio" name="options" id="option1" autocomplete="off" value="1" checked> 
									  </label>
									  <label class="chek-color btn btn-secondary">
									    <input class="chek-color1" type="radio" name="options" id="option2" autocomplete="off" value="2"> 
									  </label>
									  <label class="chek-color btn btn-secondary">
									    <input class="chek-color1" type="radio" name="options" id="option2" autocomplete="off" value="3"> 
									  </label>
									  <label class="chek-color btn btn-secondary">
									    <input class="chek-color1" type="radio" name="options" id="option2" autocomplete="off" value="4"> 
									  </label>
									  <label class="chek-color btn btn-secondary">
									    <input class="chek-color1" type="radio" name="options" id="option2" autocomplete="off" value="5"> 
									  </label>
									</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			</div>

			<div class="container-fluid about text-center table-hover" style="margin-bottom: 30px;">
					<div class="row" style="margin-top: 30px;">
						<div class="col">
							<h2 >My Dictinary</h2>
							<p class="my-dict">You can add word in your directory</p>
							<div class="dict">
				<div class="container">
					<table class="table " style="margin-bottom: 40px;">
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

                          <?php if ($model->getWords()) {foreach ($model->getWords() as $key => $word):?>
                              <tr class="word" nameWord=<?= $word['id']?>>
                                  <th scope="row"><?=($key+1) ?></th>
                                  <td><?= $word['infinitive']?></td>
                                  <td><?=$word['past_simple'] ?></td>
                                  <td><?=$word['past_participle']?></td>
                                  <td><?=$word['translation']?></td>
                              </tr>
                          <?php endforeach;} ?>
						  </tbody>
						</table>
				</div>	
			</div>
						</div>
			</div>
            </div>