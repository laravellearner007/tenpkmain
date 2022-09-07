// close modal on save
window.livewire.on("closeModal", () => {
    $("#livewireModal").modal("hide");
    $("#rfidModal").modal("hide");
    $("#editModel").modal("hide");
});

window.livewire.on("hide", () => {
    // alert( 'here' );
    $(".indivi-dropdown").hide();
});

window.livewire.on("cardAcc", () => {
    var APP_URL = $(".url").html();

    var audio = new Audio(APP_URL + "/audio/accepted2.mp3");
    audio.play();
});

window.livewire.on("cardDenied", () => {
    var APP_URL = $(".url").html();

    var audio = new Audio(APP_URL + "/audio/denined1.mp3");
    audio.play();
});

window.livewire.on("ApiRfidToken", (data) => {
    alert(data);
    // var APP_URL = $( ".url" ).html();

    // var audio = new Audio( APP_URL + "/audio/denined1.mp3" );
    // audio.play();
});

$(".checkInput").bind("change", function () {
    // alert( 'gender' );

    if ($(this).is(":checked")) {
        id = $(this).attr("value");
        Livewire.emit("assignGateToGender", id);
    } else {
        id = $(this).attr("value");
        Livewire.emit("removeGateFromGender", id);
    }
});

$(document).on("change", ".checkInputGradeGates", function () {
    if ($(this).is(":checked")) {
        // alert( 'add' );
        id = $(this).attr("value");
        Livewire.emit("assignGateToGrade", id);
    } else {
        // alert( 'remove' );
        id = $(this).attr("value");
        Livewire.emit("removeGateFromGrade", id);
    }
});

window.addEventListener("swal:modal", (event) => {
    Swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
        confirmButtonText: "Done",
        timer: 3000,
    });
});

window.addEventListener("swal:confirmModal", (event) => {
    if (confirm("Are you sure to perform this action?")) {
        window.livewire.emit("deleteRfid", event.detail.id);
    }
});

window.addEventListener("swal:confirmDestroy", (event) => {
    if (confirm("Are you sure to perform this action?")) {
        window.livewire.emit("destroy", event.detail.id);
    }
});

$(document).on("change", ".checkbox-permission", function () {
    if ($(this).is(":checked")) {
        // alert( 'add' );
        id = $(this).attr("value");
        Livewire.emit("activeModule", id);
    } else {
        id = $(this).attr("value");
        // alert( id );
        Livewire.emit("disableModule", id);
    }
});

// accesspoint function
$(document).on("change", ".checkInputAccesspoint", function () {
    // alert('gender');

    if ($(this).is(":checked")) {
        id = $(this).attr("value");
        Livewire.emit("maleAssignment", id);
    } else {
        id = $(this).attr("value");
        Livewire.emit("removeMaleAssignment", id);
    }
});

// accesspoint function
$(document).on("change", ".checkInputAccesspointFemale", function () {
    // alert( 'gender' );

    if ($(this).is(":checked")) {
        id = $(this).attr("value");
        Livewire.emit("feMaleGroupAssignment", id);
    } else {
        id = $(this).attr("value");
        Livewire.emit("removeFeMaleAssignment", id);
    }
});

//accessPoint detial redirecting to view detials users
// document.addEventListener("test:re", () => {
//     //  alert("aa");
//     window.livewire.on("redirect", url => Turbolinks.visit("/accesspoints"));
// });
//parentFilterbutton on survey
// $(document).on('click', '.parentFilterbutton', function () {
//     alert('');
// });

$(document).ready(function () {
    theme = $(".magnifer").attr("data");

    // alert(theme);

    if (theme == "dark") {
    } else {
    }
});

//add input field on clcking table cell in student health form details
// var oldCell;
// var oldCellValue;

// $(document).on("click", ".addInputField", function() {
//      $(".addInputField input").blur();

//     if (typeof oldCell !== "undefined") {
//         oldCell.html("");
//         oldCell.html(fieldValue);
//     }

//     column = $(this).attr("column");
//     fieldValue = $(this).attr("val");
//     $(this).html("");

//     $(this).html(
//         '<input type = "text" class = "form-control form-control-alternative" wire:keydown.enter="addInputField" wire:model="' +
//             column +
//             '" value="' +
//             fieldValue +
//             '"  autofocus> '
//     );

//     oldCell = $(this);
//     oldCellValue = fieldValue;

//     // $(this  input).attr("autofocus");
// });
// window.livewire.on("contactFormSubmitted", function() {
//     $("#queryForm").modal("hide");
// });
