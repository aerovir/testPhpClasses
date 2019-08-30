<?php

class SumAnswers {
    public $answerList = [];
    public $numberOfQuestions;

    public function HowManyQuestions(){
        return $this->numberOfQuestions = count($_POST);
    }

    public function ListOfAnswers() {
        foreach ($_POST as $item) {
            array_push($this->answerList, $item);
        }
        return $this->answerList;
    }
}


class AlgorithmCook extends SumAnswers {
    public $goodCook = ['b', 'c', 'b'];

    public function CookCountAnswers() {
        return count(array_intersect_assoc($this->goodCook, $this->ListOfAnswers()));
    }

    public function ResultCook() {
        return round($this->CookCountAnswers() / $this->HowManyQuestions() * 100);
    }
}


class AlgorithmGourmet extends SumAnswers {
    public $goodGourmet = ['c', 'a', 'c'];

    public function GourmetCountAnswers() {
        return count(array_intersect_assoc($this->goodGourmet, $this->ListOfAnswers()));
    }

    public function ResultGourmet() {
        return round($this->GourmetCountAnswers() / $this->HowManyQuestions() * 100);
    }
}


$cook = new AlgorithmCook();
$gourmet = new AlgorithmGourmet();

?>
<div>
    <?= "Ваш результат для повара: " . $cook->ResultCook() . "%"; ?>
</div><br><br>
<div>
    <?= "Ваш результат для гурмана: " . $gourmet->ResultGourmet() ."%"; ?>
</div><br><br>

<button onclick="history.back();">Назад</button>