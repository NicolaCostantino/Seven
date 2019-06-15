<?php

use PHPUnit\Framework\TestCase;

class UpdateTest extends TestCase
{
    public function testEmptyArrayAndElement()
    {
        // Arrange
        $array = [];
        $element = 'test';
        $expectedResult = [$element];
        // Act
        $result = array_update($array, $element);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testNotEmptyArrayAndElement()
    {
        // Arrange
        $array = [
            'key1' => 'value1'
        ];
        $element = 'test';
        $expectedResult = $array;
        $expectedResult[] = $element;
        // Act
        $result = array_update($array, $element);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testEmptyArrayAndArray()
    {
        // Arrange
        $array = [];
        $element = ['test'];
        $expectedResult = $element;
        // Act
        $result = array_update($array, $element);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testEmptyArrayAndAssociativeArray()
    {
        // Arrange
        $array = [
        ];
        $element = [
            'testKey' => 'testValue'
        ];
        $expectedResult = array_merge($array, $element);
        // Act
        $result = array_update($array, $element);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testNotEmptyArrayAndArray()
    {
        // Arrange
        $array = [
            'key1' => 'value1'
        ];
        $element = ['test'];
        $expectedResult = array_merge($array, $element);
        // Act
        $result = array_update($array, $element);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testNotEmptyArrayAndAssociativeArray()
    {
        // Arrange
        $array = [
            'key1' => 'value1'
        ];
        $element = [
            'testKey' => 'testValue'
        ];
        $expectedResult = array_merge($array, $element);
        // Act
        $result = array_update($array, $element);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testNotEmptyArrayAndAssociativeArrayWithSameKey()
    {
        // Arrange
        $array = [
            'testKey' => 'value1'
        ];
        $element = [
            'testKey' => 'testValue'
        ];
        $expectedResult = array_merge($array, $element);
        // Act
        $result = array_update($array, $element);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }
}