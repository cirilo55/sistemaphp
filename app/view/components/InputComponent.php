<?php

namespace App\View\Components;

class InputComponent {
    /**
    * @param inputtype string 'text' 'password' 
    * @param atributes
    */
    public static function render(string $inputType, string $name,  array $attributes=[])
    {
        $attributeString = '';
        if($attributes){
        foreach ($attributes as $name => $value) {
            $attributeString .= "{$name} = {$value}";
        }
        }

        echo "<input name='{$name}' class='input-component' type={$inputType} {$attributeString} />";
    }
}
?>

<style>
    .input-component{
    width: 100%;
    background: #fff;
    border: 2px solid #fff;
    box-shadow:  0px 4px 10px rgba(0,0,0, 0.04);
    height: 52px;
    border-radius: 4px;
    outline: none;
    padding: 0 16px;
    font-size: 16px;
    transition: border-color 0.2s ease-in;
    appearance: none;
    
    &:focus {
        border: 2px solid blue;
    }
    
    &[disabled]{
        background-color: gray;
        border-color: gray
    }
    }


</style>
