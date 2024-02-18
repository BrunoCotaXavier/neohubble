<x-app-layout>
  <style>
    .glow-border {
      position: relative;
      display: inline-block;
      padding: 8px;
      font-size: 16px;
      background-color: transparent;
      color: #333;
      border: 2px solid transparent;
      border-image: linear-gradient(90deg, rgba(255, 255, 255, 0), #fff, rgba(255, 255, 255, 0)) 1;
      border-image-slice: 1;
      transition: border-color 0.5s ease;
    }

    .glow-border:hover {
      border-color: #fff;
    }

    @keyframes glowing {
      0% {
        border-color: #fff;
      }

      50% {
        border-color: rgba(255, 255, 255, 0.5);
      }

      100% {
        border-color: #fff;
      }
    }

    .glow-border-animated {
      animation: glowing 2s infinite;
    }
  </style>
  <div class="bg-white">
    <div class="relative isolate px-6 lg:px-8">
      <div class="absolute w-9 sm:w-auto -z-10 transform-gpu blur-3xl" aria-hidden="true">
        <div class="relative -z-10 left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-50 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div>
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 glow-border glow-border-animated">
            Descubra como a presença online pode impulsionar o sucesso do seu negócio.
            <a href="/blog" class="font-semibold text-indigo-600">
              <span class="absolute inset-0" aria-hidden="true"></span>Ver mais <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>

        <div class="text-start">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Tecnologia que enriquece o seu negócio
          </h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">Começe agora clicando em "Iniciar" simule um orçamento rapido
            para criar seu site profissional Neohubble, feito sob medida para você. 🚀</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/simulator" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              Iniciar
            </a>
            <a href="/blog" class="text-sm font-semibold leading-6 text-gray-900">Saiba mais <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-50 sm:left-[calc(50%+16rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div>
    </div>
  </div>
</x-app-layout>