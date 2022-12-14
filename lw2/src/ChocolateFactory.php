<?php
require_once "Snack.php";
abstract class ChocolateFactory
{

    abstract function createSnack(string $type): Snack;

    public function orderSnack(string $type): void
    {
        $snack = $this->createSnack($type);
        $snack->prepare();
        $snack->cut();
    }
}
