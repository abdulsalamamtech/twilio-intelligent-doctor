<!--

 * DEVELOPER : Abdulsalam Amtech
 * EMAIL: abdulsalamamtech@gmail.com

-->



{{-- Alertify Js --}}
<script>
    alertify.set('notifier','position', 'top-right');
</script>

{{-- For Success Messages --}}
@if (session('success'))
    {{session('success', 'successful!')}}
    <script> alertify.success( @json(session('success', 'Good!')) );</script>
@endif

{{-- For Error Messages --}}
@if (session('errors' || $errors))
    {{'something went wrong!'}}

    <script> alertify.error( @json(session('errors', 'There was an error!')) );</script>
@endif


<!-- Header -->
@include('frontend.partials.header')


<!-- Navigation -->
@include('frontend.partials.navbar')

<!-- Sidebar -->
@include('frontend.partials.sidebar')



@yield('content')



<!-- Footer -->
@include('frontend.partials.footer')
