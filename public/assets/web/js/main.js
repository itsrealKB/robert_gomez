try {
} catch (error) {}

document.querySelectorAll(".assign-card").forEach(function (card) {
    const togglerBtn = card.querySelector(".toggler-btn");
    const toggleIcon = card.querySelector(".rotate-icon");
    const eyeBtn = card.querySelector(".eye-btn");
    const otherDesc = card.querySelector(".other-desc-area");
    const pendingBtns = card.querySelector(".pending-btn-wrapper");
    const innerBtns = pendingBtns.querySelectorAll("button");

    let isExpanded = false;

    togglerBtn.addEventListener("click", function (e) {
        e.stopPropagation();

        toggleIcon.classList.toggle("rotated");

        [eyeBtn, otherDesc, pendingBtns].forEach(function (el) {
            if (el.classList.contains("hidden-class")) {
                el.classList.remove("hidden-class");
                el.classList.add("smooth-toggle");
                isExpanded = true;
            } else {
                el.classList.remove("smooth-toggle");
                el.classList.add("hidden-class");
                isExpanded = false;
            }
        });
    });

    innerBtns.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    });

    card.addEventListener("click", function () {
        if (isExpanded) {
            const url = card.getAttribute("data-url");
            if (url) {
                window.location.href = url;
            }
        }
    });
});

// $(".menu-btn, .hamburger, .hamburger2").click(function () {
//     const isActive = $(".side-bar").toggleClass("active").hasClass("active");

//     // console.log("Sidebar active:", isActive);

//     if (isActive) {
//         $(".menu-list-2").css("justify-content", "center");
//         $("#logo-img").attr("src", "assets/web/images/link-img-open2.png");
//     } else {
//         $(".menu-list-2").css("justify-content", "flex-end");
//         $("#logo-img").attr("src", "assets/web/images/link-img-open.png");
//     }
// });

const form = document.getElementById("form");

let openBoostrapModal = (id = "#exampleModal4") => {
    const button = document.createElement("button");
    button.setAttribute("data-bs-toggle", "modal");
    button.setAttribute("data-bs-target", id);
    document.body.appendChild(button);
    button.click();
    document.body.removeChild(button);
};

if (form) {
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const userName = form.querySelector("[name='name']").value.trim();
        const password = form.querySelector("[name='password']").value.trim();
        if (userName && password) {
            const modal = bootstrap.Modal.getInstance(
                document.getElementById("exampleModal4")
            );
            modal.hide();
            openBoostrapModal("#exampleModal5");
        }
    });
}
document.addEventListener("DOMContentLoaded", () => {
    openBoostrapModal("#exampleModal4");

    const links = document.querySelectorAll("li.nav-item a");
    const currentUrl = window.location.href.split("?")[0].replace(/\/$/, "");
    links.forEach((link) => {
        const linkUrl = link.href.split("?")[0].replace(/\/$/, "");

        if (currentUrl === linkUrl) {
            const navItem = link.closest("li.nav-item");
            if (navItem) {
                navItem.classList.add("active");
            }
        }
    });
});

function updateTimeAndDate() {
    const now = new Date();

    const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    const hours = String(now.getHours()).padStart(2, "0"); // 24-hour format
    const minutes = String(now.getMinutes()).padStart(2, "0");
    const day = days[now.getDay()];
    const date = String(now.getDate()).padStart(2, "0");
    const month = months[now.getMonth()];
    const year = now.getFullYear();

    const time = `${hours}:${minutes}`;
    const fullDate = `${day}, ${date} ${month} ${year}`;

    document.getElementById("time").textContent = time;
    document.getElementById("date").textContent = fullDate;
}

setInterval(updateTimeAndDate, 1000);

updateTimeAndDate();

