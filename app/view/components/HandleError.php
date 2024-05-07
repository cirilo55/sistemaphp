<?php

namespace App\View\Components;

class HandleError {
    
    public static function render($errorMessage)
    {

        return <<<HTML
        <div class='error-container'>
            <p class='error-message'>$errorMessage</p>
            <button>
                <img src='../assets/imgs/refresh.svg' alt='att-page'>
            </button>
        </div>
HTML;

    }
}
?>

<style>
    .error-container {
        position: fixed;
        background-color: #FFCACA;
        color: #FF0000;
        border: 1px solid #FF0000;
        padding: 10px;
        margin-bottom: 10px;
        top: 7%;
        left: 50px;
        width: 96%;
        display: flex;
        cursor: pointer;

        .error-message {
        font-weight: bold;
        }
        button{
            margin-left: auto;
        }
        &:hover{
            background-color: rgb(255,150,150);

        }
    }


</style>
