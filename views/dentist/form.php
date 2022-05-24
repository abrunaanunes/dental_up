<?php require $_SERVER['DOCUMENT_ROOT'] . '/' .'views' . '/partials/app.php'  ?>
<main>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block w-full p-5">
                    <!--v-if-->
                    <form class="flex flex-col gap-4" action="<?php echo 'http://' . $_SERVER['HTTP_HOST']. '/dentist/store'; ?>" method="post">
                        <?php 
                            if(!empty($data)) {
                                foreach($data as $message) {
                                echo '<span style="font-size: 14px; font-weight: 300; line-height: 18px; color: red;">' . $message . '</span>';
                                }
                            }
                        ?>
                        <div>
                            <label class="block"></label>
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Nome
                            </span>
                            <input type="text" name="name" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" required/>
                        </div>

                        <div>
                            <label class="block"></label>
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                E-mail
                            </span>
                            <input type="text" name="email" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" required/>
                        </div>

                        <div>
                            <label class="block"></label>
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                CPF
                            </span>
                            <input type="text" name="cpf" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" required/>
                        </div>

                        <div>
                            <label class="block"></label>
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Celular
                            </span>
                            <input type="text" name="phone" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" />
                        </div>

                        <div class="flex flex-row justify-end gap-4">
                            <a href="/dentist" class="text-white bg-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancelar</a>

                            <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer" value="Salvar"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>