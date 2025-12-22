<?php
require_once('config/status_codes.php');

$random_indexes = array_rand($status_codes, 4);

foreach ($random_indexes as $index) {
    $options[] = $status_codes[$index];
}
$question = $options[mt_rand(0,3)];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question['description'] ?>
                </p>
            </div>
            <form class="quiz-answer" action="result.php" method="post">
                <input type="hidden" name=answer_code value="<?php echo $option['code'] ?>">
                <div class="quiz-answer__item">
                    <?php foreach ($options as $option): ?>
                        <div class="quiz-answer__group">
                            <input class="quiz-answer__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
                            <label class="quiz-answer__label" for="<?php echo $option['code'] ?>">
                                <?php echo $option['code'] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-answer__button">
                    <button class="quiz-answer__button-submit" type="submit">
                    回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>