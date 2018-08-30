<?php

/* @var $this yii\web\View */

$this->title = 'Register';
?>
<div class="container-fluid about text-center">
    <div class="row" style="margin-top: 30px;">
        <div class="col">
            <h2 >Register</h2>
            <p class="my-dict">You can register your account</p>
        </div>
    </div>
    <div class="container">
        <form  method="POST">
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
                        <input name ='login' type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>
            <?php if(!empty($model->errors['pass'])){?>
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-8 col-lg-6 ">
                        <div class="alert alert-danger " role="alert">
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
                        <input name ='pass' type="Password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>
            <?php if(!empty($model->errors['email'])){?>
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-8 col-lg-6 ">
                        <div class="alert alert-danger " role="alert">
                            <strong>Error!</strong>
                            <?=$model->errors['email'][0]?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="input-group input-group-lg input-register">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">Email</span>
                        </div>
                        <input name ='email' type="email" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="input-group input-group-lg input-register">
                        <div class="custom-file " >
                            <input type="file" class="custom-file-input " id="customFile">
                            <label class="custom-file-label " for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center input-register">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="row justify-content-end" style="margin-bottom: 30px;">
                        <div class="col-4">
                            <div class="input-group-lg">
                                <input name='but' type="submit" value="Register" class="btn btn-dark input-register-but" style="background-color: #212529;color: white;padding-left: 20px;padding-right: 20px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

