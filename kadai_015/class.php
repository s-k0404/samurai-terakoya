<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
<p>
    <?php
    class Food {
        //プロパティを定義
        //プロパティ→オブジェクトが持つ変数のこと。$がついたものが変数
        private $name;
        private $price;

        //メソッドを定義
        //メソッド→オブジェクトが持つ関数のこと。この場合、show_priceがメソッド（関数）になる。
        //今回はリターンを返すためにメソッドを定義している。
        public function show_price() {
            return $this->price ;
        }
        
        //コンストラクタを定義→名前（値段）を差し替える。初期化で値を入れてあげる
        //カンマの後に空白を入れる
        //コンストラクタではリターンを返せない。
        public function __construct(string $name, string $price) {
            //イコールの前後に空白を入れる。
            $this->name = $name;
            $this->price = $price;
        }
    }
    
    $food = new Food('Potato', '250');
    print_r($food);
    
    ?>
</p>
<p>
    <?php
        //波かっこの後に空白入れる
    class Animal {
        private $name;
        private $height;
        private $weight;
        //波かっこの後に空白入れる
        public function show_height() {
            return $this->height;

        }
        public function __construct(string $name, string $height, string $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

    }
    $animal = new Animal('dog', '60', '5000');
    
    print_r($animal);
    echo '<br>';
    print_r($food->show_price());
    echo '<br>';
    print_r($animal->show_height());
    ?>

</p>



</body>

</html>