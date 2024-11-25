<?php

require_once __DIR__ . '/validator.php';

use validator\CodeValidator;

// Пример использования CodeValidator
$validator = new CodeValidator("{{lajkdhf{adfa}{}adfasdfadf{}}}");
echo $validator->isValid() ? 'Корректный код' : 'Некорректный код';