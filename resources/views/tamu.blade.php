<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tamu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="hero min-h-screen bg-base-200">
                        <div class="hero-content flex-col lg:flex-row">
                          <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" class="max-w-sm rounded-lg shadow-2xl" />
                          <div>
                            <h1 class="text-5xl font-bold">Box Office News!</h1>
                            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                            <button class="btn btn-primary">Get Started</button>
                          </div>
                        </div>
                      </div>

                    <button class="btn btn-primary">Primary</button>

                    <button data-toggle-theme="cmyk,coffee" data-act-class="ACTIVECLASS">test</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
