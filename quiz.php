<?php
  $questions = [
    ['questions' => 'What is 2+2? ' , 'correct'  => '4'],
    ['questions' => 'Capital of bd? ' , 'correct'  => 'Dhaka'],
    ['questions' => 'Who wrote agnibina? ' , 'correct'  => 'Nazrul'],
  ];

  $answers = [];

  foreach($questions as $index => $question)
  {
    echo ($index + 1). "." .$question['questions']. \n;
    $answers[] = trim(readline("Your Answer : "));
    

  }




?>
