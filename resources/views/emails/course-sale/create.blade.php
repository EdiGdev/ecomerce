@component('mail::message')

@component('mail::panel')
{{ $courseSale->number }}
@endcomponent

@component('mail::table')
| {{ __('Curso') }} | {{ __('Image') }}    | {{ __('Price') }} |
| ------------------- |:--------------------:| -----------------:|
@foreach ($courseSale->courses as $course)
| <a href="{{ route('elearning.course.lesson', $course) }}" target="_blank" rel="noopener noreferrer">{{ $course->title }}</a> | <img src="{{ asset('').$course->imagePreview() }}" width="100" alt=""> | ${{ number_format($course->pivot->price, 2) }} |
@endforeach
@endcomponent

<p>{{ __('Subtotal') }}: {{ $courseSale->subtotalToString() }}</p>
<p>{{ __('Total') }}: {{ $courseSale->totalToString() }}</p>

{{ config('app.name') }}
@endcomponent
