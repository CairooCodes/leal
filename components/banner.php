    <section style="background-color: rgba(200, 162, 200, 0.4);">
      <div class="max-w-full px-4 pt-24 mx-auto lg:grid grid-cols-2">
        <div class="lg:py-20 px-2">
          <h2 class="text-5xl font-bold text-color1"> Criatividade. Alegria. Amor. Dedicação. Comunicação.</h2>
          <p class="text-xl text-justify">Conheça, nossa nova marca!✨💜 captada pela nossa essência e conectada ao nosso propósito tudo para sua empresa.</p>
          <img src="./assets/img/Logo_Leal.png" alt="hero image" class="w-full pt-10">
        </div>
        <div class="mx-auto">
          <form action="./admin/controllers/add_lead.php" method="post" class="mr-auto lg:p-16 place-self-center">
            <h2 class="flex justify-center md:text-left text-6xl font-bold text-color1">Dúvidas?</h2>
            <p class="my-4 text-color1 text-center font-semibold">
              Preencha abaixo para conversar com a nossa equipe de especialistas em Marketing Digital!
            </p>
            <div>
              <label class="text-sm font-bold uppercase text-color1">
                Nome Completo
              </label>
              <input type="text" name="name" id="name" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
            </div>
            <div>
              <label class="text-sm font-bold uppercase text-color1">
                Email
              </label>
              <input type="email" name="email" id="email" placeholder="email@gmail.com" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
            </div>
            <div>
              <label class="text-sm font-bold uppercase text-color1">
                WhatsApp
              </label>
              <input type="text" name="whatsapp" id="whatsapp" placeholder="(99) 9 9999-9999" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
            </div>
            <div>
              <label class="text-sm font-bold uppercase text-color1">
                Mensagem
              </label><br>
              <textarea name="description" id="description" rows="2" cols="50" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900"></textarea>
            </div>
            <input type="hidden" value="CONTATO" name="type">
            <div class="mt-2 flex justify-center items-center">
              <input type="submit" class="my-2 w-full cursor-pointer rounded-lg bg-color6 py-2 px-4 font-medium text-black duration-300 ease-in-out hover:bg-color2" value="Enviar">
            </div>
          </form>
        </div>
    </section>