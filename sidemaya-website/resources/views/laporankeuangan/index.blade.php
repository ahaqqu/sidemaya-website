<x-app-layout>
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <div class="category-filter">
            <div class="jumbotron text-center">
                <h1 class="text-black" style="font-size: 30px;"><strong>Laporan Keuangan</strong></h1>
            </div>
            <select id="categoryFilter" class="form-control">
                <option value="">Semua</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Batal">Batal</option>
            </select>
            </div>
		</div>
		<!--/Card-->
	</div>
	<!--/container-->
</x-app-layout>
