<link rel="stylesheet" href="{{ asset('vendor/noty/toast.min.css') }}">
<script src="{{ asset('vendor/noty/toast.min.js') }}"></script>

@if(session()->has('noty.messages'))
    <script type="text/javascript">
        (function () {
			iziToast.settings({
				theme: '{{ (!empty(session('noty.config.theme')) ? session('noty.config.theme') : config('laravel-noty.theme'))  }}',
				titleColor: '{{ (!empty(session('noty.config.titleColor')) ? session('noty.config.titleColor') : config('laravel-noty.titleColor'))  }}',
				titleSize: '{{ (!empty(session('noty.config.titleSize')) ? session('noty.config.titleSize') : config('laravel-noty.titleSize'))  }}',
				titleLineHeight: '{{ (!empty(session('noty.config.titleLineHeight')) ? session('noty.config.titleLineHeight') : config('laravel-noty.titleLineHeight'))  }}',
				messageColor: '{{ (!empty(session('noty.config.messageColor')) ? session('noty.config.messageColor') : config('laravel-noty.messageColor'))  }}',
				messageSize: '{{ (!empty(session('noty.config.messageSize')) ? session('noty.config.messageSize') : config('laravel-noty.messageSize'))  }}',
				messageLineHeight: '{{ (!empty(session('noty.config.messageLineHeight')) ? session('noty.config.messageLineHeight') : config('laravel-noty.messageLineHeight'))  }}',
				position: '{{ (!empty(session('noty.config.position')) ? session('noty.config.position') : config('laravel-noty.position'))  }}',
				timeout: '{{ (!empty(session('noty.config.timeout')) ? session('noty.config.timeout') : config('laravel-noty.timeout'))  }}',
				layout: '{{ (!empty(session('noty.config.layout')) ? session('noty.config.layout') : config('laravel-noty.layout'))  }}',
				close: '{{ (!empty(session('noty.config.close')) ? session('noty.config.close') : config('laravel-noty.close'))  }}',
				closeOnClick: '{{ (!empty(session('noty.config.closeOnClick')) ? session('noty.config.closeOnClick') : config('laravel-noty.closeOnClick'))  }}',
				closeOnEscape: '{{ (!empty(session('noty.config.closeOnEscape')) ? session('noty.config.closeOnEscape') : config('laravel-noty.closeOnEscape'))  }}',
				animateInside: '{{ (!empty(session('noty.config.animateInside')) ? session('noty.config.animateInside') : config('laravel-noty.animateInside'))  }}',
				drag: '{{ (!empty(session('noty.config.drag')) ? session('noty.config.drag') : config('laravel-noty.drag'))  }}',
				pauseOnHover: '{{ (!empty(session('noty.config.pauseOnHover')) ? session('noty.config.pauseOnHover') : config('laravel-noty.pauseOnHover'))  }}',
				resetOnHover: '{{ (!empty(session('noty.config.resetOnHover')) ? session('noty.config.resetOnHover') : config('laravel-noty.resetOnHover'))  }}',
				progressBar: '{{ (!empty(session('noty.config.progressBar')) ? session('noty.config.progressBar') : config('laravel-noty.progressBar'))  }}',
				progressBarColor: '{{ (!empty(session('noty.config.progressBarColor')) ? session('noty.config.progressBarColor') : config('laravel-noty.progressBarColor'))  }}',
				progressBarEasing: '{{ (!empty(session('noty.config.progressBarEasing')) ? session('noty.config.progressBarEasing') : config('laravel-noty.progressBarEasing'))  }}',
				balloon: '{{ (!empty(session('noty.config.balloon')) ? session('noty.config.balloon') : config('laravel-noty.balloon'))  }}',
				transitionIn: '{{ (!empty(session('noty.config.transitionIn')) ? session('noty.config.transitionIn') : config('laravel-noty.transitionIn'))  }}',
				transitionOut: '{{ (!empty(session('noty.config.transitionOut')) ? session('noty.config.transitionOut') : config('laravel-noty.transitionOut'))  }}',
				transitionInMobile: '{{ (!empty(session('noty.config.transitionInMobile')) ? session('noty.config.transitionInMobile') : config('laravel-noty.transitionInMobile'))  }}',
				transitionOutMobile: '{{ (!empty(session('noty.config.transitionOutMobile')) ? session('noty.config.transitionOutMobile') : config('laravel-noty.transitionOutMobile'))  }}',
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
