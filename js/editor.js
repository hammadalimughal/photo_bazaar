var activeObjectId;
var tui_library = true;
var glfx_library = false;
var undo_interval;
var imageEditor;
var imageInCanvas;
var activeFrameId = null;
var collageImgInputOne1;
var myCanvas;
var context;
var rImageType = /data:(image\/.+);base64,/;
var supportingFileAPI = !!(window.File && window.FileList && window.FileReader);

// img import /*
function readURL(input) {
    var parentElement = document.getElementById("images_in_que");
    let a = parentElement.childElementCount + 1
    let img_id = "img_que" + a;
    parentElement.innerHTML += `
    <div class="que_img">
            <img data-file="" onclick="imageforEdit(this)" class="img-fluid img_item" id="${img_id}" alt="">
    </div>`

    for (var i = 0; i < input.files.length; i++) {
        if (input.files[i]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = $(`#${img_id}`);
                img.attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }
}

$("#import_img").change(function () {
    readURL(this);
});

function filter_images_templates(val_) {
    if (val_ != 'allImages' && val_ != 'allOrientation') {

        $(".templates_img").css('display', 'none')
        $('.templates_img').map(function () {
            var incStr = $(this).attr('data-template').includes(val_);
            if (incStr) {
                $(this).css('display', 'block')
            }
        });
    }
    else {
        $(".templates_img").css('display', 'block');
    }
    // tempSize();
}
$('#temp_size_').click(function () {
    if ($(this).prop('checked')) {
        $(".temp_size_content").slideDown();
    }
    else {
        $(".temp_size_content").slideUp();
    }
})
function tempSize() {
    var temp_width, temp_height;
    let unit = $('.search_size_uni select').val()
    if (unit == "px") {
        temp_width = $("#img_temp_width").val();
        temp_height = $("#img_temp_height").val();
    }
    else {
        temp_width = $("#img_temp_width").val() * 96;
        temp_height = $("#img_temp_height").val() * 96;
    }

    if ($('#temp_size_').prop('checked')) {
        debugger
        // filter_images_templates($('#temp_cate'))
        // let tempImgs = $(".templates_img");
        $(".templates_img").map((index, elem) => {
            debugger
            // for width 

            if ($(elem).children()[0].naturalWidth < parseFloat(temp_width)) {
                debugger
                $(elem).css('display', 'none');
            }
            else if (!($(elem).children()[0].naturalHeight < parseFloat(temp_height))) {
                debugger
                $(elem).css('display', 'block');
            }
            // for height 
            if ($(elem).children()[0].naturalHeight < parseFloat(temp_height)) {
                $(elem).css('display', 'none');
            }
            else if (!($(elem).children()[0].naturalWidth < parseFloat(temp_width))) {
                $(elem).css('display', 'block');
            }
        })
    }
}



// Image editor
function generateCanvas() {
    debugger
    if (imageEditor === undefined) {
        imageEditor = new tui.ImageEditor('.tui-image-editor', {
            cssMaxWidth: 700,
            cssMaxHeight: 500,
            selectionStyle: {
                cornerSize: 20,
                rotatingPointOffset: 70,
            },
        });
        imageEditor.on({
            objectAdded: function (obj) {
                activeObjectId = obj.id;
                imageEditor.stopDrawingMode()
                console.info(obj);
            },
            objectActivated: function (obj) {
                imageEditor.stopDrawingMode()
                if (obj.type === 'rect' || obj.type === 'circle' || obj.type === 'triangle') {
                    showSubMenu('shape');
                    setShapeToolbar(obj);
                    activateShapeMode();
                } else if (obj.type === 'icon') {
                    showSubMenu('icon');
                    setIconToolbar(obj);
                    activateIconMode();
                } else if (obj.type === 'text') {
                    showSubMenu('text');
                    setTextToolbar(obj);
                    activateTextMode();
                }
                if(obj){
                    activeObjectId = obj.id;
                }
                else{
                    activeObjectId = objectProps.id;
                }
            },

            // addText: function (obj) {
            //     console.log(obj)
            //     insert_text()
            // },

            addText: function (pos,obj) {
                debugger
                imageEditor
                    .addText('Double Click', {
                        position: pos.originPosition,
                    })
                    .then(function (objectProps) {
                        console.log(objectProps);
                        activeObjectId = objectProps.id;
                    });
                imageEditor.stopDrawingMode()
            }
        });        
        tui_library = true;
        glfx_library = false;
        undo_interval = setInterval(() => {
            if (imageEditor.isEmptyUndoStack() == false) {
                $(".undo").removeAttr("disabled");
            }
            if (imageEditor.isEmptyUndoStack() == true) {
                $(".undo").attr("disabled", true);
            }
            if (imageEditor.isEmptyRedoStack() == false) {
                $(".redo").removeAttr("disabled");
            }
            if (imageEditor.isEmptyRedoStack() == true) {
                $(".redo").attr("disabled", true);
            }
        }, 300);
        setInterval(() => {
            if (activeObjectId == activeFrameId && activeFrameId != null) {
                imageEditor.discardSelection();
            }
        }, 10);
        document.getElementById("upload_img").style.display = "none"
    }
}
// Common global functions
// HEX to RGBA
function hexToRGBa(hex, alpha) {
    var r = parseInt(hex.slice(1, 3), 16);
    var g = parseInt(hex.slice(3, 5), 16);
    var b = parseInt(hex.slice(5, 7), 16);
    var a = alpha || 1;

    return 'rgba(' + r + ',' + g + ',' + b + ',' + a + ')';
}
function base64ToBlob(data) {
    var mimeString = '';
    var raw, uInt8Array, i, rawLength;

    raw = data.replace(rImageType, function (header, imageType) {
        mimeString = imageType;

        return '';
    });

    raw = atob(raw);
    rawLength = raw.length;
    uInt8Array = new Uint8Array(rawLength); // eslint-disable-line

    for (i = 0; i < rawLength; i += 1) {
        uInt8Array[i] = raw.charCodeAt(i);
    }

    return new Blob([uInt8Array], { type: mimeString });
}

function resizepredefine(_value) {
    switch (_value) {
        case "fb_post":
            $("#resize_width").val(628)
            $("#resize_height").val(1200)
            break;
        case "fb_banner":
            $("#resize_width").val(628)
            $("#resize_height").val(820)
            break;
        case "ins_post":
            $("#resize_width").val(1080)
            $("#resize_height").val(1080)
            break;
        case "web_banner":
            $("#resize_width").val(1024)
            $("#resize_height").val(768)
            break;
        case "web_fluid":
            $("#resize_width").val(1920)
            $("#resize_height").val(768)
            break;
        default:
            break;
    }
    $(".resize_unit select").val('px').change();
    if ($("#resize_check").prop("checked")) {
        $("#resize_check").prop("checked", false)
    }
}


function resizeEditor() {
    var $editor = $('.tui-image-editor');
    var $container = $('.tui-image-editor-canvas-container');
    var height = parseFloat($container.css('max-height'));
    $editor.height(height);
    $editor.width("auto");
}
// resize an image     
$("#resize_width").keyup(function () {
    if ($('#resize_check').is(':checked')) {
        let aspect = imageInCanvas.width / imageInCanvas.height
        let newHeight = $("#resize_width").val() / aspect
        $("#resize_height").val(newHeight);
    }
});

$("#resize_height").keyup(function () {
    if ($('#resize_check').is(':checked')) {
        let aspect = imageInCanvas.height / imageInCanvas.width;
        let newWidth = $("#resize_height").val() / aspect;
        $("#resize_width").val(newWidth);
    }
});
function activateShapeMode() {
    if (imageEditor.getDrawingMode() !== 'SHAPE') {
        imageEditor.stopDrawingMode();
        imageEditor.startDrawingMode('SHAPE');
    }
}
function shapeModeOn() {
    shapeOptions.stroke = '#000000';
    shapeOptions.fill = '#ffffff';
    shapeOptions.strokeWidth = Number();

    // step 2. set options to draw shape
    imageEditor.setDrawingShape(shapeType, shapeOptions);

    // step 3. start drawing shape mode
    activateShapeMode();
}

function resizeDimension() {
    debugger
    var canvas = document.createElement('canvas');
    ctx_ = canvas.getContext('2d');
    let unit = $(".resize_unit select").val()
    if (unit == "px") {
        canvas.width = $("#resize_width").val();
        canvas.height = $("#resize_height").val();
    }
    else {
        canvas.width = $("#resize_width").val() * 96;
        canvas.height = $("#resize_height").val() * 96;
    }
    ctx_.drawImage(imageInCanvas, 0, 0, canvas.width, canvas.height);
    var imageSrc = canvas.toDataURL("image/png");
    imageEditor.loadImageFromURL(imageSrc, 'image');
}

// change canvas image 
function imageforEdit(image) {
    generateCanvas();
    imageInCanvas = new Image();
    $(image).removeClass("img-fluid")
    imageInCanvas.src = image.src;
    imageEditor.loadImageFromURL(image.src, "Output");
    imageEditor.clearUndoStack();
    $("#height").html(image.height);
    $("#width").html(image.width);
    $("#resize_height").val(image.height);
    $("#resize_width").val(image.width);
    $(image).addClass("img-fluid");
};
$("#canvas_upload").change(function (e) {
    debugger
    generateCanvas();
    readURL(this);
    var reader = new FileReader();
    imageInCanvas = new Image()
    // file = e.target.files[0];
    // imageEditor.loadImageFromFile(file)
    imageInCanvas = new Image()
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (event) {
            $(imageInCanvas).attr('src', event.target.result)
        };

        reader.readAsDataURL(this.files[0]);
    }
    setTimeout(() => {
        imageEditor.loadImageFromURL(imageInCanvas.src, 'output')
        // console.log(imageInCanvas);
        $("#height").html(imageInCanvas.height);
        $("#width").html(imageInCanvas.width);
        $("#resize_height").val(imageInCanvas.height);
        $("#resize_width").val(imageInCanvas.width);
    }, 200);
})
$('.resize_unit select').change(function () {
    $(".resize_unit select").val($(this).val()).change();
    document.getElementById("resize_preset").selectedIndex = 0
})
function export_img() {
    debugger
    var imageName = imageEditor.getImageName();
    var dataURL = imageEditor.toDataURL();
    var blob, type, w;

    if (supportingFileAPI) {
        debugger
        blob = base64ToBlob(dataURL);
        type = blob.type.split('/')[1];
        if (imageName.split('.').pop() !== type) {
            imageName += '.' + type;
        }

        // Library: FileSaver - saveAs
        saveAs(blob, imageName); // eslint-disable-line
    } else {
        debugger
        alert('This browser needs a file-server');
        w = window.open();
        w.document.body.innerHTML = '<img src="' + dataURL + '">';
    }
}

