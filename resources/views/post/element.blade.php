
@include('partials.flash_messages.flashMessages')

<div class="form-group"><label class="col-lg-2 control-label">Title<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{ isset($post->title) ? $post->title:'' }}" required="required" name="title" type="text" class="form-control">
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label">Body<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{ isset($post->body) ? $post->body:'' }}" id="slug-source" required="required" name="body" type="text" class="form-control">
    </div>
</div>
