<section>
    csrf_token関数を使ったtoken発行
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</section>

<section>
    Ajaxのリクエストにもcsrf_tokenを付与する場合
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</section>