$(".doc-card-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    prevArrow: $(".doc-prev-btn"),
    nextArrow: $(".doc-next-btn"),
    dots: false,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1440,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$(".video-card-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    prevArrow: $(".video-prev-btn"),
    nextArrow: $(".video-next-btn"),
    dots: false,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

let noimage = "./assets/images/No_Image_Available.jpg";

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("img-preview").src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        document.getElementById("img-preview").src = noimage;
    }
}

// document.addEventListener("DOMContentLoaded", () => {
//     const pg = document.querySelector(".table-bodys");

//     if (pg) {
//         pg.addEventListener("click", (e) => {
//             setTimeout(() => {
//                 window.location.href = "View";
//             }, 0);
//         });
//     } else {
//         console.error("Element with class 'table-bodys' not found.");
//     }
// });

$(document).ready(function () {
    $(".contact-list").click(function () {
        $(".message-left").toggle(800);
    });

    // $("#menu-btn, #menu-btn2").click(function () {
    //     $("#header-offcanva").toggleClass("active-sidebar", "2000");
    // });
});

// const masterCheck = document.getElementById("masterCheckbox");
// const slaveChecks = document.querySelectorAll(".slaveCheckbox");

// masterCheck.addEventListener("change", function () {
//     slaveChecks.forEach((checkbox) => {
//         checkbox.checked = masterCheck.checked;
//     });
// });

// const masterCheck1 = document.getElementById("masterCheckbox1");
// const slaveChecks1 = document.querySelectorAll(".slaveCheckbox");

// masterCheck1.addEventListener("change", function () {
//     slaveChecks1.forEach((checkbox) => {
//         checkbox.checked = masterCheck1.checked;
//     });
// });





// const btnSave = document.querySelector(".save-upload");
// const tableBody = document.querySelector(".table-row-2");
// const dismissBtn = document.querySelector(".dismiss-modal");
// const fileInput = document.querySelector(".file-input");
// const dropZone = document.getElementById("drop-zone");
// const previewContainer = document.querySelector(".preview-multiple");

// let filesToUpload = [];

// // Reset modal when opened
// document.getElementById("exampleModal3").addEventListener("show.bs.modal", () => {
//     fileInput.value = "";
//     filesToUpload = [];
//     previewContainer.innerHTML = "";
// });

// // Drag & drop handlers
// dropZone.addEventListener("click", () => fileInput.click());
// dropZone.addEventListener("dragover", (e) => {
//     e.preventDefault();
//     dropZone.classList.add("dragover");
// });
// dropZone.addEventListener("dragleave", () => {
//     dropZone.classList.remove("dragover");
// });
// dropZone.addEventListener("drop", (e) => {
//     e.preventDefault();
//     dropZone.classList.remove("dragover");
//     handleFiles(e.dataTransfer.files);
// });

// fileInput.addEventListener("change", (e) => handleFiles(e.target.files));

// function handleFiles(selectedFiles) {
//     for (let file of selectedFiles) {
//         filesToUpload.push(file);

//         const ext = file.name.split(".").pop().toLowerCase();
//         const reader = new FileReader();

//         reader.onload = (e) => {
//             let iconSrc = "assets/web/images/no_image.png";
//             if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
//             else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
//             else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
//             else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = e.target.result;

//             const previewBox = document.createElement("div");
//             previewBox.style.textAlign = "center";
//             previewBox.style.width = "70px";
//             previewBox.innerHTML = `
//                 <img src="${iconSrc}" style="width: 100%; border-radius: 5px;" />
//                 <small style="font-size: 10px; word-break: break-word;">${file.name}</small>
//             `;
//             previewContainer.appendChild(previewBox);
//         };

//         reader.readAsDataURL(file);
//     }
// }

// btnSave.addEventListener("click", () => {
//     if (filesToUpload.length === 0) return;

//     let filesPreviewHTML = "";
//     let totalSize = 0;
//     let fileDataArray = [];
//     let filesRead = 0;

//     filesToUpload.forEach((file) => {
//         const ext = file.name.split(".").pop().toLowerCase();
//         const reader = new FileReader();

