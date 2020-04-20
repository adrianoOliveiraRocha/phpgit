<?php

namespace Pizza;

require('src/PizzaBuilder.php');
require('src/Pizza.php');

$pizzaRecipe = (new PizzaBuilder(9))
  ->cheese(true)
  ->pepperoni(true)
  ->bacon(true)
  ->build();

$order = new Pizza($pizzaRecipe);
echo $order->show();
echo "\n";
