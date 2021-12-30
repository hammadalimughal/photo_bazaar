// custom work 

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

var canvas = document.getElementById("editorCanvas");
var ctx = canvas.getContext("2d");
var image
const drawImage = (img) => {
    debugger
    var check_img = document.getElementById(canvas.getAttribute("data-img_id"));
    if (typeof (check_img) != 'undefined' && check_img != null) {
        var canvasImg = canvas.toDataURL("image/png");
        check_img.src = canvasImg;
    }
    img.classList.remove("img-fluid");
    image = img;
    id = image.getAttribute("id");
    canvas.setAttribute("data-img_id", id);
    canvas.height = image.height;
    canvas.width = image.width;
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
    ctx.src = img.src;
    $("#height").html(image.height + "px");
    $("#width").html(image.width + "px");
    $("#resize_width").val(image.width);
    $("#resize_height").val(image.height);
    img.classList.add("img-fluid");
}
function updateimg(){
    var img = canvas.toDataURL("image/png");
    var img_export = document.createElement("img");
    img_export.setAttribute("src", img);
    image = img_export
}
function export_img(){
    updateimg();
    var a = document.createElement('a');
    a.href = image.src;
    a.download = "output.png";
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

// resize work 
$(".resize_inp").change(function () {
    debugger
    var width_ = $("#resize_width").val()
    var height_ = $("#resize_height").val();
    if ($("#resize_check").attr('checked', true)) {
    }
    canvas.width = width_;
    canvas.height = height_;
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
})

// crop image 
// ctx.drawImage(image,
//     10, 10,   // Start at 10 pixels from the left and the top of the image (crop),
//     80, 30,   // "Get" a `80 * 30` (w * h) area from the source image (crop),
//     0, 0,     // Place the result at 0, 0 in the canvas,
//     160, 60); // With as width / height: 160 * 60 (scale)

// rotate_left
var x = 0
$("#rotate_left").click(function () {
    var x = parseInt($("#rotate_range").val())
    if (x < 45) {
        var temp = (x - 45 + 360)
    }
    else {
        var temp = x - 45;
    }
    document.getElementById("editorCanvas").style.transform = 'rotate(' + temp + 'deg)';
    x = temp;
    $("#rotate_value").html(`${x}&deg`)
    $("#rotate_range").val(x)
})
$("#rotate_right").click(function () {
    var x = parseInt($("#rotate_range").val())
    if (x >= 315) {
        var temp = (x + 45 - 360)
    }
    else {
        var temp = x + 45;
    }
    document.getElementById("editorCanvas").style.transform = 'rotate(' + temp + 'deg)';
    x = temp;
    $("#rotate_value").html(`${x} &deg`)
    $("#rotate_range").val(x)
})
// function editImage() {
//     debugger
//     var brightness = $("#brightness").val();
//     var rotatevalue = $("#rotate_range").val();
//     var blur = $("#blur").val();
//     var smoothness = $("#smoothness").val();
//     var contrast = $("#Contrast").val();
//     var huerotate = $("#huerotate").val();
//     var opacity = $("#opacity").val();
//     var invert = $("#invert").val();
//     var saturate = $("#saturate").val();
//     var sepia = $("#Sepia").val();
//     $("#rotate_value").html(`${rotatevalue} &deg`)
//     ctx.filter = `contrast(${contrast}) sepia(${sepia}) brightness(${brightness}) hue-rotate(${huerotate}deg) blur(${blur + smoothness}px)`;
//     ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
// }

//  apply editing
$("input[name='editing']").change(editImage);


$("#zoom").change(function () {
    var zoom = $("#zoom").val();
    canvas.style.width = `${zoom}%`
})



// color changing 


// pull the entire image into an array of pixel data


// examine every pixel, 
// change any old red to new red
$("#red").click(function () {
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
    var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    for (var i = 0; i < imageData.data.length; i += 4) {
        // change to your new rgb
        imageData.data[i] = $(this).val();
        // imageData.data[i + 1] = imageData.data[i + 1] + newGreen;
        // imageData.data[i + 2] = newBlue;
        // put the altered data back on the canvas  
    }
    ctx.putImageData(imageData, 0, 0);
    updateimg();
})
// change any old green to new green
$("#green").click(function () {
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
    var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    for (var i = 0; i < imageData.data.length; i += 4) {
        // change to your new rgb
        imageData.data[i + 1] = $(this).val();
    }
    ctx.putImageData(imageData, 0, 0);
    updateimg();
})
// change any old green to new blue
$("#blue").click(function () {
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
    var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    for (var i = 0; i < imageData.data.length; i += 4) {
        // change to your new rgb

        imageData.data[i + 2] = $(this).val();
    }
    ctx.putImageData(imageData, 0, 0);
    updateimg();
})

function filterEffects() {
    var filters_temp = $(".filter_imgs")
    filters_temp[0].style.cssText = `filter: grayscale(1) invert(1); mix-blend-mode: color-dodge;`
    filters_temp[1].style.cssText = `filter: grayscale(1)`
    filters_temp[2].style.cssText = `filter: blur(1px)`
}
filterEffects();


$(".filter_imgs").click(function () {
    var filters = this.style.filter;
    ctx.filter = filters
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
    console.log(filters);
})

// for cumtom filters 
// fabric.Image.filters.Redify = fabric.util.createClass({

//     type: 'Redify',

//     applyTo: function (canvasEl) {
//         var context = canvasEl.getContext('2d'),
//             imageData = context.getImageData(0, 0, canvasEl.width, canvasEl.height),
//             data = imageData.data;

//         for (var i = 0, len = data.length; i < len; i += 4) {
//             data[i + 1] = 0;
//             data[i + 2] = 0;
//         }

//         context.putImageData(imageData, 0, 0);
//     }
// });

// fabric.Image.filters.Redify.fromObject = function (object) {
//     return new fabric.Image.filters.Redify(object);
// };