//         reader.onload = (e) => {
//             let iconSrc = "assets/web/images/no_image.png";
//             const base64 = e.target.result;

//             if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
//             else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
//             else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
//             else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = base64;

//             filesPreviewHTML += `
//                 <div style="display:inline-block; text-align:center; margin-right:8px;">
//                     <img src="${iconSrc}" width="30"><br/>
//                     <small style="font-size:10px;">${file.name}</small>
//                 </div>
//             `;

//             totalSize += file.size;
//             fileDataArray.push({ name: file.name, data: base64 });
//             filesRead++;

//             if (filesRead === filesToUpload.length) {
//                 const size = (totalSize / 1000 / 1000).toFixed(2);
//                 const sizeUnit = size.toString().startsWith("0.") ? "KB" : "MB";

//                 const now = new Date();
//                 const date = `${now.getMonth() + 1}/${now.getDate()}/${now.getFullYear()}`;
//                 const hours = now.getHours().toString().padStart(2, "0");
//                 const minutes = now.getMinutes().toString().padStart(2, "0");
//                 const ampm = hours < 12 ? " AM " : " PM ";
//                 const time = `${hours}:${minutes}${ampm}`;
//                 const dataAttr = encodeURIComponent(JSON.stringify(fileDataArray));

//                 const row = `
//                     <tr>
//                         <td><input type="checkbox" class="slaveCheckbox"></td>
//                         <td>${date} ${time} CDT</td>
//                         <td>${filesPreviewHTML}</td>
//                         <td>Multiple Files</td>
//                         <td>Lorem Ipsum Dummy</td>
//                         <td>${size} ${sizeUnit}</td>
//                         <td>
//                             <div class="dropdown">
//                                 <button class="btn elipse-btn" data-bs-toggle="dropdown">
//                                     <i class="fa-solid fa-ellipsis-vertical"></i>
//                                 </button>
//                                 <ul class="dropdown-menu">
//                                     <li class="drp-list">
//                                         <button class="dropdown-item download-all" data-files='${dataAttr}'>Download All</button>
//                                     </li>
//                                     <li class="drp-list">
//                                         <button class="dropdown-item delete-btn">Delete</button>
//                                     </li>
//                                 </ul>
//                             </div>
//                         </td>
//                     </tr>
//                 `;

//                 tableBody.insertAdjacentHTML("beforeend", row);
//                 dismissBtn.click();
//                 fileInput.value = "";
//                 filesToUpload = [];
//                 previewContainer.innerHTML = "";

//                 deleteRow();
//                 downloadAll();
//                 checkRows();
//             }
//         };

//         reader.readAsDataURL(file);
//     });
// });

// function deleteRow() {
//     const deleteBtns = document.querySelectorAll(".delete-btn");
//     deleteBtns.forEach(btn => {
//         btn.addEventListener("click", () => {
//             const row = btn.closest("tr");
//             row.remove();
//         });
//     });
// }

// function downloadAll() {
//     const downloadBtns = document.querySelectorAll(".download-all");
//     downloadBtns.forEach(btn => {
//         btn.addEventListener("click", () => {
//             const files = JSON.parse(decodeURIComponent(btn.getAttribute("data-files")));
//             const zip = new JSZip();
//             files.forEach(file => {
//                 const base64Data = file.data.split(",")[1]; // remove base64 prefix
//                 zip.file(file.name, base64Data, { base64: true });
//             });

//             zip.generateAsync({ type: "blob" }).then((content) => {
//                 const a = document.createElement("a");
//                 a.href = URL.createObjectURL(content);
//                 a.download = "my-files.zip";
//                 a.click();
//                 URL.revokeObjectURL(a.href);
//             });
//         });
//     });
// }

// function checkRows() {
//     const masterCheck = document.getElementById("masterCheckbox");
//     const slaveChecks = document.querySelectorAll(".slaveCheckbox");

