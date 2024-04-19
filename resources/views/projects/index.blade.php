@foreach( $projects as $project )
        <div
            class="max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                {{$project->title}}
            </h5>
        </div>
    @endforeach 

    <x-master-layout>
      <!-- Hier komt jouw indexpagina content -->

    <!-- JavaScript sectie -->
    @section('scripts')
        <script>
            // Voorbeeld van een JavaScript-functie die een alert toont
            function showAlert() {
                alert('Dit is een voorbeeld van een werkende JavaScript-functie!');
            }
        </script>
    @endsection
</x-master-layout>
