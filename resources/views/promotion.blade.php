@component('sclayout')
    @slot('header')
        @component('testheader')
            {{$user}}
        @endcomponent
    @endslot

    @component('testbody')
        Test Promotion
    @endcomponent

    @slot('footer')
        @component('testfooter')
            All hail the emperor!
        @endcomponent
    @endslot
@endcomponent
