<?php
namespace Framework\Kernel\Interfaces;
interface Observer
{
    public function update();
    public function setObservable(Observable $observable);
}