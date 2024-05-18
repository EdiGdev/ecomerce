@props(['focus' => false])

<div class="border-b relative  border-gray-400" wire:ignore 
    x-data="{
        message: @entangle($attributes->wire('model')).defer,
        isFocus: false,
    }"
    x-init="
        $watch('message', value => {
            if (!value) {
                ballonEditor.setData('');
            }
        });
        BalloonEditor
            .create($refs.MyEditor)
            .then(editor => {
                ballonEditor = editor;

                if (message) {
                    editor.setData(message);
                }

                @if ($focus)
                    editor.focus();
                    isFocus = true;
                @endif

                editor.model.document.on('change:data', () => {
                    message = editor.getData();
                });

                editor.editing.view.document.on('change:isFocused', (evt, data, isFocused) => {
                    isFocus = isFocused;
                });
            })
            .catch(error => {
                console.error(error);
            });
    "
>
    <div x-ref="MyEditor" x-bind:class="isFocus ? 'bg-white' : ''"></div>

    <!-- Marcador de posición estilo "placeholder" -->
    <p x-show="!message" class="text-gray-500 absolute top-0 left-0 px-4 py-4 pointer-events-none">Agrega un comentario</p>
</div>
