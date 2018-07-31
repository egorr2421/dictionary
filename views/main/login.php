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
        <form>
            <div class="row justify-content-center input-register">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">login</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="input-group input-group-lg input-register">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 120px;text-align: center;display: block; background-color: #212529;color: white;">Password</span>
                        </div>
                        <input type="Password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center input-register">
                <div class="col-12 col-md-8 col-lg-6 ">
                    <div class="row justify-content-end" style="margin-bottom: 30px;">
                        <div class="col-4">
                            <div class="input-group-lg">
                                <button type="button" class="btn btn-dark input-register-but" style="background-color: #212529;color: white;padding-left: 20px;padding-right: 20px; ">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</form>
