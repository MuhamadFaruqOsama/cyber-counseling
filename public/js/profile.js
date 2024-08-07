document.addEventListener('DOMContentLoaded', function() {
    // We register the plugins required to do 
    // image previews, cropping, resizing, etc.
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginImageExifOrientation,
        FilePondPluginImagePreview,
        FilePondPluginImageCrop,
        FilePondPluginImageResize,
        FilePondPluginImageTransform,
        FilePondPluginImageEdit
    );
    
    // Select the file input and use 
    // create() to turn it into a pond
    FilePond.create(
        document.querySelector('#input-profile'),
        {
        labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
        imagePreviewHeight: 170,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'right bottom',
        styleButtonRemoveItemPosition: 'left bottom',
        styleButtonProcessItemPosition: 'right bottom',
        }
    );

    const abortButton = document.querySelector('.filepond--action-abort-item-load');
    if (abortButton) {
        abortButton.style.opacity = "1";
        abortButton.removeAttribute('disabled');
    }
    
});