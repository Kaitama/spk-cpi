<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="flex items-center space-x-2">
        <x-jet-application-logo class="lg:block h-12 w-auto hidden" />
        <div class="font-bold text-3xl lg:text-4xl">PT Atlas International Indonesia</div>
    </div>

    <div class="mt-8 text-2xl">
        Selamat datang di sistem informasi pemilihan karyawan terbaik!
    </div>

    <div class="mt-2 text-gray-500">
        Sistem ini dibuat menggunakan framework <a href="https://laravel.com">Laravel 10</a> dan menerapkan metode Composite Performance Index (CPI) dalam menentukan perankingan karyawan terbaik berdasarkan nilai tiap kriteria yang ada.
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-400">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('alternatif.index') }}">Data Alternatif</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Berupa daftar nama karyawan yang akan di nilai. Data alternatif bersifat dinamis dimana data yang telah tersimpan dapat diubah, ditambah, maupun dihapus.
            </div>

            <a href="{{ route('alternatif.index') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Lihat selengkapnya</div>

                    <div class="ml-1 text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-400">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('kriteria.index') }}">Data Kriteria</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Merupakan indikator penilaian tiap karyawan. Tiap kriteria diharuskan memiliki bobot penilaian (dalam bentuk bilangan pecahan). Data kriteria dapat ditambah, diubah, maupun di hapus selama total bobot tiap kriteria bernilai 1 (100%).
            </div>

            <a href="{{ route('kriteria.index') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Lihat selengkapnya</div>

                    <div class="ml-1 text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-400">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"/>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('penilaian.index') }}">Penilaian Alternatif</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Tiap alternatif yang tersimpan diberikan nilai berdasarkan sub-kriteria masing-masing. Nilai tersebut yang akan dihitung nantinya menggunakan metode Composite Performace Index (CPI).
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-400">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5"/>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('penilaian.proses') }}">Proses Perangkingan</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Proses perangkingan hanya dapat dilakukan jika semua data alternatif telah memiliki nilai untuk setiap kriterianya.
            </div>
        </div>
    </div>
</div>
