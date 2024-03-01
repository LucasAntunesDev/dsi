<?php include_once('includes/head.php') ?>

<body class="bg-slate-900 text-zinc-50">

    <div class="flex flex-col justify-center pl-24 items-start gap-2">

        <nav class="flex my-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <!-- <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium 
                    hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 mr-2">
                            <path
                                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path
                                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        Início
                    </a>
                </li> -->
                <li>
                    <div class="flex items-center">
                        <!-- <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg> -->
                        <a href="professores.php" class="ms-1 text-sm font-medium 
                        hover:text-blue-500 md:ms-2">Professores</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium md:ms-2">Formulário</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="font-bold text-4xl text-blue-500 mb-4">
            <?php echo isset($_GET['id']) ? 'Editar' : 'Adicionar' ?> professor
        </h1>

        <form action="salvarprofessor.php" method="post">

            <fieldset class="flex flex-col items-center p-10 w-[40rem]">
                <input type="hidden" name="id" value='<?php echo $professor->getId(); ?>'>

                <div class="flex flex-col gap-y-1">
                    <label for="nome" class="label">Nome</label>
                    <input type="nome" id="nome" name="nome" value='<?php echo $professor->getNome(); ?>' class="rounded-md 
                    border-none py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                    focus:ring-2 focus:ring-inset focus:ring-blue-400 outline-none bg-slate-800">
                </div>

                <div class="flex flex-col gap-y-1">
                    <label for="login" class="label">Login</label>
                    <input type="login" id="login" name="login" value='<?php echo $professor->getLogin(); ?>' class="rounded-md 
                    border-none py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                    focus:ring-2 focus:ring-inset focus:ring-blue-400 outline-none bg-slate-800">
                </div>

                <div class="flex flex-col gap-y-1">
                    <label for="senha" class="label">Senha</label>
                    <input type="senha" id="senha" name="senha" value='<?php echo $professor->getSenha(); ?>' class="rounded-md 
                    border-none py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300
                    focus:ring-2 focus:ring-inset focus:ring-blue-400 outline-none bg-slate-800">
                </div>

            </fieldset>

            <div class="flex items-center gap-x-2 justify-center">
                <a href="professores.php" class="btn outlined">
                    Cancelar
                </a>

                <button type="submit" class="btn primary">
                    Salvar
                </button>
            </div>

        </form>

</body>

</html>