// ("#exposure").change(function () {
//     let valu = $(this).val()
//     if (valu >= 0) {
//         imageEditor.applyFilter('blendColor', {
//             mode: 'tint',
//             color: '#ffffff',
//             alpha: valu,
//         });
//     }
//     else {
//         imageEditor.applyFilter('blendColor', {
//             mode: 'tint',
//             color: '#000000',
//             alpha: Math.abs(valu),
//         });
//     }
// });

// $("#brightness").change(function () {
//     imageEditor.applyFilter("brightness", {
//         brightness: parseInt(this.value, 10) / 255,
//     }).then(function (result) {
//         console.log(result);
//     });
// });

// $("#Contrast").change(function () {
//     imageEditor.applyFilter("contrast", {
//         contrast: parseInt(this.value, 10) / 255,
//     }).then(function (result) {
//         console.log(result);
//     });
// });


// $("#Saturation").change(function () {
//     imageEditor.applyFilter("saturation", {
//         saturation: parseInt(this.value, 10) / 255,
//     }).then(function (result) {
//         console.log(result);
//     });
// });


$("#grayscale").change(function () {
    imageEditor.applyFilter('grayscale', {
        grayscale: parseInt(this.value),
    });
});

// $("#noise").change(function () {
//     imageEditor.applyFilter('noise', {
//         noise: parseInt(this.value),
//     });
// });

