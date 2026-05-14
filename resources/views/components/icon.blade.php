@props(['name'])
{{-- Outputs the raw inline SVG from config/site.php. Callers wrap it in
     their own element (commonly <span class="icon-inline">) just like the
     legacy siteIcon() helper did. --}}
{!! config('site.icons.'.$name, '') !!}
