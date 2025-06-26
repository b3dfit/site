# Documentação do Projeto B3D

Este documento fornece uma visão geral do projeto B3D, sua arquitetura, tecnologias utilizadas e guias para desenvolvimento e manutenção.

## 1. Visão Geral do Projeto

O projeto B3D é uma plataforma web construída em WordPress com foco no universo da corrida, bem-estar e estilo de vida. O site serve como um blog informativo e um agregador de conteúdo, oferecendo:

*   **Artigos e Posts de Blog:** Conteúdo sobre treinos, nutrição, dicas de corrida, saúde e bem-estar.
*   **Reviews de Tênis:** Análises detalhadas de tênis de corrida e outros calçados esportivos, incluindo características, classificações e benefícios.
*   **Cupons de Desconto:** Agregação de cupons de desconto para lojas de artigos esportivos e calçados.
*   **Informações sobre Lojas:** Detalhes e avaliações de lojas físicas e online relevantes para o público.
*   **Comunidade:** Espaço para interação de usuários, com login e cadastro, e potencial para funcionalidades sociais.

O objetivo principal é ser uma fonte confiável de informação e um hub para corredores e entusiastas de atividades físicas encontrarem dicas, reviews e ofertas.

## 2. Tecnologias Utilizadas

O projeto é construído sobre uma base WordPress, complementado por diversas tecnologias e ferramentas para frontend, backend e desenvolvimento:

*   **CMS:** WordPress (versão específica pode ser verificada no painel administrativo).
*   **Tema:**
    *   `kupodigitalb3d`: Tema personalizado desenvolvido especificamente para o projeto.
*   **Plugins Principais:**
    *   **Akismet Anti-Spam:** Proteção contra spam nos comentários.
    *   **WordPress Importer:** Para importação de conteúdo.
    *   **JWT Authentication for WP REST API:** Habilita autenticação baseada em JSON Web Tokens para a API REST do WordPress, utilizada para funcionalidades como login e registro de usuários via frontend.
    *   **Yoast SEO:** Otimização para motores de busca (SEO).
*   **Frontend:**
    *   **Tailwind CSS:** Framework CSS utility-first para a estilização do tema `kupodigitalb3d`.
    *   **Preline UI:** Biblioteca de componentes de interface de usuário pré-construídos baseados em Tailwind CSS, utilizada no tema.
    *   JavaScript vanilla para interações no frontend.
*   **Backend & Desenvolvimento:**
    *   **PHP:** Linguagem principal do WordPress e do tema/plugins customizados.
    *   **Arrilot DotEnv PHP:** Para gerenciamento de variáveis de ambiente (configurações de banco de dados, chaves de API, etc.) através de um arquivo `.env`.
    *   **Composer:** Gerenciador de dependências para PHP.
    *   **npm/Yarn:** Gerenciadores de pacotes Node.js, utilizados para as dependências de frontend (como Tailwind CSS e Preline).
*   **CDN de Imagens:**
    *   As imagens são servidas através de um CDN em `static.b3d.com.br` para otimização de entrega e performance, com capacidade de redimensionamento dinâmico.
*   **Controle de Versão:**
    *   **Git:** Utilizado para controle de versão do código.
    *   **Submódulos Git:** Algumas dependências ou plugins podem ser gerenciados como submódulos, permitindo que seus repositórios sejam mantidos separadamente.

## 3. Estrutura do Tema `kupodigitalb3d`

O tema `kupodigitalb3d` é o coração visual e funcional do site WordPress.

*   **Localização:** `wp-content/themes/kupodigitalb3d/`
*   **Principais Arquivos de Template:**
    *   `functions.php`: Contém a lógica principal do tema, incluindo enqueue de scripts e estilos, registro de CPTs (indireto, via chamadas a `getCustomTypeSlug`), helpers, configuração de autenticação, etc.
    *   `index.php`: Template padrão para listagens de posts.
    *   `single.php`: Template padrão para visualização de um post individual.
    *   `page.php`: Template padrão para páginas estáticas.
    *   `header.php` e `footer.php`: Partes do cabeçalho e rodapé do site.
    *   **Templates de Páginas Personalizadas:**
        *   `template-home.php`: Para a página inicial.
        *   `template-artigos.php`: Para a listagem de artigos/blog.
        *   `template-login.php`: Para a página de login de usuários.
        *   `template-cadastro.php`: Para a página de registro de novos usuários.
    *   **Templates de Tipos de Conteúdo Personalizado (Archives e Singles):**
        *   `archive-tenis.php` e `single-tenis.php`
        *   `archive-cupom.php` e `single-cupom.php`
        *   `archive-loja.php` e `single-loja.php`
        *   `single-alimento.php` (o archive pode usar `archive.php` ou um `archive-alimento.php` se existir)
    *   **Partes do Tema (Template Parts):** Localizados em `parts/`, contêm componentes reutilizáveis como `hero.php`, `last-articles.php`, `stores.php`, modais em `parts/modal/`, etc.
