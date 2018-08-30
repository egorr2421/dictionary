<?php

/* @var $this yii\web\View */

$this->title = 'Login';
?>
<div class="container-fluid about text-center">
    <div class="row" style="margin-top: 30px;">
        <div class="col">
            <h2 >Login</h2>
            <p class="my-dict">You can Logining your account</p>
        </div>
    </div>
    <div class="container">
        <form action="/login" method="POST">
            <?php if(!empty($model->errors['login'])){?>
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-8 col-lg-6 ">
                        <div class="alert alert-danger " role="alert">
                            <strong>Error!</strong>
                            <?=$model->errors['login'][0]?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="row justify-content-center input-register">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">login</span>
                        </div>
                        <input name="login" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>
            <?php if(!empty($model->errors['pass'])){?>
            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 ">
                <div class="alert alert-danger" role="alert">
                    <strong>Error!</strong>
                    <?=$model->errors['pass'][0]?>
                </div>
                </div>
            </div>
            <?php } ?>
                <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="input-group input-group-lg input-register">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">Password</span>
                        </div>
                        <input name="pass" type="Password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center input-register">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="row justify-content-end" style="margin-bottom: 30px;">
                        <div class="col-4">
                            <div class="input-group-lg">

                                <input name="but" value="Login" type="submit" class="btn btn-dark input-register-but" style="background-color: #212529;color: white;padding-left: 20px;padding-right: 20px; ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
