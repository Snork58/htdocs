<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <title>Document</title>
</head>

<body>
  <?php
  class Food
  {
    private $name;
    private $price;

    public function __construct(string $name, int $price)
    {
      $this->name = $name;
      $this->price = $price;
    }

    public function show_price()
    {
      return $this->price;
    }
  }
  class Animal
  {
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight)
    {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    public function show_height()
    {
      return $this->height;
    }
  }
  $foodApple = new Food('apple', 100);
  $animalDog = new Animal('dog', 50, 20000);
  print_r($foodApple);
  echo '<br>';
  print_r($animalDog);
  echo '<br>';
  print_r($foodApple->show_price());
  echo '<br>';
  print_r($animalDog->show_height());
  ?>
</body>

</html>