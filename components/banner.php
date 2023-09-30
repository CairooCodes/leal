    <section class="bg-color1">
        <div class="max-w-full px-4 pt-20 mx-auto lg:grid grid-cols-2">
            <div class="lg:flex justify-center items-center hidden">
                <img src="./assets/img/hero.png" alt="hero image" class="w-full">
            </div>
            <div class="mx-auto">
                <form class="mr-auto lg:p-16 place-self-center" action="#" method="post">
                    <h2 class="text-center md:text-left text-3xl font-bold">Dúvidas?</h2>
                    <p class="my-4">
                        Preencha abaixo para conversar com a nossa equipe de especialistas
                    </p>
                    <div>
                        <label class="text-sm font-bold uppercase">
                            Nome Completo
                        </label>
                        <input type="text" name="name" id="name" class="mt-2 mb-4 w-full rounded-full p-3 border border-gray-300 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold uppercase">
                            WhatsApp
                        </label>
                        <input type="number" name="whatsapp" id="whatsapp" placeholder="(99)9 9999-9999" class="mt-2 mb-4 w-full rounded-full p-3 border border-gray-300 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold uppercase">
                            Email
                        </label>
                        <input type="email" name="email" id="email" placeholder="email@gmail.com" class="mt-2 mb-4 w-full rounded-full p-3 border border-gray-300 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold uppercase">
                            Bairro
                        </label>

                        <input type="text" name="city" id="city" class="mt-2 mb-4 w-full rounded-full p-3 border border-gray-300 text-gray-900" />
                    </div>
                    <input type="hidden" value="2" name="type">
                    <div class="mt-2">
                        <input type="submit" class="my-2 w-full cursor-pointer rounded-full bg-color2 py-3 px-6 font-medium  text-white duration-300 ease-in-out hover:bg-color2" value="Enviar">
                    </div>
                </form>
            </div>
    </section>