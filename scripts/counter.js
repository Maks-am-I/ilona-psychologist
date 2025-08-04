const years = document.getElementById('years');
const expirience = document.getElementById('expirience');
const patient = document.getElementById('patient');
const hours = document.getElementById('hours');
const arr_count = [years, expirience, patient, hours];

// Максимальные значения счетчиков
const maxValues = [12, 20, 700, 10000];
// Длительность анимации в миллисекундах
const duration = 5000;
// Время начала анимации
let startTime = null;

// Функция анимации
function animateCounters(timestamp) {
    if (!startTime) startTime = timestamp;
    // Пройденное время
    const elapsed = timestamp - startTime;
    // Прогресс от 0 до 1
    const progress = Math.min(elapsed / duration, 1);
    
    // Обновляем каждый счетчик
    for (let i = 0; i < maxValues.length; i++) {
        const currentValue = Math.floor(progress * maxValues[i]);
        arr_count[i].textContent = currentValue;
    }
    
    // Продолжаем анимацию, если не достигли конца
    if (progress < 1) {
        requestAnimationFrame(animateCounters);
    } else {
        for (let i = 0; i < arr_count.length; i++) {
            arr_count[i].textContent += '+';
        }
    }
}

// Запускаем анимацию
requestAnimationFrame(animateCounters);