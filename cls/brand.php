<?php
class Brand
{
    private $brand = [
        [
            'id' => 11,
            'alt' => 'puma',
            'image_brand' => 'img/puma.jpg'

        ],
        [
            'id' => 12,
            'alt' => 'nike',
            'image_brand' => 'img/nike.jpg'
        ],
        [
            'id' => 13,
            'alt' => 'converse',
            'image_brand' => 'img/converse.jpg'
        ],
        [
            'id' => 14,
            'alt' => 'adidas',
            'image_brand' => 'img/adidas.jpg'
        ],
        [
            'id' => 15,
            'alt' => 'jordan',
            'image_brand' => 'img/jordan.jpg'
        ],
        [
            'id' => 16,
            'alt' => 'newbarance',
            'image_brand' => 'img/newbrance.jpg',
            'coment' => 'テキストテキストテキストテキストテキストテキストテキストテキスト'
        ],
    ];

    public function fetchAll()
    {
        return $this->brand;
    }
}




?>