<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

@if(session()->has('noty.messages'))
    <script type="text/javascript">
        (function () {
			iziToast.settings({
				theme: '{{ (!empty(session('noty.config.theme')) ? session('noty.config.theme') : config('laravel-noty.theme'))  }}',
				titleColor: '{{ (!empty(session('noty.config.titleColor')) ? session('noty.config.titleColor') : config('laravel-noty.titleColor'))  }}',
				titleSize: '{{ (!empty(session('noty.config.titleSize')) ? session('noty.config.titleSize') : config('laravel-noty.titleSize'))  }}',
				titleLineHeight: '{{ (!empty(session('noty.config.titleLineHeight')) ? session('noty.config.titleLineHeight') : config('laravel-noty.titleLineHeight'))  }}',
				position: '{{ (!empty(session('noty.config.position')) ? session('noty.config.position') : config('laravel-noty.position'))  }}',
				timeout: '{{ (!empty(session('noty.config.timeout')) ? session('noty.config.timeout') : config('laravel-noty.timeout'))  }}',
				layout: '{{ (!empty(session('noty.config.layout')) ? session('noty.config.layout') : config('laravel-noty.layout'))  }}',
				closeOnClick: '{{ (!empty(session('noty.config.closeOnClick')) ? session('noty.config.closeOnClick') : config('laravel-noty.closeOnClick'))  }}',
				animateInside: '{{ (!empty(session('noty.config.animateInside')) ? session('noty.config.animateInside') : config('laravel-noty.animateInside'))  }}',
				drag: '{{ (!empty(session('noty.config.drag')) ? session('noty.config.drag') : config('laravel-noty.drag'))  }}',
				pauseOnHover: '{{ (!empty(session('noty.config.pauseOnHover')) ? session('noty.config.pauseOnHover') : config('laravel-noty.pauseOnHover'))  }}',
				resetOnHover: '{{ (!empty(session('noty.config.resetOnHover')) ? session('noty.config.resetOnHover') : config('laravel-noty.resetOnHover'))  }}',
				progressBar: '{{ (!empty(session('noty.config.progressBar')) ? session('noty.config.progressBar') : config('laravel-noty.progressBar'))  }}',
			});

            @foreach (session('noty.messages') as $item)
				iziToast.show({
					message: '{{ $item['text'] }}',
					color: '{{ $item['type'] }}',
					title: '{{ $item['title'] }}'
				});
            @endforeach
        })();
    </script>

	{{ session()->forget('noty.messages') }}
@endif
