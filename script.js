function addFileInput() {
    var fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.name = "selected_files[]";
  
    var fileListDiv = document.getElementById("file-list");
    fileListDiv.appendChild(fileInput);
  }
  