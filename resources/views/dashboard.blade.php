<!DOCTYPE html>
<html lang="en">

{{-- Web Header => Favicons, Libraries ,Assets --}}
@include('layout.webHeader')

<body>

    {{-- Loader --}}
    @include('components.loader')

    <div class="main-wrapper">

        {{-- Header --}}
        @include('components.header')

        {{-- Sidebar --}}
        @include('components.sidebar')

        {{--MainSection--}}
        <div class="page-wrapper">
            @include('master')
        </div>
    </div>


    {{--Scripts--}}
    @include('scripts.script')
</body>

</html>