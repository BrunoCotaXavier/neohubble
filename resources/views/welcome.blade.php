<x-app-layout>
  <style>
    .backgroundImage {
      background-image: url(/images/fundoHome.png);
      background-color: rgba(0, 0, 0, 0.8);
      width: 100%;
      height: 100%;
      background-repeat: no-repeat;
      background-position: top;
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
    }

    .efectGlass {
      background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(10px);
    }


    .neon-text {
      color: #5815DD;
      /* text-shadow: 0 0 10px #5815DD, 0 0 20px #5815DD, 0 0 30px #5815DD, 0 0 40px #5815DD, 0 0 70px #5815DD, 0 0 80px #5815DD, 0 0 100px #5815DD, 0 0 150px #5815DD;
      -webkit-text-stroke: 2px black; */
    }

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

    .certificado-verde {
      color: #5815DD;
    }

    .glow-border:hover {
      border-color: #fff;
    }

    .balance {
      animation: balance 3s normal;
    }

    @keyframes balance {

      0% {
        transform: rotate(35deg);
      }

      100% {
        transform: rotate(0deg);
      }
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
  <div style="margin-bottom: 55px; padding-right: 35px;" class="z-50 fixed bottom-0 w-full flex justify-end balance">
    <a target="_blank" href="https://wa.me/message/P2RKUKKVGB7JB1">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="#5814dd" viewBox="0 0 256 256">
        <path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path>
      </svg>
    </a>
  </div>
  <div class="backgroundImage">
  </div>

  <div class="bg-black ">
    <div class="relative isolate p-5 efectGlass">
      <div class="mx-auto lg:max-w-3xl flex items-center justify-center">
        <div class="mx-auto py-32 sm:py-48 lg:py-56">
          <div class="hidden sm:mb-8 sm:flex sm:justify-start">
            <div style="color: #ffff; opacity: 70%;" class="w-full relative rounded-full px-3 py-1 text-sm leading-6 ring-1 text-gray-300 ring-gray-900/10 hover:ring-gray-900/20 glow-border glow-border-animated">
              Como a presença online pode impulsionar o seu negócio.
              <a href="/blog" class="font-semibold text-indigo-600">
                <span class="absolute inset-0" aria-hidden="true"></span>Ver mais <span aria-hidden="true">&rarr;</span>
              </a>
            </div>
          </div>
          <div class="text-start">
            <h1 class="text-5xl font-bold tracking-tight text-white sm:text-6xl">
              Crie seu site agora, com a <span class="neon-text">Neohubble</span>.
            </h1>
            <p class="mt-7 text-lg leading-8 text-gray-300">
              <strong>Clique em "Iniciar" e realize um orçamento gratuito, descubra como podemos transformar sua empresa em online.</strong>
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="/simulator" style="background-color: #5815DD;" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Iniciar
              </a>
              <a href="/#ComoCriarSite" class="text-sm font-semibold leading-6 text-gray-400">Saiba mais <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </div>
        <div class="mx-auto py-32 sm:py-48 lg:py-56 pl-5">
          <img src="{{ asset('images/criar-site.svg') }}" class="hidden sm:block mx-auto" width="400" alt="Logo Neohubble" />
        </div>
      </div>
    </div>
  </div>

  <div class="bg-black ">
    <div class="relative isolate efectGlass">
      <div id="servicos" class="text-center py-42" style="padding-bottom: 100px; padding-top:100px">
        <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
          Nossos <span style="color: #5815DD;">websites</span> desenvolvidos.
        </h2>
      </div>
      <div class="sm:flex sm:justify-content-center">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 style="color: #5815DD;" class="text-2xl font-bold tracking-tight">Institucional</h2>
  
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-lg text-gray-300">
                Websites de empresas, ONGs e instituições educacionais são plataformas online que apresentam informações sobre a organização, incluindo sua missão, visão e serviços oferecidos. Eles servem como um ponto de contato central para clientes, doadores ou alunos em potencial, fornecendo uma visão geral da entidade e suas atividades.
              </h3>
            </div>
          </div>
  
          <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8">
            <div class="group relative">
              <a target="_blank" target="_blank" href="images/neohubble-antiga.svg">
                <div class="shadow-lg border-2 border-purple-600 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                  <img class="h-full w-full object-cover object-center lg:h-full lg:w-full" src="{{ asset('images/neohubble-antiga.svg') }}" alt="site-criado" />
                </div>
              </a>
            </div>
  
            <div class="group relative">
              <a target="_blank" href="images/neohubble-nova.png">
                <div class="shadow-lg border-2 border-purple-600 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                  <img class="h-full w-full object-cover object-center lg:h-full lg:w-full" src="{{ asset('images/neohubble-nova.png') }}" alt="site-criado" />
                </div>
              </a>
            </div>
  
          </div>
        </div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 style="color: #5815DD;" class="text-2xl font-bold tracking-tight">E-Commerce</h2>
  
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-lg text-gray-300">
                O e-commerce, ou comércio eletrônico, é uma plataforma online na qual produtos ou serviços são comprados e vendidos. Funciona como uma vitrine virtual, onde os consumidores podem navegar, selecionar e comprar itens sem a necessidade de visitar uma loja física.
              </h3>
            </div>
          </div>
  
          <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8">
            <div class="group relative">
              <a target="_blank" target="_blank" href="images/andcoy.svg">
                <div class="shadow-lg border-2 border-purple-600 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                  <img class="h-full w-full object-cover object-center lg:h-full lg:w-full" src="{{ asset('images/andcoy.svg') }}" alt="site-criado" />
                </div>
              </a>
            </div>
  
            <div class="group relative">
              <a target="_blank" href="images/lamen.svg">
                <div class="shadow-lg border-2 border-purple-600 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                  <img class="h-full w-full object-cover object-center lg:h-full lg:w-full" src="{{ asset('images/lamen.svg') }}" alt="site-criado" />
                </div>
              </a>
            </div>
  
          </div>
        </div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 style="color: #5815DD;" class="text-2xl font-bold tracking-tight">Landing page</h2>
  
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-lg text-gray-300">
                Uma Landing Page é uma ferramenta essencial no arsenal de marketing digital. Projetada para receber tráfego de fontes específicas, como anúncios, ela oferece vantagens significativas. Sua simplicidade não apenas facilita a navegação, mas também é uma opção mais econômica em comparação com abordagens mais complexas.
              </h3>
            </div>
          </div>
  
          <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8">
            <div class="group relative">
              <a target="_blank" href="images/5tubos.svg">
                <div class="shadow-lg border-2 border-purple-600 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                  <img class="h-full w-full object-cover object-center lg:h-full lg:w-full" src="{{ asset('images/5tubos.svg') }}" alt="site-criado" />
                </div>
              </a>
            </div>
  
            <div class="group relative">
              <a target="_blank" href="images/amor-de-mae.svg">
                <div class="shadow-lg border-2 border-purple-600 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                  <img class="h-full w-full object-cover object-center lg:h-full lg:w-full" src="{{ asset('images/amor-de-mae.svg') }}" alt="site-criado" />
                </div>
              </a>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-black ">
    <div class="relative isolate efectGlass">
      <div class="text-center py-32" style="padding-top: 200px;">
        <h2 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">
          O que vem <span style="color: #5815DD;">incluso</span> por padrão.
        </h2>
      </div>
      <div class="mx-auto max-w-7xl px-6 lg:px-8 p-5 rounded-lg">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-4">
          <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <div style="display: flex; justify-content: center; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#5814dd" viewBox="0 0 256 256">
                <path d="M196.12,128c24.65-34.61,37.22-70.38,19.74-87.86S162.61,35.23,128,59.88C93.39,35.23,57.62,22.66,40.14,40.14S35.23,93.39,59.88,128c-24.65,34.61-37.22,70.38-19.74,87.86h0c5.63,5.63,13.15,8.14,21.91,8.14,18.48,0,42.48-11.17,66-27.88C151.47,212.83,175.47,224,194,224c8.76,0,16.29-2.52,21.91-8.14h0C233.34,198.38,220.77,162.61,196.12,128Zm8.43-76.55c7.64,7.64,2.48,32.4-18.52,63.28a300.33,300.33,0,0,0-21.19-23.57A300.33,300.33,0,0,0,141.27,70C172.15,49,196.91,43.8,204.55,51.45ZM176.29,128a289.14,289.14,0,0,1-22.76,25.53A289.14,289.14,0,0,1,128,176.29a289.14,289.14,0,0,1-25.53-22.76A289.14,289.14,0,0,1,79.71,128,298.62,298.62,0,0,1,128,79.71a289.14,289.14,0,0,1,25.53,22.76A289.14,289.14,0,0,1,176.29,128ZM51.45,51.45c2.2-2.21,5.83-3.35,10.62-3.35C73.89,48.1,92.76,55,114.72,70A304,304,0,0,0,91.16,91.16,300.33,300.33,0,0,0,70,114.73C49,83.85,43.81,59.09,51.45,51.45Zm0,153.1C43.81,196.91,49,172.15,70,141.27a300.33,300.33,0,0,0,21.19,23.57A304.18,304.18,0,0,0,114.73,186C83.85,207,59.09,212.2,51.45,204.55Zm153.1,0c-7.64,7.65-32.4,2.48-63.28-18.52a304.18,304.18,0,0,0,23.57-21.19A300.33,300.33,0,0,0,186,141.27C207,172.15,212.19,196.91,204.55,204.55ZM140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128Z"></path>
              </svg>
            </div>
            <dd class="text-3xl font-semibold tracking-tight text-gray-300 sm:text-3xl">SEO</dd>
            <dt class="text-base leading-7 text-gray-600 certificado-verde"><strong>Site otimizado para buscas.</strong></dt>
          </div>
          <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <div style="display: flex; justify-content: center; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#5814dd" viewBox="0 0 256 256">
                <path d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"></path>
              </svg>
            </div>
            <dd class="text-3xl font-semibold tracking-tight text-gray-300 sm:text-3xl">Site seguro</dd>
            <dt class="text-base leading-7 certificado-verde"><strong>Certificado SSL incluso.</strong></dt>
          </div>
          <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <div style="display: flex; justify-content: center; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#5814dd" viewBox="0 0 256 256">
                <path d="M224,72H208V64a24,24,0,0,0-24-24H40A24,24,0,0,0,16,64v96a24,24,0,0,0,24,24H152v8a24,24,0,0,0,24,24h48a24,24,0,0,0,24-24V96A24,24,0,0,0,224,72ZM40,168a8,8,0,0,1-8-8V64a8,8,0,0,1,8-8H184a8,8,0,0,1,8,8v8H176a24,24,0,0,0-24,24v72Zm192,24a8,8,0,0,1-8,8H176a8,8,0,0,1-8-8V96a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm-96,16a8,8,0,0,1-8,8H88a8,8,0,0,1,0-16h40A8,8,0,0,1,136,208Zm80-96a8,8,0,0,1-8,8H192a8,8,0,0,1,0-16h16A8,8,0,0,1,216,112Z"></path>
              </svg>
            </div>
            <dd class="text-3xl font-semibold tracking-tight text-gray-300 sm:text-3xl">Responsivo</dd>
            <dt class="text-base leading-7 text-gray-600 certificado-verde"><strong>Responsivo em todos aparelhos.</strong></dt>
          </div>
          <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <div style="display: flex; justify-content: center; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#5814dd" viewBox="0 0 256 256">
                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,16a88,88,0,0,1,73.72,40H128a48.08,48.08,0,0,0-45.6,33l-23.08-40A87.89,87.89,0,0,1,128,40Zm32,88a32,32,0,1,1-32-32A32,32,0,0,1,160,128ZM40,128a87.44,87.44,0,0,1,9.56-39.86L86.43,152c.06.1.13.19.19.28A48,48,0,0,0,137.82,175l-23.1,40A88.14,88.14,0,0,1,40,128Zm92.69,87.87L169.57,152c.08-.14.14-.28.22-.42a47.88,47.88,0,0,0-6-55.58H210a88,88,0,0,1-77.29,119.87Z"></path>
              </svg>
            </div>
            <dd class="text-3xl font-semibold tracking-tight text-gray-300 sm:text-3xl">Google Tools</dd>
            <dt class="text-base leading-7 text-gray-600 certificado-verde"><strong>Integração ao Google Analytics.</strong></dt>
          </div>
          <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <div style="display: flex; justify-content: center; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#5814dd" viewBox="0 0 256 256">
                <path d="M201.89,54.66A103.43,103.43,0,0,0,128.79,24H128A104,104,0,0,0,24,128v56a24,24,0,0,0,24,24H64a24,24,0,0,0,24-24V144a24,24,0,0,0-24-24H40.36A88.12,88.12,0,0,1,190.54,65.93,87.39,87.39,0,0,1,215.65,120H192a24,24,0,0,0-24,24v40a24,24,0,0,0,24,24h24a24,24,0,0,1-24,24H136a8,8,0,0,0,0,16h56a40,40,0,0,0,40-40V128A103.41,103.41,0,0,0,201.89,54.66ZM64,136a8,8,0,0,1,8,8v40a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V136Zm128,56a8,8,0,0,1-8-8V144a8,8,0,0,1,8-8h24v56Z"></path>
              </svg>
            </div>
            <dd class="text-3xl font-semibold tracking-tight text-gray-300 sm:text-3xl">Suporte</dd>
            <dt class="text-base leading-7 text-gray-600 certificado-verde"><strong>Gratis 1 mes de suporte.</strong></dt>
          </div>
          <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <div style="display: flex; justify-content: center; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#5814dd" viewBox="0 0 256 256">
                <path d="M48,64a8,8,0,0,1,8-8H72V40a8,8,0,0,1,16,0V56h16a8,8,0,0,1,0,16H88V88a8,8,0,0,1-16,0V72H56A8,8,0,0,1,48,64ZM184,192h-8v-8a8,8,0,0,0-16,0v8h-8a8,8,0,0,0,0,16h8v8a8,8,0,0,0,16,0v-8h8a8,8,0,0,0,0-16Zm56-48H224V128a8,8,0,0,0-16,0v16H192a8,8,0,0,0,0,16h16v16a8,8,0,0,0,16,0V160h16a8,8,0,0,0,0-16ZM219.31,80,80,219.31a16,16,0,0,1-22.62,0L36.68,198.63a16,16,0,0,1,0-22.63L176,36.69a16,16,0,0,1,22.63,0l20.68,20.68A16,16,0,0,1,219.31,80Zm-54.63,32L144,91.31l-96,96L68.68,208ZM208,68.69,187.31,48l-32,32L176,100.69Z"></path>
              </svg>
            </div>
            <dd class="text-3xl font-semibold tracking-tight text-gray-300 sm:text-3xl">Personalização</dd>
            <dt class="text-base leading-7 text-gray-600 certificado-verde"><strong>Personalização unica feita sob medida. </strong></dt>
          </div>
          <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <div style="display: flex; justify-content: center; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#5814dd" viewBox="0 0 256 256">
                <path d="M152,224a8,8,0,0,1-8,8H112a8,8,0,0,1,0-16h32A8,8,0,0,1,152,224ZM128,112a12,12,0,1,0-12-12A12,12,0,0,0,128,112Zm95.62,43.83-12.36,55.63a16,16,0,0,1-25.51,9.11L158.51,200h-61L70.25,220.57a16,16,0,0,1-25.51-9.11L32.38,155.83a16.09,16.09,0,0,1,3.32-13.71l28.56-34.26a123.07,123.07,0,0,1,8.57-36.67c12.9-32.34,36-52.63,45.37-59.85a16,16,0,0,1,19.6,0c9.34,7.22,32.47,27.51,45.37,59.85a123.07,123.07,0,0,1,8.57,36.67l28.56,34.26A16.09,16.09,0,0,1,223.62,155.83ZM99.43,184h57.14c21.12-37.54,25.07-73.48,11.74-106.88C156.55,47.64,134.49,29,128,24c-6.51,5-28.57,23.64-40.33,53.12C74.36,110.52,78.31,146.46,99.43,184Zm-15,5.85Q68.28,160.5,64.83,132.16L48,152.36,60.36,208l.18-.13ZM208,152.36l-16.83-20.2q-3.42,28.28-19.56,57.69l23.85,18,.18.13Z"></path>
              </svg>
            </div>
            <dd class="text-3xl font-semibold tracking-tight text-gray-300 sm:text-3xl">Tecnologia Avançada</dd>
            <dt class="text-base leading-7 text-gray-600 certificado-verde"><strong>Utilizamos as melhores tecnologias.</strong></dt>
          </div>
          <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <div style="display: flex; justify-content: center; align-items: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#5814dd" viewBox="0 0 256 256">
                <path d="M216,40H40A16,16,0,0,0,24,56V216a8,8,0,0,0,11.58,7.15L64,208.94l28.42,14.21a8,8,0,0,0,7.16,0L128,208.94l28.42,14.21a8,8,0,0,0,7.16,0L192,208.94l28.42,14.21A8,8,0,0,0,232,216V56A16,16,0,0,0,216,40Zm0,163.06-20.42-10.22a8,8,0,0,0-7.16,0L160,207.06l-28.42-14.22a8,8,0,0,0-7.16,0L96,207.06,67.58,192.84a8,8,0,0,0-7.16,0L40,203.06V56H216ZM136,112a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H144A8,8,0,0,1,136,112Zm0,32a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H144A8,8,0,0,1,136,144ZM64,168h48a8,8,0,0,0,8-8V96a8,8,0,0,0-8-8H64a8,8,0,0,0-8,8v64A8,8,0,0,0,64,168Zm8-64h32v48H72Z"></path>
              </svg>
            </div>
            <dd class="text-3xl font-semibold tracking-tight text-gray-300 sm:text-3xl">Portal de Notícia</dd>
            <dt class="text-base leading-7 text-gray-600 certificado-verde"><strong>Todos os dias uma nova noticia/ dica.</strong></dt>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <div id="ComoCriarSite" class="bg-black ">
    <div class="relative isolate px-6 lg:px-8 py-52 efectGlass">
      <div class="relative isolate overflow-hidden px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">

        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
          <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
              <div class="lg:max-w-lg">
                <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-200 text-center">Como <span style="color: #5815DD;">criar</span> meu site?</h2>
                <br />
                <div>
                  <p class="mt-6 text-base font-semibold leading-7 text-indigo-600">- Primeiro passo, briefing.</p>
                  <p class="text-lg leading-8 text-gray-400">É fundamental entendermos sua visão para o site. Por isso, solicitamos que responda algumas perguntas em <a style="color: #5815DD; text-decoration: underline; cursor: pointer;" href="/simulator">Solicitar Orçamento</a>. Dessa forma, nossa equipe poderá entrar em contato e avançarmos juntos para os próximos passos.</p>
                </div>
                <div>
                  <p class="mt-6 text-base font-semibold leading-7 text-indigo-600">- Segundo passo, desenvolvimento.</p>
                  <p class="text-lg leading-8 text-gray-400">
                    Após analisar os dados e assinar o contrato, estamos prontos para começar o processo de desenvolvimento. Trabalhamos com <strong class="font-semibold text-gray-300">metodologia ágil</strong>, garantindo que você acompanhe cada etapa (Step) do desenvolvimento em tempo real.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
            <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="{{ asset('images/criar-um-site.jpeg') }}" alt="Orçamento de site" />
          </div>
          <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
              <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                <ul role="list" class="mt-8 space-y-8 text-gray-600">
                  <li class="flex gap-x-3">
                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#5814dd" viewBox="0 0 256 256">
                      <rect x="24" y="40" width="208" height="160" rx="24"></rect>
                      <path d="M160,216H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Z"></path>
                    </svg>
                    <span class="text-gray-400"><strong class="font-semibold text-gray-200">Step Front-end</strong> No front-end, nós cuidamos de como o site é visualizado e usado pelos visitantes. Trabalhamos na parte que você vê e interage quando acessa um site, incluindo o layout, design, botões e navegação.</span>
                  </li>
                  <li class="flex gap-x-3">
                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#5814dd" viewBox="0 0 256 256">
                      <path d="M216,130.16q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.6,107.6,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.29,107.29,0,0,0-26.25-10.86,8,8,0,0,0-7.06,1.48L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.6,107.6,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06ZM128,168a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z"></path>
                    </svg>
                    <span class="text-gray-400"><strong class="font-semibold text-gray-200">Step Back-end</strong>
                      No back-end, cuidamos das funcionalidades que acontecem por trás das cortinas de um site. Isso inclui gerenciar dados, processar informações e garantir que todas as partes do site estejam funcionando corretamente. Enquanto o front-end lida com o que os usuários veem e interagem, o back-end é responsável por tornar tudo isso possível.</span>
                  </li>
                  <li class="flex gap-x-3">
                    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#5814dd" viewBox="0 0 256 256">
                      <path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM77.66,173.66a8,8,0,0,1-11.32-11.32L100.69,128,66.34,93.66A8,8,0,0,1,77.66,82.34l40,40a8,8,0,0,1,0,11.32ZM192,176H128a8,8,0,0,1,0-16h64a8,8,0,0,1,0,16Z"></path>
                    </svg>
                    <span class="text-gray-400"><strong class="font-semibold text-gray-200">Step Deploy</strong> Fazer o deploy de um site é como colocar uma obra de arte em exibição. Você cria o seu trabalho (o site), e então o coloca em um lugar onde as pessoas possam vê-lo (na internet). Assim, quando alguém quiser ver sua obra, basta acessar o local (meusite.com) onde você a colocou. É como abrir uma galeria para que todos possam apreciar o que você criou, só que online!</span>
                  </li>
                </ul>
                <p class="mt-8 text-base font-semibold leading-7 text-indigo-600">- Terceiro passo, conclusão.</p>
                <p class="text-gray-400">Após a conclusão das três etapas, <strong>Front-end, Back-end e Deploy</strong> seu site estará pronto e acessível para todos, bastando acessar seu domínio, por exemplo, meusite.com.br.</p>
                <h3 class="mt-16 text-2xl font-bold tracking-tight text-gray-200">Depois como <span style="color: #5815DD;">utilizar</span> meu site?</h3>
                <p class="text-gray-400 mt-6">Após a entrega do site, nossa equipe especializada realizará um treinamento completo para você e seus colaboradores aprenderem a utilizar todas as funcionalidades do seu novo site. Além disso, oferecemos um mês de suporte gratuito para garantir que você tenha profissionais cuidando de tudo e possa desfrutar do conforto de ter seu site em boas mãos.</p>
                <p class="text-gray-400 mt-6">Não perca tempo, comece agora solicitando seu orçamento! <a style="color: #5815DD; text-decoration: underline; cursor: pointer;" href="/simulator">Solicitar Orçamento</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full z-50">
    <div class="relative isolate">
      @include('components.tabBottom.tabBottom')
    </div>
  </div>

</x-app-layout>