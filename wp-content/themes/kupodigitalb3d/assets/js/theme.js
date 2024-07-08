function applyTheme() {
    const html = document.querySelector('html');
    const userThemePreference = localStorage.getItem('hs_theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    console.log('User Theme Preference:', userThemePreference);
    console.log('System Prefers Dark:', systemPrefersDark);

    // Determine se o usuário prefere o modo claro ou escuro
    const isLightOrAuto = userThemePreference === 'light' || (!userThemePreference && !systemPrefersDark);
    const isDarkOrAuto = userThemePreference === 'dark' || (!userThemePreference && systemPrefersDark);

    console.log('Is Light or Auto:', isLightOrAuto);
    console.log('Is Dark or Auto:', isDarkOrAuto);

    // Aplica a classe apropriada ao elemento HTML
    if (isLightOrAuto && html.classList.contains('dark')) {
        html.classList.remove('dark');
        html.classList.add('light');
        console.log('Switched to Light Mode');
    } else if (isDarkOrAuto && html.classList.contains('light')) {
        html.classList.remove('light');
        html.classList.add('dark');
        console.log('Switched to Dark Mode');
    } else if (isDarkOrAuto && !html.classList.contains('dark')) {
        html.classList.add('dark');
        console.log('Set to Dark Mode');
    } else if (isLightOrAuto && !html.classList.contains('light')) {
        html.classList.add('light');
        console.log('Set to Light Mode');
    }
}

// Chama a função para aplicar o tema ao carregar a página
applyTheme();

// Adiciona um ouvinte de eventos para detectar mudanças nas preferências do esquema de cores do sistema
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
    console.log('Prefers Color Scheme Changed:', e.matches ? 'dark' : 'light');
    applyTheme();
});