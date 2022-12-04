<?php
abstract class Snack
{
    public string $name;
    public string $chocolate;
    /**
     * @var string[] $toppings
     */
    public array $toppings;

    function prepare(): void
    {
        echo "началась создание snack-а " . $this->name . PHP_EOL;
        echo "добавляется шоколад" . $this->chocolate . PHP_EOL;
        echo "добавлены начинок - "/*.$this->toppings*/;
        foreach ($this->toppings as $value) {
            echo $value . ',';
        }
    }
    function cut(): void
    {
        echo "данный снек нарезать кубиками" . PHP_EOL;
    }
}