*   **Assets:**
    *   **CSS Fonte:** `assets/src/css/main.css` (principal arquivo Tailwind CSS a ser compilado).
    *   **CSS Compilado:** `files/dist/css/output.css` (localizado na raiz do projeto, fora do diretório do tema). Este é o arquivo CSS que o WordPress efetivamente carrega.
    *   **JavaScript:** `assets/js/` contém os scripts JS do tema, como `theme.js`, `utils.js`, `preline.js` (cópia local), `page-login.js`, `page-singup.js`, `session.js`.
    *   **Imagens e SVGs:** `assets/image/` e `assets/svg/`.
    *   **JSON:** `assets/json/` contém arquivos JSON, possivelmente para dados estáticos ou configurações (ex: `stats-calcadosinvestimentos.json`).
*   **Configuração do Tailwind CSS:**
    *   `tailwind.config.js`: Arquivo de configuração principal do Tailwind CSS, onde são definidos presets, temas, plugins, etc.
    *   `postcss.config.js`: Arquivo de configuração do PostCSS, geralmente usado em conjunto com o Tailwind CSS para processar o CSS.
*   **Scripts de Build:**
    *   `run.sh`: Contém o comando para compilar o Tailwind CSS em modo de observação (`--watch`).
*   **Outros Arquivos Notáveis:**
    *   `package.json` e `yarn.lock`: Gerenciam as dependências de Node.js para o tema (Tailwind, Preline, etc.).

## 4. Tipos de Conteúdo Personalizado (Custom Post Types) e Taxonomias

O site utiliza Tipos de Conteúdo Personalizado (CPTs) para organizar informações específicas de forma estruturada. Embora o registro explícito dos CPTs não esteja visível diretamente no `functions.php` do tema (eles podem ser registrados por um plugin customizado ou de uma forma que o `functions.php` apenas os referencie para obter slugs, como visto na função `getUrlByName`), a estrutura de templates e as funções utilitárias indicam a existência dos seguintes CPTs:

*   **Tênis (`tenis`):** Para catalogar e detalhar modelos de tênis, provavelmente com informações como marca, tipo de pisada, características, avaliações, etc.
    *   Template de Arquivo: `archive-tenis.php`
    *   Template Singular: `single-tenis.php`
*   **Cupom (`cupom`):** Para listar cupons de desconto.
    *   Template de Arquivo: `archive-cupom.php`
    *   Template Singular: `single-cupom.php`
*   **Loja (`loja`):** Para informações sobre lojas físicas ou online.
    *   Template de Arquivo: `archive-loja.php`
    *   Template Singular: `single-loja.php`
*   **Alimento (`alimento`):** Para informações sobre alimentos, possivelmente relacionado a nutrição esportiva.
    *   Template Singular: `single-alimento.php`
    *   O template de arquivo pode ser o `archive.php` padrão ou um `archive-alimento.php` (não listado explicitamente nos arquivos do tema, mas é uma convenção).

**Taxonomias Personalizadas:**

Não há indicação explícita de taxonomias personalizadas nos arquivos explorados até o momento. No entanto, é comum que CPTs como "Tênis" ou "Alimento" utilizem taxonomias para categorização (ex: "Marca de Tênis", "Tipo de Alimento", "Modalidade Esportiva"). Recomenda-se verificar o painel administrativo do WordPress ou o código-fonte de plugins relacionados para identificar quaisquer taxonomias personalizadas em uso.

## 5. Funcionalidades Chave

O tema `kupodigitalb3d` e os plugins configurados fornecem um conjunto de funcionalidades essenciais para a plataforma:

*   **Gerenciamento de Conteúdo Específico:**
    *   **Cupons:** Sistema para exibir e gerenciar cupons de desconto.
    *   **Lojas:** Listagem e páginas detalhadas para lojas parceiras ou relevantes.
    *   **Tênis:** Catálogo de tênis com informações detalhadas, características e possivelmente avaliações (função `getStarRating`).
    *   **Alimentos:** Conteúdo relacionado a alimentos, provavelmente focado em nutrição esportiva.
*   **Blog e Artigos:**
    *   Seção de artigos com funcionalidades como cálculo de **tempo estimado de leitura** (`estimated_reading_time()`).
