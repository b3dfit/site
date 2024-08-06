<?php
/*
Template Name: Cadastro
*/
get_header();
?>

<main id="content">
    <div class="max-w-5xl mx-auto flex" id="singup">
        <!-- Hero -->
        <div class="grid items-center grid-cols-2 overflow-hidden mb-6">
            <div class="-1/2 mx-auto py-12 px-4 sm:px-6  md:py-20 lg:py-32 md:px-8">
                <div class=" md:pe-8   xl:pe-0  ">
                    <!-- Title -->
                    <h1
                        class="text-3xl text-zinc-950 font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight dark:text-white">
                        Cadastre-se <span class="text-4xl block">Acesse Ferramentas</span> <span
                            class="text-lime-500 dark:text-lime-500">Exclusivas!</span>
                    </h1>
                    <p class="mt-3 text-base text-zinc-950 dark:text-white mb-5">
                        Junte-se à nossa comunidade de apaixonados por disciplina e aproveite todas as vantagens que a
                        nossa plataforma oferece.
                    </p>
                    <!-- End Title -->



                    <!-- Form -->
                    <form id="register-form" autocomplete="off">
                        <div class="mb-4">
                            <label for="username" class="block text-sm font-medium dark:text-white"><span
                                    class="sr-only">Usuário</span></label>
                            <input type="text" id="username" name="username" autocomplete="off"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-lime-500 focus:ring-lime-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Usuário" disabled="disabled">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium dark:text-white"><span
                                    class="sr-only">Email</span></label>
                            <input type="email" id="email" name="email" autocomplete="off"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-lime-500 focus:ring-lime-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Email" disabled="disabled">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium dark:text-white"><span
                                    class="sr-only">Senha</span></label>
                            <input type="password" id="password" name="password" autocomplete="off"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-lime-500 focus:ring-lime-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Senha" disabled="disabled">
                        </div>

                        <div class="grid">
                            <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-zinc-800 text-white hover:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">Cadastrar</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>

            <div class="-1/2 mx-auto h-full px-4 sm:px-6 md:px-8">
                <img class="w-auto h-full object-cover "
                    src="<?php echo (get_template_directory_uri()); ?>/assets/image/photo-1556705634-7754fc9519f9.jpeg"
                    alt="Image Description">
            </div>
            <!-- End Col -->
        </div>
        <!-- End Hero -->

    </div>
</main>
<script>



    setTimeout(function () {
        document.getElementById('username').removeAttribute('disabled');
        document.getElementById('email').removeAttribute('disabled');
        document.getElementById('password').removeAttribute('disabled');
    }, 1000);


    document.getElementById('register-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const data = {
            username: document.getElementById('username').value,
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
        };

        fetch('<?php echo site_url('/wp-json/wp/v2/users/register'); ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
            .then(response => response.json())
            .then(data => {
                if (data.id) {
                    alert('Usuário cadastrado com sucesso!');
                    window.location.href = '<?php echo site_url('/login?success-singup'); ?>';
                } else {
                    alert('Erro ao cadastrar usuário: ' + data.message);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });
</script>
<?php
get_footer();
