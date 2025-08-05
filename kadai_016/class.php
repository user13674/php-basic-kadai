<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food
    {
      // プロパティを定義する                        
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドを定義する
      public function show_price()
      {
        echo $this->price . '<br>';
      }
    }

    class Animal
    {
      // プロパティを定義する                        
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドを定義する
      public function show_height()
      {
        echo $this->height . '<br>';
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンスの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // メソッドを実行する
    $food->show_price();
    $animal->show_height();
    ?>
  </p>


</body>

</html>