*   **Autenticação e Gerenciamento de Usuários:**
    *   Páginas de **Login (`template-login.php`) e Cadastro (`template-cadastro.php`)** customizadas.
    *   **Registro de Usuário via API REST:** Endpoint `/wp/v2/users/register` para criação de contas de usuário via frontend.
    *   **Autenticação JWT:** Uso do plugin "JWT Authentication for WP REST API" para proteger endpoints da API REST e gerenciar sessões de usuário (`session.js`, `platform_login_scripts()`).
*   **Navegação e Interface do Usuário:**
    *   **Breadcrumbs Customizados:** Função `get_custom_breadcrumb()` para melhor orientação do usuário.
    *   **URLs Centralizadas:** Função `getUrlByName()` para fácil gerenciamento e acesso a links importantes do site.
    *   **Design Responsivo:** Esperado devido ao uso de Tailwind CSS e Preline UI.
*   **Otimização e Performance:**
    *   **CDN para Imagens:** Função `getCdnImage()` para servir imagens de um CDN (`static.b3d.com.br`), otimizando o carregamento.
    *   **Remoção de Recursos Desnecessários do WordPress:** O `functions.php` remove scripts de emoji, estilos de temas clássicos, CSS de blocos do Gutenberg e o CSS da admin bar para reduzir o carregamento de página.
*   **Integrações Potenciais (a confirmar):**
    *   **Telegram:** A existência do arquivo `parts/call-telegram.php` sugere uma possível integração para notificações ou compartilhamento via Telegram. (Necessita verificação do conteúdo do arquivo para mais detalhes).
    *   **Exibição de Estatísticas:** Os arquivos `parts/script-stats.php` e `parts/stats-platform.php`, juntamente com os arquivos JSON em `assets/json/`, indicam a exibição de dados estatísticos na plataforma. (Necessita verificação do conteúdo dos arquivos para mais detalhes).
*   **SEO:**
    *   Uso do plugin **Yoast SEO** para otimizações on-page e técnicas.

## 6. Plugins Personalizados ou Menos Comuns

Durante a análise da estrutura de pastas, foram identificados os seguintes diretórios de plugins que podem ser personalizados ou de terceiros menos comuns:

*   `wp-content/plugins/wezo-feed/`
*   `wp-content/plugins/wezoalves-contentfit/`
*   `wp-content/plugins/wezoalves-tablecontents/`

**Observação Importante:** No momento da análise inicial, esses diretórios apareceram vazios ou apenas como referências de submódulos Git que não foram completamente baixados/inicializados.

**Recomendações:**

*   **Verificar Status dos Submódulos:** Se estes são submódulos, é crucial garantir que estejam corretamente inicializados e atualizados (`git submodule update --init --recursive`).
*   **Investigar Funcionalidade:** Caso contenham código, a funcionalidade de cada um desses plugins deve ser investigada e documentada:
    *   `wezo-feed`: Poderia estar relacionado à importação ou geração de feeds de conteúdo (RSS, XML, etc.).
    *   `wezoalves-contentfit`: O nome sugere funcionalidades para ajustar ou adaptar conteúdo, talvez para diferentes formatos ou dispositivos, ou para análise de conteúdo.
    *   `wezoalves-tablecontents`: Provavelmente um plugin para gerar automaticamente um sumário (Table of Contents) para posts e páginas.
*   **Documentar Detalhes:** Se forem funcionais, documentar suas configurações, como são utilizados no site, e quaisquer dependências ou interações com o tema ou outros plugins. Se estiverem inativos ou forem placeholders, isso também deve ser notado.

## 7. Desenvolvimento e Manutenção

Esta seção cobre os procedimentos para configurar o ambiente de desenvolvimento, gerenciar dependências e compilar assets.

### 7.1. Clonagem do Projeto

O projeto utiliza submódulos Git. Para clonar corretamente:

```bash
git clone --recurse-submodules [URL_DO_REPOSITORIO_GIT]
```

Se o repositório já foi clonado sem a opção `--recurse-submodules`, inicialize e atualize os submódulos com:

```bash
git submodule update --init --recursive
```

### 7.2. Gerenciamento de Submódulos

Consulte o arquivo `README.md` na raiz do projeto para instruções detalhadas sobre como adicionar, atualizar e remover submódulos.

### 7.3. Dependências PHP (Composer)

As dependências PHP são gerenciadas pelo Composer.

*   **Instalação:** Após clonar o projeto, execute na raiz do projeto:
    ```bash
    composer install
    ```
*   **Atualização:** Para atualizar as dependências:
    ```bash
    composer update
    ```
