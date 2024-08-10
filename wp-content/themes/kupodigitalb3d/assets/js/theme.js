function applyTheme() {
    const html = document.querySelector('html');
    const userThemePreference = localStorage.getItem('hs_theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    // Determine se o usuário prefere o modo claro ou escuro
    const isLightOrAuto = userThemePreference === 'light' || (!userThemePreference && !systemPrefersDark);
    const isDarkOrAuto = userThemePreference === 'dark' || (!userThemePreference && systemPrefersDark);

    // Aplica a classe apropriada ao elemento HTML
    if (isLightOrAuto && html.classList.contains('dark')) {
        html.classList.remove('dark');
        html.classList.add('light');

    } else if (isDarkOrAuto && html.classList.contains('light')) {
        html.classList.remove('light');
        html.classList.add('dark');

    } else if (isDarkOrAuto && !html.classList.contains('dark')) {
        html.classList.add('dark');

    } else if (isLightOrAuto && !html.classList.contains('light')) {
        html.classList.add('light');

    }
}

// Chama a função para aplicar o tema ao carregar a página
applyTheme();

// Adiciona um ouvinte de eventos para detectar mudanças nas preferências do esquema de cores do sistema
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
    applyTheme();
});