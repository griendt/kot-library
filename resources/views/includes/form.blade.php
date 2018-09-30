<div id="{{ $id }}Accordion">
    <div class="row justify-content-start float-none">
        <div class="col-md-8">
            <div class="card {{ $border ?? '' }}">
                <div class="card-header" id="{{ $id }}Header">
                    <button
                            class="btn btn-link"
                            data-toggle="collapse"
                            data-target="#{{ $id }}Card"
                            aria-expanded="true"
                            aria-controls="{{ $id }}Card">
                        {{ $header }}
                    </button>
                </div>

<div style='overflow: hidden' id="{{ $id }}Card" class="collapse show in" aria-labelledby="{{ $id }}Header" data-parent="#{{ $id }}Accordion">
<div class="card-body">
    @if(isset($explanation))
        {!! $explanation !!}<br>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{ route($route) }}">
        @csrf

        @foreach ($fields as $label => $type)
            @php
            $snakeLabel = snake_case($label);
            $isTrapLabel = (isset($icons) && $icons === 'traps' && substr(snake_case($label), 0, 4) === 'trap');
            @endphp
            @if ($type === 'hidden')
                <input type="hidden" value="{{ $hidden[$label] }}" name="{{ $snakeLabel }}" id="{{ $snakeLabel }}">
                @continue
            @endif
        <div class="form-group row">
            <label for="{{ $snakeLabel }}" class="col-md-4 col-form-label text-md-right">
                @if ($isTrapLabel)
                    {{--<vue-trap-icon :traps="{{ json_encode($traps) }}"></vue-trap-icon>--}}
                @endif
                {{ ucfirst($label) }}</label>
            <div class="col-md-6">
                 @if ($type === 'select')
                    <select id="{{ $snakeLabel }}" class="form-control {{ $errors->has($snakeLabel) ? 'is-invalid' : '' }}" name="{{ $snakeLabel }}">
                        @foreach ($selectOptions[$label] as $option)
                            <option value="{{ snake_case($option) }}" {{ old($option) === $option ? 'selected' : 'ba' }}>{{ $option }}</option>
                        @endforeach
                    </select>
                 @elseif ($type === 'textarea')
                    <textarea id="{{ $snakeLabel }}" type="{{ $type }}" class="form-control{{ $errors->has($snakeLabel) ? ' is-invalid' : '' }}" name="{{ $snakeLabel }}"></textarea>

                 @else
                    <input id="{{ $snakeLabel }}" type="{{ $type }}" class="form-control{{ $errors->has($snakeLabel) ? ' is-invalid' : '' }}" name="{{ $snakeLabel }}" value="{{ old($snakeLabel) }}">
                 @endif
                 @if ($errors->has(snake_case($label)))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first(snake_case($label)) }}</strong>
                    </span>

                @endif
            </div>
        </div>
        @endforeach

        {{--<div class="progress">--}}
            {{--<div class="bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>--}}
        {{--</div>--}}

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ $buttonText }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
