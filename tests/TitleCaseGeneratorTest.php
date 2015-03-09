<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

            function test_makeTitleCase_oneWord()
            {
                //Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "beowulf";

                //Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                //Asssert
                $this->assertEquals("Beowulf", $result);
            }

            function test_makeTitleCase_multipleWords()
            {
                //Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "star trek";

                //Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                //Assert
                $this->assertEquals("Star Trek", $result);
            }

            function test_makeTitleCase_smallWord_exceptions()
            {
                //Arrange
                $test_TitleCaseGenerator = new TitleCaseGenerator;
                $input = "tale of two cities";

                //Act
                $result = $test_TitleCaseGenerator->makeTitleCase($input);

                //Assert
                $this->assertEquals("Tale of Two Cities", $result);
            }

    }

?>
