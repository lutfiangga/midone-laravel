@extends('../layouts/' . $layout)

@section('subhead')
    <title>Icon - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">SVG Loaders</h2>
    </div>
    <!-- BEGIN: Icon List -->
    <div class="grid grid-cols-12 px-5 py-8 mt-5 intro-y box gap-y-6 sm:gap-6">
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="audio"
            />
            <div class="mt-2 text-xs text-center">audio</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="ball-triangle"
            />
            <div class="mt-2 text-xs text-center">ball-triangle</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="bars"
            />
            <div class="mt-2 text-xs text-center">bars</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="circles"
            />
            <div class="mt-2 text-xs text-center">circles</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="grid"
            />
            <div class="mt-2 text-xs text-center">grid</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="hearts"
            />
            <div class="mt-2 text-xs text-center">hearts</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="oval"
            />
            <div class="mt-2 text-xs text-center">oval</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="puff"
            />
            <div class="mt-2 text-xs text-center">puff</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="rings"
            />
            <div class="mt-2 text-xs text-center">rings</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="spinning-circles"
            />
            <div class="mt-2 text-xs text-center">spinning-circles</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="tail-spin"
            />
            <div class="mt-2 text-xs text-center">tail-spin</div>
        </div>
        <div class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="w-8 h-8"
                icon="three-dots"
            />
            <div class="mt-2 text-xs text-center">three-dots</div>
        </div>
    </div>
    <!-- END: Icon List -->
@endsection
