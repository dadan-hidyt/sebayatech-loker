<x-layout.guest-layout title="Rumah">
    <!-- hiro -->
    <x-front.home-hiro />
    <!-- /hiro -->
    <!-- cta -->
    <div class="mb-2 border border-t-1 ">
        <div class="py-24 px-6 sm:px-6 sm:py-22 lg:px-3">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-slate-50">Boost your
                    productivity.<br>Start using our app today.</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600 dark:text-slate-400">We provide various
                    ready-to-use tools to facilitate your business.</p>
                <div class="mt-4 flex items-center justify-center gap-x-6">
                    <a href="" class="btn btn-outline btn-primary">Lihat Produk</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /cta -->

    <div class="w-11/12 m-auto">

        <div class="space-y-16">

            <div data-orientation="horizontal" role="none"
                class="shrink-0 bg-border h-[1px] w-full bg-gradient-to-r from-border via-background to-background">
            </div>
            <div>
                <div class="mb-6">
                    <h2 class="text-lg font-semibold leading-6 tracking-tight">Artikel terbaru</h2>
                    <p class="text-sm text-muted-foreground">Artikel terbaru yang telah kami terbitkan.</p>
                </div>
                <div class="grid gap-x-4 gap-y-16 sm:grid-cols-2 sm:gap-x-12 sm:gap-y-24 lg:grid-cols-3">
                   
                    @foreach (range(0,10) as $item)
                    <div class="shadow-sm rounded-sm">
                        <a href="https://parsinta.com/articles/laravel-livewire-3-4gkst">
                            <div style="position:relative;width:100%;padding-bottom:56.25%"
                                data-radix-aspect-ratio-wrapper="">
                                <div class="flex items-center justify-center overflow-hidden  bg-accent font-mono text-sm font-medium tracking-tighter text-accent-foreground transition hover:opacity-70 dark:shadow-xl"
                                    style="position:absolute;top:0;right:0;bottom:0;left:0">
                                    <div class="LazyLoad"><img src="https://velixs.com/storage/blogs/yNNnEEEbJFQE4eVlYt4STFSxWJuGVVyAsB8ABEH7.jpg" alt=""></div>
                                </div>
                            </div>
                        </a>
                        <div class="mt-4  p-3 px-4 space-y-2 lg:space-y-4">
                            <div class="flex gap-x-2"><a href="https://parsinta.com/articles/tags/livewire">
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs text-white font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                        Livewire</div>
                                </a></div><a class="block font-medium"
                                href="https://parsinta.com/articles/laravel-livewire-3-4gkst">
                                <h2>Tutorial Membbuat login dengan php</h2>
                            </a>
                            <div class="flex flex-col gap-y-2 text-sm text-muted-foreground">
                                <p class="line-clamp-2 leading-relaxed text-muted-foreground">Livewire adalah paket
                                    Laravel, jadi Anda harus memiliki dan menjalankan aplikasi Laravel sebelum Anda
                                    dapat menginstal dan menggunakan Livewire.</p>
                                <p>Diterbitkan pada
                                    21 Juli 2023 
                                  <div class="author flex items-center">
                                    <div class="flex-shirnk-0">
                                        <img width="30" class="rounded-lg" src="https://velixs.com/storage/avatars/ilsya-1690447663.png"
                                        alt="">
                                    </div>
                                    <div class="ml-2">
                                        <a class="font-semibold capitalize text-foreground hover:underline"
                                        href="https://parsinta.com/@dadanhidayat">Dadan Hidayat</a>
                                    </div>
                                  </div>
                                 
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
                <div class="mt-6 flex justify-end"><a
                        class="inline-flex items-center gap-x-1 justify-center text-white rounded-full text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background bg-primary text-primary-foreground disabled:hover:bg-primary/80 h-10 py-2 px-4 group relative"
                        href="https://parsinta.com/articles"><span class="mr-6">Tampilkan lebih banyak</span> <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="absolute right-0 mr-4 !h-4 shrink-0 !stroke-2 duration-300 group-hover:mr-3">
                            <path d="M5 12l14 0"></path>
                            <path d="M13 18l6 -6"></path>
                            <path d="M13 6l6 6"></path>
                        </svg></a></div>
            </div>
        </div>

    </div>

</x-layout.guest-layout>
