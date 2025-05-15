<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;700&display=swap&_v=20230206141621" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Главная</title>
</head>
<body>
<div class="wrapper" id="app">
    @{{selectState}}
    <div class="content">

        <section class="formSection">
            <div class="c-container">
                <div class="formSection__wrap">
                    <form action="{{ route('form.store') }}" class="form" method="post">
                        @csrf
                        <div class="form__item">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{old('title')}}">
                            @error('title')
                            <small>*{{ $message }}</small>
                            @enderror
                        </div>

                        {{--multiple input--}}
                        <select-multiple
                            :data="{{ $data }}"
                            :old-select="{{  Js::from(old('categories')) }}"
                        >
                            <template v-slot:errors>
                                @error('categories')
                                    <small>*{{ $message }}</small>
                                @enderror
                            </template>
                        </select-multiple>
                        {{--multiple input--}}

                        <button class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
</body>
</html>
