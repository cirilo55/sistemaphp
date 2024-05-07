<?php
use App\View\Components\InputComponent;
use App\View\Components\ButtonComponent;
?>
<div class="center">
    <div class="login-container">
    <h1>login</h1>
        <form action="">
            <?=InputComponent::render('text', 'login-input')?>
            <?=InputComponent::render('password', 'password-input')?>
            
            <?=ButtonComponent::render('Login')?>
        </form>
    </div>
</div>
<style>
    .login-container{
        border: 1px solid black;
        width: 400px;
        height: 300px;

        h1{
            display: flex;
            justify-content: center;
        
        }
        form{
            display: grid;
            place-content: center;
            gap:10px;
        }

    }
</style>
