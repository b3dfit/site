<?php
/*
Template Name: Login
*/

get_header();
?>
<main id="content">
    <div class="max-w-5xl mx-auto flex" id="singup">
        <!-- Hero -->
        <div class="grid items-center grid-cols-2 overflow-hidden mb-6">
            <div class="mx-auto py-12 px-4 sm:px-6  md:py-20 lg:py-32 md:px-8">
                <div class=" md:pe-8   xl:pe-0  ">
                    <!-- Title -->
                    <h1 class="text-3xl text-zinc-950 font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight dark:text-white">
                        Exclusivo para <span class=" text-lime-500 dark:text-lime-500">Membros!</span>
                    </h1>
                    <p class="mt-3 text-base text-zinc-950 dark:text-white mb-5">
                        Acessando seu perfil, você tem ferramentas exclusivas para membros.
                    </p>
                    <!-- End Title -->



                    <!-- Form -->
                    <button swg-standard-button="subscription"
                    class="group inline-flex items-center gap-x-2 py-2 px-3 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none">Cadastrar</button>
                    <!--form class="w-full grid items-center grid-cols-2" id="login-form" autocomplete="off">
                        <div class="  inline-block mx-3">
                            <label for="username" class="block text-sm font-medium dark:text-white"><span
                                    class="sr-only">Usuário</span></label>
                            <input type="text" id="username" name="username" autocomplete="off"
                                class="py-3 px-4 block w-full border-zinc-950 rounded-lg text-sm focus:border-lime-500 focus:ring-lime-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-zinc-950 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Usuário" disabled="disabled">
                        </div>

                        <div class=" mx-3  inline-block">
                            <label for="password" class="block text-sm font-medium dark:text-white"><span
                                    class="sr-only">Senha</span></label>
                            <input type="password" id="password" name="password" autocomplete="off"
                                class="py-3 px-4 block w-full border-zinc-950 rounded-lg text-sm focus:border-lime-500 focus:ring-lime-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-zinc-950 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Senha" disabled="disabled">
                        </div>

                        <div class="mt-4 mx-3 w-full">
                            <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-zinc-800 text-white hover:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">Acessar</button>
                        </div>
                    </form-->
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
<script async type="application/javascript" src="https://news.google.com/swg/js/v1/swg-basic.js"></script>
<script>
  (self.SWG_BASIC = self.SWG_BASIC || []).push(basicSubscriptions => {
    basicSubscriptions.init({
      type: "NewsArticle",
      isPartOfType: ["Product"],
      isPartOfProductId: "CAows8DYCw:openaccess",
      clientOptions: { theme: "light", lang: "pt-BR" },
    });
  });
</script>
<?php
get_footer();
