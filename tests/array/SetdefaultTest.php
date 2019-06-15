<?php

use PHPUnit\Framework\TestCase;

class SetdefaultTest extends TestCase
{
    public function testEmptyArrayAndNewKeyWithoutDefaultReturnValue()
    {
        // Arrange
        $array = [];
        $key = 'test';
        $expectedResult = NULL;
        // Act
        $result = array_setdefault($array, $key);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testEmptyArrayAndNewKeyWithoutDefaultArrayModification()
    {
        // Arrange
        $array = [];
        $key = 'test';
        $expectedArray = [
            $key => NULL
        ];
        // Act
        $result = array_setdefault($array, $key);
        // Assert
        $this->assertEquals($expectedArray, $array);
    }

    public function testEmptyArrayAndNewKeyWithDefaultReturnValue()
    {
        // Arrange
        $array = [];
        $key = 'test';
        $default = 'testDefault';
        $expectedResult = $default;
        // Act
        $result = array_setdefault($array, $key, $default);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testEmptyArrayAndNewKeyWithDefaultArrayModification()
    {
        // Arrange
        $array = [];
        $key = 'test';
        $default = 'testDefault';
        $expectedArray = [
            $key => $default
        ];
        // Act
        $result = array_setdefault($array, $key, $default);
        // Assert
        $this->assertEquals($expectedArray, $array);
    }

    public function testNotEmptyArrayAndNewKeyWithoutDefaultReturnValue()
    {
        // Arrange
        $array = [
            'key1' => 'value1'
        ];
        $key = 'test';
        $expectedResult = NULL;
        // Act
        $result = array_setdefault($array, $key);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testNotEmptyArrayAndNewKeyWithoutDefaultArrayModification()
    {
        // Arrange
        $array = [
            'key1' => 'value1'
        ];
        $key = 'test';
        $expectedArray = [
            'key1' => 'value1',
            $key => NULL
        ];
        // Act
        $result = array_setdefault($array, $key);
        // Assert
        $this->assertEquals($expectedArray, $array);
    }

    public function testNotEmptyArrayAndNewKeyWithDefaultReturnValue()
    {
        // Arrange
        $array = [
            'key1' => 'value1'
        ];
        $key = 'test';
        $default = 'testDefault';
        $expectedResult = $default;
        // Act
        $result = array_setdefault($array, $key, $default);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testNotEmptyArrayAndNewKeyWithDefaultArrayModification()
    {
        // Arrange
        $array = [
            'key1' => 'value1'
        ];
        $key = 'test';
        $default = 'testDefault';
        $expectedArray = [
            'key1' => 'value1',
            $key => $default
        ];
        // Act
        $result = array_setdefault($array, $key, $default);
        // Assert
        $this->assertEquals($expectedArray, $array);
    }

    public function testNotEmptyArrayAndExistentKeyWithoutDefaultReturnValue()
    {
        // Arrange
        $key = 'test';
        $value = 'testValue';
        $array = [
            $key => $value
        ];
        $expectedResult = $value;
        // Act
        $result = array_setdefault($array, $key);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testNotEmptyArrayAndExistentKeyWithoutDefaultArrayModification()
    {
        // Arrange
        $key = 'test';
        $value = 'testValue';
        $array = [
            $key => $value
        ];
        $expectedArray = $array;
        // Act
        $result = array_setdefault($array, $key);
        // Assert
        $this->assertEquals($expectedArray, $array);
    }

    public function testNotEmptyArrayAndExistentKeyWithDefaultReturnValue()
    {
        // Arrange
        $key = 'test';
        $value = 'testValue';
        $array = [
            $key => $value
        ];
        $default = 'testDefault';
        $expectedResult = $value;
        // Act
        $result = array_setdefault($array, $key, $default);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testNotEmptyArrayAndExistentKeyWithDefaultArrayModification()
    {
        // Arrange
        $key = 'test';
        $value = 'testValue';
        $array = [
            $key => $value
        ];
        $default = 'testDefault';
        $expectedArray = $array;
        // Act
        $result = array_setdefault($array, $key, $default);
        // Assert
        $this->assertEquals($expectedArray, $array);
    }
}