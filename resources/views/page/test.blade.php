@foreach ($maps as $item)
<div class="mapouter">

    <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="{{ $item->map }}">
    </div>



    <style>
        .mapouter {
            position: relative;
            text-align: right;
            width: 400px;
            height: 400px;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 400px;
            height: 400px;
        }

        .gmap_iframe {
            width: 400px !important;
            height: 400px !important;
        }
    </style>
</div>
@endforeach