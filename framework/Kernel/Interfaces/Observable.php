<?php
namespace Framework\Kernel\Interfaces;

interface Observable
{
    public function register(Observer $observer);
    public function remove(Observer $observer);
    public function notify();
}