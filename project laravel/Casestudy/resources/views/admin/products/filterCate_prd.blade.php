<div class="custom-control custom-checkbox">
    <input type="checkbox" {{($counter == 0 ? 'checked' : '')}}
        attr-name="{{$category->name}}"
        class="custom-control-input category_checkbox" id="{{$category->id}}">
    <label class="custom-control-label"
        for="{{$category->id}}">{{ucfirst($category->name)}}</label>
</div>
