@include('decoy::shared.form._header', $__data)

<fieldset legend="{{ empty($item) ? 'New' : 'Edit' }}">
	{!! Former::text('title') !!}
	{!! Former::wysiwyg('body') !!}
	{!! Former::image('default') !!}
	{!! Former::image('listing') !!}
</fieldset>

<fieldset legend="Other">
{{-- {!! Former::radiolist('category')->from(App\Article::$categories)->inline() !!} --}}
{{--	{!! Former::select('category_id', 'Categories')->addOption(null)->fromQuery(App\Category::ordered()->get(),
'name') !!} --}}
	{!! Former::date('date')->value('now') !!}
{{--{!! Former::date('date_end') !!}--}}
{{--	{!! Former::text('url', 'URL')->blockHelp('An external link to the article.') !!}--}}
</fieldset>

<fieldset>
	{!! View::make('decoy::shared.form._display_module', $__data)->render() !!}
{{--	{!! Former::radiolist('status')->from(App\Article::$statuses) !!}--}}
	{!! Former::checkbox('featured')->checkboxes(['Yes' => ['name' => 'featured', 'value' => 1]])->push()->blockHelp('Featured articles will show up in the ticker on the home page.') !!}
</fieldset>

@include('decoy::shared.form._footer', $__data)