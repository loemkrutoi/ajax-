<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
    input,select{outline: none;}
    input::placeholder,select::placeholder{
        color: #8f95d1;
    }
    #queryForm{
        width: 500px; height: 400px;
        margin: 50px auto;
        display: flex;
        flex-wrap: wrap;
    }
    .orderInput,.order{
        width: 500px; height: 50px;
        text-align: center;
        border: none;
        border-radius: 5px;
        box-sizing: border-box;
        transition-duration: 0.5s;
        color: #333b80;
        font-size: 20px;
    }
    .orderInput{
        background-color: #E6E7F0;
    }
    .orderInput:focus{
        background-color: #C3C6E4;
        border-radius: 10px;
    }
    .order{
        background-color: #C3C6E4;
        cursor: pointer;
        color: #333b80;
    }
    .order:hover{
        background-color: #A8ADDA;
        border-radius: 10px;
    }
    select option:disabled,select option{
        background-color: #C3C6E4;
    }
    h1{
        width: 240px; height: 50px;
        margin: auto;
    }
    </style>
    <form action="" method="POST" id="queryForm">
        <h1>Сделайте заказ</h1>
        <input class="orderInput" type="text" placeholder="Введите логин">
        <select class="orderInput">
            <option value="" selected disabled>Выберите тип сырья</option>
            <option value="">Ламинат</option>
            <option value="">Массивная доска</option>
            <option value="">Паркетная доска</option>
            <option value="">Пробковое покрытие</option>
        </select>
        <select class="orderInput">
            <option value="" selected disabled>Выберите наименование сырья</option>
            <option value="">Паркетная доска Ясень темный однополосная 14 мм</option>
            <option value="">Инженерная доска Дуб Французская елка однополосная 12 мм</option>
            <option value="">Ламинат Дуб дымчато-белый 33 класс 12 мм</option>
            <option value="">Ламинат Дуб серый 32 класс 8 мм с фаской</option>
            <option value="">Пробковое напольное клеевое покрытие 32 класс 4 мм</option>
        </select>
        <select class="orderInput">
            <option value="" selected disabled>Выберите поставщика</option>
            <option value="">База Строитель</option>
            <option value="">Паркет 29</option>
            <option value="">Стройсервис</option>
            <option value="">Ремонт и отделка</option>
            <option value="">МонтажПро</option>
        </select>
        <input class="orderInput" type="number" placeholder="Укажите количество">
        <input class="order" type="submit" value="Заказать">
    </form>
    <a href="index.php">Назад</a>
</body>
</html>