//     if (masterCheck) {
//         masterCheck.addEventListener("change", () => {
//             slaveChecks.forEach((cb) => {
//                 cb.checked = masterCheck.checked;
//             });
//         });
//     }
// }


// // ✅ Fixed Version: File Upload - Add Modal Shows Names, Table Edits Name Without Breaking Images

// const btnSave = document.querySelector(".save-upload");
// const tableBody = document.querySelector(".table-row-2");
// const dismissBtn = document.querySelector(".dismiss-modal");
// const fileInput = document.querySelector(".file-input");
// const dropZone = document.getElementById("drop-zone");
// const previewContainer = document.querySelector(".preview-multiple");

// let filesToUpload = [];
// let editTargetButton = null;

// // Reset modal when opened
// const exampleModal = document.getElementById("exampleModal3");
// exampleModal.addEventListener("show.bs.modal", () => {
//     fileInput.value = "";
//     filesToUpload = [];
//     previewContainer.innerHTML = "";
// });

// // Drag & drop handlers
// dropZone.addEventListener("click", () => fileInput.click());
// dropZone.addEventListener("dragover", (e) => {
//     e.preventDefault();
//     dropZone.classList.add("dragover");
// });
// dropZone.addEventListener("dragleave", () => {
//     dropZone.classList.remove("dragover");
// });
// dropZone.addEventListener("drop", (e) => {
//     e.preventDefault();
//     dropZone.classList.remove("dragover");
//     handleFiles(e.dataTransfer.files);
// });

// fileInput.addEventListener("change", (e) => handleFiles(e.target.files));

// function handleFiles(selectedFiles) {
//     for (let file of selectedFiles) {
//         filesToUpload.push(file);

//         const ext = file.name.split(".").pop().toLowerCase();
//         const reader = new FileReader();

//         reader.onload = (e) => {
//             let iconSrc = "assets/web/images/no_image.png";
//             if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
//             else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
//             else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
//             else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = e.target.result;

//             const previewBox = document.createElement("div");
//             previewBox.style.textAlign = "center";
//             previewBox.style.width = "70px";
//             previewBox.innerHTML = `
//                 <img src="${iconSrc}" style="width: 100%; border-radius: 5px;" />
//                 <small style="font-size: 10px; word-break: break-word;">${file.name}</small>
//             `;
//             previewContainer.appendChild(previewBox);
//         };

//         reader.readAsDataURL(file);
//     }
// }

// btnSave.addEventListener("click", () => {
//     if (filesToUpload.length === 0) return;

//     let filesPreviewHTML = "";
//     let totalSize = 0;
//     let fileDataArray = [];
//     let filesRead = 0;

//     filesToUpload.forEach((file) => {
//         const ext = file.name.split(".").pop().toLowerCase();
//         const reader = new FileReader();

//         reader.onload = (e) => {
//             let iconSrc = "assets/web/images/no_image.png";
//             const base64 = e.target.result;

//             if (["pdf"].includes(ext)) iconSrc = "assets/web/images/pdf-img.jpg";
//             else if (["docx"].includes(ext)) iconSrc = "assets/web/images/word-2.webp";
//             else if (["pptx"].includes(ext)) iconSrc = "assets/web/images/powerpoint.png";
//             else if (["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) iconSrc = base64;

//             filesPreviewHTML += `
//                 <div style="display:inline-block; text-align:center; margin-right:8px;">
//                     <img src="${iconSrc}" width="30">
//                 </div>
//             `;

//             totalSize += file.size;
//             fileDataArray.push({ name: file.name, data: base64, originalName: file.name });
//             filesRead++;

//             if (filesRead === filesToUpload.length) {
//                 const size = (totalSize / 1000 / 1000).toFixed(2);
//                 const sizeUnit = size.toString().startsWith("0.") ? "KB" : "MB";

