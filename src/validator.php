<?php
namespace validator;
class CodeValidator {
    private string $code;

    public function __construct(string $code) {
        $this->code = $code;
    }

    public function isValid(): bool {
        $stack = [];

        foreach (str_split($this->code) as $char) {
            if ($char === '{') {
                $stack[] = $char;
            } elseif ($char === '}') {
                if (empty($stack)) {
                    return false; // Лишняя закрывающая скобка
                }
                array_pop($stack); // Убираем соответствующую открывающую скобку
            }
        }

        return empty($stack); // Все открытые скобки должны быть закрыты
    }
}