$("#pixelate").change(function () {
    imageEditor.applyFilter('pixelate', {
        blocksize: parseInt(this.value),
    });
});

$("#whiteness").change(function () {
    imageEditor.applyFilter('removeColor', {
        color: '#FFFFFF',
        useAlpha: false,
        distance: parseInt(this.value, 10) / 255,
    });
});

$


var tintColorpicker = tui.colorPicker.create({
    container: $('.tint_mode')[0],
    color: '#000000',
});
$(".tint_mode").click(function () {
    imageEditor.applyFilter('blendColor', {
        mode: 'tint',
        color: tintColorpicker.getColor(),
        alpha: parseFloat($("#tint_opac").val()),
    });
});


var blendColorpicker = tui.colorPicker.create({
    container: $('.blend_mode')[0],
    color: '#00FF00',
});
$(".blend_mode input").attr("disabled", "true");
// $(".blend_mode").on('click', function () {
//     if ($("#select_blend_mode").val() != "none") {
//         $(".blend_mode input").removeAttr("disabled")
//         imageEditor.applyFilter('blendColor', {
//             mode: $("#select_blend_mode").val(),
//             color: blendColorpicker.getColor(),
//         })
//     }
//     else {
//         $(".blend_mode input").attr("disabled", "true");
//         imageEditor.removeFilter('blendColor');
//     }
// });

