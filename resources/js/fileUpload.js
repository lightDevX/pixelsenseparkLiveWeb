function initUppy() {
  const Uppy = require("@uppy/core");
  const Dashboard = require("@uppy/dashboard");
  const Tus = require("@uppy/tus");

  // Access-Control-Allow-Origin multiple url
  const domains = [
    'http://pixelsensepark.test',
    'http://www.pixelsensepark.test',
    'https://pixelsensepark.com',
    'https://www.pixelsensepark.com',
  ]
  const currentLink = window.location.protocol + '//' + window.location.hostname; //request url
  var checkLink = 'https://pixelsensepark.com'; // default access url
  if(domains.includes(currentLink)){
    checkLink = currentLink;
  }
  // end

  const uppy = new Uppy({
    debug: false,
    autoProceed: true,
    allowMultipleUploads: true,
    restrictions: {
      maxFileSize: null,
      maxNumberOfFiles: null,
      minNumberOfFiles: null,
      allowedFileTypes: [
        "image/*",
        "application/pdf",
        ".nef",
        ".dng",
        ".cr2",
        "image/vnd.adobe.photoshop",
        ".psd",
        ".raw"
      ]
    },
    onBeforeUpload: files => {
      // changing file name
      for (var prop in files) {
        //checking if name is already changed or not
        if (files[prop].name.charAt(0) !== "Q") {
          let prefix = `Q${Date.now()}`;
          files[prop].name = `${prefix}_${files[prop].name.replace(" ", "_")}`;
          files[prop].meta.name = `${prefix}_${files[prop].meta.name.replace(" ", "_")}`;
        }
      }
      this.files = files;

      // return false to abort
      // We’ll be careful to return a new object, not mutating the original `files`
      var updatedFiles = Object.assign({}, files);
      Object.keys(updatedFiles).forEach(function (fileId) {
        updatedFiles[fileId].tus = {
          headers: {
            "Access-Control-Allow-Origin": checkLink,
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
          }
        };
      });

      Promise.resolve();
    },
    locale: {}
  })
    .use(Dashboard, {
      inline: true,
      target: "#uppy",
      width: 100 + "%",
      height: 450,
      metaFields: [],
      showLinkToFileUploadResult: false,
      showProgressDetails: true,
      hideUploadButton: true,
      hideRetryButton: false,
      hidePauseResumeButton: false,
      hideCancelButton: false,
      hideProgressAfterFinish: false,
      note: null,
      disableStatusBar: false,
      disableInformer: false,
      disableThumbnailGenerator: false,
      animateOpenClose: true,
      fileManagerSelectionType: "files",
      proudlyDisplayPoweredByUppy: false,
      showSelectedFiles: true,
      showRemoveButtonAfterComplete: true, //  to actually send a request you should listen to file-removed event and add your logic there.
      locale: {},
      browserBackButtonClose: false,
      theme: "light"
    })
    .use(Tus, {
      endpoint: checkLink + "/tus/",
      chunkSize: 1 * 1024 * 1024, // 1 MB
      resume: true,
      autoRetry: true,
      retryDelays: [0, 1000, 3000, 5000],
      removeFingerprintOnSuccess: true, // if false user can't upload same file more then ones
      headers: {
        "Access-Control-Allow-Origin": checkLink,
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      metaFields: null,
      limit: 2
    });

  uppy.on("upload-success", (file, response) => {
    let selectedFiles = document.getElementById("selectedFiles");
    selectedFiles.value += file.name + ",";
  });

  // ajax post request csrf token setup globally
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
  });

  uppy.on("file-removed", (file, reason) => {
    if (reason === "removed-by-user") {
      //removing file name from input
      let selectedFiles = document.getElementById("selectedFiles");
      selectedFiles.value = selectedFiles.value.replaceAll(file.name + ",", "");

      //removing file from directory
      $.ajax({
        url: "remove_file",
        type: "POST",
        data: {
          fileName: file.name
        },
        dataType: "json"
      });
    }
  });
}

//if uppy id exists in dom then initialize uppy
var element = document.getElementById("uppy");
if (typeof element != "undefined" && element != null) initUppy();
