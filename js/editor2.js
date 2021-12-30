
// tui library to glfx library 
function tuitoglfx() {
    clearInterval(undo_interval);
    var dataURL = imageEditor.toDataURL();
    var prev_canvas = $('.tui-image-editor')
    prev_html = $('.tui-image-editor').html();
    var img_ = new Image();
    img_.src = dataURL;
    canvas = fx.canvas();
    setTimeout(() => {
        texture = canvas.texture(img_);
        // image.parentNode.insertBefore(canvas, image);
        canvas.draw(texture).update();
    }, 75);
    setTimeout(() => {
        debugger
        $('.tui-image-editor').html(canvas);
        tui_library = false;
        glfx_library = true;
        zoom();
        if ($(prev_canvas).html() !== prev_html) {
            imageEditor = undefined;
        }
    }, 150);
}
// glfx library to tui library 
function glfxtotui() {
    debugger
    var img = new Image();
    img.src = canvas.toDataURL('image/png');
    $('.tui-image-editor').html('')
    generateCanvas();
    imageforEdit(img);
    zoom();
}

// download file from glfx library
function glfxdownload() {
    var link = document.createElement('a');
    link.download = 'filename.png';
    link.href = canvas.toDataURL('image/png')
    link.click();
}


$('#fine_tune_div').click(function () {
    if (tui_library) {
        tuitoglfx();
    }
});

$('.basic_adjustment').click(function () {
    if (tui_library) {
        tuitoglfx();
    }
});

// applying filters 
function brightnessglfx() {
    canvas.draw(texture).brightnessContrast($(this).val(), $("#Contrast").val()).update();
};
function contrastglfx() {
    canvas.draw(texture).brightnessContrast($("#brightness").val(), $(this).val()).update();
}
function saturationglfx() {
    canvas.draw(texture).hueSaturation($("#hue").val(), $(this).val()).update();
}
function vibranceglfx() {
    canvas.draw(texture).vibrance($(this).val()).update();
};
function hueglfx() {
    canvas.draw(texture).hueSaturation($(this).val(), $("#Saturation").val()).update();
};
function denoiseglfx() {
    canvas.draw(texture).denoise($(this).val()).update();
};
function sharpnessglfx() {
    canvas.draw(texture).unsharpMask(1.5, parseFloat($(this).val())).update();
};
function noiseglfx(){
    canvas.draw(texture).noise(parseFloat($(this).val())).update();
}

// adding events to functions 
$("#brightness").change(brightnessglfx);
$("#Contrast").change(contrastglfx);
$("#Saturation").change(saturationglfx);
$("#Vibrance").change(vibranceglfx);
$("#hue").change(hueglfx).mousemove(hueglfx);
$("#remove_noise").change(denoiseglfx);
$("#Sharpness").change(sharpnessglfx);
$("#noise").change(noiseglfx);