function blendMode() {
    if ($("#select_blend_mode").val() != "none") {
        $(".blend_mode input").removeAttr("disabled")
        imageEditor.applyFilter('blendColor', {
            mode: $("#select_blend_mode").val(),
            color: blendColorpicker.getColor(),
        })
    }
    else {
        $(".blend_mode input").attr("disabled", "true");
        imageEditor.removeFilter('blendColor');
    }
}
$(".blend_mode").click(blendMode);
$("#select_blend_mode").change(blendMode);
$("#blur").change(function () {
    imageEditor.applyFilter('Blur', {
        blur: parseFloat(this.value),
    });
});

$("#crop_1").click(function () {
    imageEditor.startDrawingMode('CROPPER');
    imageEditor.setCropzoneRect()
    $("#apply_crop").removeAttr("disabled");
    $("#cancel_crop").removeAttr("disabled");
});

function aspectCrop(x, y) {
    imageEditor.startDrawingMode('CROPPER');
    imageEditor.setCropzoneRect(x / y)
    $("#apply_crop").removeAttr("disabled");
    $("#cancel_crop").removeAttr("disabled");
};

$("#apply_crop").click(function () {
    imageEditor.crop(imageEditor.getCropzoneRect()).then(function () {

        var editorSize = imageEditor.getCanvasSize()
        $("#apply_crop").attr("disabled", true);
        $("#cancel_crop").attr("disabled", true);
        $("#height").html(editorSize.height);
        $("#width").html(editorSize.width);
        $("#resize_height").val(editorSize.height);
        $("#resize_width").val(editorSize.width);
        imageEditor.stopDrawingMode();
        $('#zoom').val('100');
        $("canvas").css("width", "100%")
    });
});

$("#cancel_crop").click(function () {
    imageEditor.stopDrawingMode();
    $("#apply_crop").attr("disabled", true);
    $("#cancel_crop").attr("disabled", true);
});

$("#flip_x").click(function () {
    imageEditor.flipX().then(function (status) {
        console.log('flipX: ', status.flipX);
        console.log('flipY: ', status.flipY);
        console.log('angle: ', status.angle);
    });
});

$("#flip_y").click(function () {
    imageEditor.flipY().then(function (status) {
        console.log('flipX: ', status.flipX);
        console.log('flipY: ', status.flipY);
        console.log('angle: ', status.angle);
    });
});

$("#rotate_left").click(function () {
    imageEditor.rotate(-90);
});

$("#rotate_right").click(function () {
    imageEditor.rotate(90);
});

$("#rotate_range").on('mousedown', function () {
    var changeAngle = function () {
        imageEditor.setAngle(parseInt($("#rotate_range").val(), 10))['catch'](function () { });
    };
    $(document).on('mousemove', changeAngle);
    $(document).on('mouseup', function stopChangingAngle() {
        $(document).off('mousemove', changeAngle);
        $(document).off('mouseup', stopChangingAngle);
    });
});