//                 const now = new Date();
//                 const date = `${now.getMonth() + 1}/${now.getDate()}/${now.getFullYear()}`;
//                 const hours = now.getHours().toString().padStart(2, "0");
//                 const minutes = now.getMinutes().toString().padStart(2, "0");
//                 const ampm = hours < 12 ? " AM " : " PM ";
//                 const time = `${hours}:${minutes}${ampm}`;
//                 const dataAttr = encodeURIComponent(JSON.stringify(fileDataArray));

//                 const row = `
//                     <tr>
//                         <td><input type="checkbox" class="slaveCheckbox"></td>
//                         <td>${date} ${time} CDT</td>
//                         <td>${filesPreviewHTML}</td>
//                         <td><span class="file-names-text">${fileDataArray.map(f => f.originalName).join(", ")}</span></td>
//                         <td>Lorem Ipsum Dummy</td>
//                         <td>${size} ${sizeUnit}</td>
//                         <td>
//                             <div class="dropdown">
//                                 <button class="btn elipse-btn" data-bs-toggle="dropdown">
//                                     <i class="fa-solid fa-ellipsis-vertical"></i>
//                                 </button>
//                                 <ul class="dropdown-menu">
//                                     <li class="drp-list">
//                                         <button class="dropdown-item download-all" data-files='${dataAttr}'>Download All</button>
//                                     </li>
//                                     <li class="drp-list">
//                                         <button class="dropdown-item edit-btn" data-files='${dataAttr}'>Edit</button>
//                                     </li>
//                                     <li class="drp-list">
//                                         <button class="dropdown-item delete-btn">Delete</button>
//                                     </li>
//                                 </ul>
//                             </div>
//                         </td>
//                     </tr>
//                 `;

//                 tableBody.insertAdjacentHTML("beforeend", row);
//                 dismissBtn.click();
//                 fileInput.value = "";
//                 filesToUpload = [];
//                 previewContainer.innerHTML = "";

//                 deleteRow();
//                 downloadAll();
//                 addEditButtonListener();
//                 checkRows();
//             }
//         };

//         reader.readAsDataURL(file);
//     });
// });

function deleteRow() {
    const deleteBtns = document.querySelectorAll(".delete-btn");
    deleteBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            const row = btn.closest("tr");
            row.remove();
        });
    });
}

function downloadAll() {
    const downloadBtns = document.querySelectorAll(".download-all");
    downloadBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            const files = JSON.parse(decodeURIComponent(btn.getAttribute("data-files")));
            const zip = new JSZip();
            files.forEach(file => {
                const base64Data = file.data.split(",")[1];
                zip.file(file.name, base64Data, { base64: true });
            });

            zip.generateAsync({ type: "blob" }).then((content) => {
                const a = document.createElement("a");
                a.href = URL.createObjectURL(content);
                a.download = "my-files.zip";
                a.click();
                URL.revokeObjectURL(a.href);
            });
        });
    });
}

function checkRows() {
    const masterCheck = document.getElementById("masterCheckbox");
    const slaveChecks = document.querySelectorAll(".slaveCheckbox");

    if (masterCheck) {
        masterCheck.addEventListener("change", () => {
            slaveChecks.forEach((cb) => {
                cb.checked = masterCheck.checked;
            });
        });
    }
}

function addEditButtonListener() {
    document.querySelectorAll(".edit-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            editTargetButton = btn;
            const dataAttr = btn.getAttribute("data-files");
            const files = JSON.parse(decodeURIComponent(dataAttr));

            const container = document.getElementById("edit-file-inputs");
            container.innerHTML = "";

            files.forEach((file, index) => {
                const div = document.createElement("div");
                div.classList.add("col-md-6", "edit-file-group");
                div.innerHTML = `
                    <label>File ${index + 1}</label>
                    <input type="text" class="form-control file-name-input" data-index="${index}" value="${file.originalName || file.name}" />
                `;
                container.appendChild(div);
            });

            const editModal = new bootstrap.Modal(document.getElementById("editFileModal"));
            editModal.show();
        });
    });
}
