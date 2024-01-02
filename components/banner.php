<section class="bg-purple-100 z-0">
  <div class="max-w-full px-4 lg:pt-12 pt-20 lg:grid grid-cols-3 max-w-screen-xl mx-auto">
    <div class="lg:py-20 px-2 fade-in-up col-span-2">
      <h2 class="lg:text-5xl text-5xl font-bold text-color1 pb-4 text-justify lg:text-left"> Criatividade. Alegria. Amor. Dedicação. Comunicação.</h2>
      <p class="text-xl text-justify">LEALDADE É O PILAR QUE NOS MOVE!✨💜 captada pela nossa essência e conectada ao nosso propósito!</p>
      <img src="./assets/img/Logo_Leal.png" alt="hero image" class="w-full lg:pt-10 pt-4">
    </div>
    <div>
      <form action="./admin/controllers/add_contact.php" method="post" class="mr-auto lg:pl-8 lg:pt-16 place-self-center pt-8">
        <h2 class="flex justify-center md:text-left text-md font-semibold text-gray-700 pb-4">Preencha abaixo para conversar com a nossa equipe de especialistas em Marketing Digital!</h2>
        <div>
          <label class="text-sm font-bold uppercase text-color1">
            Nome Completo
          </label>
          <input type="text" name="name" id="name" placeholder="Seu nome" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-color1">
            Email
          </label>
          <input type="email" name="email" id="email" placeholder="Seu email principal" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-color1">
            WhatsApp
          </label>
          <input type="text" name="whatsapp" id="whatsapp" placeholder="Seu número principal" class="mt-2 mb-4 w-full rounded-lg p-3 text-gray-900" />
        </div>
        <input type="hidden" value="CONTATO" name="type">
        <div class="mt-2 flex justify-center items-center">
          <input type="submit" class="my-2 w-full cursor-pointer rounded-lg bg-color6 py-2 px-4 font-medium text-black duration-300 ease-in-out hover:bg-color2" value="Enviar">
        </div>
      </form>
    </div>
</section>