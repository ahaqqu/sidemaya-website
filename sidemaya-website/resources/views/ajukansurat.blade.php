<x-app-layout>
@if (\Session::has('success'))
        <div class="pt-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="section">
                            {!! \Session::get('success') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (\Session::has('error'))
        <div class="pt-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="section" style="color:red">
                            {!! \Session::get('error') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
	<!--Container-->

    <title>Ajukan Surat</title>
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <div class="category-filter">
            <div class="jumbotron text-center">
            <h1 class="text-black" style="font-size: 30px;"><strong>Ajukan Surat</strong></h1>
</div>

            <br><br>
        <div class="text-black">
            <h2><strong>Mengajukan Permohonan Surat Baru</strong></h2>
</div>
    <!-- Formulir Upload -->

    <form action="{{route('ajukansurat.upload')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-container">
        <h2>Jenis Surat</h2><br>
        <select name="category" required>
            <option value="" disabled selected>Pilih Jenis Surat</option>
            <option value="Surat Keretangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
            <option value="Surat Keretangan Domisili">Surat Keterangan Domisili</option>
            <option value="Formulir Permohonan KTP">Formulir Permohonan KTP</option>
            <option value="Formulir Kartu Keluarga">Formulir Kartu Keluarga</option>
        </select>
    </div><br>
<div class="form-container"><br>
            <h2><strong>Upload Dokumen</strong></h2>

            <div class="form-group">
            <input type="file" name="filename" required class="form-control custom-file-input">
        </div><br>
        <div class="form-group"><br>
        <!--<x-primary-button>
                                         {{ __('Lihat') }}
                                     </x-primary-button> -->
        <x-primary-button type="submit">
                                         {{ __('Ajukan Surat') }}
                                     </x-primary-button>

</div>
<div><br><br>
</div>
</form>
<span style="color: red;">*Mohon untuk segera mengambil/mengunduh surat yang sudah selesai agar dapat mengajukan surat lain.</span><br><br>

    <style>
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .form-group {
        margin-bottom: 10px;
    }
</style>
</x-app-layout>