*   **Adicionar Nova Dependência:**
    ```bash
    composer require nome/pacote
    ```

O principal pacote gerenciado pelo Composer é `arrilot/dotenv-php`.

### 7.4. Dependências JavaScript (npm/Yarn)

As dependências de frontend do tema `kupodigitalb3d` (como Tailwind CSS e Preline) são gerenciadas via npm ou Yarn. O tema contém um arquivo `package.json` e um `yarn.lock`.

*   **Localização:** Navegue até o diretório do tema: `wp-content/themes/kupodigitalb3d/`
*   **Instalação (usando Yarn, devido ao `yarn.lock`):**
    ```bash
    yarn install
    ```
    Ou, se preferir npm e não houver `yarn.lock` (ou se quiser convertê-lo):
    ```bash
    npm install
    ```
*   **Adicionar Nova Dependência (Yarn):**
    ```bash
    yarn add nome-pacote [--dev]
    ```

### 7.5. Build de CSS (Tailwind CSS)

O tema utiliza Tailwind CSS, que precisa ser compilado.

*   **Arquivo Fonte Principal:** `wp-content/themes/kupodigitalb3d/assets/src/css/main.css`
*   **Arquivo de Saída Compilado:** `files/dist/css/output.css` (na raiz do projeto)
*   **Comando de Build (Modo Watch):**
    Dentro do diretório do tema (`wp-content/themes/kupodigitalb3d/`), execute o script `run.sh` ou o comando diretamente:
    ```bash
    npx tailwindcss -c ./tailwind.config.js -i ./assets/src/css/main.css -o ./../../../files/dist/css/output.css --watch
    ```
    Este comando irá monitorar alterações no arquivo `main.css` (e arquivos de configuração do Tailwind) e recompilar o `output.css` automaticamente.
*   **Comando de Build (Produção):**
    Para uma compilação minificada para produção, o comando geralmente é similar, mas pode incluir a variável de ambiente `NODE_ENV=production` ou flags específicas do Tailwind para minificação e purga de CSS não utilizado. Consulte a documentação do Tailwind CSS para as melhores práticas. Exemplo:
    ```bash
    NODE_ENV=production npx tailwindcss -c ./tailwind.config.js -i ./assets/src/css/main.css -o ./../../../files/dist/css/output.css --minify
    ```

## 8. Configuração do Ambiente

Para rodar o projeto localmente ou em um servidor, as seguintes configurações e requisitos são necessários:

### 8.1. Requisitos do Servidor/Local

*   **Servidor Web:** Apache ou Nginx (com as devidas configurações para WordPress).
*   **PHP:** Versão compatível com a versão do WordPress utilizada (geralmente 7.4 ou superior).
    *   Extensões PHP comuns necessárias para WordPress (ex: `mysqli`, `curl`, `gd`, `mbstring`).
*   **Banco de Dados:** MySQL (versão 5.6 ou superior) ou MariaDB (versão 10.1 ou superior).
*   **Node.js:** Necessário para o build dos assets de frontend (Tailwind CSS). Verifique a versão no `package.json` do tema para compatibilidade, se especificado.
*   **Composer:** Para gerenciamento de dependências PHP.

### 8.2. Configuração do WordPress

*   Instale o WordPress normalmente.
*   Configure o banco de dados no arquivo `wp-config.php` ou, preferencialmente, utilize variáveis de ambiente.

### 8.3. Variáveis de Ambiente (`.env`)

O projeto utiliza `arrilot/dotenv-php` para carregar variáveis de ambiente a partir de um arquivo `.env` na raiz do projeto. Este método é preferível para configurar o WordPress, especialmente para informações sensíveis como credenciais de banco de dados.

1.  **Crie um arquivo `.env`** na raiz do projeto. Se houver um arquivo `.env.example` ou similar, copie-o para `.env`.
2.  **Defina as constantes do WordPress** no arquivo `.env`. Exemplo:

    ```env
    DB_NAME=nome_do_banco
    DB_USER=usuario_do_banco
    DB_PASSWORD=senha_do_banco
    DB_HOST=localhost
    DB_CHARSET=utf8mb4
    DB_COLLATE=

    WP_ENVIRONMENT_TYPE=development # ou 'production', 'staging'
    WP_HOME=http://seusite.local
    WP_SITEURL=http://seusite.local/wp

    # Chaves de Segurança do WordPress (gere novas chaves em https://api.wordpress.org/secret-key/1.1/salt/)
    AUTH_KEY='coloque_sua_chave_aqui'
    SECURE_AUTH_KEY='coloque_sua_chave_aqui'
    LOGGED_IN_KEY='coloque_sua_chave_aqui'
    NONCE_KEY='coloque_sua_chave_aqui'
    AUTH_SALT='coloque_sua_chave_aqui'
    SECURE_AUTH_SALT='coloque_sua_chave_aqui'
    LOGGED_IN_SALT='coloque_sua_chave_aqui'
    NONCE_SALT='coloque_sua_chave_aqui'

    # Outras configurações personalizadas podem ser adicionadas aqui
    # Ex: Chaves de API para serviços externos
    ```

