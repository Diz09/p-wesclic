<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6">
                    <div class="bg-green-600 text-white px-5 py-3 rounded-md shadow-md">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="mb-6 flex justify-between items-center" style="display: flex; justify-content: flex-end;    ">
                        <a href="{{ route('task.create') }}"
                        class="button button-danger px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm shadow transition duration-200 ml-auto">
                            + Add Task
                        </a>
                    </div>

                    <div class="bg-gray-900 text-gray-200 shadow-md rounded-lg overflow-hidden">
                        @if($tasks->count())
                            <table class="table-auto whitespace-nowrap font-medium text-white" style="width: 100%">
                                <thead class="bg-gray-800 text-gray-400 uppercase text-xs">
                                    <tr>
                                        <th class="px-6 py-3 text-left">Title</th>
                                        <th class="px-6 py-3 text-left">Description</th>
                                        <th class="px-6 py-3 text-left">Created At</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-700">
                                    @foreach($tasks as $task)
                                        <tr class="hover:bg-gray-800 transition">
                                            <td class="px-6 py-4 text-sm">{{ $task->judul }}</td>
                                            <td class="px-6 py-4 text-sm">{{ $task->deskripsi }}</td>
                                            <td class="px-6 py-4 text-sm">{{ $task->created_at->format('d M Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="p-6 text-center text-gray-400">
                                Tidak ada tugas yang tersedia.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
