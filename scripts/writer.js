document.addEventListener('DOMContentLoaded', () => {
    const textElement = document.getElementById('writer');
    const fullText = textElement.textContent;
    textElement.textContent = ''; // Очищаем исходный текст
  
    // Наблюдатель за пересечением
    const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
        // Когда элемент появляется в viewport
            textElement.classList.add('visible', 'animating');
            startTypewriter();
            observer.unobserve(entry.target); // Прекращаем наблюдение
        }
    });
    }, { threshold: 0.1,  // Срабатывает когда 10% элемента видно
       rootMargin: '100px 0px 0px 0px'
    }
);

  observer.observe(textElement);
  
  function startTypewriter() {
    let i = 0;
    function type() {
      if (i < fullText.length) {
        textElement.textContent += fullText[i];
        i++;
        setTimeout(type, 100); // Скорость печати
      } else {
        textElement.classList.remove('animating'); // Останавливаем курсор
      }
    }
    type();
  }
});