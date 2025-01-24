<x-app-layout>
    <div class="container border mx-auto my-5 bg-white rounded-xl p-4">
        <div class="flex items-center justify-between mb-4">
            <div class="flex flex-col">
                <h1 class="font-semibold text-2xl">Pilih Template</h1>
                <span class="text-slate-500 text-sm">Pilihlah template laporan atau proposal sesuai kebutuhan mu.</span>
            </div>
        </div>

        <div class="flex gap-4">
            <a href="{{ Route('proposal-pkm') }}" class="p-4 rounded-xl border flex flex-col items-center justify-center">
                <img src="{{ asset('assets/images/edit.gif') }}" class="w-24" alt="">
                <span class="text-slate-500 text-sm">Proposal</span>
                <h6 class="font-semibold text-xl text-slate-700">PKM</h6>
            </a>
            <a href="" class="p-4 rounded-xl border flex flex-col items-center justify-center">
                <img src="{{ asset('assets/images/edit.gif') }}" class="w-24" alt="">
                <span class="text-slate-500 text-sm">Proposal</span>
                <h6 class="font-semibold text-xl text-slate-700">Penelitian</h6>
            </a>
            <a href="" class="p-4 rounded-xl border flex flex-col items-center justify-center">
                <img src="{{ asset('assets/images/investigation.gif') }}" class="w-24" alt="">
                <span class="text-slate-500 text-sm">Laporan</span>
                <h6 class="font-semibold text-xl text-slate-700">PKM</h6>
            </a>
            <a href="" class="p-4 rounded-xl border flex flex-col items-center justify-center">
                <img src="{{ asset('assets/images/investigation.gif') }}" class="w-24" alt="">
                <span class="text-slate-500 text-sm">Laporan</span>
                <h6 class="font-semibold text-xl text-slate-700">Penelitian</h6>
            </a>
        </div>
    </div>
</x-app-layout>
