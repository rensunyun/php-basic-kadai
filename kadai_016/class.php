<?php
// Step2: Food クラスの定義
class Food {
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceを出力するメソッド
    public function show_price() {
        echo "価格は " . $this->price . " 円です。<br>";
    }
}

// Step2: Animal クラスの定義
class Animal {
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力するメソッド
    public function show_height() {
        echo "高さは " . $this->height . " cmです。<br>";
    }
}

// Step3: インスタンス作成
$apple = new Food("りんご", 150);
$dog = new Animal("ポチ", 60, 8000);

// インスタンスの内容を出力
echo "<pre>";
print_r($apple);
print_r($dog);
echo "</pre>";

// Step4: メソッド実行
$apple->show_price();
$dog->show_height();
?>
