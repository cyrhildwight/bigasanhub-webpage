@extends('layouts.app')

@section('content')
        <main>
            <section class="py-[70px] bg-white bg-gradient-to-b from-green-200/60 to-green-300/30">
                <div class="mx-auto w-[92%] max-w-[1200px]">
                    <h1 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">What we offer</h1>
                    <p class="text-center m-0 mb-9 text-gray-700 max-w-[70ch] mx-auto">Popular rice varieties for every kitchen and business need. Wholesale and retail options available.</p>

                    <div class="grid gap-[22px] sm:grid-cols-2 lg:grid-cols-4">
                        @php $items = [
                            ['img' => 'hasmin.png', 'name' => 'Hapinoy Hasmine'],
                            ['img' => 'dinorado.png', 'name' => 'Hapinoy Dinorado'],
                            ['img' => 'ivory.png', 'name' => 'Hapinoy  Ivory'],
                            ['img' => 'prima.png', 'name' => 'Hapinoy Prima Hasmin'],
                            ['img' => 'hasmin.png', 'name' => 'Hapinoy Hasmine'],
                            ['img' => 'dinorado.png', 'name' => 'Hapinoy Dinorado'],
                            ['img' => 'ivory.png', 'name' => 'Hapinoy  Ivory'],
                            ['img' => 'prima.png', 'name' => 'Hapinoy Prima Hasmin'],
                            ['img' => 'hasmin.png', 'name' => 'Hapinoy Hasmine'],
                            ['img' => 'dinorado.png', 'name' => 'Hapinoy Dinorado'],
                            ['img' => 'ivory.png', 'name' => 'Hapinoy  Ivory'],
                            ['img' => 'prima.png', 'name' => 'Hapinoy Prima Hasmin'],
                        ]; @endphp

                        @foreach ($items as $item)
                            <article class="group relative bg-white rounded-[14px] overflow-hidden border border-[#e7efe8] shadow-md transition-all duration-300 ease-out hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 cursor-pointer">
                                <img class="w-full h-56 object-contain p-3 transition-transform duration-300 ease-out group-hover:scale-105" src="/images/{{ $item['img'] }}" alt="{{ $item['name'] }}"/>
                                <div class="px-4 pt-3 pb-4 text-center">
                                    <div class="mb-2 flex justify-center">
                                        <span class="inline-flex items-center gap-2 rounded-lg border-2 border-green-600 bg-white px-3 py-1">
                                            <img src="/images/logo.v2.png" alt="Bigasan Hub logo" class="h-5 w-auto" />
                                        </span>
                                    </div>
                                    <h3 class="m-0 mb-1 text-lg text-[#2d3d2a]">{{ $item['name'] }}</h3>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>
@endsection


