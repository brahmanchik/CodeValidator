const paragraph = document.getElementById('paragraph');
let isButton1Pressed = false; // Состояние кнопки 1
let toggleState = false; // Переключатель состояния абзаца (скрыт или раскрыт)

// Функция для обработки нажатия кнопки 1
const handleButton1 = () => {
    isButton1Pressed = true; // Установить флаг, что кнопка 1 была нажата
};

// Функция для обработки нажатия кнопки 2
const handleButton2 = () => {
    if (isButton1Pressed) {
        // Если кнопка 1 была нажата, выполняем действие
        toggleState = !toggleState;
        paragraph.style.display = toggleState ? 'none' : 'block';
        isButton1Pressed = false; // Сбрасываем флаг
    }
};

// Привязка обработчиков событий
document.getElementById('button1').addEventListener('click', handleButton1);
document.getElementById('button2').addEventListener('click', handleButton2);