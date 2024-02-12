// Khởi tạo lightbox
Fancybox.bind("[data-fancybox]", {});
// Đánh giá hồ sơ
$(document).ready(function () {
  // Đại lý
  for (let i = 1; i <= 5; i++) {
    const rating = i === 1 ? 3.5 : 4;

    $(`.rate_agency_${i}`).rateYo({
      rating: rating,
      readOnly: true,
    });
  }

  // Khách hàng
  for (let i = 1; i <= 3; i++) {
    const rating = i === 1 ? 2.5 : 4;

    $(`.rate_customer_${i}`).rateYo({
      rating: rating,
      readOnly: true,
    });
  }
});

// Bài viết liên quan
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});

// Load Avatar
$(document).ready(function () {
  $("#upload-image").click(function () {
    $("#upload-file").click();
  });

  $("#upload-file").change(function () {
    readURL(this);
  });

  $("#remove-image").click(function () {
    removeImage();
  });

  const imagePaths = [];
  const maxImages = 5;

  $("#upload-btn").click(function () {
    $("#file-input").click();
  });

  $("#file-input").change(function () {
    handleFileUpload();
  });

  $("#clear-btn").click(function () {
    clearImages();
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        $(".avatar-image").attr("src", e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }

  function removeImage() {
    const defaultImagePath = "./assets/images/default-image.png";
    $(".avatar-image").attr("src", defaultImagePath);
    $("#upload-file").val(""); // Clear input file
    alert("Ảnh đã được xoá.");
  }

  function handleFileUpload() {
    const files = $("#file-input")[0].files;
    if (imagePaths.length + files.length > maxImages) {
      alert(`Bạn chỉ có thể tải lên tối đa ${maxImages} ảnh.`);
      return;
    }

    for (let i = 0; i < files.length; i++) {
      const imageUrl = URL.createObjectURL(files[i]);
      imagePaths.push(imageUrl);
    }
    displayImages();
    console.log("Các hình ảnh đã chọn:", imagePaths);
  }

  function displayImages() {
    const container = $("#image-container");
    container.empty();

    for (let i = 0; i < imagePaths.length; i++) {
      const imageUrl = imagePaths[i];
      const imageElement = `
        <div class="col mb-3 text-center">
          <a href="${imageUrl}" data-fancybox="featured-img">
            <img src="${imageUrl}" alt="" class="img-fluid img-thumbnail">
          </a>
        </div>
      `;
      container.append(imageElement);
    }
  }

  function clearImages() {
    $("#file-input").val("");
    imagePaths.length = 0;
    displayImages();
  }
});

// Lĩnh vực
var checkbox_tom_select = [
  ".field-checkbox-options",
  ".field-checkbox-options-profile",
  ".hashtag-checkbox-options",
  ".hashtag-checkbox-options-posts",
  ".category-checkbox-options-posts",
  ".checkbox-options_header_1",
  ".checkbox-options_header_2",
  ".checkbox-options_header_3",
  ".checkbox-options_header_4",
];

checkbox_tom_select.forEach(function (className) {
  $(className).each(function () {
    new TomSelect(this, {
      plugins: ["checkbox_options"],
    });
  });
});
