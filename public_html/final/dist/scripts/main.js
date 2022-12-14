console.log("Script Loaded");

function initTinyMce() {
    tinymce.init({
      selector: ".js-tinymce",
      height: 500,
      menubar: false,
      plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table paste code help wordcount",
      ],
      toolbar:
        "undo redo | formatselect | " +
        "bold italic backcolor | alignleft aligncenter " +
        "alignright alignjustify | bullist numlist outdent indent | " +
        "removeformat | help",
      content_style:
        "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
    });
  }
  
  initTinyMce();


  function initTinyMce() {
    tinymce.init({
      selector: ".js-tinymce",
      height: 500,
      menubar: false,
      plugins:
        "anchor autolink  codesample  link lists searchreplace table visualblocks wordcount",
      toolbar:
        "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent |   removeformat",
      content_style:
        "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
    });
  }
  
  initTinyMce();