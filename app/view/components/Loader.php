<?php
// loader.php

namespace App\View\Components;

class Loader{
    public static function render(bool $isLoading)
    {
        // Inclui o HTML aqui
        $html = <<<HTML
    <div id="loader">

    </div>

    <script>
        function handleLoader(isLoading){
            var loader = document.getElementById('loader');
            if(isLoading){
                loader.toggleClass(loader, 'show')
            }
        }
    </script>

<style>
        /* Estilos CSS básicos */
        #loader {
            /* display: none; */
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.7);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        .loader-content {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Classe para exibir ou ocultar o loader */
        .show {
            display: flex;
        }

        .ocultar {
            display: none;
        }
    </style>

HTML;

        return $html;
    }
}
?>