3.  **Carregamento no `wp-config.php`:**
    Certifique-se de que seu `wp-config.php` esteja configurado para carregar estas variáveis. Geralmente, isso envolve adicionar algo como o seguinte no início do `wp-config.php` (antes de `require_once ABSPATH . 'wp-settings.php';`):

    ```php
    /** Carrega o Composer Autoloader e as variáveis de ambiente */
    require_once __DIR__ . '/vendor/autoload.php';

    try {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        $dotenv->required(['DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_HOST', 'WP_HOME', 'WP_SITEURL']); // Adicione outras variáveis obrigatórias
    } catch (Dotenv\Exception\InvalidPathException $e) {
        // Arquivo .env não encontrado, prossiga com a configuração padrão do wp-config ou lance um erro
        die('Por favor, crie um arquivo .env a partir de .env.example e defina as variáveis de ambiente.');
    }

    // Defina as constantes do WordPress usando as variáveis de ambiente
    define('DB_NAME', getenv('DB_NAME'));
    define('DB_USER', getenv('DB_USER'));
    define('DB_PASSWORD', getenv('DB_PASSWORD'));
    define('DB_HOST', getenv('DB_HOST'));
    define('DB_CHARSET', getenv('DB_CHARSET') ?: 'utf8mb4');
    define('DB_COLLATE', getenv('DB_COLLATE') ?: '');

    define('AUTH_KEY',         getenv('AUTH_KEY'));
    define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
    define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
    define('NONCE_KEY',        getenv('NONCE_KEY'));
    define('AUTH_SALT',        getenv('AUTH_SALT'));
    define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
    define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
    define('NONCE_SALT',       getenv('NONCE_SALT'));

    define('WP_HOME', getenv('WP_HOME'));
    define('WP_SITEURL', getenv('WP_SITEURL'));
    define('WP_ENVIRONMENT_TYPE', getenv('WP_ENVIRONMENT_TYPE') ?: 'production');

    // $table_prefix = 'wp_'; // Se não estiver no .env
    ```
    **Nota:** O snippet acima é um exemplo. A implementação exata pode variar. O importante é que as constantes do WordPress sejam definidas usando `getenv('NOME_DA_VARIAVEL')`.

## 9. Componentes da Aplicação em `app/run`

Dentro do diretório `app/run/` na raiz do projeto, existem arquivos que sugerem uma aplicação ou funcionalidade separada, possivelmente não diretamente gerenciada pelo WordPress:

*   `app/run/140bpm.m4a`, `app/run/180bpm.m4a`: Arquivos de áudio, possivelmente para um player ou metrônomo.
*   `app/run/app.js`: Um arquivo JavaScript, que pode ser o núcleo de uma aplicação frontend.
*   `app/run/index.html`: Um arquivo HTML, possivelmente o ponto de entrada para esta aplicação.
*   `app/run/map.html` e `app/run/map.py`: Sugerem uma funcionalidade de mapa, com um componente frontend (`map.html`) e um backend em Python (`map.py`).
*   `app/run/notification.png`: Imagem para notificações.
*   `app/run/ping.php`: Um script PHP, talvez para verificações de health check ou conectividade.
*   `app/run/service-worker.js` e `app/run/webmanifest.json`: Indicam fortemente a presença de um Progressive Web App (PWA), permitindo funcionalidades offline e instalação no dispositivo do usuário.

**Considerações:**

*   **Propósito e Integração:** O propósito exato desta aplicação/PWA e como (ou se) ela se integra com o site WordPress principal precisa ser investigado e documentado. Pode ser uma ferramenta complementar, uma área restrita, ou uma funcionalidade legada.
*   **Backend Python:** A presença de `map.py` indica que esta parte da aplicação pode requerer um ambiente Python para funcionar, separadamente do ambiente PHP do WordPress.
*   **Documentação Específica:** Se esta for uma parte ativa e importante do projeto, ela pode merecer sua própria documentação técnica detalhada.

Recomenda-se que a equipe com conhecimento sobre esta parte do sistema forneça mais detalhes sobre sua arquitetura, funcionamento e como mantê-la.
