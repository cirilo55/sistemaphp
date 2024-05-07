<?php

use App\View\Components\ButtonComponent;
use App\View\Components\CheckBoxComponent;
use App\View\Components\InputComponent;
use App\View\Components\RightMenu;
use App\View\Components\Header;
use App\View\Components\Loader;

echo Header::render();

echo RightMenu::render();
?>
<div class='stage'>
<div class='container'>
<h1>Home.php</h1>
<?=Loader::render(true)?>
<?=InputComponent::render('text', 'test')?>
<?=ButtonComponent::render('label')?>
</div>
</div>

<style  >
.stage{
width: 80%;
height: 80%;

display: flex;
justify-content: center;
align-items: center;

.container{
    width: 500px;
    height: 400px;
}
}
</style>