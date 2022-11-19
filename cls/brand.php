<?php
class Brand
{
    private $brand = [
        [
            "id" => 1,
            "name" => "puma",
            'alt' => "puma img brand",
            "image_brand" => "img/puma.jpg"
            
        ],
        [
            "id" => 2,
            "name" => "nike",
            'alt' => "nike img brand",
            "image_brand" => "img/nike.jpg"
        ],
        [
            "id" => 3,
            "name" => "converse",
            'alt' => "converse img brand",
            "image_brand" => "img/converse.jpg"
        ],
        [
            "id" => 4,
            "name" => "adidas",
            'alt' => "adidas img brand",
            "image_brand" => "img/adidas.jpg"
        ],
        [
            "id" => 5,
            "name" => "jordan",
            'alt' => "jordan img brand",
            "image_brand" => "img/jordan.jpg"
        ],
        [
            "id" => 6,
            "name" => "newbarance",
            'alt' => "newbarance img brand",
            "image_brand" => "img/newbrance.jpg",
            'coment' => 'テキストテキストテキストテキストテキストテキストテキストテキスト'
        ],
    ];

    public function fetchAll()
    {
        return $this->brand;
    }
}




?>