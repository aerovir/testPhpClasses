<?php

class SummAnswers {
    public $goodAnswer;
    public $neutralAnswer;
    public $badAnswer;
    public $numberOfQuestions;

    public function HowManyQuestions(){
        return $this->numberOfQuestions = count($_POST);
    }

    public function SummGoodAnswer() {
        foreach ($_POST as $item) {
            if ($item == 'a'){
                $this->goodAnswer++;
            }
        }
        return $this->goodAnswer;
    }

    public function SummNeutralAnswer() {
        foreach ($_POST as $item) {
            if ($item == 'b'){
                $this->neutralAnswer++;
            }
        }
        return $this->neutralAnswer;
    }

    public function SummBadAnswer() {
        foreach ($_POST as $item) {
            if ($item == 'c'){
                $this->badAnswer++;
            }
        }
        return $this->badAnswer;
    }
}


class algorithmCook extends summAnswers {
    protected $result;

    public function countAnswer($allQuestions, $rightQuestions) {
        return $this->result = round($rightQuestions / $allQuestions * 100);
    }
}


class algorithmGourmet extends summAnswers {

}

