<?php
  function printFaq($faq){
    foreach ($faq as $myQuestion) {
      echo '<div class="myQuestion"><h3>' . $myQuestion['question'] . '</h3>';
      echo '<p>' . $myQuestion['answer'] . '</p>' . '</div>';
    }
  };

  function faqCounter($myArray){
    $faqNumber = count($myArray);
    echo $faqNumber;
  };
 ?>
