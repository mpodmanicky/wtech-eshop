<?php

namespace app\Models;

class Product {
    public $name;
    public $price;
    public $color;
    public $description;
    public $category;
    public $image;
    public $id;

    public function __construct($name, $price, $color, $description, $category, $image, $id) {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
        $this->description = $description;
        $this->category = $category;
        $this->image = $image;
        $this->id = $id;
    }
}
