<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

require_once('./src/ejercicios.php');

final class EjercicioReverseTest extends TestCase
{
  // Programar varias funciones que realizen lo siguiente
  public function testReverseString(): void
  {
    $input = "Hola que tal";
    $expectedOutput = "lat euq aloH";
    assertEquals($expectedOutput, reverseString($input));
  }

  public function testReverseWords(): void
  {
    $input = "Hola que tal";
    $expectedOutput = "tal que Hola";
    assertEquals($expectedOutput, reverseWords($input));
  }

  public function testReverseCharactersInWords(): void
  {
    $input = "Hola que tal";
    $expectedOutput = "aloH euq lat";
    assertEquals($expectedOutput, reverseCharactersInWords($input));
  }  
} 