function applyNoise() {
    imageEditor.applyFilter('noise', {
        noise: 150,
    });
};
function applyEmboss() {
    imageEditor.applyFilter('emboss', {
        emboss: 150,
    });
};
function applypixelate() {
    imageEditor.applyFilter('pixelate', {
        pixelate: 1000,
    });
};
function applysepia() {
    imageEditor.applyFilter('sepia', {
        sepia: 1000,
    });
};
function applysepia2() {
    imageEditor.applyFilter('vintage', {
        vintage: 1000,
    });
};
function applysharpeness() {
    imageEditor.applyFilter('Sharpen', {
        Sharpen: 1000,
    });
}
function element_upload(source) {
    imageEditor.addImageObject(source).then((obj) => {
        activeObjectId = obj.id;
    })
}

function activateTextMode() {
    if (imageEditor.getDrawingMode() !== 'TEXT') {
        imageEditor.stopDrawingMode();
        imageEditor.startDrawingMode('TEXT');
    }
}
function activateShapeMode() {
    if (imageEditor.getDrawingMode() !== 'SHAPE') {
        imageEditor.stopDrawingMode();
        imageEditor.startDrawingMode('SHAPE');
    }
}
// var textColorpicker = tui.colorPicker.create({
//     container: $('.text_color')[0],
//     color: '#000000',
// });

// $(".text_color").click(function () {
//     imageEditor.changeTextStyle(activeObjectId, {
//         fill: textColorpicker.getColor(),
//     });
// })

function textcolorchange() {
    imageEditor.changeTextStyle(activeObjectId, {
        fill: $("#text_color").val(),

    });
};
$("#text_color").change(textcolorchange).click(textcolorchange)
function addText() {
    imageEditor.addText("Text Here")
    activateTextMode();
}
$('.custom_tool_kit').click(function () {
    debugger
    if($(this).attr() == $('#text_tab').attr()){
        activateTextMode();
    }
    else{
        imageEditor.stopDrawingMode()
    }
    
});
var shapeOptions = {}
function shapeMode(mode) {
    shapeOptions.stroke = $("#shape_stroke_color").val();
    if ($("#bg_shape_check").prop("checked")) {
        shapeOptions.fill = $("#shape_bg_color").val();
    }
    else {
        shapeOptions.fill = 'transparent';
    }
    shapeOptions.strokeWidth = Number($("#shape_stroke_width").val());
    switch (mode) {
        case "square":
            imageEditor.setDrawingShape('rect', shapeOptions); // circle triangle
            break;
        case "circle":
            imageEditor.setDrawingShape('circle', shapeOptions); // circle triangle
            break;
        case "triangle":
            imageEditor.setDrawingShape('triangle', shapeOptions); // circle triangle
            break;
        default:
            break;
    }
    activateShapeMode();
}
$(".bg_color__").click(function () {
    if ($("#bg_shape_check").prop("checked")) {
        $("#shape_bg_color").css('display', 'block')
    }
    else {
        $("#shape_bg_color").css('display', 'none')
    }
})
function text_styling(param) {
    switch (param) {
        case 'bold':
            imageEditor.changeTextStyle(activeObjectId, {
                fontWeight: 'bold',
            });
            break;
        case 'italic':
            imageEditor.changeTextStyle(activeObjectId, {
                fontStyle: 'italic',
            });
            break;
        case 'underline':
            imageEditor.changeTextStyle(activeObjectId, {
                underline: true
            });
            break;
    }
}

