<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        // player inputs a string and game outputs a array. input:"string" "string" output: "[]"
        function test_RockPaperScissors_returnArray()
        {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "foo";
            $input2 = "bar";

            //Act
            $result = $test_RockPaperScissors->RPSgame($input1, $input2);

            //Assert
            $this->assertTrue(is_array($result));
        }//end test

        // output array contains player choices in the array input:"string" "string" output: "["string", "string"]"
        function test_RockPaperScissors_confirmArrayContent()
        {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "foo";
            $input2 = "bar";

            //Act
            $result = $test_RockPaperScissors->RPSgame($input1, $input2);

            //Assert
            $this->assertContains($input1, $result);
            $this->assertContains($input2, $result);

        }//end test

    }
