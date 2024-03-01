<?php include_once('includes/head.php')?>
<body>

    <div class="flex flex-col justify-center items-center gap-2">
        <div class="flex justify-around items-center gap-2">

            <div class="flex justify-start items-center gap-x-12">

                <h1 class="font-bold text-3xl text-red-500 py-4 flex items-center gap-x-2">
                    Professores
                </h1>

                <div class="relative">
                    <input id="pesquisa-input" placeholder="Procurar" type="text" class="rounded-full 
        border-0 py-1.5 pr-10 pl-10 outline-none hover:bg-slate-100
        bg-slate-50">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 fill-gray-600">
                            <path fill-rule="evenodd"
                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>


            </div>

            <a href="professor.php" class="bg-emerald-500 rounded-md py-1 px-4 focus:bg-slate-50
            text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-emerald-500 
            focus:text-emerald-500 focus:border-emerald-500 transition duration-300 ease-in-out
            hover:bg-emerald-600 hover:border-emerald-600 self-baseline">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                </svg>

                Adicionar professor
            </a>

        </div>

        <div class="relative overflow-x-auto max-w-11/12 rounded-xl">
            <table class="table-auto text-gray-600 font-medium">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 text-emerald-500 bg-slate-50">
                    <tr class="table-row">
                        <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">
                            <div class=" flex items-center gap-x-2">
                            <a <?php
                            echo (!isset($_GET['descrescente'])) ? "href='professores.php?descrescente'" : "href='professores.php'";
                            ?> class="hover:text-gray-600">

                                <?php
                                if (isset($_GET['descrescente'])) {
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                 <path fill-rule="evenodd" d="M10 5a.75.75 0 01.75.75v6.638l1.96-2.158a.75.75 0 111.08 1.04l-3.25 3.5a.75.75 0 01-1.08 0l-3.25-3.5a.75.75 0 111.08-1.04l1.96 2.158V5.75A.75.75 0 0110 5z" clip-rule="evenodd" />
                                            </svg>';
                                } else {
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd" d="M10 15a.75.75 0 01-.75-.75V7.612L7.29 9.77a.75.75 0 01-1.08-1.04l3.25-3.5a.75.75 0 011.08 0l3.25 3.5a.75.75 0 11-1.08 1.04l-1.96-2.158v6.638A.75.75 0 0110 15z" clip-rule="evenodd" />
                                            </svg>';
                                }
                                ?>
                            </a>
                            Nome
        </div>
        </th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">Área</th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">Ações</th>
                    </tr>
                </thead>

                <tbody class=" text-sm bg-neutral-50/40">
            <?php

            if (isset($_GET['descrescente']))
                rsort($professores);

            foreach ($professores as $professor) {
                echo '<tr class="even:bg-slate-50">';
                echo '
                        <td class="pl-2 pr-1 w-fit">
                            <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                            hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm mx-2">' .
                    $professor->getId() .
                    ' </span>
                        ' . $professor->getNome() . '
                        </td>';
                echo '<td class="flex pl-2 pr-1 w-fit py-5 flex-nowrap gap-x-2" scope="col">';

                echo "<a href='professor.php?id=" . $professor->getId() . "' class='bg-emerald-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-emerald-500 focus:text-emerald-500 focus:border-emerald-500 transition duration-300 ease-in-out
                        hover:bg-emerald-600 hover:border-emerald-600'>
                           
                           <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                                <path d='M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z' />
                            </svg>
                           </a>";
                echo "<a href='excluirProfessor.php?id=" . $professor->getId() . "'  class='bg-red-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-red-500 focus:text-red-500 focus:border-red-500 transition duration-300 ease-in-out
                        hover:bg-red-3 hover:border-red-3'>
                           
                          <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                            <path fill-rule='evenodd' d='M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z' clip-rule='evenodd' />
                        </svg>
                           </a>";

                echo '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
            </table>
    </div>
    </div>

</body>

</html>