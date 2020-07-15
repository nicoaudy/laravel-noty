<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

@if(session()->has('noty.messages'))
    <script type="text/javascript">
        (function () {
			iziToast.settings({
				theme: '{{ (!empty(session('noty.config.theme')) ? session('noty.config.theme') : config('laravel-noty.theme'))  }}',
				position: '{{ (!empty(session('noty.config.position')) ? session('noty.config.position') : config('laravel-noty.position'))  }}',
				timeout: '{{ (!empty(session('noty.config.timeout')) ? session('noty.config.timeout') : config('laravel-noty.timeout'))  }}',
				layout: '{{ (!empty(session('noty.config.size')) ? session('noty.config.size') : config('laravel-noty.size'))  }}',
				closeOnClick: '{{ (!empty(session('noty.config.closeOnClick')) ? session('noty.config.closeOnClick') : config('laravel-noty.closeOnClick'))  }}',
				animateInside: true,
				drag: true,
				pauseOnHover: true,
				resetOnHover: false,
				progressBar: true,
			});

            @foreach (session('noty.messages') as $item)
				iziToast.show({
					message: '{{ $item['text'] }}',
					color: '{{ $item['type'] }}',
				});
            @endforeach
        })();
    </script>

	{{ session()->forget('noty.messages') }}
@endif
