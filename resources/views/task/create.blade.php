<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="/tugas/store" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md max-w-xl mx-auto">
                @csrf

                <div class="mb-4">
                    <label for="judul" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Judul</label>
                    <input type="text" name="judul" id="judul"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500"
                        minlength="10" required
                        oninput="validateDeskripsi()"></textarea>
                    <p id="deskripsi-warning" class="mt-2 text-sm text-red-600" style="display:none;">
                        Deskripsi harus minimal 10 huruf.
                    </p>
                </div>
                <script>
                    function validateDeskripsi() {
                        const textarea = document.getElementById('deskripsi');
                        const warning = document.getElementById('deskripsi-warning');
                        if (textarea.value.length > 0 && textarea.value.length < 10) {
                            warning.style.display = 'block';
                        } else {
                            warning.style.display = 'none';
                        }
                    }
                </script>

                <div class="text-right">
                    <button type="submit"
                        class="inline-block px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow">
                        Kirim
                    </button>
                </div>
            </form>
        </div> 
    </div>
</x-app-layout>