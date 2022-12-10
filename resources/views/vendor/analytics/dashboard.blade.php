@extends('layout.main')

@section('title' , 'Dashboard' )

@section('css')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="min-h-screen bg-gray-100 text-gray-500 flex flex-col">
        <div class="w-full">
            <div class="flex justify-end">
                @include('analytics::data.filter')
            </div>
            <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
                @each('analytics::stats.card', $stats, 'stat')
            </div>
            <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
                @include('analytics::data.pages-card')
                @include('analytics::data.sources-card')
                @include('analytics::data.users-card')
                @include('analytics::data.devices-card')
            </div>
        </div>
    </div>
@endsection

@section('javascript')

    <script>
        const filterButton = document.getElementById('filter-button');
        const filterDropdown = document.getElementById('filter-dropdown');

        filterButton.addEventListener('click', function (e) {
            e.preventDefault();

            filterDropdown.style.display = 'block';
        });

        document.addEventListener('click', function (e) {
            if (!filterButton.contains(e.target) && !filterDropdown.contains(e.target)) {
                filterDropdown.style.display = 'none';
            }
        });
    </script>
@endsection