function aligntext(param) {
    switch (param) {
        case 'left':
            imageEditor.changeTextStyle(activeObjectId, {
                textAlign: 'left',
            });
            break;
        case 'center':
            imageEditor.changeTextStyle(activeObjectId, {
                textAlign: 'center',
            });
            break;
        case 'right':
            imageEditor.changeTextStyle(activeObjectId, {
                textAlign: 'right',
            });
            break;
    }
}
$("#font_size").on('change', function () {
    imageEditor.changeTextStyle(activeObjectId, {
        fontSize: parseInt(this.value),
    });
});
function font_family() {
    imageEditor.changeTextStyle(activeObjectId, {
        fontFamily: $("#font_family").val(),
    });
}
$("#font_family").change(font_family).keypress(font_family);
function insert_text() {
    activateTextMode();
    imageEditor.addText("Your Text Here").then(obj => {
        activeObjectId = obj.id;
        console.log(obj)
    });
};




function apply_border(image_source) {

    // removing previous frame 
    let prevFrameId = activeFrameId;
    var canvasSize = imageEditor.getCanvasSize();
    var oc = document.createElement('canvas');
    oc.width = canvasSize.width;
    oc.height = canvasSize.height;
    octx = oc.getContext('2d');
    octx.drawImage(image_source.firstElementChild, 0, 0, canvasSize.width, canvasSize.height)
    var img = oc.toDataURL("image/png");
    imageEditor.addImageObject(img).then((obj) => {
        activeFrameId = obj.id;
        activeObjectId = obj.id;
        imageEditor.setObjectProperties(activeFrameId, {
            lockMovementX: true,
            lockMovementY: true,
            lockScalingX: true,
            lockScalingY: true,
            lockRotation: true,
        });
    });
    setTimeout(() => {

        if (prevFrameId != null) {
            imageEditor.removeObject(prevFrameId);
        }
    }, 30);
    setTimeout(() => {

        let a = imageEditor._invoker._undoStack
        if (prevFrameId != null) {
            a.pop();
            a.pop();
        }
        else {
            a.pop();
        }
        imageEditor._invoker._undoStack = a;
    }, 60);
}

