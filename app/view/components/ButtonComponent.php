<?php

namespace App\View\Components;

class ButtonComponent {
    public static function render(string $label)
    {
        return ("
        <div class='btn-component'>
            <button>
                {$label}
            </button>
        </div>
        ");
        
    }
}
?>

<style  >
.btn-component{
    width: 100%;
    height: 52px;

    button{
    height: 100%;
    border: none;
    background: rgba(0,27,255, 0.5);
    color: #fff;
    font-size: 16px;
    box-shadow: 0px 4px 10px rgba(0,0,0, 0.4);
    transition: background 0.2 ease-in;
    padding: 0 16px;
    border-radius: 4px;
    
    display: flex;
    align-items: center;
    justify-content: center;

    &[disabled] {
        background: #ccc;
        cursor: default;
    }
    }
    button:hover{
        cursor: pointer;
        background: rgba(0,27,255, 0.8);
    }

}
</style>

<script>

</script>