
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - $DOGS</title>
    <link rel="stylesheet" href="css/main/main.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="css/dogsimg/dogs1.png" alt="Dog Logo" class="logo">
            <p class="balance">4500 $DOGS</p>
        </div>
        <div class="buttons">
            <button class="wallet-btn">
                <img src="css/dogsimg/icon/Кошелек.png" alt="Кошелек" class="icon"> Подключить кошелек
            </button>
            <button class="earn-btn" onclick="window.location.href='tasks.html'">Заработать больше $DOGS</button>
            <button class="withdraw-btn" id="withdraw-btn">Вывести $DOGS</button>
        </div>
        <nav class="navbar">
            <!-- Добавляем класс active только для активной ссылки -->
            <a href="index.php" class="nav-item active">
                <img src="css/dogsimg/icon/Главная.png" alt="Главная" class="nav-icon">
                <span>Главная</span>
            </a>
            <a href="tasks.php" class="nav-item">
                <img src="css/dogsimg/icon/ЗаданияСер.png" alt="Задания" class="nav-icon">
                <span>Задания</span>
            </a>
            <a href="fortuna.php" class="nav-item">
                <img src="css/dogsimg/icon/РулеткаСер.png" alt="Рулетка" class="nav-icon">
                <span>Рулетка</span>
            </a>
            <a href="friends.php" class="nav-item">
                <img src="css/dogsimg/icon/ДрузьяСер.png" alt="Друзья" class="nav-icon">
                <span>Друзья</span>
            </a>
            <a href="mining.php" class="nav-item">
                <img src="css/dogsimg/icon/ФармингСер.png" alt="Фарминг" class="nav-icon">
                <span>Фарминг</span>
            </a>
        </nav>

        <!-- Модальное окно -->
        <div class="modal-overlay" id="modal-overlay"></div>
        <div class="modal" id="withdraw-modal">
            <div class="swipe-handle"></div>
            <div class="modal-header">Ваш баланс: 4500 $DOGS</div>
            <div class="modal-body">
                <input type="number" placeholder="Введите сумму" id="amount">
                <button id="withdraw-confirm">Вывести</button>
            </div>
        </div>

    </div>
    <script src="app.js"></script>
</body>
</html>

<script>
   // Получение элементов
const withdrawBtn = document.getElementById('withdraw-btn');
const modal = document.getElementById('withdraw-modal');
const modalOverlay = document.getElementById('modal-overlay');
const withdrawConfirmBtn = document.getElementById('withdraw-confirm');

// Открытие модального окна
withdrawBtn.addEventListener('click', () => {
    modal.classList.add('show');
    modalOverlay.classList.add('show');
});

// Закрытие модального окна при клике на оверлей
modalOverlay.addEventListener('click', () => {
    modal.classList.remove('show');
    modalOverlay.classList.remove('show');
});

// Закрытие модального окна свайпом вниз
let startY;
modal.addEventListener('touchstart', (e) => {
    startY = e.touches[0].clientY;
});

modal.addEventListener('touchmove', (e) => {
    const endY = e.touches[0].clientY;
    if (endY - startY > 50) {
        modal.classList.remove('show');
        modalOverlay.classList.remove('show');
    }
});

// Обработчик кнопки "Вывести"
withdrawConfirmBtn.addEventListener('click', () => {
    const amount = document.getElementById('amount').value;
    if (amount) {
        alert(`Вы выводите ${amount} $DOGS`);
        modal.classList.remove('show');
        modalOverlay.classList.remove('show');
    } else {
        alert('Пожалуйста, введите сумму для вывода');
    }
});

</script>