<?php

class Shoes
{
    private $data = [
        [
            "id"=> 1,
            "alt" => "nike",
            "image_path" => "./img/baby-shoes-g36f2d5784_1920.jpg",
            "name" => "img1"
        ],
        [
            "id"=>2,
            "alt" => "adidas",
            "image_path" => "./img/erik-mclean-hRmlaSdNwaA-unsplash.jpg",
            "name" => "img1"
        ],
        [
            "id"=>3,
            "alt" => "aaa",
            "image_path" => "./img/mnz-g3C5qZhNzQg-unsplash.jpg",
            "name" => "img2"
        ],
        [
            "id"=>4,
            "alt" => "nike",
            "image_path" => "img/ox-street-7k4TGXsQCPY-unsplash.jpg",
            "name" => "img1"
        ],
        [
            "id"=>5,
            "alt" => "nike",
            "image_path" => "img/ryan-plomp--aCtb_RTwuM-unsplash.jpg",
            "name" => "img1"
        ],
        [
            "id"=>6,
            "alt" => "nike",
            "image_path" => "img/samuel-lopes-FUR3LNiI2jc-unsplash.jpg", 
            "name" => "img1"
        ],
        [
            "id"=>7,
            "alt" => "nike",
            "image_path" => "img/shoes-g0f1f7ff07_1920.jpg",
            "name" => "img1"
        ],
        [
            "id"=>8,
            "alt" => "nike",
            "image_path" => "img/shoes-g26555a929_1920.jpg",
            "name" => "img1"
        ],
        [
            "id"=>9,
            "alt" => "nike",
            "image_path" => "img/sneakers-g34ccb7d1b_1920.jpg",
            "name" => "img1"
        ],
        [
            "id"=>10,
            "alt" => "nike",
            "image_path" => "img/sneakers-g39d6c4dcb_1920.jpg",
            "name" => "img1"
        ],
    ];

    public function fetchAll()
    {
        return $this->data;
    }


}
