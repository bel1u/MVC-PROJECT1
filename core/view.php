<?php
function view($name, $arg = []) {
    ob_start();
    # Создаем переменные из названия ключей с использованием операции переменные переменных
    if(isset($arg) && $arg != [])
        foreach($arg as $key => $value) {
            $$key = $value;
        }
    # Создание переменной error для записей ошибок
    $error = ($arg['errors'] ?? []);

    # Функция в переменной для определения есть ли ошибка
    $isError = function($errorName, $input = false) use ($error) {
        # Создаем переменную с ошибками или же если нет ошибок Null
        $firstError = isset($error[$errorName]) ? $error[$errorName] : null;
        # Если это Input, то для него создаются атрибуты
        if($input) {
            # Если есть ошибка, записываем класс для ошибки
            $class = (isset($firstError) ? 'is-invalid' : '');
            # Создаем переменную для хранения всех атрибутов
            $arrAttributes = [];
            # Добавляем к атрибуту class основной класс form-control
            $arrAttributes["class"][] = "form-control";
            # Если есть ошибки, то добавим класс из переменной $class
            $arrAttributes["class"][] = $class;
            # Сгенерируем для aria_describedby значение динамически validationЗНАЧЕНИЕИЗПЕРЕМЕННОЙFeedback
            $arrAttributes["aria_describedby"][] = "validation{$errorName}Feedback";

            # Переменная хранящая текст для внесения в input
            $attributes = '';
            # Цикл строящий атрибуты класса
            foreach($arrAttributes as $key => $items) {
                # Если атрибут имеет _ то меняется на -
                # Пример: aria_describedby будет aria-describedby
                $key = str_replace('_', '-', $key);
                # Получаем ключ и ставим его. Пример: class='
                $attributes .= " $key='";
                # Добавляем значения для данного ключа
                # Пример: form-control is-invalid
                foreach($items as $item)
                    $attributes .= " $item";
                # Добавляем в конце '
                $attributes .= "'";
            }

            # Отдаем значение
            # Пример: class='form-control is-invalid' aria-describedby='validationNameFeedback'
            return $attributes;
        }
        else {
            return '<div id="' . "validation{$errorName}Feedback" . '" class="invalid-feedback">
                  ' . (isset($firstError) ? implode('<br>', $firstError) : '') . '
                </div>';
        }
    };

    include_once 'views/' . $name . '.php';
    $content = ob_get_contents();
    ob_clean();
    return $content;
}