    <section class="bg-color1">
        <div class="max-w-full px-4 pt-10 mx-auto lg:grid grid-cols-2">
            <div class="lg:flex justify-center items-center hidden py-2 px-2">
                <img src="./assets/img/hero.png" alt="hero image" class="w-full px-5 ml-24">
            </div>
            <div class="mx-auto">
                <form action="./admin/controllers/add_lead.php" method="post" class="mr-auto lg:p-16 place-self-center">
                    <h2 class="flex justify-center md:text-left text-6xl font-bold text-white">Dúvidas?</h2>
                    <p class="my-4 text-white text-center font-semibold">
                        Preencha abaixo para conversar com a nossa equipe de especialistas em Marketing Digital!
                    </p>
                    <div>
                        <label class="text-sm font-bold uppercase text-color3">
                            Nome Completo
                        </label>
                        <input type="text" name="name" id="name" class="mt-2 mb-4 w-full rounded-full p-3 border border-gray-300 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold uppercase text-color3">
                            Email
                        </label>
                        <input type="email" name="email" id="email" placeholder="email@gmail.com" class="mt-2 mb-4 w-full rounded-full p-3 border border-gray-300 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold uppercase text-color3">
                            WhatsApp
                        </label>
                        <input type="text" name="whatsapp" id="whatsapp" placeholder="(99)9 9999-9999" class="mt-2 mb-4 w-full rounded-full p-3 border border-gray-300 text-gray-900" />
                    </div>
                    <div>
                        <label class="text-sm font-bold uppercase text-color3">
                            Mensagem
                        </label><br>
                        <textarea name="description" id="description" rows="2" cols="50"  class="mt-2 mb-4 w-full rounded-full p-3 border border-gray-300 text-gray-900"></textarea>
                    </div>
                    <input type="hidden" value="CONTATO" name="type">
                    <div class="mt-2">
                        <input type="submit" class="my-2 w-full cursor-pointer rounded-full bg-color3 py-3 px-6 font-medium  text-black duration-300 ease-in-out hover:bg-color2" value="Enviar">
                    </div>
                </form>
            </div>
    </section>