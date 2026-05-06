# B3D - Building³ Discipline

B3D é uma plataforma web completa construída em WordPress, voltada para o universo da corrida, bem-estar e estilo de vida. O projeto combina um blog informativo, um agregador de reviews e cupons, e uma aplicação progressiva (PWA) para monitoramento de treinos.

## 🚀 Funcionalidades Principais

*   **Conteúdo Especializado:** Artigos sobre treinos, nutrição e saúde.
*   **Catálogo de Tênis:** Reviews detalhados de calçados esportivos com sistema de avaliação.
*   **Agregador de Cupons:** Listagem de ofertas e descontos em lojas parceiras.
*   **Monitoramento de Treinos (Run Tracking):** Uma aplicação PWA integrada para acompanhar corridas em tempo real com GPS.
*   **Área do Usuário:** Sistema de cadastro e login com autenticação JWT.

## 🛠️ Tecnologias Utilizadas

*   **CMS:** WordPress
*   **Tema:** Customizado (`kupodigitalb3d`)
*   **Frontend:** Tailwind CSS, Preline UI, JavaScript (Vanilla)
*   **Backend:** PHP, Python (para funcionalidades específicas do app de mapa)
*   **Gerenciamento de Dependências:** Composer (PHP), npm/Yarn (Node.js)
*   **Autenticação:** JWT Authentication for WP REST API
*   **Performance:** CDN dedicada para imagens (`static.b3d.com.br`) e PWA para o monitoramento de corridas.

## 📁 Estrutura do Projeto

*   `wp-content/themes/kupodigitalb3d/`: Tema principal do WordPress, onde reside a lógica visual e funcional.
*   `app/run/`: Código fonte do PWA de monitoramento de corridas (HTML, JS, Service Worker).
*   `files/dist/`: Arquivos estáticos compilados (CSS, imagens).
*   `composer.json`: Dependências PHP (incluindo gerenciamento de `.env`).

## ⚙️ Instalação e Configuração

### 1. Clonagem do Repositório
O projeto utiliza submódulos Git para plugins e dependências:
```bash
git clone --recurse-submodules https://github.com/b3dfit/b3d.git
```
Ou, se já clonado:
```bash
git submodule update --init --recursive
```

### 2. Dependências PHP
Execute na raiz do projeto:
```bash
composer install
```

### 3. Dependências de Frontend (Tema)
Navegue até a pasta do tema e instale as dependências:
```bash
cd wp-content/themes/kupodigitalb3d/
yarn install
# ou
npm install
```

### 4. Variáveis de Ambiente
Crie um arquivo `.env` na raiz do projeto seguindo o padrão do WordPress e as necessidades de banco de dados (ver `DOCUMENTATION.md` para detalhes).

## 💻 Desenvolvimento

### Compilação de Assets (Tailwind CSS)
Para monitorar alterações no CSS e compilar automaticamente, utilize o script fornecido no tema:
```bash
cd wp-content/themes/kupodigitalb3d/
./run.sh
```
O comando executado internamente é:
```bash
npx tailwindcss -c ./tailwind.config.js -i ./assets/src/css/main.css -o ./../../../files/dist/css/output.css --watch
```

## 📄 Documentação Adicional
Para detalhes técnicos sobre a arquitetura do tema, CPTs e integrações, consulte o arquivo [DOCUMENTATION.md](./DOCUMENTATION.md).
