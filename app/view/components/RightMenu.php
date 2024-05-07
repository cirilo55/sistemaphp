<?php

namespace App\View\Components;

class RightMenu {
    public static function render()
    {
        ?>
        <div class="right-menu">
        <div class="hamburguer" onclick="toogleMenu()">
        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
        </div>
        </div>
        <?php
        return "";
    }
}
?>

<style  >
.right-menu{
    position: absolute;
    width: 48px;
    height: 93%;
    background: rgb(40, 40, 40, 0.8);
    cursor: pointer;

    .hamburguer {
    width: 45px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    
    margin-top: 20px;
    }
  
    .hamburguer .bar {
        height: 3px;
        width: 50%;
        background-color: whitesmoke;
        display: block;
        border-radius: 5px;
        transition: 0.3s ease;
        margin-top: 1px;
    }

    .circle-hover-menu{
        border-radius: 50%;
        height: 50%;
        display: grid;
    }
    .circle-hover-menu:hover{
        background-color: rgb(255, 255, 255, 0.25);

    }
    &:hover{
        background: rgb(30, 30, 30, 1);

    }
}

</style>

<script>
function toogleMenu()
{
    

}
</script>