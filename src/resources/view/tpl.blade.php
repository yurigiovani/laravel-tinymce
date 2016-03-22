<?php
$cdn = config('tinymce.cdn');
$baseUrl = config('tinymce.baseUrl');
?>
<script type="text/javascript" src="{{ $cdn() }}"></script>
<script type="text/javascript">
    @if ($baseUrl != null)
            tinymce.baseURL = "{{ $baseUrl() }}";
    @endif

    tinymce.init(
            {!! json_encode(config('tinymce.params')) !!}
    );

</script>