function zoom() {
    $("canvas").css("width", $(this).val() + "%")
}
$('#sharpenToggle').click(function () {
    if ($('#sharpenToggle').is(':checked')) {
        imageEditor.applyFilter('Sharpen', {
            Sharpen: 100,
        });
    }
    else {
        imageEditor.removeFilter("Sharpen")
    }
})
$("#zoom").change(zoom).mousemove(zoom);
// collage work 
function loadImages(sources, callback) {
    var images = {};
    var loadedImages = 0;
    var numImages = 0;
    // get num of sources
    for (var src in sources) {
        numImages++;
    }
    for (var src in sources) {
        images[src] = new Image();

        images[src].onload = function () {
            if (++loadedImages >= numImages) {
                callback(images);
            }
        };
        images[src].src = sources[src];
    }
}
function collage(cases) {
    $(".custom_tool_kit").attr("disabled", "true");
    $("#collage_tab").removeAttr("disabled");
    switch (cases) {
        case 'one':
            $(".tui-image-editor-controls").html(`
            <div class="collage_container" style="width:600px; height:500px; position:relative;">
                <canvas id="myCanvas" width="600px" height="500px" style="max-width:100%;"></canvas>
                <label class="lbl_one_1"><input class="collage_one_1" type="file"></label>
                <label class="lbl_one_2"><input class="collage_one_2" type="file"></label>
            </div>`);
            $(".tui-image-editor-controls").css({ 'min-height': '100vh', 'display': 'flex', 'align-items': 'center', 'justify-content': 'center' });
            break;

        case 'two':
            $(".tui-image-editor-controls").html(`
            <div class="collage_container" style="width:600px; height:500px; position:relative;">
                <canvas id="myCanvas" width="600px" height="500px" style="max-width:100%;"></canvas>
                <label class="lbl_two_1"><input class="collage_two_1" type="file"></label>
                <label class="lbl_two_2"><input class="collage_two_2" type="file"></label>
            </div>`);
            $(".tui-image-editor-controls").css({ 'min-height': '100vh', 'display': 'flex', 'align-items': 'center', 'justify-content': 'center' });
            break;
        case 'three':
            $(".tui-image-editor-controls").html(`
            <div class="collage_container" style="width:600px; height:500px; position:relative;">
                <canvas id="myCanvas" width="600px" height="500px" style="max-width:100%;"></canvas>
                <label class="lbl_three_1"><input class="collage_three_1" type="file"></label>
                <label class="lbl_three_2"><input class="collage_three_2" type="file"></label>
            </div>`);
            $(".tui-image-editor-controls").css({ 'min-height': '100vh', 'display': 'flex', 'align-items': 'center', 'justify-content': 'center' });
            break;
        case 'four':
            $(".tui-image-editor-controls").html(`
            <div class="collage_container" style="width:600px; height:500px; position:relative;">
                <canvas id="myCanvas" width="600px" height="500px" style="max-width:100%;"></canvas>
                <label class="lbl_four_1"><input class="collage_four_1" type="file"></label>
                <label class="lbl_four_2"><input class="collage_four_2" type="file"></label>
                <label class="lbl_four_3"><input class="collage_four_3" type="file"></label>
            </div>`);
            $(".tui-image-editor-controls").css({ 'min-height': '100vh', 'display': 'flex', 'align-items': 'center', 'justify-content': 'center' });
            break;
        case 'five':
            $(".tui-image-editor-controls").html(`
                <div class="collage_container" style="width:600px; height:500px; position:relative;">
                    <canvas id="myCanvas" width="600px" height="500px" style="max-width:100%;"></canvas>
                    <label class="lbl_five_1"><input class="collage_five_1" type="file"></label>
                    <label class="lbl_five_2"><input class="collage_five_2" type="file"></label>
                    <label class="lbl_five_3"><input class="collage_five_3" type="file"></label>
                </div>`);
            $(".tui-image-editor-controls").css({ 'min-height': '100vh', 'display': 'flex', 'align-items': 'center', 'justify-content': 'center' });
            break;
    }
    $(".collage_one_1").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 0, 0, 299, 400); // Draws the image on canvas
                    $(".lbl_one_1").css('opacity', '0')
                }
            }
        }
    })
    $(".collage_one_2").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 302, 100, 299, 400); // Draws the image on canvas
                    $(".lbl_one_2").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_two_1").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 0, 50, 299, 400); // Draws the image on canvas
                    $(".lbl_two_1").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_two_2").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 302, 50, 299, 400); // Draws the image on canvas
                    $(".lbl_two_2").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_three_1").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 0, 100, 299, 400); // Draws the image on canvas
                    $(".lbl_three_1").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_three_2").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 302, 0, 299, 400); // Draws the image on canvas
                    $(".lbl_three_2").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_four_1").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 0, 0, myCanvas.width, 199); // Draws the image on canvas
                    $(".lbl_four_1").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_four_2").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 0, 202, 299, 300); // Draws the image on canvas
                    $(".lbl_four_2").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_four_3").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 302, 202, 299, 300); // Draws the image on canvas
                    $(".lbl_four_3").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_five_1").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 0, 0, 198, 500); // Draws the image on canvas
                    $(".lbl_five_1").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_five_2").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    var myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 201, 0, 198, 500); // Draws the image on canvas
                    $(".lbl_five_2").css('opacity', '0')
                }
            }
        }
    });
    $(".collage_five_3").change(function (e) {
        if (e.target.files) {
            let imageFile = e.target.files[0]; //here we get the image file
            var reader = new FileReader();
            reader.readAsDataURL(imageFile);
            reader.onloadend = function (e) {
                var myImage = new Image(); // Creates image object
                myImage.src = e.target.result; // Assigns converted image to image object
                myImage.onload = function (ev) {
                    myCanvas = document.getElementById("myCanvas"); // Creates a canvas object
                    var myContext = myCanvas.getContext("2d"); // Creates a contect object
                    myContext.drawImage(myImage, 402, 0, 198, 500); // Draws the image on canvas
                    $(".lbl_five_3").css('opacity', '0')
                }
            }
        }
    });
}


// $('canvas').bind("contextmenu",function(e){
//     return false;
// });

// responsiveness script 
const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
if (vw < 1200) {
    $(".custom_tool_kit").click(function () {
        $(".editor_detail_main").show();
    });
    $(".image_for_edit").click(function () {
        $(".editor_detail_main").hide();
    })
}

// tui to glfx 
var texture
var canvas
var prev_html

