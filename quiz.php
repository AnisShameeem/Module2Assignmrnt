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

  function evaluateQuiz(array $questions, array $answers):string
  {
    $score = 0;
    foreach($questions as $index => $question){
        if($answers[$index] === $questions['correct']){
            $score++;
        }
    }
    return $score ;
}

$myScore = evaluateQuiz($questions , $answers);

echo "\n You scored $myScore out of ". count($questions). ".\n";

if($myScore === count($questions)){
    echo "Excellent Job!\n";
}elseif($myScore >= 1){
    Echo "Good job! \n";
}else{
    echo "You failed. Try again";
}

?>
