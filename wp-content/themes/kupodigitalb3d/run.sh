# # # # # # # # # 
# Resumo da Estrutura de Pastas
# assets/src/css/: Arquivos de origem do CSS (incluindo o Tailwind CSS)
# dist/css/: Arquivos CSS compilados prontos para produção
# node_modules/: Dependências do npm
# tailwind.config.js: Configurações do Tailwind CSS
# postcss.config.js: Configurações do PostCSS
# # # # # # # # # 

#npm run watch:css
#npm run watch:js

npx tailwindcss -c ./tailwind.config.js -i ./assets/src/css/main.css -o ./../../../files/dist/css/output.css --watch